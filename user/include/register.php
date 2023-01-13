
<?php 
 include("../../admin/class/func.php");

 $obj=new Myproject();
 if(isset($_POST['user_register'])){

  $user_r= $obj->user_register($_POST);
  echo $user_r;
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
    <title>Document</title>
</head>
<body>



  <div class="container-fluid user-register-page">
 
  

  <form action="" method="POST" enctype="multipart/form-data"  class="user-register my-5" >
  <h1>USER REGISTRATION FORM</h1>
 <!-- name -->
<div class="mb-3 m-auto">
 <label for="user_name" class="">user_name</label><br>
 <input type="text" name="user_name"  class="form-control" placeholder="user_name"autocomplete="off"	required >
</div>
<div class="mb-3 m-auto">
 <label for="user_phone" class="">user_phone</label><br>
 <input type="number" name="user_phone"  class="form-control"placeholder="user_phone"
 autocomplete="off"	required >
</div>

<div class="mb-3 m-auto">

 <label for="emails" class="">user_email</label><br>
 <input type="email" name="user_email"  class="form-control" placeholder="user_email" autocomplete="off"	required >
</div>

<div class="mb-3 m-auto">

 <label for="user_address" class="">user_address</label><br>
 <input type="text" name="user_address"  class="form-control" placeholder="user_address" autocomplete="off"	required >
</div>

<div class="mb-3 m-auto">
 <label for="user_photo" class="">user_photo</label><br>
 <input type="file" name="user_photo"  class="form-control "autocomplete="off"	required >
</div>

<div class="mb-3 m-auto">
 <label for="user_Password" class="user_Password"placeholder="user_Password" >user_Password</label><br>
 <input type="password" name="user_Password" class="form-control "
 autocomplete="off"	required><br>
 <label for="user_Cpassword" class="password" >user conform password</label><br>
 <input type="password" name="user_Cpassword" class="form-control "
 autocomplete="off"	required><br>
 <p>do you have already a account? <a href="login.php"class="text-info">login</a> </p>
  <input type="submit" class="btn btn-info"  name="user_register">
</div>

</form>
  </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- fontawesome link -->
<script src="https://kit.fontawesome.com/83315f1487.js" crossorigin="anonymous"></script>
</body>
</html>
