<?php 
// include common function
  include("function/common_fun.php");
  include("admin/class/func.php");
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
      <link rel="stylesheet" href="style2.css">
      <link rel="stylesheet" href="style3.css">
      <link rel="stylesheet" href="style4.css">
    <title>Food Website/home-page</title>

</head>
<body>

<nav class='navbar navbar-expand-lg nav '>
      <div class='container-fluid'>
        <a class='navbar-brand' href='#'>
            <img  src='images/icons/logo.png' alt=''>
        </a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
          <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
            <li class='nav-item'>
              <a class='nav-link'  href='./index.php'>Home</a>
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
            <li class='nav-item'>
              <a class='nav-link'  href='cart.php'><i class='fa-solid fa-cart-shopping'></i><sup>
                <?php  cart_num(); ?></sup></a>
            </li>
    
            <li class='nav-item'>
              <a class='nav-link'  href='#'>Total ammount: <?php total_price(); ?> BD-TK</a>
            </li>
       
          </ul>
          <form class='d-flex'  action='./search_product.php'  method='GET'>
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
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="images/my/f (4).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h4>Healthy eating is about eating smart and enjoying your food. </h4>
   <h1>Welcome  <strong>FOOD <sup>WORLD</sup></strong> </h1>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Quos odio in optio iusto temporibus voluptates fugiat quae placeat obcaecati quisquam.<br>
   Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Quos odio in optio iusto temporibus voluptates fugiat quae placeat obcaecati quisquam.</p>
         <div class="btn">
           <a href="user/include/login.php" class="btn  btn-info text-white">Login Form</a>
         </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/my/f (5).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h4>Healthy eating is about eating smart and enjoying your food. </h4>
      <h1>Welcome  <strong>FOOD <sup>WORLD</sup></strong> </h1>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Quos odio in optio iusto temporibus voluptates fugiat quae placeat obcaecati quisquam.<br>
   Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Quos odio in optio iusto temporibus voluptates fugiat quae placeat obcaecati quisquam.</p>
         <div class="btn">
           <a href="user/include/login.php" class="btn  btn-info text-white">Login Form</a>
         </div>
      </div>
    </div>
    <div class="carousel-item">
    <img src="images/my/f (3).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h4>Healthy eating is about eating smart and enjoying your food. </h4>
      <h1>Welcome  <strong>FOOD <sup>WORLD</sup></strong> </h1>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Quos odio in optio iusto temporibus voluptates fugiat quae placeat obcaecati quisquam.<br>
   Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Quos odio in optio iusto temporibus voluptates fugiat quae placeat obcaecati quisquam.</p>
         <div class="btn">
           <a href="user/include/login.php" class="btn  btn-info text-white">Login Form</a>
         </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- out botom
<div class="container-fluid d-flex align-items-center justify-content-center  p-5" id="cover">

<div class="row">

 <div class="col-sm-6 half ">
   <h2>Healthy eating is about eating<br>smart and enjoying your food. </h2>
   <h1>Welcome HERE </h1>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio in optio iusto temporibus voluptates fugiat quae placeat obcaecati quisquam.</p>
   <button class="btn btn-info text-white btn-sm px-4">Button</button>
</div>

<div class="col-sm-6 half ">
<h2>Login Here</h2>
 <form action="" method="post" class="font_login">

   <input type="text" placeholder="NAME"><br>
   <input type="password" placeholder="PASSWORD"><br>
   <input type="submit" value="Login">
 </form>

</div>
</div>
</div> -->


<div style="overflow-x:scroll ; " class="container">




 <h2 class="text-center text-info">YOUR ADDED CART ITEM HERE</h2>

 <form action="" method="POST">
  <table  class="table table-sm-responsive table text-center table-bordered">


      <tbody>

<?php

global $conn;
$cart_ip = getIPAddress(); 
$total_price=0;
$select="SELECT * FROM cart_details WHERE ip_address='$cart_ip'";

$result=mysqli_query($conn,$select);

while($row_pro=mysqli_fetch_array($result)){
  $product_id_cart=$row_pro['product_id'];

$select_product="SELECT * FROM products WHERE product_id ='$product_id_cart'";
$results=mysqli_query($conn,$select_product);


while($rows=mysqli_fetch_array($results)){

$product_prices=array($rows['product_price']);
$product_pricess=$rows['product_price'];
$product_name=$rows['product_name'];
$product_image1=$rows['product_image1'];
$price=array_sum($product_prices);
$total_price+= $price;

   

     ?>

        <tr class="">

          <td><?php echo $product_name;  ?></td>
          <td><img style="height:50px ;"  src="./admin/upload/<?php echo$product_image1;?>" ></td>
          <td> <input type="text" name="qty" class="w-50 form-input"> </td>
          <?php 
    
    if(isset($_POST['update_qty'])){
      $cart_ip = getIPAddress(); 
      $quantity=$_POST['qty'];

      $quantity_update="UPDATE cart_details SET quantity=$quantity WHERE ip_address='$cart_ip'";

       $qty_result=mysqli_query($conn,$quantity_update);

      $total_price=$total_price*$quantity;
       $result_qty=mysqli_query($conn,$quantity_update);

      

    }
     
   ?> 

          <td> <?php echo $product_pricess;  ?></td>
          <td><input type="checkbox" name="remove_all[]" value="<?php echo $product_id_cart; ?> "></td>
          <td>

          <input type="submit"  class="btn btn-info btn-sm  mb-2" value="UPDATE" name="update_qty">
      <!-- Button trigger modal -->
<button  type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
remove_item
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   you want to delted item
      </div>
      <div class="modal-footer">
    
       <a  class="btn btn-info"  href="cart.php">Cencel</a>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          <input type="submit" class="btn btn-danger" value="DELETED" name="remove">
      </div>
    </div>
  </div>
</div>
          
            
          </td>
          
        </tr>
    <?php   
}
}  

?> 
      </tbody>

     <tfooter>
      <?php 
      
      global $conn;
      $cart_ip = getIPAddress(); 
      
      $select="SELECT * FROM cart_details WHERE ip_address='$cart_ip'";
  
      $result=mysqli_query($conn,$select);
  
  
       $row=mysqli_num_rows($result);
  
        if($row>0){
      echo " <h4 class='text-danger' >Total_PRICE:$total_price BD-TK </h4>

       <input type='submit' name='continue' value='continue shoping' class='btn btn-info mx-2 my-3'>
       
       <button class='border-0'>
       <a href='checkout.php' class='btn btn-danger text-light '>Checkout</a></button>

      "; 
        }
      ?>
<?php 

 if(isset($_POST['continue'])){
   
    echo "<script>window.open('index.php','_self');</script>";
 }
?>
     </tfooter>


  <!-- php code start -->
    <?php 
    
    function remove_item(){

    global $conn;
    $cart_ip = getIPAddress(); 
    
    $select="SELECT * FROM cart_details WHERE ip_address='$cart_ip'";

    $result=mysqli_query($conn,$select);


     $row=mysqli_num_rows($result);

      if($row==0){
        echo "<h2 class='text-center text-danger'>CART IS EMPTY</h2>";
     
      }else{

 
        if(isset($_POST['remove'])){
          $cart_ip = getIPAddress(); 
         
           foreach($_POST['remove_all'] as $removeid){
            $del_select="DELETE FROM cart_details WHERE ip_address='$cart_ip' && product_id =$removeid";
            $del_result=mysqli_query($conn,$del_select);
  
            if($del_result){
  
               echo "<script>window.open(cart.php);</script>";
            }
          }
            
  
  
             
  
            }

            echo "<thead class=''>
            <tr>
             <th>Product Name </th>
             <th>Product Image </th>
             <th>Product Quantity </th>
             <th>Product Price </th>
             <th>Product Remove </th>
             <th>Product Oparation </th>
            </tr>
          </thead>";
      }




      }


      echo $removeall=remove_item();

    ?>
      </table>
  </form>
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
<?php include("user/include/script.php")  ?>


<!-- start php code -->


<?php
 


?>


