<?php
require_once __DIR__. "/autoload/autoload.php";
	// Số sản phẩm show;
	$Max = 4;
		// Lấy danh sách mục
	$data=[];
	$data2=[];
	$data3=[];
	/// danh muc 1
	$danhmuc = 1;
	$query = "SELECT category.name, category.id FROM category  WHERE category.home=1 and category.category_group = $danhmuc ORDER BY category.id";
	$Result=$db->fetchsql($query);
	$Total = 0;

	// Lấy sản phẩm của từng danh mục bò vào data list
	foreach ($Result as $item)
	{

		$cateId=intval($item['id']);
		$sql="SELECT * FROM product WHERE category_id=$cateId LIMIT 2"; // lấy 2 sản phẩm từ mỗi danh mục
		$Products = $db-> fetchsql($sql);
		$Total = count($db-> fetchsql($sql)); // Đếm số tối đa để show và kết thúc khi đủ
		if($Total <= $Max)
		$data[$item['name']] = $Products;
		else break;

	}

	/// danh muc 2
	$Total = 0;
	$danhmuc2 = 6;
	$query = "SELECT category.name, category.id FROM category  WHERE category.home=1 and category.category_group = $danhmuc2 ORDER BY category.id";
	$Result=$db->fetchsql($query);
	// Lấy sản phẩm của từng danh mục bò vào data list
	foreach ($Result as $item)
	{
		$cateId=intval($item['id']);
		$sql="SELECT * FROM product WHERE category_id=$cateId LIMIT 2";
		$Products = $db-> fetchsql($sql);
		$Total = count($db-> fetchsql($sql));
		if($Total <= $Max)
		$data2[$item['name']] = $Products;
		else break;
	}
	/// danh muc 3s
	$Total = 0;
	$danhmuc3 = "(16,17,18)";
	$query = "SELECT category.name, category.id FROM category  WHERE category.home=1 and category.category_group IN $danhmuc3 ORDER BY category.id";
	$Result=$db->fetchsql($query);
	// Lấy sản phẩm của từng danh mục bò vào data list
	foreach ($Result as $item)
	{
		$cateId=intval($item['id']);
		$sql="SELECT * FROM product WHERE category_id=$cateId LIMIT 2";
		$Products = $db-> fetchsql($sql);
		$Total = count($db-> fetchsql($sql));
		if($Total <= $Max)
		$data3[$item['name']] = $Products;
		else break;
	}
?>

<?php  require_once __DIR__. "/layouts/header.php";?>
<section>
<aside class="colcontent">
				<link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/owl.carousel.css">
        <script src="<?php echo base_url() ?>public/frontend/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="<?php echo base_url() ?>public/frontend/js/owl.carousel.min.js"></script>
      	<script src="<?php echo base_url() ?>public/frontend/js/vendor/bootstrap.min.js"></script>
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="./public/uploads/banner1.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">

</div>
</div>
<div class="carousel-item">
<img src="./public/uploads/banner2.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">

</div>
</div>
<div class="carousel-item">
<img src="./public/uploads/banner3.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">

</div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Trang trước</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Trang sau</span>
</a>
</div>





<div class="groupcate">

</div>






<div class="groupfeature groupfeaturefresh ">
                        <div class="banner">
                            <img src="//cdn.tgdd.vn/bachhoaxanh/www/Content/images/desktop/stickFresh.v202108262236.png" alt="Thịt, cá, trứng, rau">
                                <div class="owl-carousel bannertitle owl-loaded">


                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1029px, 0px, 0px); transition: all 0s ease 0s; width: 2058px;"><div class="owl-item cloned" style="width: 343px;"><div class="meattitle">
                                            THỊT, CÁ, TRỨNG, RAU CỦ

                                        </div></div>

																				<div class="owl-item cloned" style="width: 343px;"><div class="">
                                            THỊT, CÁ, TRỨNG, RAU CỦ
                                        </div></div>
																				<div class="owl-item animated owl-animated-out slideOutUp" style="width: 343px; left: 343px;"><div class="meattitle">
                                            THỊT, CÁ, TRỨNG, RAU CỦ

                                        </div></div>
																				<div class="owl-item animated owl-animated-in slideInUp active" style="width: 343px;"><div class="">
                                            THỊT, CÁ, TRỨNG, RAU CỦ
                                        </div></div>
																				<div class="owl-item cloned" style="width: 343px;"><div class="meattitle">
                                            THỊT, CÁ, TRỨNG, RAU CỦ

                                        </div></div>

																				<div class="owl-item cloned" style="width: 343px;"><div class="">
                                            THỊT, CÁ, TRỨNG, RAU CỦ
                                        </div></div></div></div>

																				<div class="owl-nav disabled"><button type="button" role="presentation" aria-label="nav" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" aria-label="nav" class="owl-next"><span aria-label="Next">›</span></button></div>
																				<div class="owl-dots disabled"></div></div>
                        </div>
		                    <div class="cate-list">
															<?php
																	$dmlist=[];
																	$querydm = "SELECT * FROM category WHERE id IN (1,2,3,4,5,6)";
																	$dm = $db->fetchsql($querydm);
																	$dmlist[$item['name']] = $dm;

															?><?php foreach ($dmlist as $key=> $value): ?>
													    <?php foreach ($value as $item): ?><a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>">
		                            <div  title="<?php echo $item['name'] ?>" class="  cate-item">
																	<span>
																 <?php echo substr($item['name'] , 0, 25);?> <br>                                </span>
															 </div></a>
															<?php endforeach ?>
													    <?php endforeach ?>
												</div>
												<ul class="cate cateproduct">
												    <?php foreach ($data as $key=> $value): ?>
												    <?php foreach ($value as $item): ?>
												    <li class=" product fruit  ">
												        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>" title="<?php echo $item['name'] ?>">
																					<div class="boximg center" title="<?php echo $item['name'] ?>">
																						<img class="lazy initial loaded" width="160" height="160" data-src="<?php echo uploads() ?>product/<?php echo $item['image'] ?>" alt="<?php echo $item['name'] ?>" src="<?php echo uploads() ?>product/<?php echo $item['image'] ?>"	data-was-processed="true">
																					</div>
																					<div class="product-name"><?php echo $item['name'] ?></div>
																					<div class="price">
																						<strong>
																							<?php if ($item['sale']>0): ?>
																									<?php echo formatpricesale($item['price'],$item['sale'])?>&ensp;<strike><?php echo formatPrice($item['price']) ?></strike>
																							<?php else: ?>
																								<?php echo formatpricesale($item['price'],$item['sale'])?>
																							<?php endif ?>
																						</strong>

																					</div>
																				</a>
												        <!-- Mua Sản phẩm -->
												        <a href="addcart_index.php?id=<?php echo $item['id'] ?>">
												            <div class="buy2">Chọn mua</div>
												        </a>

												    </li>
												    <?php endforeach ?>
												    <?php endforeach ?>
												</ul>



												<div class="viewmore noafter" ></div>
											<div class="cate-prom hidden">  </div>
</div>
<div class="groupfeature groupfeaturefresh ">
		                        <div class="banner">
		                            <img src="//cdn.tgdd.vn/bachhoaxanh/www/Content/images/desktop/stickFresh.v202108262236.png" alt="Thịt, cá, trứng, rau">
		                                <div class="owl-carousel bannertitle owl-loaded">


		                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1029px, 0px, 0px); transition: all 0s ease 0s; width: 2058px;"><div class="owl-item cloned" style="width: 343px;"><div class="meattitle">
		                                            ĐỒ UỐNG CÁC LOẠI

		                                        </div></div>

																						<div class="owl-item cloned" style="width: 343px;"><div class="">
		                                            ĐỒ UỐNG CÁC LOẠI
		                                        </div></div>
																						<div class="owl-item animated owl-animated-out slideOutUp" style="width: 343px; left: 343px;"><div class="meattitle">
		                                            ĐỒ UỐNG CÁC LOẠI

		                                        </div></div>
																						<div class="owl-item animated owl-animated-in slideInUp active" style="width: 343px;"><div class="">
		                                            ĐỒ UỐNG CÁC LOẠI
		                                        </div></div>
																						<div class="owl-item cloned" style="width: 343px;"><div class="meattitle">
		                                            ĐỒ UỐNG CÁC LOẠI

		                                        </div></div>

																						<div class="owl-item cloned" style="width: 343px;"><div class="">
		                                            ĐỒ UỐNG CÁC LOẠI
		                                        </div></div></div></div>

																						<div class="owl-nav disabled"><button type="button" role="presentation" aria-label="nav" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" aria-label="nav" class="owl-next"><span aria-label="Next">›</span></button></div>
																						<div class="owl-dots disabled"></div></div>
		                        </div>
				                    <div class="cate-list">
																	<?php
																			$dmlist=[];
																			$querydm = "SELECT * FROM category WHERE id IN (38,39,40)";
																			$dm = $db->fetchsql($querydm);
																			$dmlist[$item['name']] = $dm;

																	?><?php foreach ($dmlist as $key=> $value): ?>
															    <?php foreach ($value as $item): ?><a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>">
				                            <div  title="<?php echo $item['name'] ?>" class="  cate-item">
																			<span>
																		  <?php echo substr($item['name'] , 0, 25);?> <br>                                </span>
																	 </div></a>
																	<?php endforeach ?>
															    <?php endforeach ?>
														</div>
														<ul class="cate cateproduct">
														    <?php foreach ($data2 as $key=> $value): ?>
														    <?php foreach ($value as $item): ?>
														    <li class=" product fruit  " data-product="239161" data-sku="1234259000036" data-maxqtyonbill="0" data-priceonbill="158.000₫" data-store="0">
														        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>" title="<?php echo $item['name'] ?>">
																							<div class="boximg center" title="<?php echo $item['name'] ?>">
																								<img class="lazy initial loaded" width="160" height="160" data-src="<?php echo uploads() ?>product/<?php echo $item['image'] ?>" alt="<?php echo $item['name'] ?>" src="<?php echo uploads() ?>product/<?php echo $item['image'] ?>"	data-was-processed="true">
																							</div>
																							<div class="product-name"><?php echo $item['name'] ?></div>
																							<div class="price">
																								<strong>
																									<?php if ($item['sale']>0): ?>
																											<?php echo formatpricesale($item['price'],$item['sale'])?>&ensp;<strike><?php echo formatPrice($item['price']) ?></strike>
																									<?php else: ?>
																										<?php echo formatpricesale($item['price'],$item['sale'])?>
																									<?php endif ?>
																								</strong>

																							</div>
																						</a>
														        <!-- Mua Sản phẩm -->
														        <a href="addcart_index.php?id=<?php echo $item['id'] ?>">
														            <div class="buy2">Chọn mua</div>
														        </a>

														    </li>
														    <?php endforeach ?>
														    <?php endforeach ?>
														</ul>

                    									<div class="viewmore noafter" ></div>
                                    <div class="cate-prom hidden">  </div>
</div>



<div class="groupfeature groupfeaturefresh ">
		                        <div class="banner">
		                            <img src="//cdn.tgdd.vn/bachhoaxanh/www/Content/images/desktop/stickFresh.v202108262236.png" alt="Thịt, cá, trứng, rau">
		                                <div class="owl-carousel bannertitle owl-loaded">


		                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1029px, 0px, 0px); transition: all 0s ease 0s; width: 2058px;"><div class="owl-item cloned" style="width: 343px;"><div class="meattitle">
		                                            SỮA UỐNG CÁC LOẠI

		                                        </div></div>

																						<div class="owl-item cloned" style="width: 343px;"><div class="">
		                                            SỮA UỐNG CÁC LOẠI
		                                        </div></div>
																						<div class="owl-item animated owl-animated-out slideOutUp" style="width: 343px; left: 343px;"><div class="meattitle">
		                                            SỮA UỐNG CÁC LOẠI

		                                        </div></div>
																						<div class="owl-item animated owl-animated-in slideInUp active" style="width: 343px;"><div class="">
		                                            SỮA UỐNG CÁC LOẠI
		                                        </div></div>
																						<div class="owl-item cloned" style="width: 343px;"><div class="meattitle">
		                                            SỮA UỐNG CÁC LOẠI

		                                        </div></div>

																						<div class="owl-item cloned" style="width: 343px;"><div class="">
		                                            SỮA UỐNG CÁC LOẠI
		                                        </div></div></div></div>

																						<div class="owl-nav disabled"><button type="button" role="presentation" aria-label="nav" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" aria-label="nav" class="owl-next"><span aria-label="Next">›</span></button></div>
																						<div class="owl-dots disabled"></div></div>
		                        </div>
				                    <div class="cate-list">
																	<?php
																			$dmlist=[];
																			$querydm = "SELECT * FROM category WHERE id IN (41,42,46,47)";
																			$dm = $db->fetchsql($querydm);
																			$dmlist[$item['name']] = $dm;

																	?><?php foreach ($dmlist as $key=> $value): ?>
															    <?php foreach ($value as $item): ?><a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>">
				                            <div  title="<?php echo $item['name'] ?>" class="  cate-item">
																			<span>
																		  <?php echo substr($item['name'] , 0, 25);?> <br>                                </span>
																	 </div></a>
																	<?php endforeach ?>
															    <?php endforeach ?>
														</div>
														<ul class="cate cateproduct">
														    <?php foreach ($data3 as $key=> $value): ?>
														    <?php foreach ($value as $item): ?>
														    <li class=" product fruit  " data-product="239161" data-sku="1234259000036" data-maxqtyonbill="0" data-priceonbill="158.000₫" data-store="0">
														        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>" title="<?php echo $item['name'] ?>">
																							<div class="boximg center" title="<?php echo $item['name'] ?>">
																								<img class="lazy initial loaded" width="160" height="160" data-src="<?php echo uploads() ?>product/<?php echo $item['image'] ?>" alt="<?php echo $item['name'] ?>" src="<?php echo uploads() ?>product/<?php echo $item['image'] ?>"	data-was-processed="true">
																							</div>
																							<div class="product-name"><?php echo $item['name'] ?></div>
																							<div class="price">
																								<strong>
																									<?php if ($item['sale']>0): ?>
																											<?php echo formatpricesale($item['price'],$item['sale'])?>&ensp;<strike><?php echo formatPrice($item['price']) ?></strike>
																									<?php else: ?>
																										<?php echo formatpricesale($item['price'],$item['sale'])?>
																									<?php endif ?>
																								</strong>

																							</div>
																						</a>
														        <!-- Mua Sản phẩm -->
														        <a href="addcart_index.php?id=<?php echo $item['id'] ?>">
														            <div class="buy2">Chọn mua</div>
														        </a>

														    </li>
														    <?php endforeach ?>
														    <?php endforeach ?>
														</ul>

                    									<div class="viewmore noafter" ></div>
                                    <div class="cate-prom hidden">  </div>
</div>

</aside>
</section>
<?php  require_once __DIR__. "/layouts/footer.php";?>
