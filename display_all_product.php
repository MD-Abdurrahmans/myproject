<?php 

include("function/common_fun.php");
include("admin/class/func.php");
session_start();
if(!isset($_SESSION['u_name'])){
 
  header("Location:user/login.php");

}

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
              <a class='nav-link'  href='user/include/profile.php?'>My Profile</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link'  href='display_all_product.php'>Produts</a>
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

            <?php 
             if(!isset($_SESSION['u_name'])){
              echo "<li class='nav-item'>
              <a class='nav-link'  href='user/include/register.php'>Register</a>
            </li>";
          
             }else{
              echo "<li class='nav-item'>
              <a class='nav-link'  href='user/include/logout.php'>Logout</a>
            </li>";
             }
            
            ?>

            <li class='nav-item'>
              <a class='nav-link'  href='cart.php'><i class='fa-solid fa-cart-shopping'></i><sup style="font-size:16px; padding-right:5px;" class="bg-secondary text-light rounded-circle">
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


 <nav class="navbar navbar-expand-lg opacity-5 bg-secondary text-white ">

<div class="usesr mx-4">
<?php 


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
 header("Location:user/include/login.php");
}

?>

</div>

</nav>
<!-- navbar end -->
<div class="container-fluid">
<div class="row p-2">

<!-- left half start -->


<div class="col-md-12 col-lg-10" id="card-container">
 <div class="row">
 <?php 
    include("admin/db_conn.php");
    $select_product="SELECT *FROM products order by rand() ";

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
        
     
          
        
        //  if($product_status=1){
        //   echo "published";
        //  }
    
        echo " <div class='col-md-4  col-sm-6 mb-4 '>
        <div class='card' >
      <img src='admin/upload/$product_image1' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>$product_name</h5>
        <p class='card-text'>$product_summary.</p>
    
       <div class='product-price'>
          <h5>$product_price BD-Tk</h5>
       </div>
    
         <div class='d-flex justify-content-evenly'>
         <a href='index.php?add_to_cart=$product_id'class='btn btn-info btn-sm '>Add to Cart</a>
         <a href='details.php?status=details&& id=$product_id'class='btn btn-warning btn-sm'>View Details</a>
         </div>
      </div>
    </div>
        </div> ";
    }
  
  ?>

 </div>
 <a href="index.php"class="btn btn-success">PREVIEW</a>
</div>
<!-- left half end -->

<!-- right half start -->

<div class="col-md-8 my-md-5 mx-md-auto col-lg-2">

<div class="right-item-category mb-4">
<h2 class="bg-primary p-2 text-white"> CATEGORIES</h2>
<ul class="list-group text-center">


   <?php 
     include("admin/db_conn.php");

    $select_cat="SELECT *FROM category";

    $query=mysqli_query($conn,$select_cat);


    while($cat=mysqli_fetch_assoc($query)){

        $cat_id=$cat['cat_id'];
        $cat_name=$cat['cat_name'];

        echo "  <li class='list-group-item'>$cat_name</li> ";
    }
  
  ?>

</ul>
</div>
<!-- end category -->
<div class="right-item-brand">
<h2 class="bg-primary p-2 text-white"> Brands</h2>
<ul class="list-group  text-center ">


   <?php 
    
    $select_brand="SELECT *FROM brands";

    $query=mysqli_query($conn,$select_brand);


    while($cat=mysqli_fetch_assoc($query)){

        $brand_id=$cat['brand_id'];
        $brand_name=$cat['brands_name'];

        echo "   <li class='list-group-item   '>$brand_name</li> ";
    }
  
  ?>


</ul>
</div>
</div>
<!-- right half end -->

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
<?php include("user/include/script.php")  ?>


<!-- start php code -->


<?php
 






?>


