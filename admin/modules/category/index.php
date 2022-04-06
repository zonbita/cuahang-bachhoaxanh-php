<?php
    $open="category";

require_once __DIR__. "/../../autoload/autoload.php";

$category = $db->fetchAll("category");
?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item ">Danh mục </li>
        </ol>

        <!-- Page Content -->
        <h1>Danh sách danh mục
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
      <th scope="col">Slug</th>
      <th scope="col">Home</th>
      <th scope="col">Category Group</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $stt=1; foreach ($category as $item): ?>
        <tr>
          <th scope="row"><?php echo $stt ?></th>
          <td><?php echo $item['name'] ?></td>
          <td><?php echo $item['slug'] ?></td>
          <td>
            <a href="home.php?id=<?php echo $item['id']?>" class="btn btn-xs
              <?php echo $item['home']==1 ? 'btn-info' : 'btn-default' ?>">
              <?php echo $item['home']==1 ? 'Hiển thị' : 'Không' ?></a>
          </td>
          <td><?php echo $item['category_group'] ?></td>

          <td>
              <a class="btn btn-xs btn-info"  href="edit.php?id=<?php echo $item['id'] ?>">Sửa</a>
              <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>">Xoá</a>
          </td>
        </tr>
    <?php $stt++; endforeach ?>
  </tbody>
</table>

<?php require_once __DIR__. "/../../layouts/footer.php"; ?>
