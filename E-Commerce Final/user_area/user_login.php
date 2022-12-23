
<!-- connect-->
<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link-->
    
    <!-- css link-->
    <link rel="stylesheet" href="style.css">

    <style>
        body{
            overflow-x:hidden;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center my-3">  User Login</h2>
        <div class="row d-flex align-item-center justify-content-center">
            <div class="lg-12 col-xl-6 mt-5">
                <form action="" method="post">
                    <!-- username fiel -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class='form-label'>Username</label>
                        <input type="text" id="user_username" class='form-control' placeholder="Enter username" autocomplete='off'
                        required="required" name='user_username'>

                    </div>
                   



                     <!--Password field -->
                     <div class="form-outline mb-4">
                        <label for="user_password" class='form-label'>Enter your password</label>
                        <input type="password" id="user_password" class='form-control' placeholder="Enter your password" 
                        required="required" name='user_password'>

                    </div>




                    


                    <!--reg button-->
                    <div class="text-center">
                        <input type="submit" value="Login" class='bg-info m-3 border-0' name='user_login'>
                        <p class='mt-2 pt-1 fw-bold'>Don't have an account?<a href="user_registration.php" class=' text-danger mt-2 pt-1 fw-bold text-decoration-none'>Register</a></p>
                    </div>









                </form>

            </div>
        </div>
    </div>
    
</body>
</html>


<?php 

  if(isset($_POST['user_login'])){

    $user_username= $_POST['user_username'];
    $user_password= $_POST['user_password'];


    $select_query="select * from user_table where username='$user_username' and user_password='$user_password'";
    $result = mysqli_query($con,$select_query);

    $ip = getIPAddress(); 


    //cart item
    $select_cart="select * from cart_details where ip_address='$ip'";
    $result_cart = mysqli_query($con,$select_cart);

    $numRows = mysqli_num_rows($result_cart);

    $row_count =mysqli_num_rows($result);
    



    if($row_count>0){
        $_SESSION['username']=$user_username;
        //echo "<script> alert('Login Successful') </script>";
        if($row_count==1 and $numRows==0){
            $_SESSION['username']=$user_username;
            $get_data=mysqli_fetch_array($result);
            $_SESSION['user_id']=$get_data['user_id'];

            

            echo "<script> alert('Login Successful1') </script>";
            echo "<script>window.open('profile.php','_self')</script>";

        }else{
            $_SESSION['username']=$user_username;

            echo "<script>alert('Login Successful2')</script>";
            echo "<script>window.open('payment.php','_self')</script>";

        }
        
    }else{

        echo "<script> alert('Invalid Credentials') </script>";
       
    }




  }


?>