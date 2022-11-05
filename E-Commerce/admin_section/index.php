<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css link-->
   <link rel="stylesheet" href="../style.css">

   <style>
    .Admin-Image{
    width: 100px;
    object-fit: contain;
    }
   </style>

</head>
<body>
<!--navbar-->
<div class="container-fluid p-0">
    <!--firstchlid-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img  class="logo" src="../Images/logo.png" alt="">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a>
                    </li>
                    <li>
                        <a href="" class="nav-link">Logout</a>
                    </li>
                </ul>
            </nav>


        </div>

    </nav>

    <!--second child-->

    <div class="bg-light">
        <h2 class="text-center">Manage details</h2>
    </div>

    <!--third chlid-->

    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
            <a href="#"><img src="../Images/logo.png" alt="" class="Admin-Image"></a>
            <p class="text-light text-center">Admin Name</p>

            </div>


            <div class="button text-center">

            <button><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
            <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
            <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
            <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
            <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
            <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
            <button><a href="" class="nav-link text-light bg-info my-1"></a></button>

            </div>
            

        </div>
    </div>

</div>





<div class="bg-info p-3 text-center">
    <p>a footer note</p>
</div>  
    

<!--bootstrap js link-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>