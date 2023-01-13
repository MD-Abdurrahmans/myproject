<h1>edit 2</h1>


<?php
if(isset($_GET['status'])){

     if($_GET['status']="edit2"){

         $brand_id =$_GET['id'];
        
     }
}





$select_brands= "SELECT * FROM brands WHERE brand_id=$brand_id ";

$querys =mysqli_query($conn,$select_brands);

  
 while($row=mysqli_fetch_assoc($querys)){

   $brands_name=$row['brands_name'];
   $brand_id=$row['brand_id'];

  
 }


 if(isset($_POST['update_brands'])){

   $u_brands_name=$_POST['u_brands_name'];

     $update= "UPDATE brands SET brands_name='$u_brands_name' WHERE brand_id=$brand_id";

     $query =mysqli_query($conn,$update);

     if($query){

        echo "yess";
     }
 }
 


?>

<div class="container-fluid add_category-page p-5">
 <?php if(isset($cat)){echo $cat;} ?>
<h1 class="text-center" >edit_BRANDS</h1>

<form action="" method="POST" class="login my-5">
 <!-- name -->
<div class="mb-3 m-auto mb-3">
 <label for="name" class="">category_name</label><br>
  <?php  ?>
 <input type="text" name="u_brands_name"  class="form-control" value="<?php echo $brands_name; ?>" >
</div>

  <input type="submit" class="btn btn-info my-2"  value="UPDATE CAT" name="update_brands">


</form>
</div>