<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <a href="myCart.php" >My Cart</a>
    <!-- All CSS -->
    <link href="/Mcronald/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Mcronald/css/mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style = "background-color: #eee5b6;">
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
            <div class="container" >
                <div class="row">
                    <div class="col-lg-12 text-center border border-dark rounded my-5 " style ="background: linear-gradient(to right, rgba(240,147,251,0.5), rgba(245,87,108,0.5))";>
                        <h1>MY CART</h1>
                    </div>
                    <div class="col-lg-9 ">
                        <table class="table border border-dark ">
                            <thead class="text-center">
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php 
                                $total = 0;
                                if(isset($_SESSION['cart']))
                                {
                                    foreach($_SESSION['cart'] as $key =>$value){
                                        $price = preg_replace('/[^0-9.]/', '', $value['price']);
                                        
                                        $total += floatval($price);
                                        echo"
                                        <tr>
                                            <td>$value[id]</td>
                                            <td>$value[name]</td>
                                            <td>$value[price]</td>
                                            <td><input class='text-center' type='number' value='$value[quantity]' =min'1' max='50'></td>
                                            <td>
                                            <form action= 'manage_cart.php' method='POST'>
                                                <button name='remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
                                                <input type='hidden' name='name' value='$value[name]'>
                                            </form>
                                        </tr>
                                        ";                               
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-3">
                        <div class="border border-dark rounded p-4" style = "background: linear-gradient(to right, rgba(240,147,251,0.5), rgba(245,87,108,0.5))";>
                            <h4>Total:</h4>
                            <h5 class="text-right"><?php echo $total?></h5>
                            <form action='manage_cart.php' method="post">

                                <label for='shipping_address'>Shipping Address:</label>
                                <textarea id='shipping_address' name='shipping_address' style ="background-color:#ece9e5";required ></textarea>
                                <br>

                                <label for='payment_method'>Payment</label>
                                <select id='payment_method' name='payment_method' style ="background-color:#ece9e5">
                                    <option value='cash'>Pay By Cash</option>
                                    <option value='qr'>Touch n Go</option>
                                </select>

                                <button name='confirm_order' class="btn btn-primary btn-block text-dark" style="background-color: aquamarine">Confirm Order</button>
                            </form>
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
      <!-- footer ends -->  
    <!-- All Js -->
    <script src="/Mcronald/js/bootstrap.bundle.min.js"></script>
        </body>
</html>

