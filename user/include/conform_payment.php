
   <?php 

 
   include("connect.php");
    include("../../function/common_fun.php");
  
  
    include("../../admin/class/func.php");
   

   
    if(isset($_GET['order_id'])){


         $order_id= $_GET['order_id'];


          $select="SELECT*FROM user_order WHERE order_id=$order_id";

           $query=mysqli_query($conn,$select);
           if($query){

            
           $fetch=mysqli_fetch_assoc($query);
           $invoice=$fetch['invoicenumber'];
           $ammount=$fetch['amount_due'];
           }

    }

     if(isset($_POST['moneysend'])){

         $s_ammount=$_POST['ammount'];
         $s_invoicenumber=$_POST['invoicenumber'];
         $s_payment_mode=$_POST['payment_mode'];

         $select_pay="INSERT INTO user_payment (order_id,invoicenumber,ammount,payment_mode,display_date) VALUES ($order_id,$s_invoicenumber, $s_ammount,'$s_payment_mode',now() )";



          $pay_query=mysqli_query($conn,$select_pay);
          if($pay_query){

             echo "<script>alert('insert done')</script>";
             echo "<script>window.open('profile.php?my_order','_self')</script>";
          }
           $update="UPDATE user_order SET statas='complete' WHERE order_id=$order_id";
           $update_query=mysqli_query($conn,$update);

            
     }
   ?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- bootstrap link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body class=" bg-secondary">
    <div class="container-fluid  text-center my-3">
        <h1>Payment </h1>
  
        <form action="" method="post" class="my-5">

        <div class="div mb-4 mx-auto w-50">
         <label for="ammount">Ammount</label><br>
         <input type="text" name='ammount'  value="<?php echo $ammount; ?>" class="mx-auto w-50 form-control">
       </div>

        <div class="div mb-4 mx-auto w-50">
         <label for="invoicenumber">invoicenumber</label><br>
         <input type="text" value="<?php echo $invoice; ?>" name='invoicenumber' class="mx-auto w-50 form-control">
       </div>

        <div class="div mb-4 mx-auto w-50">
        <label for="select">PAY MODE</label><br>
        <select class="mx-auto w-50 form-control" name="payment_mode" value=''id="">
         <option value="">bikash</option>

         <option value="">Nogod</option>

         <option value="">paypel</option>

         <option value="">USB</option>
        </select>
       </div>

        <div class="div mb-4 mx-auto ">
    
           <input type="submit" name="moneysend" value='send' class="btn btn-info text-white">
       </div>
        </form>

    </div>
  </body>
  </html>