

<?php include("class/func.php") ;
 include("db_conn.php");
  $obj=new Myproject();

//  session_start();
//   if(!isset($_SESSION['username'])){

//     header("Location:index.php");

//   }

?>
<?php include_once("includes/head.php") ?>

   <body class="sb-nav-fixed">
       
       <?php  include_once("includes/top_nav.php") ?>
       <div id="layoutSidenav">

           <?php include_once("includes/sidebar.php")?>
           <div id="layoutSidenav_content">





               <main>
            
               <div class="container-fluid">
          
                  <?php
                  
                  if(isset($view)){

                      if($view=="dashbord"){

                         include_once("view/dashbord_view.php");
                      }elseif($view=="add_category"){
                        include_once("view/add_category_view.php");
                      }elseif($view=="manage_category"){
                        include_once("view/manage_category_view.php");
                      }elseif($view=="add_brands"){
                        include_once("view/add_brands_view.php");
                      }elseif($view=="manage_brands"){
                        include_once("view/manage_brands_view.php");
                      }elseif($view=="add_products"){
                        include_once("view/add_products_view.php");
                      }elseif($view=="manage_products"){
                        include_once("view/manage_products_view.php");
                      }elseif($view=="logout"){
                        include_once("view/logout_view.php");
                      }elseif($view=="edit"){
                        include_once("view/edit_view.php");
                      }elseif($view=="edit2"){
                        include_once("view/edit2_view.php");
                      }elseif($view=="edit3"){
                        include_once("view/edit3_view.php");
                      }elseif($view=="all_orders"){
                        include_once("view/all_orders_view.php");
                      }elseif($view=="all_payment"){
                        include_once("view/all_payment_view.php");
                      }elseif($view=="list_item"){
                        include_once("view/list_item_view.php");
                      }elseif($view=="all_users"){
                        include_once("view/all_users_view.php");
                      }
                  }

                  ?>

                  
               </div>
               </main>
               <footer class="py-4 bg-light mt-auto">
                   <div class="container-fluid">
                       <div class="d-flex align-items-center justify-content-between small">
                           <div class="text-muted">Copyright &copy; Your Website 2020</div>
                           <div>
                               <a href="#">Privacy Policy</a>
                               &middot;
                               <a href="#">Terms &amp; Conditions</a>
                           </div>
                       </div>
                   </div>
               </footer>
           </div>
       </div>
 <?php  include_once("includes/script.php") ?>
   </body>
</html>
