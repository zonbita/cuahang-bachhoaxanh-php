<?php
$open="user";

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

$sql="SELECT  users.* FROM users ORDER BY ID DESC" ;

$admin = $db->fetchJone('users',$sql,$p,5,true);

if(isset($admin['page']))
{
  $sotrang=$admin['page'];
  unset($admin['page']);
}
?>


<?php require_once __DIR__. "/../../layouts/header.php"; ?>
<div class="row">
  <div class="col-lg-12">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Dashboard</a>
      </li>
      <li class="breadcrumb-item">Users </li>
    </ol>

    <!-- Page Content -->
    <h1>Danh sách Thành viên
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
      <th scope="col">Email</th>
      <th scope="col">Phone</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $stt=1; foreach ($admin as $item): ?>
    <tr>
      <th scope="row"><?php echo $stt ?></th>
      <td><?php echo $item['name'] ?></td>
      <td><?php echo $item['email'] ?></td>
      <td><?php echo $item['phone'] ?></td>

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
        <a class="page-link" href="#" tabindex="-1">Sau</a>
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
