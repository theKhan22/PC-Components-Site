<div class="container mt-5">
    <h1 class="text-center">Edit Products</h1>
    <form action="" method='post' enctype='multipart/form-data'>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Title</label>
            <input type="text" name='product_title' class='form-control' required='required'>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Description</label>
            <input type="text" name='product_desc' class='form-control' required='required'>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Keywords</label>
            <input type="text" name='product_keywords' class='form-control' required='required'>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="" class="form-label">Product Categories</label>
            <select name="product_category" class="form-select">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
            </select>
        
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="" class="form-label">Product Brands</label>
            <select name="product_brands" class="form-select">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
            </select>
        
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Image1</label>
            <div class="d-flex">
            <input type="file" name='product_image1' class='form-control w-90 m-auto' required='required'>
            <img src="./product_images/logo.png" alt="" class='product_image'>

            </div>
            
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Image2</label>
            <div class="d-flex">
            <input type="file" name='product_image2' class='form-control w-90 m-auto' required='required'>
            <img src="./product_images/logo.png" alt="" class='product_image'>

            </div>
            
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Image3</label>
            <div class="d-flex">
            <input type="file" name='product_image3' class='form-control w-90 m-auto' required='required'>
            <img src="./product_images/logo.png" alt="" class='product_image'>

            </div>
            
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Price</label>
            <input type="text" name='product_price' class='form-control' required='required'>
        </div>

        <div class="text-center w-50 m-auto">
            <input type="submit" name='edit_product' value='Update Product' class='btn btn-info px-3 mb-3'>
        </div>

    </form>
</div>