<!-- connect-->
<?php
   include('../includes/connect.php');
   include('../functions/common_functions.php');
   session_start();
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tech Site</title>
      <!-- bootstrap css link-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- font awesome link-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- css link-->
      <link rel="stylesheet" href="style.css">
      <style>
         body{
         overflow-x:hidden;
         }
         .profile_img{
         width:90%;
         margin: auto;
         display:block;
         height:100%;
         object-fit: contain;
         }
         body{
         overflow-x:hidden;
         }
         .main-navbar{
         border-bottom: 1px solid #ccc; 
         }
         .main-navbar .top-navbar{
         background-color: #2874f0;
         padding-top: 10px;
         padding-bottom: 10px;
         }
         .main-navbar .top-navbar .brand-name{
         color: #fff;
         }
         .main-navbar .top-navbar .nav-link{
         color: #fff;
         font-size: 16px;
         font-weight: 500;
         }
         .main-navbar .top-navbar .dropdown-menu{
         padding: 0px 0px;
         border-radius: 0px;
         }
         .main-navbar .top-navbar .dropdown-menu .dropdown-item{
         padding: 8px 16px;
         border-bottom: 1px solid #ccc;
         font-size: 14px;
         }
         .main-navbar .top-navbar .dropdown-menu .dropdown-item i{
         width: 20px;
         text-align: center;
         color: #2874f0;
         font-size: 14px;
         }
         .main-navbar .navbar{
         padding: 0px;
         background-color: #ddd;
         }
         .main-navbar .navbar .nav-item .nav-link{
         padding: 8px 20px;
         color: #000;
         font-size: 15px;
         }
         @media only screen and (max-width: 600px) {
         .main-navbar .top-navbar .nav-link{
         font-size: 12px;
         padding: 8px 10px;
         }
         }
      </style>
   </head>
   <body>
      <div class="main-navbar shadow-sm sticky-top">
         <div class="top-navbar">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                     <img src="./Images/logo.png" alt="" class="logo">
                     <a class="navbar-brand text-light" href="#">Not Startech</a>
                  </div>
                  <div class="col-md-5 my-auto">
                     <form role="search">
                        <div class="input-group">
                           <input type="search" placeholder="Search your product" class="form-control" />
                           <button class="btn bg-white" type="submit">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-5 my-auto">
                     <ul class="nav justify-content-end">
                        <li class="nav-item">
                           <a class="nav-link" href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup><?php cart_item()?></sup></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Total Price <?php totalPrice()?> /-</a>
                        </li>
                        <li class="nav-item">
                           <?php
                              if(!isset($_SESSION['username'])){
                              
                               echo " <li>
                              <a class='nav-link d-flex' href='#'>Welcome Guest</a>
                              </li>";
                              
                               echo "<li> <a class='nav-link d-flex' href='./user_area/user_login.php'>login</a></li>";
                              
                              }else{
                              
                                echo " <li class='nav-item'>
                              <a class='nav-link' href='./user_area/profile.php'>Welcome ".$_SESSION['username']." </a>
                              </li>";
                              
                                echo "<li class='nav-item'>
                                <a class='nav-link' href='./user_area/logout.php'>logout</a>
                              </li>";
                              
                              }  
                              
                              ?>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
               <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
               
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../home.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="../display_all.php">Products</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="./user_area/user_registration.php">Register</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <!--third child-->
         <div class="bg-light">
            <h3 class="text-center">Tech Store</h3>
            <p class="text-center">Built for pc enthusiats by pc enthusiasts</p>
         </div>
         <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
               <?php order_details();
                  if(isset($_GET['edit_account'])){
                    include('edit_account.php');
                  }
                  if(isset($_GET['my_orders'])){
                    include('my_orders.php');
                  }
                  
                  ?>
            </div>
         </div>
         <div class="col-md-10">
         </div>
         <!--fourth -->
         <div class="row">
            <div class="col-md-2">
               <ul class="navbar-nav bg-secondary text-center" style="height:100vh">
                  <li class="nav-item ">
                     <a class="nav-link text-light bg-dark" aria-current="page" href="../home.php">
                        <h4>Home</h4>
                     </a>
                  </li>
                  <?php
                     $username= $_SESSION['username'];
                     $user_image="select * from user_table where username='$username'";
                     $result_image = mysqli_query($con,$user_image);
                     $row_image=mysqli_fetch_array($result_image);
                     $userImage= $row_image['user_image'];
                     
                     
                     echo "<li class='nav-item '>
                     <img src='./user_images/$userImage' class='profile_img my-4'>
                     
                     </li>";
                     
                     
                     
                     ?>
                  <li class="nav-item ">
                     <a class="nav-link text-light" aria-current="page" href="profile.php">Pending Orders</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link text-light" aria-current="page" href="profile.php?edit_account">Edit Account</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link text-light" aria-current="page" href="profile.php?my_orders">My Orders</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link text-light" aria-current="page" href="profile.php?delete_account">Delete Account</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link text-light" aria-current="page" href="logout.php">Logout</a>
                  </li>
               </ul>
            </div>
            <div class="col-md-10">
            </div>
         </div>
         <br> <br>
         <?php
            include("../includes/footer.php"); 
            ?>   
      </div>
      <!-- bootstrap js link-->  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>