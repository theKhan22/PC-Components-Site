<!-- connect-->
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
    <title>User Registration</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link-->
    
    <!-- css link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center my-3"> New User Registration</h2>
        <div class="row d-flex align-item-center justify-content-center">
            <div class="lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username fiel -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class='form-label'>Username</label>
                        <input type="text" id="user_username" class='form-control' placeholder="Enter username" autocomplete='off'
                        required="required" name='user_username'>

                    </div>
                    <!--email field -->
                    <div class="form-outline mb-4">
                        <label for="user_email" class='form-label'>Email</label>
                        <input type="email" id="user_email" class='form-control' placeholder="Enter email" autocomplete='off'
                        required="required" name='user_email'>

                    </div>

                    <!--Image field -->
                    <div class="form-outline mb-4">
                        <label for="user_image" class='form-label'>User Image</label>
                        <input type="file" id="user_image" class='form-control' placeholder="Image" 
                        required="required" name='user_image'>

                    </div>


                     <!--Password field -->
                     <div class="form-outline mb-4">
                        <label for="user_password" class='form-label'>Enter your password</label>
                        <input type="password" id="user_password" class='form-control' placeholder="Enter your password" 
                        required="required" name='user_password'>

                    </div>


                     <!--Confirm Password field -->
                     <div class="form-outline mb-4">
                        <label for="conf_user_password" class='form-label'>Confirm password</label>
                        <input type="password" id="conf_user_password" class='form-control' placeholder="Confirm password" 
                        required="required" name='conf_user_password'>

                    </div>


                    <!-- Address fiel -->
                    <div class="form-outline mb-4">
                        <label for="user_address" class='form-label'>Enter address</label>
                        <input type="text" id="user_address" class='form-control' placeholder="Enter address" autocomplete='off'
                        required="required" name='user_address'>

                    </div>


                    <!-- Contact fiel -->
                    <div class="form-outline mb-4">
                        <label for="user_contact" class='form-label'>Contact</label>
                        <input type="text" id="user_contact" class='form-control' placeholder="Enter Contact Info" autocomplete='off'
                        required="required" name='user_contact'>

                    </div>


                    <!--reg button-->
                    <div class="text-center">
                        <input type="submit" value="Register" class='bg-info m-3 border-0' name='user_register'>
                        <p class='mt-2 pt-1 fw-bold'>Already have an account?<a href="user_login.php" class=' text-danger mt-2 pt-1 fw-bold text-decoration-none'>Login</a></p>
                    </div>









                </form>

            </div>
        </div>
    </div>
    
</body>
</html>


<!--php code -->


<?php 

if(isset($_POST['user_register'])){
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $conf_user_password = $_POST['conf_user_password'];
    $user_address = $_POST['user_address'];
    $user_contact = $_POST['user_contact'];


    //inserting image into DB
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];

    $ip = getIPAddress(); 


    //insertion query 

    move_uploaded_file($user_image_tmp,"./user_images/$user_image");
    $insert_query ="insert into user_table (username,user_email,user_password,user_image,user_ip,user_address,user_mobile) values('$user_username','$user_email','$user_password','$user_image','$ip','$user_address','$user_contact')";

    $result_query = mysqli_query($con,$insert_query);
    if($result_query){
        echo "<script>alert('Executed Successfully')</script>";
    }

}


?>