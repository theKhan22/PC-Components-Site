<?php

include('../includes/connect.php');

if(isset($_POST['insert_brands'])){

  $brand_title = $_POST['brand_title'];

  //select data from database
  $select_query = "select * from brands where brand_title='$brand_title'";
  $result_select= mysqli_query($con,$select_query);

  $numberOfRows = mysqli_num_rows($result_select);

  if($numberOfRows>0){

    echo "<script>alert('Brand already exists')</script>";
    
  }else{

  $insert_query ="INSERT INTO brands (brand_title) values('$brand_title')";

  $result = mysqli_query($con,$insert_query);

  if($result){
    echo "<script>alert('brand has been inserted successfully')</script>";
  }
}

}

?>


<h2 class="text-center">Insert Brands,Username</h2>
<form action="" method="post" class=mb-2>
<div class="input-group w-90 mb-2">

  <span class="input-group-text bg-info" id="basic-addon1" ><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">

  
  <!-- <input type="submit" class="form-control bg-info" name="insert_cat" value="Insert Categories"
  aria-label="Username" aria-describedby="basic-addon1" class="bg-info">
  -->

  <input type="submit" class="bg-info border-0 p-2 my-3" name='insert_brands' value='insert brands'>

</div>

</form>