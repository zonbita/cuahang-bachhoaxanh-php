<?php 
require_once __DIR__. "/autoload/autoload.php";
$key =intval(getInput('key'));

unset($_SESSION['cart'][$key]);
$_SESSION['success']="Xoá thành công";
header('location:gio-hang.php');
 ?>