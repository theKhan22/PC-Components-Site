
<h3 class="text-center">All Orders</h3>

<table class="table table-bordered mt-5">
    <thead class='bg-primary'>
        
        <tr>
            <th>SL No</th>
            <th>Due Amount</th>
            <th>Invoice Number</th>
            <th>Total Products</th>
            <th>Order Date</th>
            <th>Status</th>
            <th>Delete</th>
        </tr>

    </thead>
    <tbody class='bg-secondary text-light'>
    <?php 

$get_orders ="Select * from user_orders";
$result = mysqli_query($con,$get_orders);
$row_count = mysqli_num_rows($result);
if($row_count>0){

    $serial=1;


    while($row_each = mysqli_fetch_assoc($result)){
        $order_id=$row_each['order_id'];
        $user_id=$row_each['user_id'];
        $amount_due=$row_each['amount_due'];
        $invoice_number=$row_each['invoice_number'];
        $total_products=$row_each['total_products'];
        $order_date=$row_each['order_date'];
        $order_status=$row_each['order_status'];

        

    echo "
    <tr>
    <th>$serial</th>
    <th>$amount_due</th>
    <th>$invoice_number</th>
    <th>$total_products</th>
    <th>$order_date</th>
    <th>$order_status</th>
    <td><a href='index.php?delete_orders=$order_id' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
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

