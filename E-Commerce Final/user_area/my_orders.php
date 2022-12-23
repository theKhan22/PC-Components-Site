

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 

$username=$_SESSION['username'];
$get_user ="Select * from user_table where username='$username'";

$result = mysqli_query($con,$get_user);

$row_fetch = mysqli_fetch_array($result);

$user_id = $row_fetch['user_id'];



?>



<h3 class="text-center">
    All Orders
</h3>

<table class="table table-bordered mt-5">
    
    <thead class="bg-info">
    <tr>
        <th>Sl No</th>
        <th>Order No.</th>
        <th>Amount Due</th>
        <th>Total Products</th>
        <th>Invoice No.</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody class="bg-secondary text-light">
    <?php 

$get_orders = "select * from user_orders where user_id=$user_id";
$result_orders = mysqli_query($con,$get_orders);
$number=1;

while($row_orders=mysqli_fetch_array($result_orders)){
   
    $order_id=$row_orders['order_id'];
    $amount_due=$row_orders['amount_due'];
    $total_products=$row_orders['total_products'];
    $invoice_number=$row_orders['invoice_number'];
    $order_status=$row_orders['order_status'];
    
    echo "



<tr>
<td>$number</td>
<td>$order_id</td>
<td>$amount_due</td>
<td>$total_products</td>
<td>$invoice_number</td>"


?>
<?php 
if($order_status=='Complete'){
    echo "<td>Paid</td>";
}else{

    echo "<td><a href='confirm_payment.php?order_id=$order_id' class='text-light'>Confirm </a></td>
</tr>";


}


$number+=1;

}

?>








    </tbody>
</table>
    
</body>
</html>