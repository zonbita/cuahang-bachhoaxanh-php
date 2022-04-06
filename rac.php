<?php
    session_start();
    if(isset($_GET['id']) & !empty($_GET['id'])){
            $items = $_GET['id'];
            $cat = $_GET['cat'];
            $_SESSION['cart'] = $items;
    }else{
    }
    if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){
        $items = $_SESSION['cart'] . "," . $_GET['id'];
        $cartitems = explode(",", $items);
        $_SESSION['cart'] = $items;
        $_SESSION['cartItems'] = $cartitems;
    }else{
        $items = $_GET['id'];
        $_SESSION['cart'] = $items;
    }
?>
