<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <!-- All CSS -->
    <link href="/Mcronald/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel='stylesheet' href='/Mcronald/css/mystyle.css' type= "text/css">
<!-- script src='../script/myscript.js' type='text/javascript'></script -->
<!-- <style>
    span {
        color: red;
        font-weight: bold;
    }
</style> -->

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

    
<section style =" padding-top: 70px; margin-bottom: 180px;">
<div class =" vw-vh-100" style =" overflow-wrap : break-word";>


<?php 

require '../login/env.php';
echo "<h2>Contact Us</h2>";

$nameErr = $emailErr = $subjectErr = "";




if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   
    $isValid = true;


   if(empty(trim($_POST['name']))){
    $nameErr = "name is empty";
    $isValid = false;
   }

   if(empty(trim($_POST['email']))){
    $emailErr = "email is empty";
    $isValid = false;
   }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $emailErr .= "incorrect email format";
    $isValid = false;
   }

   if(empty(trim($_POST['subject']))){
    $subjectErr = "subject is empty";
    $isValid = false;
   }

   if($isValid){
    $salution = $_POST['salution'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enquiry = $_POST['enquiry'];
    $subject= $_POST['subject'];


    $conn = mysqli_connect(
        DB_HOST,
        DB_USER,
        DB_PASSWORD,
        DB_DATABASE
    );

    if(!$conn){
        die("Connection Error".mysqli_connect_error());
    }

    $query = "INSERT INTO contact (salution,name,email,phone,enquiry,subject,posted) 
        VALUES (?,?,?,?,?,?,?)";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt,"sssssss",
        $salution,
        $name, 
        $email,
        $phone,
        $enquiry,
        $subject,
        $posted);

        $posted = date("Y-m-d");

    if(mysqli_stmt_execute($stmt)){
        ;
    }else{
        die("Insert Error".mysqli_error($conn));
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    echo "
    Hello, {$salution} {$name}. Thank you for contacting us.
    ";
   }
   
   
    // display the form
    if(!$isValid){
        include('_form.php');
    }
   

  
    // display the form
 
}else{
    include('_form.php');
}
   

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