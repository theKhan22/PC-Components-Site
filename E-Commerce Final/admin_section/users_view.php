
<h3 class="text-center">User Details With Orders</h3>

<table class="table table-bordered mt-5">
    <thead class='bg-primary'>
        
        <tr>
            <th>SL No</th>
            <th>Username</th>
            <th>Email</th>
            <th>user_mobile</th>
            <th>order_id</th>
            <th>amount_due</th>
            <th>total_products</th>
            <th>Order Status</th>
            <th>Address</th>
            <th>Order Date</th>
        </tr>

    </thead>
    <tbody class='bg-secondary text-light'>
    <?php 

$get_users ="Select username,user_email,user_mobile,order_id,amount_due,total_products,order_status,user_address,order_date FROM user_table
NATURAL JOIN user_orders;";
$result = mysqli_query($con,$get_users);
$row_count = mysqli_num_rows($result);
if($row_count>0){

    $serial=1;


    while($row_each = mysqli_fetch_assoc($result)){
        $username=$row_each['username'];
        $user_email=$row_each['user_email'];
        $user_mobile=$row_each['user_mobile'];
        $order_id=$row_each['order_id'];
        $amount_due=$row_each['amount_due'];
        $total_products=$row_each['total_products'];
        $order_status=$row_each['order_status'];
        $user_address=$row_each['user_address'];
        $order_date=$row_each['order_date'];

        echo "

    
    <tr>
    <th>$serial</th>
    <th>$username</th>
    <th>$user_email</th>
    <th>$user_mobile</th>
    <th>$order_id</th>
    <th>$amount_due</th>
    <th>$total_products</th>
    <td>$order_status</td>
    <td>$user_address</td>
    <td>$order_date</td>
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

