<!-- connect-->
<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
session_start();

$order_id=$_GET['order_id'];

$select_query ="select * from user_orders where order_id=$order_id";

$result=mysqli_query($con,$select_query);

$row_fetch = mysqli_fetch_array($result);
$invoice_number=$row_fetch['invoice_number'];
$amount_due=$row_fetch['amount_due'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

      <!-- bootstrap css link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css link-->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<body class="bg-secondary">
    <div class="container my-5">
        <h1 class="text-center">Confirm Payment</h1>
        <form action="" method="post">
            <div class="form-outline my-4 text-center">
            <label for="" class="text-light">Invoice Number</label>
                <input type="text" class="form-control w-50 m-auto" name="invoice_number" value=<?php echo $invoice_number?>>
            </div>
            <div class="form-outline my-4 text-center">
                <label for="" class="text-light">Amount</label>
                <input type="text" class="form-control w-50 m-auto" name="amount" value = <?php echo $amount_due ?>>
            </div>
            <div class="form-outline my-6 text-center">
                
                <select name="payment_mode" id="" class="form-control w-50 m-auto">
                    <option value="">Select Payment Mode</option>
                    <option value="">Cash On Delivery</option>
                    


                </select>

                
            </div>

            <div class="form-outline my-4 text-center">
                <input type="submit" class="btn bg-info" name="confirm_payment" value="Submit">
            </div>
        </form>
    </div>
    

</body>
    
</body>
</html>

