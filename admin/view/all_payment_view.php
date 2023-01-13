




<h1 class="text-success text-center my-4">all payment</h1>
<form action="" method="post">
 <table class="table table-responsive  bg-dark text-white table-bordered">
     
  <?php 
    
    $s_order="SELECT*FROM user_payment";
    $order_query=mysqli_query($conn,$s_order);
  
     $num_order=mysqli_num_rows($order_query);

          if($num_order>0){
          $number=0;
            while($order_fetch=mysqli_fetch_array($order_query)){

                $number++;
                $order_id=$order_fetch['order_id'];
                $amount_due=$order_fetch['ammount'];
                $invoicenumber=$order_fetch['invoicenumber'];
                $payment_mode=$order_fetch['payment_mode'];
                $display_date=$order_fetch['display_date'];
   
               
       echo "<tr>
       <td>$number</td>
       <td>$order_id</td>
       <td> $display_date </td>
       <td> $amount_due </td>
       <td> $payment_mode</td>
       <td>$invoicenumber</td>
       <td>
       <div class='d-flex'>
       <input type='checkbox' name='check[]'value='$order_id' class='mx-4'>
       <input type='submit' class='btn btn-danger text-white' name='remove'value='DELETE'>
      
       </div>
       </td>
   </tr>";

            }
           

           
          }else{

              echo "<h2 class='text-danger text-center'>NOT available payment YET!</h2>";
          }
    

          if(isset($_POST['remove'])){

              foreach($_POST['check'] as $item_id){
            


 $del="DELETE FROM user_order WHERE order_id =$item_id";

  $query=mysqli_query($conn,$del);
  if($query){

     echo "<script>alert('deleted')</script>";
  }else{


  }
              
              }
              echo "<script>alert('SELECT THE ITEM ');</script>";  
              echo "<script>window.open('all_payment.php','_self');</script>";  
          }else{

             echo "<script>alert('SELECT THE ITEM ');</script>";
          }
 

  ?>
   <thead>
    <tr class="table-active">

         <th>S.no</th> 
         <th>order_id</th>
         <th>order_date</th>
         <th>payment</th>
         <th>payment mode</th>
         <th> invoicenumber</th>
         <th>Opretions</th>
    </tr>
   </thead>

    <tbody>
        <!-- <tr class="">
            <td>lsdf</td>
            <td>lsdf</td>
            <td>lsdf</td>
            <td>lsdf</td>
            <td>
        <?php echo $invoicenumber; ?></td>
            <td>lsdf</td>
            <td>lsdf</td>
            <td>lsdf</td>
            <td>
                <a href="http://" class="btn btn-danger text-white">DELETE</a>
            </td>
        </tr> -->
 
    </tbody>
 </table>
 </form>
