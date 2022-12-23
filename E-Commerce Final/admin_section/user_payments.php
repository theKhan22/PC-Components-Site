
<h3 class="text-center">All Orders</h3>

<table class="table table-bordered mt-5">
    <thead class='bg-primary'>
        
        <tr>
            <th>SL No</th>
            <th>Payment ID</th>
            <th>Order ID</th>
            <th>Invoice</th>
            <th>Amount</th>
            <th>Payment Mode</th>
            <th>Date</th>
        </tr>

    </thead>
    <tbody class='bg-secondary text-light'>
    <?php 

$get_orders ="Select * from user_payments";
$result = mysqli_query($con,$get_orders);
$row_count = mysqli_num_rows($result);
if($row_count>0){

    $serial=1;


    while($row_each = mysqli_fetch_assoc($result)){
        $payment_id=$row_each['payment_id'];
        $order_id=$row_each['order_id'];
        $invoice=$row_each['invoice_number'];
        $amount=$row_each['amount'];
        $payment_mode=$row_each['payment_mode'];
        $date=$row_each['date'];
        

        

    echo "
    <tr>
    <th>$serial</th>
    <th>$payment_id</th>
    <th>$order_id</th>
    <th>$invoice</th>
    <th>$amount</th>
    <th>$payment_mode</th>
    <th>$date</th>
    
   </tr>
    
    
    ";

    $serial++;

    }

    

}else{
    echo "<h3 class='text-center text-danger'></h3>";
}



?>

    </tbody>
</table>

