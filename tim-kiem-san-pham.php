<?php
require_once __DIR__. "/autoload/autoload.php";
    $search = addslashes($_GET['search']);

		if(isset($_GET['p']))
		{
			$p=$_GET['p'];
		}
		else
		{
			$p=1;
		}
		$sql = "SELECT * FROM product WHERE name like '%$search%'";
		$total=count($db->fetchsql($sql));

		$product= $db->fetchJones("product",$sql,$total,$p,5,true);
		$sotrang=$product['page'];
		unset($product['page']);

		$path=$_SERVER['SCRIPT_NAME'];

?>

<?php  require_once __DIR__. "/layouts/header2.php";?>

<section>

	<div class="container">
		<div class="boxproduct group ">

<style>
.cate .product,
.cate .expired {
 float:left;
 width:222px;
 background:#fff;
 border:1px solid #eee;
 border-top:0;
 margin:0;
 position:relative;
 padding-bottom:60px;
 box-sizing:border-box
}

</style>
<div style="background: #fff;">


							<div class="nameproduct text-center">

							Tìm kiếm sản phẩm
							</div>


</div>

<ul class="cate">
						<?php foreach ($product as $item): ?>

              <li class=' product fruit  '  >    <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>" title="<?php echo $item['name'] ?>">
      				        <div class="boximg center" title="Thăn b&#242; &#218;c khay 250g">
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



				<div class="filter-bar d-flex flex-wrap align-items-center">

					<div class="pagination">

						<?php for ($i=1; $i <= $sotrang ; $i++) :?>
							<a class="<?php echo isset($_GET['p']) && $_GET['p']==$i ? 'active' : '' ?>"
								href="<?php echo $path ?>?search=<?php echo $search ?>&&p=<?php echo $i ?>">
								<?php echo $i ?></a>
						<?php endfor; ?>
					</div>
				</div>



			</div>
		</div>

</section>
