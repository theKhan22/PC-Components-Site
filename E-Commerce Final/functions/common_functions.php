<?php

//including db

//include("./includes/connect.php");

//getting products

function getProducts(){


global $con;

//condition to check is set or not

if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
$select_query = "select * from products order by rand() limit  0,9";
$result_query= mysqli_query($con,$select_query);


while($row_data = mysqli_fetch_assoc($result_query)){
  $product_id = $row_data['product_id'];
  $product_title = $row_data['product_title'];
  $product_description = $row_data['product_description'];
  $product_keywords = $row_data['product_keywords'];
  $category_id = $row_data['category_id'];
  $brand_id = $row_data['brand_id'];
  $product_image1 = $row_data['product_image1'];
  $product_price = $row_data['product_price'];


  echo "
<div class='col-md-4 mb-2'>
  <div class='card'>
    <img class='card-img-top' src='./admin_section/product_images/$product_image1' alt='$product_title'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>Price: $product_price</p>
      <a href='Home.php?add_to_cart=$product_id' class='btn btn-primary'>Add</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View More</a>
    </div>
  </div>
</div>  
  
  
  ";

}

}

}

}




//getting all prods
function getAllProducts(){


  global $con;
  
  //condition to check is set or not
  
  if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
      
  $select_query = "select * from products order by rand() ";
  $result_query= mysqli_query($con,$select_query);
  
  
  while($row_data = mysqli_fetch_assoc($result_query)){
    $product_id = $row_data['product_id'];
    $product_title = $row_data['product_title'];
    $product_description = $row_data['product_description'];
    $product_keywords = $row_data['product_keywords'];
    $category_id = $row_data['category_id'];
    $brand_id = $row_data['brand_id'];
    $product_image1 = $row_data['product_image1'];
    $product_price = $row_data['product_price'];
  
  
    echo "
  <div class='col-md-4 mb-2'>
    <div class='card'>
      <img class='card-img-top' src='./admin_section/product_images/$product_image1' alt='$product_title'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description</p>
        <p class='card-text'>Price: $product_price</p>
        <a href='Home.php?add_to_cart=$product_id' class='btn btn-primary'>Add</a>
        <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View More</a>
      </div>
    </div>
  </div>  
    
    
    ";
  
  }
  
  }
  
  }
  
  }


//getting specific categories

function getUniqueCat(){


    global $con;
    
    //condition to check is set or not
    
    if(isset($_GET['category'])){

    $category_id=$_GET['category'];
       
        
    $select_query = "select * from products where category_id=$category_id";
    $result_query= mysqli_query($con,$select_query);
    $numOfRows=mysqli_num_rows($result_query);

    if($numOfRows==0){
        echo "<h2 class='text-center text-danger'> No stock for this category</h2>";
    }
    
    
    while($row_data = mysqli_fetch_assoc($result_query)){
      $product_id = $row_data['product_id'];
      $product_title = $row_data['product_title'];
      $product_description = $row_data['product_description'];
      $product_keywords = $row_data['product_keywords'];
      $category_id = $row_data['category_id'];
      $brand_id = $row_data['brand_id'];
      $product_image1 = $row_data['product_image1'];
      $product_price = $row_data['product_price'];
    
    
      echo "
    <div class='col-md-4 mb-2'>
      <div class='card'>
        <img class='card-img-top' src='./admin_section/product_images/$product_image1' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <p class='card-text'>Price: $product_price</p>
          <a href='Home.php?add_to_cart=$product_id' class='btn btn-primary'>Add</a>
          <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View More</a>
        </div>
      </div>
    </div>  
      
      
      ";
    
    }
    
    }
    
}





function getUniqueBrands(){


    global $con;
    
    //condition to check is set or not
    
    if(isset($_GET['brand'])){



    $brand_id=$_GET['brand'];
       
        
    $select_query = "select * from products where brand_id=$brand_id";
    $result_query= mysqli_query($con,$select_query);
    $numOfRows=mysqli_num_rows($result_query);

    if($numOfRows==0){
        echo "<h2 class='text-center text-danger'> No brands available</h2>";
    }
    
    
    while($row_data = mysqli_fetch_assoc($result_query)){
      $product_id = $row_data['product_id'];
      $product_title = $row_data['product_title'];
      $product_description = $row_data['product_description'];
      $product_keywords = $row_data['product_keywords'];
      $category_id = $row_data['category_id'];
      $brand_id = $row_data['brand_id'];
      $product_image1 = $row_data['product_image1'];
      $product_price = $row_data['product_price'];
    
    
      echo "
    <div class='col-md-4 mb-2'>
      <div class='card'>
        <img class='card-img-top' src='./admin_section/product_images/$product_image1' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <p class='card-text'>Price: $product_price</p>
          <a href='Home.php?add_to_cart=$product_id' class='btn btn-primary'>Add</a>
          <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View More</a>
        </div>
      </div>
    </div>  
      
      
      ";
    
    }
    
    }
    
}
    
  




function getBrands(){
global $con;
$select_brands = "Select * from brands";
$result_brands = mysqli_query($con,$select_brands);


while($row_data = mysqli_fetch_assoc($result_brands)){
  $brand_title = $row_data['brand_title'];
  $brand_id = $row_data['brand_id'];

  echo "<li class='nav-item'>
  <a href='home.php?brand=$brand_id' class='nav-link text-light' >$brand_title</a>
  </li>";

}
}



function getCategories(){

global $con;
$select_categories = "Select * from categories";
$result_categories = mysqli_query($con,$select_categories);


while($row_data = mysqli_fetch_assoc($result_categories)){
  $category_title = $row_data['category_title'];
  $category_id = $row_data['category_id'];

  echo "<li class='nav-item'>
  <a href='home.php?category=$category_id' class='nav-link text-light' >$category_title</a>
  </li>";

}
}


// view details function


function viewDetails(){

  
global $con;

//condition to check is set or not

if(isset($_GET['product_id'])){

if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){


$product_id = $_GET['product_id'];
    
$select_query = "select * from products where product_id=$product_id";
$result_query= mysqli_query($con,$select_query);


while($row_data = mysqli_fetch_assoc($result_query)){
  $product_id = $row_data['product_id'];
  $product_title = $row_data['product_title'];
  $product_description = $row_data['product_description'];
  $product_keywords = $row_data['product_keywords'];
  $category_id = $row_data['category_id'];
  $brand_id = $row_data['brand_id'];
  $product_image1 = $row_data['product_image1'];
  $product_image2 = $row_data['product_image2'];
  $product_image3 = $row_data['product_image3'];
  $product_price = $row_data['product_price'];


  echo "
<div class='col-md-4 mb-2'>
  <div class='card'>
    <img class='card-img-top' src='./admin_section/product_images/$product_image1' alt='$product_title'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>Price: $product_price</p>
      <a href='Home.php?add_to_cart=$product_id' class='btn btn-primary'>Add</a>
      <a href='home.php' class='btn btn-primary'>Back to home</a>
    </div>
  </div>
</div>


<div class='col-md-8'>
    <!---related images-->
    <div class='row'>
        <div class='col-md-12'>
            <h4 class='text-center text-info mb-5'>
                Related Products
            </h4>

        </div>
        <div class='col-md-6'>
        <img class='card-img-top' src='./admin_section/product_images/$product_image2' alt='$product_title'>

        </div>
        <div class='col-md-6'>
        <img class='card-img-top' src='./admin_section/product_images/$product_image3' alt='$product_title'>
            
        </div>
    </div>
</div>


  
  
  ";

}

}

}



}
}





//getipfunction

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



//Function Cart

function cart(){

  if(isset($_GET['add_to_cart'])){

    global $con;
    //make it global because using in another page

    $ip = getIPAddress();  

    $get_product_id = $_GET['add_to_cart'];

    $select_query="Select * from cart_details where ip_address='$ip' and 
    product_id=$get_product_id";


    $result_query= mysqli_query($con,$select_query);

    $numOfRows=mysqli_num_rows($result_query);

    if($numOfRows>0){
        echo "<script>alert('Item already added to cart')</script>";

        echo "<script>window.open('home.php','_self')</script>";
    }else{

      $insert_query = "insert into cart_details (product_id,ip_address,quantity)
      values($get_product_id,'$ip',1)";


      $result_query= mysqli_query($con,$insert_query);
      echo "<script>window.open('home.php','_self')</script>";
      echo "<script>alert('Item Added Successfully')</script>";

    }


  }

}


//display items in cart function

function cart_item(){


  
 
    global $con;
    //make it global because using in another page
    $ip = getIPAddress();  
    $select_query="Select * from cart_details where ip_address='$ip'";


    $result_query= mysqli_query($con,$select_query);

    $numOfRows=mysqli_num_rows($result_query);

    echo $numOfRows;
    


}


//total price

function totalPrice(){

  global $con;
  //make it global because using in another page
  $ip = getIPAddress();  

  $total =0;

  $cart_query = "select * from cart_details where ip_address = '$ip'";
  $result = mysqli_query($con,$cart_query);

  while($row = mysqli_fetch_array($result)){
    $product_quantity= $row['quantity'];
    $product_id=$row['product_id'];
    $select_products ="select * from products where product_id= '$product_id'";
    $result_product = mysqli_query($con,$select_products);
    while($row_product_price=mysqli_fetch_array($result_product)){
      /*      
      $product_price= array($row_product_price['product_price']);
      $product_values= array_sum($product_price);
      */
      $product_price= $row_product_price['product_price'];
      
      $total+=($product_price*$product_quantity);
    }

  }

  echo $total;
  

}



//get user order details

function order_details(){

  

 
  global $con;
  $username=$_SESSION['username'];
  
  $get_details ="select * from user_table where username='$username'";
  $result_query=mysqli_query($con,$get_details);

  while($row_query=mysqli_fetch_array($result_query)){
    $user_id=$row_query['user_id'];

    if(!isset($_GET['edit_account'])){
      if(!isset($_GET['my_orders'])){
        if(!isset($_GET['delete_account'])){
          $get_orders="select * from user_orders where user_id='$user_id' and order_status='pending'";
          $result_orders=mysqli_query($con,$get_orders);
          $row_count =mysqli_num_rows($result_orders);
         
          
          
          if($row_count>0){

            echo "<h3 class='text-center'>You have <span class='text-danger'> $row_count pending orders</span> Pending Orders
            <br><a href='profile.php?my_orders'>Order Details</h3>";
            
          }else{

            echo "<h3 class='text-center'>You have <span class='text-danger'> $row_count pending orders</span> Pending Orders
            <br><a href='../Home.php'>Shop</h3>";

          }
        }
      }

    }


  }

}


function search_product(){

  global $con;

//condition to check is set or not

if(isset($_GET['searching_data_product'])){

  $searched_keyword= $_GET['search_key'];

  


    
$search_query = "select * from products where product_keywords like '%$searched_keyword%' ";
$result_query= mysqli_query($con,$search_query);


while($row_data = mysqli_fetch_assoc($result_query)){
  $product_id = $row_data['product_id'];
  $product_title = $row_data['product_title'];
  $product_description = $row_data['product_description'];
  $product_keywords = $row_data['product_keywords'];
  $category_id = $row_data['category_id'];
  $brand_id = $row_data['brand_id'];
  $product_image1 = $row_data['product_image1'];
  $product_price = $row_data['product_price'];


  echo "
<div class='col-md-4 mb-2'>
  <div class='card'>
    <img class='card-img-top' src='./admin_section/product_images/$product_image1' alt='$product_title'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>Price: $product_price</p>
      <a href='Home.php?add_to_cart=$product_id' class='btn btn-primary'>Add</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View More</a>
    </div>
  </div>
</div>  
  
  
  ";

}

}



}






?>