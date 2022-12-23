<!-- connect-->
<?php
include('../includes/connect.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tech Site</title>
  <!-- bootstrap css link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css link-->
  <link rel="stylesheet" href="style.css">
  


    <!-- second child -->

   
    <!--third child-->

    <div class="bg-light">
      <h3 class="text-center">Tech Store</h3>
      <p class="text-center">Built for pc enthusiats by pc enthusiasts</p>
    </div>


    <!-- fourth child -->
    <div class="row px-1">
        <div class="col-md-12">
            <div class="row">
                <?php
                if(!isset($_SESSION['username'])){
                    include('user_login.php');

                }else{
                    include('payment.php');

                }

                ?>

            </div>
        </div>
    </div>







    <?php
  include("../includes/footer.php"); 
  ?>   
  </div>




  
  



<!-- bootstrap js link-->  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>