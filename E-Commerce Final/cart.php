<!-- connect-->
<?php
   include('includes/connect.php');
   include('functions/common_functions.php');
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
         .cart-img{
         width: 80px;
         height: 80px;
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
                     <a class="navbar-brand text-light" href="#">Tech Store</a>
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
               Funda Ecom
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="display_all.php">Products</a>
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
         <!-- fourth child -->
         <div class="container">
            <div class="row">
               <form action="" method="post">
                  <table class="table table-bordered text-center">
                     <thead>
                        <tr>
                           <th>Product ID</th>
                           <th>Product Title</th>
                           <th>Product Image</th>
                           <th>Quantity</th>
                           <th>Total Price</th>
                           <th>Remove</th>
                           <th colspan='2'>Operations</th>
                        </tr>
                     </thead>
                     <tbody>
                        <!-- display dynamic data -->
                        <?php
                           global $con;
                           //make it global because using in another page
                           $ip = getIPAddress();  
                           
                           
                           $total = 0;
                           
                           $cart_query = "select * from cart_details where ip_address = '$ip'";
                           $result = mysqli_query($con,$cart_query);
                           $result_count = mysqli_num_rows($result);
                           
                           if($result_count>0){
                           
                           
                           
                           
                           
                           while($row = mysqli_fetch_array($result)){
                           $product_quantity =$row['quantity'];   
                           $product_id=$row['product_id'];
                           $select_products ="select * from products where product_id= '$product_id'";
                           $result_product = mysqli_query($con,$select_products);
                           
                           while($row_product_price=mysqli_fetch_array($result_product)){  
                           $product_id=$row_product_price['product_id'];
                           $product_price= $row_product_price['product_price'];         
                           //$product_price= array($row_product_price['product_price']);  
                           $price_table = $row_product_price['product_price'];
                           $product_title = $row_product_price['product_title'];
                           

                           $product_image1= $row_product_price['product_image1'];

                           $amount_current = $product_price*$product_quantity;
                           $total+=$amount_current;

                           //$product_values= array_sum($product_price); 
                           
                           //$total+=$product_values; 
                           
                           }
                           
                           
                           
                           
                           
                           
                           ?>
                        <tr>
                           <td><?php echo $product_id ?></td>
                           <td><?php echo $product_title ?></td>
                           <td><img src="./admin_section/product_images/<?php echo $product_image1 ?>" alt="" class="cart-img"></td>
                           <td><?php echo $product_quantity ?></td>
                           
                           <td><?php echo $price_table  ?></td>
                           <td><input type="checkbox" name="removeItem[]" value = <?php echo $product_id ?>></td>
                           <td class='d-flex'>
                              <!--<input class='bg-info px-3 py-2 border-0 mx-3' type="submit" name="update_cart" value="Update Cart">-->
                              <input class='bg-primary text-light px-3 py-2 border-0 mx-3' type="submit" name="remove_cart" value="Remove Cart">
                           </td>
                        </tr>
                        <?php 
                           }}
                           
                           else{
                           
                             echo "<h4 class='text-center text-danger'>Cart is Empty </h4>";
                           
                           }
                           
                           
                           ?>
                     </tbody>
                  </table>
                  <!-- subtotal display -->
                  <span>
                     <h4 class='px-3'>SubTotal: <strong class='text-info'><?php echo $total ?></strong></h4>
                  </span>



                  <br>
                  <div class="container my-5 bg-light">
                  <h2 class="text-center my-2">Quantity Update</h2>
                  <form action="" method='post'>
                    <div class="form-outline mb-4">
                        <label for="productID" class='form-label'>Product ID</label>
                        <input type="number" id='productID' name='product_id' placeholder='Enter Product ID'
                        class='form-control w-50'>
                    </div>
                    
                    <div class="form-outline mb-4">
                        <label for="quantity" class='form-label'>Set Quantity</label>
                        <input type="number" id='quantity' name='quantity_update' placeholder='Enter Quantity' 
                        class='form-control w-50'>
                    </div>

                    <input type="submit" class='btn btn-primary mb-3' name='update_btn1' value='Update'>
                    
                    
                    
                 </form>
                 </div>


                 <?php 

if(isset($_POST['update_btn1'])){
   global $con;

  

   $product_id= $_POST['product_id'];
   $quantity=$_POST['quantity_update'];

   $updation_query ="update cart_details set quantity=$quantity where product_id=$product_id;";
   $result_updation = mysqli_query($con,$updation_query);
   if($result_updation){
      echo "<script>alert('Updation Completed Successfully')</script>";
      echo "<script>window.open('cart.php','_self')</script>";
   }else{
      echo "Failed";
   }

}


?>


                  












                  </form>
                  <?php
                     $ip = getIPAddress();  
                     
                     
                     $cart_query = "select * from cart_details where ip_address = '$ip'";
                     $result = mysqli_query($con,$cart_query);
                     $result_count = mysqli_num_rows($result);
                     
                     if($result_count>0){
                     
                     
                       echo "
                     
                     
                       <div class='d-flex mb-5'>
                                 
                                
                                  <button class='bg-primary px-3 py-3 my-3 mx-3 border-0 text-light'><a class ='text-light text-decoration-none'
                                  href='Home.php'>Continue Shopping</a></button>
                                 <button class='bg-secondary px-3 py-3 my-3 border-0 text-light'><a class ='text-light text-decoration-none'
                                  href='./user_area/checkout.php'>Check Out</a></button>
                                 </div>
                     
                     
                       
                       
                       
                       ";
                     
                     
                     
                     }else{
                     
                     
                       echo "
                       <div class='d-flex mb-5'>
                       <button class='bg-primary px-3 py-3 my-3 mx-3 border-0 text-light'><a class ='text-light text-decoration-none'
                       href='Home.php'>Continue Shopping</a></button></div>";
                     
                     }
                     if(isset($_POST['continue_shopping'])){
                     
                       echo "<script> window.open('Home.php','_self') </script>";
                     
                     }
                     
                                 
                                 
                                 
                                 ?>
            </div>
         </div>
         </form>
         <!-- fucntion to remove item -->
         <?php 
            function removeCartItem(){
              global $con;
            
              if(isset($_POST['remove_cart'])){
            
                foreach($_POST['removeItem'] as $removeId){
            
                  echo $removeId;
                  $delete_query ="Delete from cart_details where product_id=$removeId";
                  $result_delete = mysqli_query($con,$delete_query);
            
                  if($result_delete){
                    echo "<script>window.open('cart.php','_self') </script>";
                  }
            
            
                }
            
              }
            
            }
            
            removeCartItem();
            
            ?>
         <?php
            include("./includes/footer.php"); 
            ?>   
      </div>
      <!-- bootstrap js link-->  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>


