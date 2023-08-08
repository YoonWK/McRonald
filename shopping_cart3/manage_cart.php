<?php
//add on 'list detail page'
session_start(); 

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['add_to_cart'])){
        if(isset($_SESSION['cart'])){
            $items=array_column($_SESSION['cart'], 'name');

            if(in_array($_POST['name'],$items)){
                echo "<script>
                    alert('Item Already Added');
                    window.location.href='/Mcronald/shopping_cart3/index.php';
                </script>";
            }else{
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('id'=>$_POST['id'],'name'=>$_POST['name'],'price'=>$_POST['price'],'quantity'=>$_POST['quantity']);
                echo "<script>
                        alert('Item Added');
                        window.location.href='/Mcronald/shopping_cart3/index.php';
                    </script>";
            }
        }else{
            $_SESSION['cart'][0]=array('id'=>$_POST['id'],'name'=>$_POST['name'],'price'=>$_POST['price'],'quantity'=>$_POST['quantity']);
            echo "<script>
                    alert('Item Added');
                    window.location.href='/Mcronald/shopping_cart3/index.php';
                </script>";
        }
    }
    if(isset($_POST['remove_item'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['name']==$_POST['name']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script>
                        alert('Item Removed');
                        window.location.href='mycart.php';
                    </script>";
                    
            }
        }
    }

    if (isset($_POST['confirm_order'])) {
        // Check if the shipping address is empty
        if (empty($_POST['shipping_address'])) {
            echo"<script>
                        alert('Invalid Shipping Address, Try Again!');
                        window.location.href='mycart.php';
                </script>";
        } else {
            // Process the order
            $shippingAddress = $_POST['shipping_address'];
            $paymentMethod = $_POST['payment_method'];

            // ... Perform additional order processing logic here ...

            // Clear the cart after processing the order
            unset($_SESSION['cart']);

            // Redirect to shopping cart page
            header("Location: ../shopping_cart3/index.php");
            exit();
        }
    }
}




?>