<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>
   <body>
      <h3 class="text-center text-dark">All Products</h3>
      <table class='table table-bordered mt-5'>
         <thead class='bg-primary'>
            <tr>
               <th>Product ID</th>
               <th>Product Title</th>
               <th>Product Image</th>
               <th>Product Price</th>
               <th>Total Sold</th>
               <th>Status</th>
               <th>Edit</th>
               <th>Delete</th>
            </tr>
         </thead>
         <tbody class='bg-secondary text-light'>
            <?php 
               $get_products="select * from products";
               $result_que=mysqli_query($con,$get_products);
               while($row=mysqli_fetch_assoc($result_que)){
                   $product_id=$row['product_id'];
                   $product_title=$row['product_title'];
                   $product_image1=$row['product_image1'];
                   $product_price=$row['product_price'];
                   $status=$row['status'];
               
                   $get_count="select * from orders_pending where product_id=$product_id";
                   $result_count=mysqli_query($con,$get_count);
                   $rows_count=mysqli_num_rows($result_count);
                   
                   
               
                   
                   
               
               
               
                   echo "
               
               
               <tr class='text-center'>
               <td>$product_id</td>
               <td>$product_title</td>
               <td><img src='./product_images/$product_image1' class='product_image'/></td>
               <td>$product_price</td>
               <td>$rows_count</td>
               <td>$status</td>
               <td><a href='index.php?edit_products=$product_id' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
               <td><a href='index.php?delete_product=$product_id' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
               </tr>
                   
                   
                   
                   
                   ";
                  
               
               
               }
               
               
               
               ?>
         </tbody>
      </table>
   </body>
</html>



