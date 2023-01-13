
<?php
    
if(isset($_POST['add_cat'])){

 
  $cat= $obj->add_cat($_POST);


}


 ?>

<div class="container-fluid add_category-page p-5">
 <?php if(isset($cat)){echo $cat;} ?>
<h1 class="text-center" >add_category</h1>

<form action="" method="POST" class="login my-5">
 <!-- name -->
<div class="mb-3 m-auto mb-3">
 <label for="name" class="">category_name</label><br>
 <input type="text" name="category_name"  class="form-control" placeholder="add categories">
</div>

  <input type="submit" class="btn btn-info my-2"  value="ADD CAT" name="add_cat">


</form>
</div>