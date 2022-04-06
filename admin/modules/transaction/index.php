<?php
$open="transaction";

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

$sql="SELECT transaction.*, users.name as nameuser, users.phone as phoneuser FROM transaction LEFT JOIN users ON users.id = transaction.users_id ORDER BY ID DESC" ;

$transaction = $db->fetchJone('transaction',$sql,$p,5,true);

if(isset($transaction['page']))
{
  $sotrang=$transaction['page'];
  unset($transaction['page']);
}
?>


<?php require_once __DIR__. "/../../layouts/header.php"; ?>
<div class="row">
  <div class="col-lg-12">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Dashboard</a>
      </li>
      <li class="breadcrumb-item ">Đơn hàng </li>
    </ol>

    <!-- Page Content -->
    <h1>Danh sách Đơn hàng
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
      <th scope="col">Phone</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $stt=1; foreach ($transaction as $item): ?>
    <tr>
      <th scope="row"><?php echo $stt ?></th>
      <td><?php echo $item['nameuser'] ?></td>
      <td><?php echo $item['phoneuser'] ?></td>
      <td><?php echo $item['amount'] ?></td>
      <td>
        <a href="status.php?id=<?php echo $item['id'] ?>" class="btn btn-xs <?php echo $item['status']==0 ? 'btn-danger' : 'btn-success' ?>"><?php echo $item['status']==0 ? 'Chưa xử lí' : 'Đã xử lí' ?></a>
      </td>

      <td>
        <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>">Xoá</a>
      </td>
    </tr>
    <?php $stt++; endforeach ?>
  </tbody>
</table>
<div class="pullright">
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
      </li>
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
          <a href="?page=<?php echo $i ; ?>"><?php echo $i ?></a>
        </li>
      <?php endfor ?>
      <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li> -->
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
</div>
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>
