


   <h1 class="text-danger text-center">ACCOUNT DELETE</h1>
  <form action="" method="POST">


  
  <div class="del my-5 mt-5 d-flex justify-content-evenly  align-items-center">

<a href="" type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal'>  DELETED ACCOUNT</a>
<a href="profile.php" class='btn btn-success'> Don't DELETE ACCOUNT</a>
  </div>


<div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
<div class='modal-dialog'>
 <div class='modal-content'>
   <div class='modal-header'>
     <h1 class='modal-title fs-5' id='exampleModalLabel'>are you sure?</h1>
     <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
   </div>
   <div class='modal-body'>
     conform deleted this account
   </div>
   <div class='modal-footer'>
   <a href="profile.php?delete_account"  class='btn btn-success' data-bs-dismiss='modal'> No</a>
 
     <button type='submit' class='btn btn-primary' name='delete'>Yess</button>
   </div>
 </div>
</div>
</div>








  </form>

 <?php 


if(isset($_POST['delete'])){

    $username=$_SESSION['u_name'];
    $del_account="DELETE FROM u_registers WHERE u_name= '$username'";
    $del_query=mysqli_query($conn,$del_account);
    
    if($del_query){
     session_destroy();
     echo "<script>alert('DELTED ACCOUNT')</script>";
     echo "<script>window.open('../../index.php','_self')</script>";

 
    }
    
    }
    
?>