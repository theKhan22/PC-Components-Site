<?php 

if(isset($_GET['delete_product'])){

    $get_id=$_GET['delete_product'];
    $delete_query = "delete from products where product_id=$get_id";
    $result =mysqli_query($con,$delete_query);
    if($result){
        echo "<script> window.open('./index.php?view_product','_self')</script>";
    }

}




?>