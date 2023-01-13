




<h1 class="text-success text-center my-4">all users</h1>
<form action="" method="post">
 <table class="table table-responsive  bg-dark text-white table-bordered">
     
  <?php 
    
    $s_user="SELECT*FROM u_registers";
    $user_query=mysqli_query($conn,$s_user);
  
     $num_user=mysqli_num_rows($user_query);

          if($num_user>0){
          $number=0;
            while($user_fetch=mysqli_fetch_array($user_query)){

                $number++;
                $u_id =$user_fetch['u_id'];
                $u_name=$user_fetch['u_name'];
                $u_email=$user_fetch['u_email'];
                $u_phone=$user_fetch['u_phone'];
                $u_address=$user_fetch['u_address'];
                $u_ip=$user_fetch['u_ip'];
                $u_img=$user_fetch['u_img'];
   
               
       echo "<tr>
       <td>$number</td>
       <td>$u_id</td>
       <td> $u_name </td>
       <td> $u_email </td>
       <td> $u_phone </td>
       <td> $u_address</td>
       <td>$u_ip</td>
       <td> <img  style='height:100px' src='./upload/.$u_img'></td>
       <td>
       <div class='d-flex'>
       <input type='checkbox' name='check[]'value='$u_id' class='mx-4'>
       <input type='submit' class='btn btn-danger text-white' name='remove'value='DELETE'>
      
       </div>
       </td>
   </tr>";

            }
           

           
          }else{

              echo "<h2 class='text-danger text-center'>NOT avilable users  YET!</h2>";
          }
    

          if(isset($_POST['remove'])){

              foreach($_POST['check'] as $item_id){
            


 $del="DELETE FROM u_registers WHERE u_id =$item_id";

  $query=mysqli_query($conn,$del);
  if($query){

     echo "<script>alert('deleted')</script>";
  }else{


  }
              
              }
            //   echo "<script>alert('SELECT THE ITEM ');</script>";  
            //   echo "<script>window.open('all_payment.php','_self');</script>";  
          }else{

             echo "<script>alert('SELECT THE ITEM ');</script>";
          }
 

  ?>
   <thead>
    <tr class="table-active">

         <th>S.no</th> 
         <th>user_id</th>
         <th>user_name</th>
         <th>user_email</th>
         <th>user_phone</th>
         <th>user_address</th>
         <th>user_image</th>
         <th>user_ip-address</th>
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
