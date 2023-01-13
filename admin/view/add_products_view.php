


<?php
include("db_conn.php");
  if(isset($_POST['add_products'])){

  $pro= $obj->add_products($_POST);

    

  }
?>




<div class="container-fluid add_products-page">

<h1 class="text-center" >Add Products</h1>
 <?php if(isset($pro)){echo $pro;} ?>
<form action="" method="POST" class="register my-5" enctype="multipart/form-data">
 <!-- name -->
<div class="mb-3 m-auto">
 <label for="name" class="">Product Name</label><br>
 <input type="text" name="product_name"  class="form-control" placeholder="input your name"autocomplete="off"	requiredS ds>
</div>
<div class="mb-3 m-auto">
 <label for="phone" class="">product_Content</label><br>
  <textarea type="text" name="product_Content" id="" cols="30" rows="10" class="form-control" ></textarea>
</div>

<!-- categories -->
<div class="mb-3 m-auto">
 <label for="emails" class="">product_categories</label><br>
   <select name="product_categories" id="" class="form-control" >
  
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
   <select type='text' name="product_brands" id="" class="form-control" >

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
 <input type="file" name="product_img1"  class="form-control "autocomplete="off"	requiredS ds>
</div>
<div class="mb-3 m-auto">
 <label for="profile" class="">product_image2</label><br>
 <input type="file" name="product_img2"  class="form-control "autocomplete="off"	requiredS ds>
</div>
<div class="mb-3 m-auto">
 <label for="profile" class="">product_image3</label><br>
 <input type="file" name="product_img3"  class="form-control "autocomplete="off"	requiredS ds>
</div>
<div class="mb-3 m-auto">
 <label for="profile" class="">product_price</label><br>
 <input type="text" name="product_price"  class="form-control "autocomplete="off"	requiredS ds>
</div>
<div class="mb-3 m-auto">
 <label for="profile" class="">product_keyword</label><br>
 <input type="text" name="product_keyword"  class="form-control "autocomplete="off"	requiredS ds>
</div>

<div class="mb-3 m-auto">

 <label for="emails" class="">product_status</label><br>
   <select type="text" name="product_status" id="" class="form-control" >

     <option value="1">publish</option>
     <option value="0">unpublish</option>
   
   </select>
</div>

<div class="mb-3 m-auto">
 <label for="product_summary" class="product_summary"placeholder="product_summary" >product_summary</label><br>
 <input type="text" name="product_summary" class="form-control "
 autocomplete="off"	requiredS ><br>

  <input type="submit" class="btn btn-info"  name="add_products">
</div>

</form>
</div>






