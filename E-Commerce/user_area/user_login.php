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
        <h2 class="text-center my-3">  User Login</h2>
        <div class="row d-flex align-item-center justify-content-center">
            <div class="lg-12 col-xl-6 mt-5">
                <form action="" method="post" enctype="multipart/form-data">
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