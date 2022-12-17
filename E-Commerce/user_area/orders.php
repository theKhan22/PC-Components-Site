<?php
include('../includes/connect.php');
include('../functions/common_functions.php');

if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];

}


//getting total items and total prices of all items


$ip = getIPAddress(); 
$total_price =0;

$cart_query ="Select * from cart_details where ip_address='$ip'";
$result = mysqli_query($con,$cart_query);
$invoice_number = mt_rand();
$status ='pending';

$count_total_products= mysqli_num_rows($result);

while($row_price=mysqli_fetch_array($result)){

    $product_id =$row_price['product_id'];

    $select_query ="Select * from products where product_id='$product_id'";
    $result_select = mysqli_query($con,$select_query);
    while($row_product_price=mysqli_fetch_array($result_select)){
        $product_price = array($row_product_price['product_price']);
        $product_values = array_sum($product_price);
        $total_price +=$product_values;

    }


}


//getting quantity from cart
$get_cart ="select * from cart_details";
$run_cart = mysqli_query($con,$get_cart);

$get_item_quantity= mysqli_fetch_array($run_cart);

$quantity = $get_item_quantity['quantity'];

if($quantity==0){
    $quantity=1;
    $subTotal= $total_price;
}else{
    $quantity = $quantity;
    $subTotal=$total_price*$quantity;
}


$insert_orders ="insert into user_orders (user_id,amount_due,invoice_number,total_products,order_date,order_status)
values($user_id,$subTotal,$invoice_number,$count_total_products,NOW(),'$status')";
$result_query= mysqli_query($con,$insert_orders);

if($result_query){
    echo "<script> alert('Orders are submitted successfully')</script>";
    echo "<script> window.open('profile.php','_self')</script>";
}


//orders pending


$insert_pending_orders ="insert into orders_pending (user_id,invoice_number,product_id,quantity,order_status)
values($user_id,$invoice_number,$product_id,$quantity,'$status')";
$result_pending_orders= mysqli_query($con,$insert_pending_orders);

//delete items from existing cart

$empty_cart = "delete from cart_details where ip_address='$ip'";
$result_delete = mysqli_query($con,$empty_cart);




?>

