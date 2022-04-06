<?php
require_once __DIR__. "/autoload/autoload.php";

$data=
    [
        'email'=>    postInput("email"),
        'password'=>  (postInput("password"))
    ];

if($_SERVER["REQUEST_METHOD"]=="POST")
{


	$is_check=$db->fetchOne("users","email= '".$data['email']."' AND password='".($data['password'])."' ");
     // var_dump($is_check);
     // die();


	if($is_check != NULL)
	{
		$_SESSION['name_user'] = $is_check['name'];
		$_SESSION['name_id']   = $is_check['id'];
		echo "<script>alert('Đăng nhập thành công');location.href='index.php'</script>";
	}
	else
	{
		$_SESSION['error'] = "Đăng nhập thất bại";

	}

}

?>

<?php  require_once __DIR__. "/layouts/header.php";?>

<!-- Start women-product Area -->
<section class="women-product-area section-gap" id="women">
	<!-- Start My Account -->
	<div class="content">
		
					<div class="login-form">
						<?php if (isset($_SESSION['success'])): ?>
							<div class="alert alert-success" role="alert">
							  <?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
							</div>
						<?php endif ?>
						<?php if (isset($_SESSION['error'])): ?>
							<div class="alert alert-danger" role="alert">
							  <?php echo $_SESSION['error']; unset($_SESSION['error']) ?>
							</div>
						<?php endif ?>
						<h3 class="billing-title text-center">Đăng nhập</h3>
						<p class="text-center mt-30 mb-40">Chào mừng, hãy đăng nhập tài khoản của ban </p>
						<form action="" method="POST">
							<input type="email" name="email" placeholder="" older="Email*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email*'" required class="common-input mt-20">
							<input type="password" name="password" placeholder="Password*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" required class="common-input mt-20">
							<button type="submit" class="view-btn color-2 mt-20" style="width: calc(100% - 10px);"><span>Đăng nhập</span></button>
							<div class="mt-20 d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center"><input type="checkbox" class="pixel-checkbox" id="login-1"><label for="login-1">Nhớ mật khẩu</label></div>
								<a href="#">Quên mật khẩu?</a>
							</div>
						</form>
					</div>
				
	</div>
	<!-- End My Account -->
</section>
<!-- End women-product Area -->
<?php  require_once __DIR__. "/layouts/footer.php";?>
