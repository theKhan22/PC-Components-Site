<?php 

if(isset($_GET['delete_orders'])){

    $get_id=$_GET['delete_orders'];
    $delete_query = "delete from user_orders where order_id=$get_id";
    $result =mysqli_query($con,$delete_query);
    if($result){
        echo "<script> window.open('./index.php?view_orders','_self')</script>";
    }

}




?>