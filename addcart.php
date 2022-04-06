<?php
require_once __DIR__. "/autoload/autoload.php";
if( !isset($_SESSION['name_id']))
{
	echo "<script>alert('Bạn phai đăng nhập mới mua được hàng');location.href='index.php'</script>";

}
$id = intval(getInput('id'));
$quantity = intval(getInput('qty'));
//echo $_GET['qty'];
//chi tiet sp
$product = $db->fetchID("product",$id);
// Check co session va so luong > 0 khong
if( !isset($_SESSION['cart'][$id]) )
{
	if($quantity > 0){
		$_SESSION['cart'][$id]['name']   = $product['name'];
		$_SESSION['cart'][$id]['image']  = $product['image'];
		$_SESSION['cart'][$id]['qty'] = $quantity;
		$_SESSION['cart'][$id]['price']=( (100 - $product['sale']) *$product['price']) /100;
	}else{
		$_SESSION['cart'][$id]['name']   = $product['name'];
		$_SESSION['cart'][$id]['image']  = $product['image'];
		$_SESSION['cart'][$id]['qty'] = 1;
		$_SESSION['cart'][$id]['price']=( (100 - $product['sale']) *$product['price']) /100;
	}
}
else
{
	//da co gio hang, cap nhat
	$_SESSION['cart'][$id]['qty'] += $quantity;
}
//echo $_SESSION['cart'][$id]['qty'];
echo "<script>alert('Thêm vào giỏ thành công');location.href='gio-hang.php'</script>";

?>
