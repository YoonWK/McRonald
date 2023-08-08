<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mcronald</title>
    
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/mystyle.css">
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

      <!-- about section starts -->
      <section class="home section-main d-flex align-items-center text-center" id="home" >
        <div class="container ">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
              <div class="about-img"><img alt="" class="img-fluid" src="img/logo.png"></div>
            </div>
            <div class="col-lg-8 col-md-12 col-8 ps-lg-5 mt-md-5 pt-5 ">
              <div class="about-text">
                <h2>
                  <br>Always be hungry for more<br>
                as the other side to pain is beautiful.<br>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </section><!-- about section Ends -->

      <!-- about section starts -->
      <section class="about section-padding d-flex align-items-center text-center" id="about">
        <div class="container ">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12 ">
              <div class="about-img"><img alt="" class="img-fluid" src="img/img.png"></div>
            </div>
            <div class="col-lg-8 col-md-12 col-8 ps-lg-5 mt-md-5 pt-5">
              <div class="about-text">
                <h2>When you eat because you're sad<br>
                but now ur just fat and sad.</h2>
                <p>Come eat loh!</p><a class="btn btn-warning" href="shopping_cart3/index.php">Order now</a>
              </div>
            </div>
          </div>
        </div>
      </section><!-- about section Ends -->
      
      <!-- footer starts -->
    <footer class="bg-dark p-2 text-center fixed-bottom">
        <div class="container">
            <p class="text-white">Designed by @Keeliang and Friends</p>
        </div>
    </footer>
      <!-- footer ends -->  
    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
</body>
</html>



