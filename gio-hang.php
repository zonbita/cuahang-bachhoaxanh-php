<?php
require_once __DIR__. "/autoload/autoload.php";
//_debug($_POST['qty']);
//_debug($_SESSION['cart']);

$sum=0;
$amount=0;
$id = intval(getInput('id'));
if( !isset($_SESSION['cart']) || count($_SESSION['cart']) ==0)
{
		echo "<script>alert('Không có sản phẩm trong giỏ hàng');location.href='index.php'</script>";
}

	if( isset($_POST['id']) && isset($_POST['qty']))
	{

		$_SESSION['cart'][$id]['name'] = $_POST['id'];
		$_SESSION['cart'][$id]['qty'] += $_POST['qty'];
	}
?>

<?php  require_once __DIR__. "/layouts/header2.php";?>

<?php if (isset($_SESSION['success'])): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
						</div>
<?php endif ?>

<section class="women-product-area section-gap" id="women">


	<div class="container" style="background: white;
padding: 40px;
border-radius: 5px;">
		<div class="cart-title">
			<div class="row">
				<div class="col-md-1">
					<h6 class="ml-15">STT</h6>
				</div>
				<div class="col-md-2">
					<h6 class="ml-15">Tên sp</h6>
				</div>
				<div class="col-md-2">
					<h6 class="ml-15">Hình ảnh</h6>
				</div>
				<div class="col-md-2">
					<h6>Giá</h6>
				</div>
				<div class="col-md-2">
					<h6>Số lượng</h6>
				</div>
				<div class="col-md-2">
					<h6>Tổng</h6>
				</div>
				<div class="col-md-1">
					<h6>Thao tác</h6>
				</div>
			</div>
		</div>

		<?php $sum = 0; ?>
		<?php $stt=1; foreach ($_SESSION['cart'] as $key => $value): ?>
		<tr>
			<div class="cart-single-item">
			<div class="row align-items-center">
				<div class="col-md-1 col-12">
					<div><?php echo $stt ?></div>
				</div>
				<div class="col-md-2 col-12">
					<div class="product-item d-flex align-items-center">
						<h6><?php echo $value['name'] ?></h6>
					</div>
				</div>
				<div class="col-md-2 col-12">
					<div class="img-fluid">
						<img src="<?php echo uploads() ?>product/<?php echo $value['image'] ?>"
						width="80pc" height="80px">
					</div>
				</div>
				<div class="col-md-2 col-12">
					<div class="price"><?php echo formatPrice($value['price']) ?></div>
				</div>
				<div class="col-md-2 col-12">
					<div class="quantity-container d-flex align-items-center mt-15">
						<form  action="" method="POST">
						<input id="mySelect" name="<?php echo $key ?>" onchange="changevalue()" type="number" class="quantity-amount"  value="<?php echo $value['qty'];?>"  min="0"/>

						<div class="arrow-btn d-inline-flex flex-column" id="<?php echo $key ?>">
							<button class="increase arrow" onchange="changevalue()"  type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
							<button class="decrease arrow" onchange="changevalue()" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
						</div>
						</form>
					</div>
				</div>
				<div class="col-md-2 col-12">
					<div class="total"><?php echo formatPrice($value['price'] * $value['qty'])?></div>
				</div>
				<div class="col-md-1 col-12">
					<a href="remove.php?key=<?php echo $key ?>"class="btn btn-xs btn-danger fa fa-remove">Xóa</a>
				</div>
				<?php $sum = $sum +($value['price']*$value['qty']) ;
				$_SESSION['tongtien']=$sum ;?>
			</div>
		</div>
		</tr>
		<?php $stt++; endforeach ?>
		<div class="cupon-area d-flex align-items-center justify-content-between flex-wrap">

			<div class="cuppon-wrap d-flex align-items-center flex-wrap">
				<div class="cupon-code">
					<input type="text">
					<!-- <button  class="view-btn color-2"><span>Áp dụng</span></button> -->
				</div>
<button  id="calculate" class="updatecart view-btn color-2 have-btn" data-key="<?php echo $key ?>" style="background-color: #e6e6e6;" ><span>Cật nhật giỏ hàng</span></button>
<!--<a href="#" class="view-btn color-2 have-btn"><span>Có mã khuyến mãi?</span></a>-->
			</div>
		</div>
		<div class="subtotal-area d-flex align-items-center justify-content-end">
			<div class="title text-uppercase">Số tiền</div>
			<div class="subtotal"><?php echo formatPrice($_SESSION['tongtien']) ?></div>
		</div>
		<div class="subtotal-area d-flex align-items-center justify-content-end">
			<div class="title text-uppercase">Phí vận chuyển</div>
			<div class="subtotal">50.000d</div>
		</div>
		<div class="subtotal-area d-flex align-items-center justify-content-end">
			<div class="title text-uppercase">Tổng tiền</div>
			<div class="subtotal"><?php $_SESSION['total'] = $_SESSION['tongtien']+50000;
			echo formatPrice($_SESSION['total'])?></div>
		</div>
		<div class="subtotal-area d-flex align-items-center justify-content-end">
			<a href="index.php" class="view-btn color-2"><span>Tiếp tục mua hàng</span></a>
			<a href="thanh-toan.php" class="view-btn color-2"><span>Thanh toán</span></a>
		</div>

	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
		function change(){
			$_SESSION['cart'] as $key => $value
		}
</script>


<script type="text/javascript">
function changevalue() {
	let id = document.getElementById("mySelect").getAttribute("name");
	let value = document.getElementById("mySelect").value;
	$.ajax({
			method: "GET",// phương thức dữ liệu được truyền đi
			url: "update-soluong.php",// gọi đến file server show_data.php để xử lý
		 data: {'qty':value,'id':id},
		 success:function(data)
		 {
				 if(data==1)
				 {
						 alert("cập nhật thành công");
				 }
		 }
	});
}
</script>
<!-- <script type="text/javascript">

     $(document).ready(function(){
            $('#mySelect').onchange(function(){
                e.preventDefault();
                $qty =  $(this).parents("input").find.('qty').val();
                console.log($qty);
                $key= $(this).attr('data-key');
                $.ajax=({
                    url: "update-gio-hang.php",
                    type: 'GET',
                    data: {'qty':$qty,'key':$key},
                    success:function(data)
                    {
                        if(data==1)
                        {
                            alert("cập nhật thành công");
                            location.href='gio-hang.php';
                        }
                    }
                });
            })
        })
</script> -->
