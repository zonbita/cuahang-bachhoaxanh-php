<?php
require_once __DIR__. "/autoload/autoload.php";
unset($_SESSION['cart']);
unset($_SESSION['total']);

?>

<?php  require_once __DIR__. "/layouts/header.php";?>

<!-- Start women-product Area -->
<section class="women-product-area section-gap" id="women">
	<div class="container">
		<div class="countdown-content pb-40">
			<div class="title text-center">
				<h1 class="mb-10">Thông báo thanh toán</h1>
			
				<?php if (isset($_SESSION['success'])): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
					</div>
				<?php endif ?>
				<a href="index.php" class="btn btn-success">Trở về trang chủ</a>
			</div>
		</div> 
	</div>
</section>
<!-- End women-product Area -->
<?php  require_once __DIR__. "/layouts/footer.php";?>
