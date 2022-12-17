<?php

if(isset($_GET['edit_products'])){
    $the_id=$_GET['edit_products'];

   $select_query = "select * from products where product_id=$the_id";
   $result = mysqli_query($con,$select_query);

   $result_values=mysqli_fetch_assoc($result);

   $product_title=$result_values['product_title'];
   $product_description=$result_values['product_description'];
   $product_keywords=$result_values['product_keywords'];
   $category_id=$result_values['category_id'];
   $brand_id=$result_values['brand_id'];
   $product_image1=$result_values['product_image1'];
   $product_image2=$result_values['product_image2'];
   $product_image3=$result_values['product_image3'];
   $product_price=$result_values['product_price'];


   $get_category ="Select * from categories where category_id = $category_id";
   $result_cat = mysqli_query($con,$get_category);
   $row_cat=mysqli_fetch_assoc($result_cat);

   $catg_name = $row_cat['category_title'];

   


   $get_brands ="Select * from brands where brand_id = $brand_id";
   $result_brand = mysqli_query($con,$get_brands);
   $row_brand=mysqli_fetch_assoc($result_brand);

   $brand_name = $row_brand['brand_title'];

   


   


}





?>




<div class="container mt-5">
    <h1 class="text-center">Edit Products</h1>
    <form action="" method='post' enctype='multipart/form-data'>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Title</label>
            <input type="text" name='product_title' class='form-control' required='required' value="<?php echo $product_title ?>">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Description</label>
            <input type="text" value="<?php echo $product_description ?>" name='product_desc' class='form-control' required='required'>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Keywords</label>
            <input type="text" value="<?php echo $product_keywords ?>" name='product_keywords' class='form-control' required='required'>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="" class="form-label">Product Categories</label>
            <select name="product_category" class="form-select">
                <option value="<?php echo $catg_name ?>"><?php echo $catg_name ?></option>

<?php 

$all_category ="Select * from categories";
   $result_cat = mysqli_query($con,$all_category);
   while($row_cat=mysqli_fetch_assoc($result_cat)){
    $category_title = $row_cat['category_title'];
    $category_id = $row_cat['category_id'];

    echo "<option value='$category_id'>$category_title</option>";


   }




?>


                
                
            </select>
        
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="" class="form-label">Product Brands</label>
            <select name="product_brands" class="form-select">
                <option value="<?php echo $brand_name ?>"><?php echo $brand_name ?></option>

                <?php 

$all_brands ="Select * from brands";
   $result_br = mysqli_query($con,$all_brands);
   while($row_cat=mysqli_fetch_assoc($result_br)){
    $brand_title = $row_cat['brand_title'];
    $brand_id = $row_cat['brand_id'];

    echo "<option value='$brand_id'>$brand_title</option>";


   }




?>
                
            </select>
        
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Image1</label>
            <div class="d-flex">
            <input type="file" name='product_image1' class='form-control w-90 m-auto' required='required'>
            <img src="./product_images/<?php echo $product_image1 ?>" alt="" class='product_image'>

            </div>
            
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Image2</label>
            <div class="d-flex">
            <input type="file" name='product_image2' class='form-control w-90 m-auto' required='required'>
            <img src="./product_images/<?php echo $product_image2 ?>" alt="" class='product_image'>

            </div>
            
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Image3</label>
            <div class="d-flex">
            <input type="file" name='product_image3' class='form-control w-90 m-auto' required='required'>
            <img src="./product_images/<?php echo $product_image3 ?>" alt="" class='product_image'>

            </div>
            
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Price</label>
            <input type="text" value="<?php echo $product_price ?>"  name='product_price' class='form-control' required='required'>
        </div>

        <div class="text-center w-50 m-auto">
            <input type="submit" name='edit_product' value='Update Product' class='btn btn-info px-3 mb-3'>
        </div>

    </form>
</div>