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
    <title>Admin Registration</title>
     <!-- bootstrap css link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css link-->
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class='text-center'>Admin Registration</h2>
        <div class="row d-flex justify-content-center">
            <div class='col-lg-6 col-xl-5'>
                <img src="../images/logo.png" alt="Admin Registration" class='img-fluid'>
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method='post'>
                    <div class="form-outline mb-4">
                        <label for="username" class='form-label'>Username</label>
                        <input type="text" id='username' name='username' placeholder='Enter username' required='required'
                        class='form-control'>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="Email" class='form-label'>Email</label>
                        <input type="email" id='email' name='email' placeholder='Enter email' required='required'
                        class='form-control'>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password" class='form-label'>Password</label>
                        <input type="password" id='password' name='password' placeholder='Enter password' required='required'
                        class='form-control'>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="Confirm Password" class='form-label'>Confirm Pasword</label>
                        <input type="password" id='confirm_password' name='confirm_password' placeholder='confrim password' required='required'
                        class='form-control'>
                    </div>
                    <div>
                        <input type="submit" class='bg-info py-2 px-3 border-0' name='admin_registration'
                         value="Register">
                        <p class='fw-bold'>Have an account?<a href='admin_login.php'>Login</a></p>
                    </div>
                    
                </form>
            </div>

        </div>
        
    </div>
    
</body>
</html>



<?php 

if(isset($_POST['admin_registration'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    

    

    //select query

    if($password==$confirm_password){
        $insert_query ="insert into admin_table (admin_name,admin_email,admin_password) values('$username','$email','$password')";

    $result_query = mysqli_query($con,$insert_query);
    if($result_query){
        echo "<script>alert('Inserted Successfully')</script>";
        echo "<script>window.open('./admin_login.php','_self')</script>";
        
    }


    }
    

    

    

}




?>