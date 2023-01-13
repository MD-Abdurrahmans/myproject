<?php 
// include common function
  include("./connect.php");

  include("../../admin/class/func.php");
 

?>

<!-- head -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <!-- css link -->
      <link rel="stylesheet" href="../../style2.css">
      <link rel="stylesheet" href="../../style3.css">
      <link rel="stylesheet" href="../../style4.css">
    <title>Food Website/home-page</title>

</head>
<body>

<nav class='navbar navbar-expand-lg nav '>
      <div class='container-fluid'>
        <a class='navbar-brand' href='#'>
            <img  src='../../images/icons/logo.png' alt=''>
        </a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
          <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
            <li class='nav-item'>
              <a class='nav-link'  href='../../index.php'>Home</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link'  href='#'>About</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link'  href='#'>Contact</a>
            </li>
            <li class='nav-item'>
            <a class='nav-link'  href='#'>work</a>
            </li>
          
       
          </ul>
          <form class='d-flex'  action='../../search_product.php'  method='GET'>
            <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'name='search_data'>
          
            <input type='submit' name='search_data_product' class='btn btn-outline-light' value='search'>
          </form>
        </div>
      </div>
    </nav>
<!-- top nav -->


<!-- first nav end -->
  <nav class="navbar navbar-expand-lg opacity-5 bg-secondary text-white  ">

<div class="usesr mx-4">
  
<?php 


session_start();
if(isset($_SESSION['u_name'])){
  echo "<div class='d-flex p-0 m-0'>
  
  <a href='' class='nav-link '>Welcome  ".$_SESSION['u_name']."</a>
  <a href='user/include/logout.php' class='nav-link btn btn-outline-light mx-2 p-2 '>logout</a> 
  </div>";

   
}else{
  echo "<div class='d-flex p-0 m-0'>
  
  <a href='' class='nav-link '>Welcome Guest </a>
  <a href='user/include/login.php' class='nav-link btn btn-outline-light mx-2 p-2 '>Login</a> 
  </div>";


}

?>

</div>

</nav>

<!-- navbar end -->
</div>


<div class="container-fluid m-5">






<div class="row ">


 <div class="col-md-12">

  <h1 class="text-center text-danger">user_order</h1>
    

<!-- php code  -->

<?php 


    if(isset($_GET['user_id'])){
        $user_id=$_GET['user_id'];
    }

    
         $cart_ip = getIPAddress(); 
         $total=0;
         $select_carts="SELECT*FROM cart_details WHERE ip_address='$cart_ip'";

         $cart_query=mysqli_query($conn,$select_carts);

           $cart_row=mysqli_num_rows($cart_query);
          $invoice_number=mt_rand();
      
          $order_status="pending";
           while( $cart_fetch=mysqli_fetch_array($cart_query)){

              $product_id=$cart_fetch['product_id'];

              $select_product="SELECT*FROM products WHERE product_id=$product_id";

              $product_result=mysqli_query($conn,$select_product);
                
               while($fetch_price=mysqli_fetch_array($product_result)){

                  $product_price=array($fetch_price['product_price']);

                  $product_sum=array_sum($product_price);

                  $total+=$product_sum;
               }

           }


            // getting quantity


              
            $cart="SELECT*FROM cart_details";

             $query=mysqli_query($conn,$cart);

             $cart_f=mysqli_fetch_array($query);
              $quantitys=$cart_f['quantity'];
     


               if($quantitys==0){
    
                  $quantitys=1;
                  $subtotal=$total;
          

               }else{
                $quantitys=$quantitys;
                $subtotal=$total*$quantitys;
                 
               }


           $insert_order= "INSERT INTO  user_order(users_id,amount_due,invoicenumber,total_product,order_date,statas) VALUES('$user_id',$subtotal,$invoice_number,$cart_row,now(),'$order_status')";



               $order_query=mysqli_query($conn,$insert_order);

                if($order_query){

                     echo "<script>alert('ORDER SUBMITED')</script>";
                     echo "<script>window.open('profile.php','_self')</script>";
                }


  
                //insert user pending

                $insert_pending_order= "INSERT INTO   user_panding (users_id,invoicenumber,product_id,quantity,order_status) VALUES('$user_id',$invoice_number,$product_id, $quantitys,'$order_status')";

                $order_pending_query=mysqli_query($conn,$insert_pending_order);

            

                // delete cart when submited order


                $del_cart="DELETE FROM cart_details WHERE ip_address ='$cart_ip'";


                 $del_query=mysqli_query($conn,$del_cart);

                  



?>
  

 </div>


<!-- first row end -->
</div>

<!-- container end -->
</div>



<footer>

 <div class="gb-container">
    
 
  <div class="sec about-us">

  <h2>About Us</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam error praesentium laboriosam aliquam perspiciatis fugit facilis atque velit, distinctio dicta ut excepturi nesciunt, tempora dolorem possimus. Excepturi omnis deleniti maiores!</p>
 
  <div class="sci">
  <i class="fa-brands fa-twitter"></i>
  <i class="fa-brands fa-facebook"></i>
  <i class="fa-brands fa-instagram"></i>
  <i class="fa-brands fa-instagram"></i>
  </div>

  </div>


  <div class="sec usefull-link">

     <h2>Quick Link</h2>

     <ul class="nav-item">
       <li class="nav-link">our team</li>
       <li class="nav-link">our condition</li>
       <li class="nav-link">our work</li>
       <li class="nav-link">our policy</li>
       <li class="nav-link">our member</li>
     </ul>

  </div>

  <div class="sec usefull-link">

     <h2>Usefull Link</h2>

     <ul class="nav-item">
       <li class="nav-link"> Shop</li>
       <li class="nav-link">Product</li>
       <li class="nav-link">Custom</li>
       <li class="nav-link"> Market place</li>
       <li class="nav-link"> VALUE of k</li>
     </ul>

  </div>

  <div class="sec usefull-link">

     <h2> Visit Link</h2>

     <ul class="nav-item" >
       <li class="nav-link"> Shop</li>
       <li class="nav-link">Product</li>
       <li class="nav-link">Custom</li>
       <li class="nav-link"> Market place</li>
       <li class="nav-link"> VALUE of k</li>
     </ul>

  </div>


 </div>
 
</footer>
<?php include("script.php")  ?>



