

<?php

 
include("includes/head.php");

include("class/func.php") ;

$obj=new Myproject();



if(isset($_POST['admin_register'])){


$result=    $obj->register($_POST);
}



?>

<div class="container-fluid register-page">

<h1 class="text-center" >Register form</h1>

<form action="" method="POST" class="register my-5" enctype="multipart/form-data">
 <!-- name -->
<div class="mb-3 m-auto">
 <label for="name" class="">Name</label><br>
 <input type="text" name="admin_name"  class="form-control" placeholder="input your name"autocomplete="off"	required >
</div>
<div class="mb-3 m-auto">
 <label for="phone" class="">phone</label><br>
 <input type="number" name="admin_phone"  class="form-control"placeholder="input your phone"
 autocomplete="off"	required >
</div>

<div class="mb-3 m-auto">

 <label for="emails" class="">email</label><br>
 <input type="email" name="admin_email"  class="form-control" placeholder="input your Email address" autocomplete="off"	required >
</div>
<div class="mb-3 m-auto">
 <label for="profile" class="">Profile photo</label><br>
 <input type="file" name="admin_profile"  class="form-control "autocomplete="off"	required >
</div>

<div class="mb-3 m-auto">
 <label for="password" class="admin_password"placeholder="your password" >Password</label><br>
 <input type="password" name="admin_password" class="form-control "
 autocomplete="off"	required><br>
 <label for="conform" class="password" >conform password</label><br>
 <input type="password" name="admin_Cpassword" class="form-control "
 autocomplete="off"	required><br>
 <p>do you have already a account? <a href="index.php"class="text-info">login</a> </p>
  <input type="submit" class="btn btn-info"  name="admin_register">
</div>

</form>
</div>



