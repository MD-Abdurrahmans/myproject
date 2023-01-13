
<?php
  include("class/func.php") ;

  // $obj=new Myproject();
  include("includes/head.php");

  $obj= new Myproject();
 
  if(isset($_POST['admin_login'])){
  
     
      $obj->login($_POST);
 
   }


   session_start();
   if(isset($_SESSION['username'])){

       header("Location:temp.php");
   }

//  $ip =  getIPAddress();

?>
 


<div class="container-fluid login-page">


 <h1 class="text-center" >login form</h1>

 <form action="" method="POST" class="login my-5">
  <!-- name -->
 <div class="mb-3 m-auto">
  <label for="name" class="">Name</label><br>
  <input type="text" name="admin_lname"  class="form-control ">
</div>
  <div>
  <!-- <input type="hidden" name="ip" value="<?php  if(isset($ip)){echo $ip;}?>" > -->
  </div>
 <div class="mb-3 m-auto">
  <label for="password" class="password">Password</label><br>
  <input type="password" name="admin_lpassword" class="form-control "><br>
  <p>don't have an account? <a href="register.php"class="text-info">Register</a> </p>
   <input type="submit" class="btn btn-info"  value="login" name="admin_login">
</div>

 </form>
</div>