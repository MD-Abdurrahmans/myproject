


<?php

  include("db_conn.php");

 

 if(isset($_GET['status'])){

   if($_GET['status']="delete"){
      
      $cat_id=$_GET['id'];
   

      $del="DELETE FROM category WHERE cat_id=$cat_id";
 
       $query =mysqli_query($conn,$del);

       if($query){

         echo "DELETED succussfully";
       }
   }
 }

?>



 <h1>MANAGE CATEGORIES</h1>

<div class="container-fluid my-5  mx-auto">


  <table class="table border table-responsive">
   
    <thead class="" >
         <tr>
            <th>id</th>
            <th>category name</th>
            <th>Actions</th>
         </tr>
    </thead>

    <tbody class="border">


    <?php 
    
      $select_cat="SELECT *FROM category";

      $query=mysqli_query($conn,$select_cat);


      while($cat=mysqli_fetch_assoc($query)){

          $cat_id=$cat['cat_id'];
          $cat_name=$cat['cat_name'];

          echo "  <tr>
          <td>$cat_id</td>
          <td>$cat_name</td>
          <td>
              <a href='edit.php?status=edit&& id=$cat_id' class='btn btn-info'>edit</a>
              <a href='?status=delete&&id=$cat_id ' class='btn btn-danger'>Deltete</a>
          </td>
       </tr> ";
      }
    
    ?>
       
    </tbody>
     
  </table>
 
</div>