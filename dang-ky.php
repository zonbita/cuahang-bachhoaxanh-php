<?php
require_once __DIR__. "/autoload/autoload.php";

if(isset($_SESSION['name_user']))
{
		echo "<script>alert('Bạn đã đăng nhập tài khoản');location.href='index.php'</script>";

}

$data=
    [
        "name"=>    postInput('name'),
        "email"=>    postInput('email'),
        "phone"=>    postInput('phone'),
        "password"=>  (postInput('password')),
        "address"=>  postInput('address'),
    ];
$error=[];
if($_SERVER["REQUEST_METHOD"]=="POST")
{
		 	$conull = false;
			foreach ($data as $key => $value) {

					 switch ($key) {
						 		case 'email':
										if ($value == ""){
											$error[$key]="Vui lòng nhập thông tin";
											$conull = true;
										}
										else {
			 								$is_check=$db->fetchOne("users","email= '".$data['email']."'  ");
											if($is_check != NULL)
											{
												$error['email']="Email đã tồn tại";
												$conull = true;
											}
										}
						 			break;
							 default:
								 if ($value == ""){
									 $error[$key]="Vui lòng nhập thông tin";
									 $conull = true;
								 }
							 break;
					 }
			}


			if($conull == false){
					echo "oke chua";
				 //$data['password']=md5(postInput("password"));
				 $idinert=$db->insert("users", $data);
				 if($idinert > 0)
				 {
					 $_SESSION['success']="Đăng kí thành công. Mời bạn đăng nhập !";
					 header("location: dang-nhap.php");
				 }
				 else echo "Đk thất bại";
			}



}


?>

<?php  require_once __DIR__. "/layouts/header.php";?>


<section>
<aside class="content women-product-area section-gap">

				<div class="login-form">
					<h3 class="billing-title text-center">Đăng kí</h3>
					<p class="text-center mt-40 mb-30">Tạo tài khoản của riêng bạn </p>
					<form action="" method="POST">
						<input type="text" name="name" placeholder="Họ tên*" onfocus="this.placeholder=''"
						onblur="this.placeholder = 'Full name*'" require class="common-input mt-20" value="<?php echo $data['name']?>">
						<?php if(isset($error['name'])): ?>
                			<p class="text-danger"> <?php echo $error['name'] ?></p>
            			<?php endif ?>
						<input type="email" name="email" placeholder="Email của bạn*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email của bạn*'" require class="common-input mt-20" value="<?php echo $data['email']?>">
						<?php if(isset($error['email'])): ?>
                			<p class="text-danger"> <?php echo $error['email'] ?></p>
            			<?php endif ?>
						<input type="number" name="phone" placeholder="Số điện thoại*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone number*'" require class="common-input mt-20" value="<?php echo $data['phone']?>">
						<?php if(isset($error['phone'])): ?>
                			<p class="text-danger"> <?php echo $error['phone'] ?></p>
            			<?php endif ?>
						<input type="text" name="address" placeholder="Địa chỉ*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Địa chỉ*'" require class="common-input mt-20" value="<?php echo $data['address']?>">
						<?php if(isset($error['address'])): ?>
                			<p class="text-danger"> <?php echo $error['address'] ?></p>
            			<?php endif ?>
						<input type="password" name="password" placeholder="Mật khẩu*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'"  require class="common-input mt-20" value="<?php echo $data['password']?>">
						<?php if(isset($error['password'])): ?>
                			<p class="text-danger"> <?php echo $error['password'] ?></p>
            			<?php endif ?>
						<button type="submit" class="view-btn color-2 mt-40" style="width: calc(100% - 10px);"><span>Đăng kí</span></button>
					</form>
				</div>

	</div>

</section>
</aside>

<?php  require_once __DIR__. "/layouts/footer.php";?>
