<?php 
 
 include("connect.php");
  include("../../function/common_fun.php");


  session_start();
  include("../../admin/class/func.php");
 
  if(!isset($_SESSION['u_name'])){
    echo "<script>window.open('../../index.php','_self')</script>";
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
      <link rel="stylesheet" href="../../style2.css">
      <link rel="stylesheet" href="../../style3.css">
      <link rel="stylesheet" href="../../style4.css">
    <title>Wellcome <?php echo $_SESSION['u_name']?></title>

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
          
            <li class='nav-item'>
              <a class='nav-link'  href='cart.php'><i class='fa-solid fa-cart-shopping'></i><sup>
                <?php  cart_num(); ?></sup></a>
            </li>
          </ul>
          <!-- <form class='d-flex'  action='../../search_product.php'  method='GET'>
            <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'name='search_data'>
          
            <input type='submit' name='search_data_product' class='btn btn-outline-light' value='search'>
          </form> -->
        </div>
      </div>
    </nav>
<!-- top nav -->


<!-- first nav end -->
  <nav class="navbar navbar-expand-lg opacity-5 bg-secondary text-white  ">

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


}

?>

</div>

</nav>

<!-- navbar end -->
</div>


<div class="container-fluid ">






<div class="row p-2 ">


<div class="col-md-2 mb-4">



  <ul class="navbar-nav bg-secondary">
 
    <li class="nav-item bg-info">
         <a href="http://" class="nav-link text-center"><h4>Your Profile</h4></a>
    </li>
    <?php 

$username= $_SESSION['u_name'];


$select="SELECT*FROM u_registers WHERE u_name='$username'";

$queryy=mysqli_query($conn,$select);

 if($queryy){

   $row_fet=mysqli_fetch_array($queryy);

   $profile_img=$row_fet['u_img'];
   $user_id=$row_fet['u_id'];
 }

  

?>
 <!-- <?php 
 echo " <li class='nav-item'>  <img  style='' src='../../images/' ></li>";
 
 ?> -->
 <li class='nav-item'>  <img  style="height: 100px; width:100%; object-fit:contain;"  src="../../admin/upload/.<?php echo $profile_img; ?> "></li>
    <li class="nav-item"><a class="nav-link text-center text-white" href="profile.php">Pending orders</a></li>
    <li class="nav-item"><a class="nav-link text-center text-white" href="profile.php?my_order">My orders</a></li>
    <li class="nav-item"><a class="nav-link text-center text-white" href="profile.php?edit_account=<?php echo $user_id;?>">edit account</a></li>
    <li class="nav-item"><a class="nav-link text-center text-white" href="profile.php?delete_account=<?php echo $user_id; ?>">Delete Account</a></li>
    <li class="nav-item"><a class="nav-link text-center text-white" href="logout.php">Logout</a></li>
  
  </ul>
</div>
 


 <div style="overflow-x:scroll ;"  class="col-md-10 ">

<?php

pending_profile();

 if(isset($_GET['edit_account'])){

   include("edit_account.php");


 }

 if(isset($_GET['my_order'])){

  include("my_order.php");
}
 if(isset($_GET['delete_account'])){

  include("delete_user.php");
}
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


<!-- start php code -->


<?php
 


?>


