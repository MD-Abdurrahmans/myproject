

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My ordes</title>
</head>
<body>
    
   <h1 class="text-center text-success">MY ORDERS DETAILS</h1>


      <table class="table table-responsive table-bordered table-dark table-hover">


      <?php 
      $username= $_SESSION['u_name'];
        $user_table="SELECT*FROM u_registers WHERE u_name= '$username'";
        $user_query=mysqli_query($conn,$user_table);

        $user_fetch=mysqli_fetch_assoc($user_query);

        $user_id=$user_fetch['u_id'];
      
      ?>
        <thead>
             <tr class="table-active">
                <th>S:No</th>
                <th>Ammount due</th>
                <th>Total product</th>
                <th>InvoiceNumber</th>
                <th>Date</th>
                <th>Complete/incomplete</th>
                <th>Status</th>
             </tr>
        </thead>

        <tbody>

        <?php 
        
         
        $select_order="SELECT*FROM user_order WHERE users_id= $user_id";

        $order_query=mysqli_query($conn,$select_order);
      $number=0;
        while($row_fetch=mysqli_fetch_array($order_query)){
            $number++;
             $ammout=$row_fetch['amount_due'];
             $order_id=$row_fetch['order_id'];
             $invoicenumber=$row_fetch['invoicenumber'];
             $total_product=$row_fetch['total_product'];
             $order_date=$row_fetch['order_date'];
             $order_status=$row_fetch['statas'];
            if($order_status=='pending'){

                 $order_status="Incomplete";
                 
            }else{
              $order_status="complete";
            }

         
                

            echo "
            <tr>
           
            <td>$number</td>
            <td>$ammout</td>
            <td>$total_product</td>
            <td>$invoicenumber</td>
            <td>$order_date=</td>
            <td>$order_status</td>"
       
          ?>
   <?php
   
   if($order_status=='complete'){
        echo "<td class='text-success'>Paid</td>";
   }else{
  echo "    <td>
            
  <a  class='text-decoration-none text-danger' href='conform_payment.php?order_id=$order_id'>conform</a>
</td>  
</tr>
";
   }

             
        }
  
        ?>
           
        </tbody>
      </table>
</body>
</html>