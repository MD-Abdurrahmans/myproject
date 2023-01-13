









<?php

  include("db_conn.php");

 

 if(isset($_GET['status'])){

   if($_GET['status']="delete"){
      
      $brand_id=$_GET['id'];
   

      $del="DELETE FROM brands WHERE brand_id=$brand_id";
 
       $query =mysqli_query($conn,$del);

       if($query){

         echo "DELETED succussfully Brands" ;
       }
   }
 }

?>



<h1>manage brands</h1>

<div class="container-fluid my-5  mx-auto">


  <table class="table border table-responsive">
   
    <thead class="" >
         <tr>
            <th>id</th>
            <th>brands name</th>
            <th>Actions</th>
         </tr>
    </thead>

    <tbody class="border">


    <?php 
    
      $select_brand="SELECT *FROM brands";

      $query=mysqli_query($conn,$select_brand);


      while($cat=mysqli_fetch_assoc($query)){

          $brand_id=$cat['brand_id'];
          $brand_name=$cat['brands_name'];

          echo "  <tr>
          <td>$brand_id</td>
          <td>$brand_name</td>
          <td>
              <a href='edit2.php?status=edit&& id=$brand_id' class='btn btn-info'>edit</a>
              <a href='?status=delete&&id=$brand_id ' class='btn btn-danger'>Deltete</a>
          </td>
       </tr> ";
      }
    
    ?>
       
    </tbody>
     
  </table>
 
</div>