<h1>edit 3</h1>




<?php
include("db_conn.php");
 
if(isset($_GET['status'])){
    if($_GET['status']="edit"){
        $product_id=$_GET['id'];
    }
}

$select_product="SELECT*FROM products WHERE product_id =$product_id";


 $query =mysqli_query($conn,$select_product);

 $fetch=mysqli_fetch_assoc($query);

 $product_name=$fetch['product_name'];
 $product_content=$fetch['product_content'];
 $product_cat=$fetch['product_cat'];
 $product_brands=$fetch['product_brands'];
 $product_image1=$fetch['product_image1'];
 $product_image2=$fetch['product_image2'];
 $product_image3=$fetch['product_image3'];
 $product_summary=$fetch['product_summary'];
 $product_price=$fetch['product_price'];
 $product_status=$fetch['product_status'];


  if(isset($_POST['update_products'])){

 $u_product_name=$_POST['u_product_name'];
 $u_product_Content=$_POST['u_product_Content'];
 $u_product_categories=$_POST['u_product_categories'];
 $u_product_brands=$_POST['u_product_brands'];
 $u_product_img1=$_FILES['u_product_img1']['name'];
 $u_product_img1_tmp=$_FILES['u_product_img1']['tmp_name'];
 $u_product_img2=$_FILES['u_product_img2']['name'];
 $u_product_img2_tmp=$_FILES['u_product_img2']['tmp_name'];
 $u_product_img3=$_FILES['u_product_img3']['name'];
 $u_product_img3_tmp=$_FILES['u_product_img3']['tmp_name'];
 $u_product_price=$_POST['u_product_price'];
 $u_product_status=$_POST['u_product_status'];
 $u_product_summary=$_POST['u_product_summary'];



 $update ="UPDATE products SET product_name='$u_product_name',product_content='$u_product_Content',product_cat=$u_product_categories, product_brands=$u_product_brands,product_image1='$u_product_img1',product_image2='$u_product_img2',product_image3='$u_product_img3',product_summary='$u_product_summary',product_price='$u_product_price',product_status=$u_product_status WHERE product_id =$product_id";



  $query=mysqli_query($conn,$update);
 move_uploaded_file($u_product_img1_tmp,"upload/".$u_product_img1);
 move_uploaded_file($u_product_img2_tmp,"upload/".$u_product_img2);
 move_uploaded_file($u_product_img3_tmp,"upload/".$u_product_img3);
   if($query){

     echo "yess";
   }

  }
?>




<div class="container-fluid add_products-page">

<h1 class="text-center" >edit Products</h1>
 <?php if(isset($pro)){echo $pro;} ?>
<form action="" method="POST" class="register my-5" enctype="multipart/form-data">
 <!-- name -->
<div class="mb-3 m-auto">
 <label for="name" class="">Product Name</label><br>
 <input type="text" name="u_product_name"  class="form-control" placeholder="input your name"autocomplete="off" value="<?php echo $product_name; ?>"	requiredd ds>
</div>
<div class="mb-3 m-auto">
 <label for="phone" class="">product_Content</label><br>
  <textarea name="u_product_Content" value="<?php echo $product_content;?>" id="" cols="30" rows="10" class="form-control"></textarea>
</div>

<!-- categories -->
<div class="mb-3 m-auto">
 <label for="emails" class="">product_categories</label><br>
   <select name="u_product_categories" id="" class="form-control"  >
  
   <?php


$select_category= "SELECT * FROM category";

$querys =mysqli_query($conn,$select_category);

  
 while($row=mysqli_fetch_assoc($querys)){

   $cat_name=$row['cat_name'];
   $cat_id=$row['cat_id'];

    echo "<option value='$cat_id'>$cat_name</option> ";
 }


?>

     


   </select>
</div>
<!-- brands  -->

 
<div class="mb-3 m-auto">

 <label for="emails" class="">product_brands</label><br>
   <select type='text' name="u_product_brands" id="" class="form-control" >

   <?php


$select_brands= "SELECT * FROM brands";

$querys =mysqli_query($conn,$select_brands);

  
 while($row=mysqli_fetch_assoc($querys)){

   $brands_name=$row['brands_name'];
   $brands_id=$row['brand_id'];

    echo "<option value='$brands_id'>$brands_name</option> ";
 }

?>
  
   </select>
</div>



<div class="mb-3 m-auto">
 <label for="profile" class="">product_image1</label><br>
  <div class="d-flex">
  <input type="file" name="u_product_img1"  class="form-control "autocomplete="off" 
 value="<?php echo $product_image1; ?>"  required ds>
 <img class='w-25' src='upload/<?php echo $product_image1;?>'> 
  </div>
</div>
<div class="mb-3 m-auto">
 <label for="profile" class="">product_image2</label><br>
 <div class="d-flex">
  <input type="file" name="u_product_img2"  class="form-control "autocomplete="off" 
 value="<?php echo $product_image2; ?>"  required ds>
 <img class='w-25' src='upload/<?php echo $product_image2;?>'> 
  </div>
</div>
<div class="mb-3 m-auto">
 <label for="profile" class="">product_image3</label><br>
 <div class="d-flex">
  <input type="file" name="u_product_img3"  class="form-control "autocomplete="off" 
 value="<?php echo $product_image3; ?>"  required ds>
 <img class='w-25' src='upload/<?php echo $product_image3;?>'> 
  </div>
</div>
<div class="mb-3 m-auto">
 <label for="profile" class="">product_price</label><br>
 <input type="text" name="u_product_price"  class="form-control "autocomplete="off"
 value="<?php echo $product_price; ?>" 	requiredd ds>
</div>

<div class="mb-3 m-auto">

 <label for="emails" class="">product_status</label><br>
   <select type="text" name="u_product_status" id="" class="form-control" >

     <option value="1">publish</option>
     <option value="0">unpublish</option>
   
   </select>
</div>

<div class="mb-3 m-auto">
 <label for="password" class="admin_password"placeholder="your password" >product_summary</label><br>
 <input type="text" name="u_product_summary" class="form-control "
 autocomplete="off"  value="<?php echo $product_summary; ?>" 	requiredd ><br>

  <input type="submit" class="btn btn-info"  name="update_products">
</div>

</form>
</div>








