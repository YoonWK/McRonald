<html>
<head>
<title>Users</title>
<link rel='stylesheet' href='css/mystyle.css' type = "text/css">
</head>

<body>

<?php 
    //include('includes/header.php');

    session_start();
    session_destroy();

    echo "
        <a href='login.php'>Go to login page</a>
    ";

    //include('includes/footer.php');
?>


</body>
</html>