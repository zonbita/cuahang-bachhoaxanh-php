<?php
require_once __DIR__. "/autoload/autoload.php";

$id = intval(getInput('id'));
$EditCategory = $db->fetchID("category",$id);

//chi tiet sp
$product = $db->fetchID("product",$id);
//_debug($product);

$cateid=intval($product['category_id']);

$sql="SELECT * FROM product ORDER BY RAND() LIMIT 4";

$sanphamkemtheo = $db->fetchsql($sql);
$value['qty'] = 1;
?>

<?php  require_once __DIR__. "/layouts/header.php";?>
<style>
.slide {
    overflow: hidden;
    width: 540px;
    min-height: 381px;
    box-sizing: border-box;
    float: left;
}
.rowdetail {
    display: block;
    overflow: hidden;
    background: #fff;
    padding: 0 10px 20px 10px;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 5px;
}
.slide .pgallery>div:first-child {
    height: 405px !important;
}
.infosell {
    overflow: visible;
    width: 410px;
    margin-left: 10px;
    box-sizing: border-box;
    float: left;
}
.quick-view-carousel-details {
    position: relative;
    height: 700px;
}
</style>
<!-- Start Product Details -->
<section>
<aside class="colcontent">
	<div class="rowdetail">
			<aside class="slide">
				<!-- <img src="<?php echo uploads() ?>product/<?php echo $product['image'] ?>"> -->
				<div class="quick-view-carousel-details">
					<div class="item" style="background: url(<?php echo uploads() ?>product/<?php echo $product['image'] ?>);">

					</div>
					<div class="item" style="background: url(img/q1.jpg);">

					</div>
					<div class="item" style="background: url(img/q1.jpg);">

					</div>
				</div>
			</aside>
		<div class="infosell infosell-">
			<div class="quick-view-content">
				<div class="top">
					<h3 class="head"><?php echo $product['name'] ?></h3>
					<div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span>
						<?php if ($product['sale']>0): ?>
							<span class="ml-10"><?php echo formatpricesale($product['price'],$product['sale'])?></span>
						  &ensp;<strike><?php echo formatPrice($product['price']) ?></strike>
						 <?php else: ?>
						 	<span class="ml-10"><?php echo formatpricesale($product['price'],$product['sale'])?></span>
						<?php endif ?>
					</div>
					<div class="category">Nhóm: <span><?php echo $product['name'] ?></span></div>
					<div class="available">Số lượng: <span>còn hàng</span></div>
				</div>
				<div class="middle">
					<p class="content"><?php echo $product['content'] ?></p>
				</div>
				<div >
					<div class="quantity-container d-flex align-items-center mt-15">
						Số lượng:
						<input name="qty" type="number" class="quantity-amount" value="<?php echo $value['qty'];?>" id="qty" min="1"/>
						<div class="arrow-btn d-inline-flex flex-column">
							<button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
							<button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
						</div>

					</div>
					<div class="d-flex mt-20">


						<a href="<?php echo base_url() ?>addcart.php?id=<?php echo $product['id'] ?> " class="view-btn color-2" ><span>CHỌN MUA</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</aside>



<aside class="colcontent">
    <div class="boxproduct group  mt-30" style="background: gray;color: white;padding: 20px;font-size: large;">Các sản phẩm khác</div>
	<div class="details-tab-navigation d-flex justify-content-center">

    <ul class="cate">
    						<?php foreach ($sanphamkemtheo as $item): ?>

                  <li class=' product fruit  '  >    <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>" title="<?php echo $item['name'] ?>">
          				        <div class="boximg center" title="<?php echo $item['name'] ?>">
          				                            <img width="140" height="140" src="<?php echo uploads() ?>product/<?php echo $item['image'] ?>" alt="<?php echo $item['name'] ?>">
          				        </div>
          				        <div class="product-name"><?php echo $item['name'] ?></div>

          										<?php if ($item['sale']>0): ?>
          								        <div class="price">
          																<strong><?php echo formatpricesale($item['price'],$item['sale'])?></strong>
          																<span><?php echo formatPrice($item['price']) ?></span>



          								        </div>
          										<?php else: ?>
          											<div class="price">
          															<strong><?php echo formatPrice($item['price']) ?></strong>
          											</div>
          										<?php endif ?></h3>
          				    </a>

                      <a class="buy2 " href="addcart.php?id=<?php echo $item['id'] ?>">Chọn mua</a>
                      <div class="updown ">
                          <div class="down"><span></span></div>
                          <input class="number" value="0" maxlength="50" pattern="[0-9]*" type="number">
                          <div class="up"><span></span><span></span></div>
                      </div>
          				</li>
    						<?php endforeach ?>
    </ul>



	</div>
</aside>
</section>
<!-- End Product Details -->
<?php  require_once __DIR__. "/layouts/footer.php";?>
