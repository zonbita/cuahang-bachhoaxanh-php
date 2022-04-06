<?php
$open="product";

require_once __DIR__. "/../../autoload/autoload.php";

    //$product = $db->fetchAll("product");

if(isset($_GET['page']))
{
  $p = $_GET['page'];
}
else
{
  $p = 1;
}

$sql="SELECT  product.*,category.name as namecate FROM product
LEFT JOIN category on category.id = product.category_id";

$product = $db->fetchJone('product',$sql,$p,5,true);

if(isset($product['page']))
{
  $sotrang=$product['page'];
  unset($product['page']);
}
?>


<?php require_once __DIR__. "/../../layouts/header.php"; ?>
<div class="row">
  <div class="col-lg-12">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Dashboard</a>
      </li>
      <li class="breadcrumb-item ">Sản phẩm </li>
    </ol>

    <!-- Page Content -->
    <h1>Danh sách Sản phẩm
      <a href="add.php" class="btn btn-success">Thêm mới</a>
    </h1>
    <div class="clearfix"></div>
    <?php require_once __DIR__. "/../../../partials/notification.php"; ?>

    <hr>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $stt=1; foreach ($product as $item): ?>
    <tr>
      <th scope="row"><?php echo $stt ?></th>
      <td><?php echo $item['name'] ?></td>
      <td><?php echo $item['namecate'] ?></td>
      <td>
        <img src="<?php echo uploads() ?>product/<?php echo $item['image'] ?>" width="80px" height="80px">
      </td>
      <td><?php echo $item['price'] ?></td>
      <td><?php echo $item['number'] ?></td>

      <td>
        <a class="btn btn-xs btn-info"  href="edit.php?id=<?php echo $item['id'] ?>">Sửa</a>
        <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>">Xoá</a>
      </td>
    </tr>
    <?php $stt++; endforeach ?>
  </tbody>
</table>
<div class="pullright">
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
  
      <?php for($i=1; $i <= $sotrang; $i++): ?>
        <?php
        if(isset($_GET['page']))
        {
          $p=$_GET['page'];
        }
        else
        {
          $p=1;
        }
        ?>
        <li class="<?php echo ($i==$p) ? 'active' : '' ?>">
          <a class="page-link" href="?page=<?php echo $i ; ?>"><?php echo $i ?></a>
        </li>
      <?php endfor ?>
      <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li> -->

    </ul>
  </nav>
</div>
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>
