<?php
require_once __DIR__. "/autoload/autoload.php";

	$id = intval(getInput("id"));
	$qty = intval(getInput("qty"));

	$_SESSION['cart'][$id]['qty']= $qty;
	header('location:gio-hang.php');
 ?>
