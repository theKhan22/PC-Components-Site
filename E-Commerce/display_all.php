<!-- connect-->
<?php
include('includes/connect.php');
include('functions/common_functions.php');
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

</head>
<body>
  <div class="container-fluid p-0" >
    <!-- first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <img src="./Images/logo.png" alt="" class="logo">
        <a class="navbar-brand" href="#">Navbar</a>
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
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Total Price</a>
            </li>
            
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- second child -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./user_area/user_login.php">login</a>
        </li>

      </ul>

    </nav>

    <!--third child-->

    <div class="bg-light">
      <h3 class="text-center">Tech Store</h3>
      <p class="text-center">Built for pc enthusiats by pc enthusiasts</p>
    </div>



    <!--fourth child-->
    <div class="row">
      <div class="col-md-10">
        
        <!--prodvust-->

        
<div class="row">

<!-- fetching the products-->
<?php

//function to display prod
getAllProducts();
getUniqueCat();
getUniqueBrands();


//full version
/*
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
      <a href='#' class='btn btn-primary'>Add</a>
      <a href='#' class='btn btn-primary'>View More</a>
    </div>
  </div>
</div>  
  
  
  ";

}

*/



?>

<!--
<div class="col-md-4 mb-2">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Add</a>
      <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>
</div>
-->
<!-- row end -->
</div>
<!--col end -->
</div>

      <div class="col-md-2 bg-secondary p-0">
        <!-- brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light" ><h4>Brands</h4></a>
            <a href="home.php" class="nav-link text-light" ><li class='nav-item'>All Brands</li></a>


          </li>
<?php

getBrands();
/*
$select_brands = "Select * from brands";
$result_brands = mysqli_query($con,$select_brands);


while($row_data = mysqli_fetch_assoc($result_brands)){
  $brand_title = $row_data['brand_title'];
  $brand_id = $row_data['brand_id'];

  echo "<li class='nav-item'>
  <a href='home.php?brand=$brand_id' class='nav-link text-light' >$brand_title</a>
  </li>";

}
*/
?>
          

          <!-- categories to be displayed -->
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light" ><h4>Categories</h4></a>

          </li>


<?php

getCategories();

/*
$select_categories = "Select * from categories";
$result_categories = mysqli_query($con,$select_categories);


while($row_data = mysqli_fetch_assoc($result_categories)){
  $category_title = $row_data['category_title'];
  $category_id = $row_data['category_id'];

  echo "<li class='nav-item'>
  <a href='home.php?category=$category_id' class='nav-link text-light' >$category_title</a>
  </li>";

}
*/

?>
          

        </ul>
        
        <!--sidenav-->

      </div>
    </div>

    




  <?php
  include("./includes/footer.php"); 
  ?> 
  </div>




  
  



<!-- bootstrap js link-->  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>