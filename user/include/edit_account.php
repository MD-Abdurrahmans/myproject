
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT-ACCOUNT</title>
</head>
<body>
    


    <form action="" method="POST" enctype="multipart/form-data" class="text-center">

    <?php 
    

     if(isset($_GET['edit_account'])){
         $user_id=$_GET['edit_account'];


         $username= $_SESSION['u_name'];

         $userip = getIPAddress();  
         $select="SELECT*FROM u_registers WHERE u_name='$username'";

     
         $querys=mysqli_query($conn,$select);
     
          if($querys){

            $fetch=mysqli_fetch_assoc($querys);
            
            $u_id=$fetch['u_id'];
            $u_name=$fetch['u_name'];
            $u_email=$fetch['u_email'];
            $u_phone=$fetch['u_phone'];
            $u_address=$fetch['u_address'];
           
         
            
          }
     
     }



      if(isset($_POST['edit_account'])){

         $e_id=$_POST['e_id'];
         $e_name=$_POST['e_name'];

         $e_email=$_POST['e_email'];

         $e_phone=$_POST['e_phone'];

         $e_address=$_POST['e_address'];

         $u_img=$_FILES['e_image']['name'];
         $u_img_tmp=$_FILES['e_image']['tmp_name'];


    $update_ac="UPDATE  u_registers SET u_name ='$e_name', u_email='$e_email' ,u_phone=$e_phone , u_address='$e_address',u_img='$u_img' WHERE u_id= $e_id";
    
      $up_query=mysqli_query($conn,$update_ac);
      move_uploaded_file($u_img_tmp,"../../admin/upload/.$u_img");
       if($up_query){

         echo "<script>alert('date updated succussfully')</script>";
          
         echo "<script>window.open('logout.php','_self')</script>";
          

       }
      }

    ?>
      <h1 class="text-success">EDIT YOUR ACCOUNT</h1>
       <div class="div mb-4">
         <label for="e_name">Edit-name</label><br>
         <input type="text" value="<?php    echo $u_name;  ?>" name='e_name' class="mx-auto w-50 form-control">
       </div>
       <div class="div mb-4">
         <label for="e_email">Edit-Email</label><br>
         <input type="mail" value="<?php    echo $u_email;  ?>" name='e_email' class="mx-auto w-50 form-control">
       </div>
       <div class="div mb-4">
         <label for="e_phone">Edit-phone</label><br>
         <input type="number" value="<?php    echo $u_phone;  ?>"  name='e_phone' class="mx-auto w-50 form-control">
       </div>
       <div class="div d-flex mb-4 mx-auto w-50 form-control">
         <label for="e_image">Edit-image</label><br>
         <input type="file" name='e_image' >
         <img style="height:50px;object-fit:contain" src="../../admin/upload/.<?php echo $profile_img;?>" alt="" srcset="">
       </div>

       <div class="div mb-4">
         
         <input type="hidden" value="<?php    echo $u_id;  ?>" name='e_id' class="mx-auto w-50 form-control">
       </div>
       <div class="div mb-4">
         <label for="e_phone">Edit-address</label><br>
         <input type="text" value="<?php    echo $u_address;  ?>" name='e_address' class="mx-auto w-50 form-control">
       </div>
       <div class="div mb-4">
         
         <input type="submit" name="edit_account" value="Update_account" class="btn btn-warning">
       </div>
    </form>
</body>
</html>