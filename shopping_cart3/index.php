<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <a href="myCart.php" >My Cart</a>

    <!-- All CSS -->
    <link href="/Mcronald/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Mcronald/css/mystyle.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-colour">
      <div class="container-fluid">
        <a class="navbar-brand" href="/Mcronald/index.php"><img src="/Mcronald/img/logo.png" alt="" width="30" height="24">McRonald</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Home</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/Mcronald/index.php#home">Welcome</a></li>
                <li><a class="dropdown-item" href="/Mcronald/index.php#about">About Us</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Contact</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/Mcronald/WAD/contact">Contact Us</a></li>
                <li><a class="dropdown-item" href="/Mcronald/WAD/admin.php">Admin</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Mcronald/shopping_cart3/index.php">Item Lists</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/Mcronald/shopping_cart3/mycart.php">Cart/Wishlist</a>
            </li> 
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>   -->
            <li class="nav-item">
                <a class="nav-link" href="/Mcronald/shopping_cart3/index.php">Search</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/Mcronald/WAD/login">Login</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/Mcronald/WAD/logout">Logout</a>
            </li>     
          </ul>
        </div>
      </div>
    </nav>


<section style =" padding-top: 70px">
<div class="vw-vh-100" >
    <?php 
    
    //require('env.php');

        $self_url = htmlspecialchars($_SERVER['PHP_SELF']);
        $operation = "";

        echo "
            <h2>Menu</h2>
            <form action='{$self_url}' method='post' id='form-CRUD'>
                <label for='operation'>Choose the type of food: </label>
                <select name='operation' id='operation'>
                    <option value='all' id='all'>All</option>
                    <option value='set' id='set'>SET</option>
                    <option value='burger' id='burger'>BURGER</option>
                    <option value='fried_chick' id='fried_chick'>FRIED CHICKEN</option>
                    <option value='beverage' id='beverage'>BEVERAGE</option>
                </select>
                <input type='hidden' name='task' value='select'>
            </form>
            <br/>
        ";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $task = $_POST['task'];

            if($task == 'select'){
                $operation = $_POST['operation'];
                switch($operation){
                    case "all":
                        include ("_set.php");
                        include ("_burger.php");
                        include ("_fried_chick.php");
                        include ("_beverage.php");
                        break;
                    case "set":
                        include ("_set.php");
                        break;
                    case "burger":
                        include ("_burger.php");
                        break;
                    case "fried_chick":
                        include ("_fried_chick.php");
                        break;
                    case "beverage":
                        include ("_beverage.php");
                        break;
                }

            
            }
            
        }else{
            include ("_set.php");
            include ("_burger.php");
            include ("_fried_chick.php");
            include ("_beverage.php");
        }

        if(!empty($operation)){
          echo "
              <script>
                 const option = document.getElementById('{$operation}'); 
                 option.setAttribute('selected','selected');
              </script>
          ";   
        }
    ?>

    <script>
        const select = document.getElementById('operation');
        select.addEventListener("change", () => {
            document.getElementById('form-CRUD').submit();
        });
    </script>
</div>
</section>

<footer class="bg-dark p-2 text-center fixed-bottom">
    <div class="container">
        <p class="text-white">Designed by @Keeliang and Friends</p>
    </div>
</footer>
<script src="/Mcronald/js/bootstrap.bundle.min.js"></script>
</body>
</html>