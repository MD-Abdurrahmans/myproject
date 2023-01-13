
  <?php
if(isset($_GET['status'])){

     if($_GET['status']="edit"){

         $cat_id =$_GET['id'];
        
     }
}





$select_category= "SELECT * FROM category WHERE cat_id=$cat_id ";

$querys =mysqli_query($conn,$select_category);

  
 while($row=mysqli_fetch_assoc($querys)){

   $cat_name=$row['cat_name'];
   $cat_id=$row['cat_id'];

  
 }


 if(isset($_POST['update_cat'])){

   $cat_names=$_POST['u_category_name'];

     $update= "UPDATE category SET cat_name='$cat_names' WHERE cat_id=$cat_id";

     $query =mysqli_query($conn,$update);

     if($query){

        echo "yess";
     }
 }
 


?>

<h1>edit</h1>


<div class="container-fluid add_category-page p-5">
 <?php if(isset($cat)){echo $cat;} ?>
<h1 class="text-center" >edit_category</h1>

<form action="" method="POST" class="login my-5">
 <!-- name -->
<div class="mb-3 m-auto mb-3">
 <label for="name" class="">category_name</label><br>
  <?php  ?>
 <input type="text" name="u_category_name"  class="form-control" value="<?php echo $cat_name; ?>" >
</div>

  <input type="submit" class="btn btn-info my-2"  value="UPDATE CAT" name="update_cat">


</form>
</div>