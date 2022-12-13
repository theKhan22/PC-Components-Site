<?php 

if(isset($_GET['edit_account'])){
    $user_username = $_SESSION['username'];
    $select_query="select * from user_table where username='$user_username'";
    $result = mysqli_query($con,$select_query);

    $row_fetch= mysqli_fetch_assoc($result);
    $user_id=$row_fetch['user_id'];
    $username=$row_fetch['username'];
    $user_email=$row_fetch['user_email'];
    $user_address=$row_fetch['user_address'];
    $user_mobile =$row_fetch['user_mobile'];

}


if(isset($_POST['user_update'])){
   $update_id=$user_id;
   $username=$_POST['user_username'];
   $user_email=$_POST['user_email'];
   $user_address=$_POST['user_address'];
   $user_mobile =$_POST['user_mobile'];
   $user_image =$_FILES['user_image']['name'];
   $user_image_tmp =$_FILES['user_image']['tmp_name'];
   move_uploaded_file($user_image_tmp,"./user_images/'$user_image'");


   $update_data ="update user_table set username='$username',user_email='$user_email',
   user_address='$user_address',user_image='$user_image',user_address='$user_address',user_mobile='$user_mobile'
   where user_id=$update_id ";

   $result_query = mysqli_query($con,$update_data);

   if($result_query){
    echo "<script> alert('data updated successfully') </script>";
    echo "<script>window.open('logout.php','_self')</script>";
   }

}






?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css link-->
  <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


   <h3 class="text-center mb-4">Edit Account</h3>
   <form action="" method="post" class="text-center" enctype="multipart.form-data">
    <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" name="user_username" value=<?php echo $username ?>>
    </div>
    <div class="form-outline">
        <input type="text" class="form-control w-50 m-auto mb-4" name="user_email" value=<?php echo $user_email ?>>
    </div>
    <div class="form-outline">
        <input type="file" class="form-control w-50 m-auto mb-4" name="user_image">
    </div>
    <div class="form-outline">
        <input type="text" class="form-control w-50 m-auto mb-4" name="user_address" value=<?php echo $user_address ?>>
    </div>
    <div class="form-outline">
        <input type="text" class="form-control w-50 m-auto mb-4" name="user_mobile" value=<?php echo $user_mobile ?>>
    </div>


    <input type="submit" class=" btn bg-info" name="user_update" value="Update">


   </form>
    
    
</body>
</html>