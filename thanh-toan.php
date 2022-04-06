<?php
require_once __DIR__. "/autoload/autoload.php";
$user=$db->fetchID("users", intval($_SESSION['name_id']));

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$data=
	[

		'amount' => $_SESSION['total'],
		'users_id'=> $_SESSION['name_id'],
		'note'    => postInput("note")
	];

	$idtran= $db->insert("transaction", $data);
	if($idtran>0)
	{
		foreach ($_SESSION['cart'] as $key => $value)
		{
			$data2=
			[
				'transaction_id'=> $idtran,
				'product_id' 	=> $key,
				'qty' 			=> $value['qty'],
				'price' 		=> $value['price'],
				'id_user'=> $_SESSION['name_id']
			];
			$id_insert = $db->insert("orders", $data2);
		}

		$_SESSION['success']="Lưu đơn hàng thành công";
		header("location: thong-bao.php");
	}
}
?>

<?php  require_once __DIR__. "/layouts/header2.php";?>


<div style="max-width: 640px;
margin: 0 auto;
left: 0;
right: 0;
background: #e9edf0;">

		<form action="" method="POST" class="billing-form">
			<div class="row">

					<h3 class="billing-title mt-20 mb-10">Thông tin thanh toán</h3>
					<div class="row">
						<input type="text" readonly="" name="name" placeholder="Full name*" onfocus="this.placeholder=''"
						onblur="this.placeholder = 'Full name*'"  class="common-input mt-20" value="<?php echo $user['name'] ?>">

						<input type="email" readonly="" name="email" placeholder="Email address*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email address*'"  class="common-input mt-20" value="<?php echo $user['email'] ?>">

						<input type="number" readonly="" name="phone" placeholder="Phone number*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone number*'"  class="common-input mt-20" value="<?php echo $user['phone'] ?>">

						<input type="text" readonly="" name="address" placeholder="Địa chỉ*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Địa chỉ*'"  class="common-input mt-20" value="<?php echo $user['address'] ?>">

						<input type="text" readonly="" name="sotien" placeholder="Tổng tiền*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Tổng tiền*'"  class="common-input mt-20" value="<?php echo formatPrice($_SESSION['total']) ?>">

						<input type="text"  name="note" placeholder="Ghi chú*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Ghi chú*'"  class="common-input mt-20" value="">
						<button type="submit" class="view-btn color-2 mt-20 w-100"><span>Xác nhận thanh toán</span></button>
					</div>
			</div>
		</form>
</div>


<!-- <?php  require_once __DIR__. "/layouts/footer.php";?>-->
