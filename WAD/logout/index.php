<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Users</title>
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


<section style =" padding-top: 70px";>
<div class="container vh-100" style ="height: 100% width: 100%">
    <div class="row d-flex justify-content-center align-items-center text-center vh-100 " >
    <div class="text-center">
          <img src="/Mcronald/img/logo.png"
            style="width: 185px;" alt="logo">
          <h4 class="mt-1 mb-5 pb-1">Thank you and come again!</h4>
<?php 
    //include('includes/header.php');

    session_start();
    session_destroy();

    echo "
        <a href='/Mcronald/index.php'>Go to login page</a>
    ";

    //include('includes/footer.php');
?>
    </div>
  </div>
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