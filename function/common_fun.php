<?php
 

 //include connect php file
 
  include("./user/include/connect.php");
 
  // include("/xampp/htdocs/php/myproject/user/include/connect.php");



  


  function get_product(){

  global $conn;


    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
        $select_product="SELECT *FROM products order by rand() Limit 4";

    $query=mysqli_query($conn,$select_product);


    while($product=mysqli_fetch_assoc($query)){

        $product_id=$product['product_id'];
        $product_name=$product['product_name'];
        $product_content=$product['product_content'];
        $product_cat=$product['product_cat'];
        $product_brands=$product['product_brands'];
        $product_image1=$product['product_image1'];
        $product_image2=$product['product_image2'];
        $product_image3=$product['product_image3'];
        $product_summary=$product['product_summary'];
        $product_price=$product['product_price'];
         $product_status=  $product['product_status'];

    
        echo " <div class='col-md-4  col-sm-6 mb-4'>
        <div class='card' >
      <img src='admin/upload/$product_image1' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>$product_name</h5>
        <p class='card-text'>$product_summary.</p>
    
       <div class='product-price'>
          <h5>$product_price BD-Tk</h5>
       </div>
    
         <div class='d-flex justify-content-evenly'>
        
         <a href='index.php?add_to_cart= $product_id'class='btn btn-info btn-sm'>Add to Cart</a>
        <a href='details.php?status=details&& id=$product_id'class='btn btn-warning btn-sm'>View Details</a>
         </div>
      </div>
    </div>
        </div> ";
    }

      }
    }
  

  }

// get unique caregories f2



function get_uniqe_cat(){

  global $conn;


    if(isset($_GET['category'])){
         $cat_product_id=$_GET['category'];
        $select_product="SELECT * FROM products WHERE product_cat=$cat_product_id";
    $get_query=mysqli_query($conn,$select_product);

    $row_get_count=mysqli_num_rows($get_query);

    if($row_get_count>0){

      while($product=mysqli_fetch_assoc($get_query)){

        $product_id=$product['product_id'];
        $product_name=$product['product_name'];
        $product_content=$product['product_content'];
        $product_cat=$product['product_cat'];
        $product_brands=$product['product_brands'];
        $product_image1=$product['product_image1'];
        $product_image2=$product['product_image2'];
        $product_image3=$product['product_image3'];
        $product_summary=$product['product_summary'];
        $product_price=$product['product_price'];
         $product_status=  $product['product_status'];

    
        echo " <div class='col-xlg-4 col-lg-6 col-md-6 col-sm-6 mb-4 raj'>
        <div class='card' >
      <img src='admin/upload/$product_image1' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>$product_name</h5>
        <p class='card-text'>$product_summary.</p>
    
       <div class='product-price'>
          <h5>$product_price BD-Tk</h5>
       </div>
    
         <div class='d-flex justify-content-evenly'>
        
         <a href='index.php?add_to_cart=$product_id'class='btn btn-info'>Add to Cart</a>
        <a href='details.php?status=details&& id=$product_id'class='btn btn-warning'>View Details</a>
         </div>
      </div>
    </div>
        </div> ";
    }
  
    
    }else{
      echo "<h2 class='text-center text-danger'>No stock for this category</h2>";

      }
    }
    }
  

    //get uniqe brand


    

function get_uniqe_brand(){

  global $conn;


    if(isset($_GET['brand'])){
         $brand_product_id=$_GET['brand'];
        $select_product="SELECT * FROM products  WHERE product_brands=$brand_product_id";
    $query=mysqli_query($conn,$select_product);

    $row_count=mysqli_num_rows($query);

    if($row_count==0){

         echo "<h2 class='text-center text-danger'>No stock for this brands</h2>";
    }else{
    while($product=mysqli_fetch_assoc($query)){

        $product_id=$product['product_id'];
        $product_name=$product['product_name'];
        $product_content=$product['product_content'];
        $product_cat=$product['product_cat'];
        $product_brands=$product['product_brands'];
        $product_image1=$product['product_image1'];
        $product_image2=$product['product_image2'];
        $product_image3=$product['product_image3'];
        $product_summary=$product['product_summary'];
        $product_price=$product['product_price'];
         $product_status=  $product['product_status'];

    
        echo " <div class='col-md-4 col-sm-6 mb-4 raj '>
        <div class='card' >
      <img src='admin/upload/$product_image1' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>$product_name</h5>
        <p class='card-text'>$product_summary</p>
    
       <div class='product-price'>
          <h5>$product_price BD-Tk</h5>
       </div>
    
         <div class='d-flex justify-content-evenly'>
        
         <a href='index.php?add_to_cart=$product_id'class='btn btn-info'>Add to Cart</a>
        <a href='details.php?status=details&& id=$product_id'class='btn btn-warning'>View Details</a>
         </div>
      </div>
    </div>
        </div> ";
    }
  }
      }
    }
  




//  get categories 

 function get_categories(){

    global $conn;
    
    $select_cat="SELECT *FROM category";

    $query=mysqli_query($conn,$select_cat);


    while($cat=mysqli_fetch_assoc($query)){

        $cat_id=$cat['cat_id'];
        $cat_name=$cat['cat_name'];

        echo "   <li class='list-group-item   '>
        <a href='index.php?category=$cat_id' class='nav-link text-green'>$cat_name</a>

        </li> ";
    }
 }


// get brand
 function get_brand(){
    global $conn;
    
    $select_brand="SELECT *FROM brands";

    $query=mysqli_query($conn,$select_brand);


    while($cat=mysqli_fetch_assoc($query)){

        $brand_id=$cat['brand_id'];
        $brand_name=$cat['brands_name'];

        echo "   <li class='list-group-item   '>
        <a href='index.php?brand=$brand_id' class='nav-link text-green'>$brand_name</a>

        </li> ";
    }
 }





// cart functions



function cart_item(){
 global $conn;
  $cart_ip = getIPAddress();  
 
  if(isset($_GET['add_to_cart'])){
     $cart_product_id=$_GET['add_to_cart'];

      
   $select="SELECT*FROM cart_details WHERE ip_address='$cart_ip' and product_id=$cart_product_id "; 
   
   $result=mysqli_query($conn,$select);

     $rows=mysqli_num_rows($result);

     if($rows>0){

        echo "<script> alert('this item is present in cart')</script>";
        echo "<script> window.open('index.php','_self')</script>";

     }else{

       $insert="INSERT INTO cart_details (product_id,ip_address,quantity) VALUES ($cart_product_id,'$cart_ip',0)";

       $result_insert=mysqli_query($conn,$insert);
   
       echo "<script> alert('ADDED ITEM IN CART')</script>";
      //  echo "<script> window.open('index.php','_self')</script>";
     }

  }


}


// 

// GET CART ITEM NUMBER FUNCTION



function cart_num(){

  
   if(isset($_GET['add_to_cart'])){
    global $conn;
    $cart_ip = getIPAddress();    
    $select="SELECT*FROM cart_details WHERE ip_address='$cart_ip'";    
    $result=mysqli_query($conn,$select);
     $count_cart_item=mysqli_num_rows($result);


 
 
   }else{

    global $conn;
    $cart_ip = getIPAddress(); 
 
    $select="SELECT*FROM cart_details WHERE ip_address='$cart_ip'";    
    $result=mysqli_query($conn,$select);
     $count_cart_item=mysqli_num_rows($result);
   }
  
    echo $count_cart_item;
 }



// get total cart item price



function total_price(){
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
 $price=array_sum($product_prices);
 $total_price+= $price;


 }
}

echo $total_price;


}



// getting pending functin



function pending_profile(){
 global $conn;
 
$username= $_SESSION['u_name'];

//  if(!isset($username)){
//    echo "<script>window.open('../../index.php','')</script>";
//  }
$register="SELECT*FROM u_registers WHERE u_name ='$username'";

$query=mysqli_query($conn,$register);

 while($fetch=mysqli_fetch_array($query)){

    $user_id=$fetch['u_id'];


    if(!isset($_GET['my_order'])){
      if(!isset($_GET['edit_account'])){       
        if(!isset($_GET['delete_account'])){
      
             $user_order="SELECT*FROM user_order WHERE users_id=$user_id and statas='pending'";

            $user_query=mysqli_query($conn,$user_order);


            $user_row=mysqli_num_rows($user_query);

             if($user_row>0){

                echo "
                 
  <div class='d-flex flex-column justify-content-center align-items-center'>
  
  <h2 class='text-center text-info'>You have <span class='text-danger'>
                
  $user_row </span>pending order</h2>
   
     <button class='btn btn-warning text-white border-0 '><a   class='btn btn-warning text-white' href='profile.php?my_order'>order details</a></button>
  
  </div>

                 ";


             }else{



              echo "
                 
              <div class='d-flex flex-column justify-content-center align-items-center'>
              
              <h2 class='text-center text-info'>You have <span class='text-danger'>ZERO </span>pending order</h2>
               
                 <button class='btn btn-warning text-white border-0 '><a   class='btn btn-warning text-white' href='../../index.php'>Explore product</a></button>
              
              </div>
            
                             ";

             }




        }
      }
      
    }
 }

    
}











 
 
 
// get ip address

//  function getIPAddresss() {  
//   //whether ip is from the share internet  
//    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
//               $ip = $_SERVER['HTTP_CLIENT_IP'];  
//       }  
//   //whether ip is from the proxy  
//   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
//               $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
//    }  
// //whether ip is from the remote address  
//   else{  
//            $ip = $_SERVER['REMOTE_ADDR'];  
//    }  
//    return $ip;  
// } 


// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  

?>