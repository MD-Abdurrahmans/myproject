

<?php
    
    if(isset($_POST['Add_brands'])){
    
     
      $brands= $obj->Add_brands($_POST);
    
    
    }
    
    
     ?>
    





<div class="container-fluid add_category-page p-5">


<h1 class="text-center" >Add_brands</h1>

<form action="" method="POST" class="login my-5">
 <!-- name -->
<div class="mb-3 m-auto mb-3">
 <label for="name" class="">Brands_name</label><br>
 <input type="text" name="Brands_name"  class="form-control" placeholder="add categories">
</div>

  <input type="submit" class="btn btn-info my-2"  value="Add brands" name="Add_brands">


</form>
</div>