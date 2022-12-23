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
    <title>Admin Login</title>
     <!-- bootstrap css link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css link-->
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class='text-center'>Admin Login</h2>
        <div class="row d-flex justify-content-center">
            <div class='col-lg-6 col-xl-5'>
                <img src="../images/login_icon.png" alt="Admin Registration" class='img-fluid'>
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method='post'>
                    <div class="form-outline mb-4">
                        <label for="username" class='form-label'>Username</label>
                        <input type="text" id='username' name='username' placeholder='Enter username' required='required'
                        class='form-control'>
                    </div>
                    
                    <div class="form-outline mb-4">
                        <label for="password" class='form-label'>Password</label>
                        <input type="password" id='password' name='password' placeholder='Enter password' required='required'
                        class='form-control'>
                    </div>
                    
                    <div>
                        <input type="submit" class='bg-info py-2 px-3 border-0' name='admin_login' value='Login'>
                        <p class='fw-bold'>Don't Have an account?<a href='admin_reg.php'>Register</a></p>
                    </div>
                    
                </form>
            </div>

        </div>
        
    </div>
    
</body>
</html>


<?php 

  if(isset($_POST['admin_login'])){

    $username= $_POST['username'];
    $password= $_POST['password'];

    $select_query="select * from admin_table where admin_name='$username' and admin_password='$password'";
    $result = mysqli_query($con,$select_query);

   


    //cart item
    

    $row_count =mysqli_num_rows($result);
    



    if($row_count>0){
        $_SESSION['username']=$username;
        
       
       
        echo "<script> alert('Login Successful1') </script>";
        echo "<script>window.open('./index.php','_self')</script>";

        

  
        
    }else{

        echo "<script> alert('Invalid Credentials') </script>";
       
    }




  }


?>