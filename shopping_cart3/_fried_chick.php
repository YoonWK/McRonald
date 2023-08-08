<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ass";
    $conn = new mysqli($servername, $username, $password, $dbname);

    //$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    $query = "SELECT * FROM friedchicken ORDER BY id ASC ";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        echo "
            <table>
            <tr>
            <th>FRIED CHICKEN</th>
            </tr>
            <tr>
                <th>Photo</th>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Order now!<th>

            </tr>
        ";

        while($row = mysqli_fetch_assoc($result)){
            echo "
                <tr>
                    <form action='manage_cart.php' method='POST'>
                    <td><img src='". $row["photo"] . "' alt='" . $row["name"] . "' /></td>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['price']}</td>
                    <input type='hidden' name='id' value='{$row["id"]}'>
                    <input type='hidden' name='name' value='{$row["name"]}'>
                    <input type='hidden' name='price' value='{$row["price"]}'>
                    <input type='hidden' name='quantity' value=1>
                    <td><button type='submit' value='add_to_cart' name='add_to_cart'>Add to Cart</button></td>
                    </form>
                </tr>
            ";
        }

        echo "
            </table>
        ";
    }

    mysqli_close($conn)
    
?>


