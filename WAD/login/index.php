<!DOCTYPE html>
<html lang="en">
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

<body style = "background: #eee5b6;">

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


    
<section class="h-100 gradient-form vw-vh-100" style="background: linear-gradient(to right, rgba(240,147,251,0.5), rgba(245,87,108,0.5)) ">
  <div class="container vh-100" style ="height: 100% width: 100%">
    <div class="row d-flex justify-content-center align-items-center text-center vh-100 " >
      <div class="col-xl-12 ">
        <div class="card rounded-3 text-black" style="background: linear-gradient(to right, rgba(246,211,101,0.5), rgba(253,160,133,0.5))" >
          <div class="row g-0 ">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4" >

                <div class="text-center">
                  <img src="/Mcronald/img/logo.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">We are Team McRonald</h4>
                </div>
<?php 
    require('env.php');
    

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        if(!$conn){
            die("Connection Error".mysqli_connect_error());
        }

        $query = "SELECT * FROM user WHERE email=? AND password=? LIMIT 1";

        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt,"ss",$email, $password);

        $email = $_POST['username'];
        $password = md5($_POST['password']);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        if($result->num_rows == 1){
            $row = mysqli_fetch_assoc($result);

            session_start();

            $_SESSION['userId'] = $row['id'];
            header('location:account.php');
            exit();

        }else{
            echo "
                <script>
                    alert('Incorrect email/password');
                </script>
            ";
        }
    }

    $self = htmlspecialchars($_SERVER['PHP_SELF']);
    echo "
        <form action={$self} method='POST'>
        <table>
            <tr>
                <th>Email</th>
                <td>
                    <input type='text' name='username'>
                </td>
            </tr>
            <tr>
                <th>Password</th>
                <td>
                    <input type='password' name='password'>
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <input type='submit' value='Login'>
                </td>
            </tr>
        </table>
        </form>
    ";
    

?>
    </div>
  </div>
<div class="col-lg-6 px-5 align-items-center " style =" background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">We are not just a multi-billion company , but we are also a restaurant believe it or not! So if you are a person who are interested in working for a multi billion company as the finance manager " front desk cashier" then look no further ! </p>
                
              </div>
            </div>
          </div>
        </div>
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