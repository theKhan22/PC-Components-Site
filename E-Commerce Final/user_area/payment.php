<?php
include('../includes/connect.php');
include('../functions/common_functions.php');


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

<?php

$ip = getIPAddress();  
$user_name=$_SESSION['username'];
$user_id=$_SESSION['user_id'];
$get_user = "Select * from user_table where user_id='$user_id'";
//$get_user = "Select * from user_table where user_ip='$ip'";
$result = mysqli_query($con,$get_user);

$run_query = mysqli_fetch_array($result);
$user_id=$run_query['user_id'];
    


  

?>


    <div class="container">
        <h2 class="text-center text-info">
            Payment Options
        </h2>
        <div class="row">
            <div class="col-md-6">
                <a href="orders.php?user_id=<?php echo $user_id ?>"><h2 class="text-center">Pay Offline</h2></a>
            </div>
        </div>

    </div>
</body>
</html>