






<?php

  include("db_conn.php");

 

 if(isset($_GET['status'])){

   if($_GET['status']="delete"){
      
      $product_id=$_GET['id'];
   

      $del="DELETE FROM products WHERE product_id=$product_id";
 
       $query =mysqli_query($conn,$del);

       if($query){

         echo "DELETED succussfully product";
       }
   }
 }

?>




<h1>manage products</h1>
<!-- <img src="../upload/<?php echo $product_image1 ; ?>" alt="" srcset=""> -->

<div class="container-fluid my-5  mx-auto">


  <table class="table border table-responsive">
   
    <thead class="" >
         <tr>
            <th>product_id</th>
            <th>product_name</th>
            <th>product_content</th>
            <th>product_category</th>
            <th>product_brands</th>
            <th>product_image1</th>
            <th>product_image2</th>
            <th>product_image3</th>
            <th>product_summary</th>
            <th>product_price</th>
            <th>product_status</th>
            <th>product_keyword</th>
            <th>Actions</th>
         </tr>
    </thead>

    <tbody class="border">


    <?php 
    
      $select_product="SELECT *FROM products";

      $query=mysqli_query($conn,$select_product);


      while($product=mysqli_fetch_assoc($query)){

          $product_id=$product['product_id'];
          $product_name=$product['product_name'];
          $product_content=$product['product_content'];
          $product_cat=$product['product_cat'];
          $product_brands=$product['product_brands'];
          $product_image1=$product['product_image1'];
          $product_image2=$product['product_image2'];
          $product_image3=$product['product_image3'];
          $product_summary=$product['product_summary'];
          $product_price=$product['product_price'];
          $product_keyword=$product['product_keyword'];
           $product_status=  $product['product_status'];
          
       
            
          
          //  if($product_status=1){
          //   echo "published";
          //  }
      
          echo "  <tr>
          <td>$product_id</td>
          <td>$product_name</td>
          <td>$product_content</td>
          <td>$product_cat</td>
          <td>$product_brands</td>
        
          <td> <img class='w-100' src='upload/$product_image1'> </td>
          <td> <img class='w-100' src='upload/$product_image2'> </td>
          <td> <img class='w-100' src='upload/$product_image3'> </td>
          <td>$product_summary</td>
          <td>$product_price</td>
          <td>$product_status</td>
          <td> 
             $product_keyword
           </td>
          <td class='d-flex' >
              <a  href='edit3.php?status=edit&& id=$product_id' class='btn btn-info mx-2'>edit</a>
              <a href='?status=delete&&id=$product_id ' class='btn btn-danger'>Deltete</a>
          </td>
       </tr> ";
      }
    
    ?>
       
    </tbody>
     
  </table>
 
</div>