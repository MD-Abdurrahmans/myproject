

<?php 
 


  class Myproject{

private $conn;

 function __construct(){


 $dbhost="localhost"; 
 $dbuser="root";
 $dbpass="";
 $dbname= "myproject";
 

 $this->conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

 
 if(!$this->conn){
     
    die( "not connected to the database".mysqli_connect_error());

  }

 }


//  end database connecting



public function register($data){



  
    $admin_user=$data['admin_name'];
    $admin_phone=$data['admin_phone'];
    $admin_email=$data['admin_email'];
    $admin_profile=$_FILES['admin_profile']['name'];
    $admin_profile_tmp=$_FILES['admin_profile']['tmp_name'];
    $admin_password=$data['admin_password'];
    $hash_password=password_hash($admin_password,PASSWORD_DEFAULT);
    $admin_Cpassword=$data['admin_Cpassword'];
     $ip = getIPAddress();   

    // echo 'User Real IP Address - '.$ip;  
  
  // select query 



   $r_select="SELECT*FROM a_registers WHERE r_name='$admin_user' or r_email='$admin_email'  or r_ip= '$ip' ";


  $r_query=mysqli_query($this->conn,$r_select);

  $fetch=mysqli_fetch_assoc($r_query);
  $rows_count=mysqli_num_rows($r_query);

   if($rows_count>0){
     echo "<script>alert('user name already exits');</script>";



   }elseif($admin_password!==$admin_Cpassword){

    echo "<script>alert('password do not match');</script>";
   }else{



  // inset query 

  $register="INSERT INTO a_registers (r_name,r_phone,r_email,r_profile,r_pass,r_ip) VALUES ('$admin_user',$admin_phone,'$admin_email','$admin_profile','$hash_password','$ip') ";
  
  $query=mysqli_query($this->conn,$register);

  if($query){
     move_uploaded_file($admin_profile_tmp,"./upload/.$admin_profile");

     echo "<script>alert('created  an account');</script>";
     echo "<script>window.open('index.php','_self');</script>";
  }else{
    echo "<script>alert('loss connection and inserted');</script>";
     die(mysqli_error($this->conn));
  }


   }
  
  

  

}



// register end insert function




  
 public function login($data){

 
  $luser_name=$data['admin_lname'];
  $luser_pass=$data['admin_lpassword'];
  // $ip_address=$data['ip'];





  $login="SELECT * FROM a_registers WHERE r_name='$luser_name'";

  $query=mysqli_query($this->conn,$login);
  $fetch=mysqli_fetch_assoc($query);
  $rows_count=mysqli_num_rows($query);

  if($rows_count>0){
    
     if(password_verify($luser_pass,$fetch['r_pass'])){
     
      // session_start();
      // $_SESSION['username']=$fetch['r_name'];

        if($rows_count==1){
          echo "<script>alert('login successfully');</script>";
            header("Location:temp.php");
        }else{
          echo "<script>alert('login not successfully');</script>";

        }

       
     }else{
      echo "<script>alert(' wring information');</script>";
     }
    
  }else{
    echo "<script>alert(' wring information');</script>";
  }


 }

 

 //login end


  //select category start


  public function add_cat($data){


    $cat_name=$data['category_name'];
  
    
    $cat_query="INSERT INTO category (cat_name) VALUES('$cat_name')";
  
     
    $cat=mysqli_query($this->conn,$cat_query);
  
   

     if($cat){
  
        echo "<script>window.open('Category Added successfully');</script>";
        
     }else{
  
      echo "<script>window.open('CATEGORY NOT ADDED');</script>";
     }
  
  
    
  
   }
 //select category end



 //add category end


 public function add_brands($data){


  $brand_name=$data['Brands_name'];

  
  $brand_query="INSERT INTO  brands (brands_name) VALUES('$brand_name')";

   
  $brand=mysqli_query($this->conn,$brand_query);


   if($brand){

      echo "<script>window.open('Brand Added successfully');</script>";
      echo 'Brand Added successfully';
   }else{
     echo 'brand NOT ADDED';
    echo "<script>window.open(' brand NOT ADDED');</script>";

   }

 }



 //add brand end




  public function add_products($data){



     $products_name=$data['product_name'];
     $products_Content=$data['product_Content'];
     $product_categories=$data['product_categories'];
     $product_brands=$data['product_brands'];
     $product_img1=$_FILES['product_img1']['name'];
     $product_img1_tmp=$_FILES['product_img1']['tmp_name'];
     $product_img2=$_FILES['product_img2']['name'];
     $product_img2_tmp=$_FILES['product_img2']['tmp_name'];
     $product_img3=$_FILES['product_img3']['name'];
     $product_img3_tmp=$_FILES['product_img3']['tmp_name'];
     $product_price=$data['product_price'];
     $product_keyword=$data['product_keyword'];
     $product_status=$data['product_status'];
     $product_summary=$data['product_summary'];
    


      $insert_product=" INSERT INTO products (product_name,product_content,product_cat,product_brands,product_image1,product_image2,product_image3,product_summary,product_price,product_status,product_keyword) VALUES('$products_name','$products_Content',$product_categories,$product_brands,'$product_img1','$product_img2','$product_img3','$product_summary',$product_price,$product_status,'$product_keyword')";




      $query=mysqli_query ($this->conn,$insert_product);


       if($query){
     
         move_uploaded_file($product_img1_tmp,"./upload/".$product_img1);
         move_uploaded_file($product_img2_tmp,"./upload/".$product_img2);
         move_uploaded_file($product_img3_tmp,"./upload/".$product_img3);
         echo "insert done";
       }else{

         echo "loss";
       }


  }


 //add_products end


//  user registation form start

public function user_register($data){

 $user_name= $data['user_name'];
 $user_phone= $data['user_phone'];
 $user_email= $data['user_email'];
 $user_address= $data['user_address'];
 $user_photo= $_FILES['user_photo']['name'];
 $user_photo_tmp= $_FILES['user_photo']['tmp_name'];
 $user_Password= $data['user_Password'];
 $hash_password=password_hash($user_Password, PASSWORD_DEFAULT);
 $user_Cpassword= $data['user_Cpassword'];
 $user_ip = getIPAddress();   

// select data




$s_data="SELECT*FROM u_registers WHERE u_name='$user_name'";

$s_query=mysqli_query($this->conn,$s_data);

$row_count=mysqli_num_rows($s_query);


if($row_count>0){

     echo "<script>alert('the name is already exit!');</script>";
}elseif($user_Password!=$user_Cpassword){
 echo "<script>alert('PASSWORD DO NOT MATCH');</script>";
}else{

  $select="INSERT INTO u_registers (u_name,u_email,u_phone,u_address,u_pass,u_ip,u_img) VALUES('$user_name','$user_email',$user_phone,'$user_address','$hash_password','$user_ip','$user_photo')";
   $query=mysqli_query($this->conn,$select);
  if($query){

     echo "insert done";
  }else{

    echo "insert not done";
  }



}




 }
  
 




//  user registation form end




// user login start



public function user_login($data){


   $u_name=$data['user_name'];
   $u_pass=$data['user_password'];
   $u_ip= getIPAddress();  


// select data

   $s_data="SELECT*FROM u_registers WHERE u_name='$u_name' or u_pass='$u_pass'";

   $s_query=mysqli_query($this->conn,$s_data);
   $fetch=mysqli_fetch_assoc($s_query);
   $row_count=mysqli_num_rows($s_query);
   
   
   if($row_count>0){

    session_start();
     $_SESSION['u_name']=$fetch['u_name'];
   

     if(password_verify($u_pass,$fetch['u_pass'])){

        if($row_count==1){
          echo "<script>alert('login successfull');</script>";
           header("Location:../../display_all_product.php");
           

        }else{
          echo "<script>alert('login not  successfull');</script>";
          header("Location:../../user/include/login.php");
        }
     }
      

   }else{

    echo "<script>alert('wrong information for login! try again');</script>";
    header("Location:../../user/include/login.php");
}
}
// user login end


// cart start

// cart end










  }
// class braket end


  


// get ip address

  function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
  //whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
  } 


// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  


// echo $ip;
?>