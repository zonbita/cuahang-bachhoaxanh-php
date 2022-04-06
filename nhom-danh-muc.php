<?php
require_once __DIR__. "/autoload/autoload.php";
	// Get ID được truyền trên link
	$id =intval(getInput('id'));
	// Lấy tên nhóm danh mục
	$EditCategory = $db->fetchID("categorygroup",$id);
	// Kiểm tra trang
	if(isset($_GET['p']))
		$p=$_GET['p'];
	else $p=1;

	$query = "SELECT category.id FROM category  WHERE category.home=1 and category.category_group = $id GROUP by category.id";
	// Tăng giảm sắp xếp
	$selectOption = $_POST['option'];


	$arrays=$db->fetchsql($query);
	$a = "";
	// Nếu chỉ có 1 ID thì chạy này, ngược lại thì chạy nhiều
	if(count($arrays)==1 || count($arrays)==0){
		$a = "(".$arrays["0"]["id"].")";
	}else{
		$first  = reset($arrays);
		$last   = end($arrays);
		$a = "";
		foreach( $arrays as $item )
		{

			if ( $first == $item )
			{
				$a .= "(".$item["id"];
			}
			else if ( $last == $item )
			{
				$a .= ",".$item["id"].")";
			}
			else
			{
				$a .= ",".$item["id"];
			}

		}
	}
	echo $selectOption;
	switch ($selectOption) {

		case NULL:
				$sql = "SELECT * FROM product WHERE category_id IN $a GROUP BY price ASC";
			break;
			case "1":
				$sql = "SELECT * FROM product WHERE category_id IN $a GROUP BY price ASC";
			break;
			case "2":
				$sql = "SELECT * FROM product WHERE category_id IN $a GROUP BY price DESC";
			break;
			case "3":
					$sql = "SELECT * FROM product WHERE category_id and sale > 0 IN $a GROUP BY price ASC";
				break;

			default:
				$sql = "SELECT * FROM product WHERE category_id IN $a GROUP BY price ASC";
			break;
	}

	// Lấy danh sách sản phẩm theo id group

	$total=count($db->fetchsql($sql));
	// Lấy ra số lượng cho mỗi trang
	$product= $db->fetchJones("product",$sql,$total,$p,4,true);
	$sotrang=$product['page'];
	unset($product['page']);

	$path=$_SERVER['SCRIPT_NAME'];




?>

<?php  require_once __DIR__. "/layouts/header.php";?>

<section>
    <div class="colcontent">
        <div class="boxproduct group ">


            <div class="filter-bar d-flex flex-wrap align-items-center">
                <h1 style="padding: 20px;color: yellow;font-size: revert;border-radius: 5px;"><?php echo $EditCategory['name'] ?></h1>
								<form name=frm action="" method="POST">
	                <div class="sorting ml-auto">
	                    <select name="option" onchange='this.form.submit()' selected="true">
													<option style="display:none" >Sắp xếp</option>
	                        <option value="1">Giá tăng dần</option>
	                        <option value="2">Giá giảm dần</option>
	                        <option value="3">Giảm giá</option>
	                    </select>
	                </div>
								</form>

            </div>


            <ul class="cate">
                <section2>
                    <?php foreach ($product as $item): ?>
                    <li class=' product fruit'>
                        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>" title="<?php echo $item['name'] ?>">
                            <div class="boximg center" title="<?php echo $item['name'] ?>">
                                <img width="160" height="160" src="<?php echo uploads() ?>product/<?php echo $item['image'] ?>" alt="<?php echo $item['name'] ?>">
                            </div>
                            <div class="product-name">
                                <?php echo $item[ 'name'] ?>
                            </div>

                            <?php if ($item[ 'sale']>0): ?>
                            <div class="price">
                                <strong><?php echo formatpricesale($item['price'],$item['sale'])?></strong>
                                <span><?php echo formatPrice($item['price']) ?></span>



                            </div>
                            <?php else: ?>
                            <div class="price">
                                <strong><?php echo formatPrice($item['price']) ?></strong>
                            </div>
                            <?php endif ?>
                            </h3>
                        </a>

                        <a class="buy2 " href="addcart.php?id=<?php echo $item['id'] ?>">Chọn mua</a>
                        <div class="updown ">
                            <div class="down"><span></span>
                            </div>
                            <input class="number" value="0" maxlength="50" pattern="[0-9]*" type="number">
                            <div class="up"><span></span><span></span>
                            </div>
                        </div>
                    </li>
                    <?php endforeach ?>

                </section2>
			</ul>


<section2>

				<div class="filter-bar d-flex flex-wrap align-items-center">

					<div class="pagination">
						<!-- <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a> -->
						<?php for ($i=1; $i <= $sotrang ; $i++) :?>
							<a class="<?php echo isset($_GET['p']) && $_GET['p']==$i ? 'active' : '' ?>"
								href="<?php echo $path ?>?id=<?php echo $id ?>&&p=<?php echo $i ?>&&option=<?php echo $selectOption?>">
								<?php echo $i ?></a>
						<?php endfor; ?>
						<!-- <a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
					</div>
				</div>


			</div>
		</div>
</section2>
</section>

<?php  require_once __DIR__. "/layouts/footer.php";?>
