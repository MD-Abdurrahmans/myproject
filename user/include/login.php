<?php 
 include("../../admin/class/func.php");
include("./connect.php");

 $obj=new Myproject();
 if(isset($_POST['user_login'])){

  $user_login= $obj->user_login($_POST);

 }
 session_start();
global $conn;
 $user_ip = getIPAddress();   

 $cart="SELECT*FROM cart_details WHERE ip_address= '$user_ip'";
 $cart_query=mysqli_query($conn,$cart);

 $rows=mysqli_num_rows($cart_query);

 if($rows>0){
  if(isset($_SESSION['u_name'])){

    header("Location:payment.php");

}else{
  // header("Location:login.php");

}

   
 }elseif(isset($_SESSION['u_name']) && $rows==0){

  header("Location:../../display_all_product.php");
 }else{

  // header("Location:login.php");
 }



?>
  

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
    <title>User login</title>
</head>
<body>


  <div class="container-fluid user">




  <form action="" method="POST">

 <div class="user-login">

 <h1>USER LOGIN FORM</h1>
       <!-- name -->
       <div class="mb-3 m-auto">
  <label for="user_name" class="">user_name</label><br>
  <input type="text" name="user_name"  class="form-control ">
</div>
  <div>
      <!-- user_password -->
 <div class="mb-3 m-auto">
  <label for="user_password" class="">user_password</label><br>
  <input type="password" name="user_password"  class="form-control ">
  <br>
  <p>don't have an account? <a href="register.php" >Register</a></p>
  <input type="submit" class="btn btn-info text-white" value="user Login" name="user_login">
</div>
  <div>
 </div>
  </form>


  </div>
    <!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- fontawesome link -->
<script src="https://kit.fontawesome.com/83315f1487.js" crossorigin="anonymous"></script>
</body>
</html>