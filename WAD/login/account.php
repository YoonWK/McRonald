<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Users</title> 
    <!-- All CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link rel='stylesheet' href='/Mcronald/css/mystyle.css'>
<link rel='stylesheet' href='/Mcronald/css/bootstrap.min.css'>
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


    <section style =" padding top: 70px">
      <div class="container vw-vh-100">
              <?php 
    require('env.php');
    include('checkSession.php');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

    if(!$conn){
        die('Connection error'.mysqli_connect_error());
    }

    $query = "SELECT * FROM user WHERE id=? LIMIT 1";
    $stmt = mysqli_prepare($conn,$query);

    mysqli_stmt_bind_param($stmt,"s",$_SESSION['userId']);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    foreach($result as $row)
    {
    echo "
        <div>
        Id: {$row['id']}
        <br>
        Email: {$row['email']}
        <br>
        Hashed Password: {$row['password']}
        </div>
    ";
    }

    echo "<br>
    Welcome to McRonalds shopping website.
    <br>
    Shop With Us!!";

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    //include('includes/footer.php');
?>
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