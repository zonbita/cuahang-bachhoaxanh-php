<?php
	require_once __DIR__. "/../../autoload/autoload.php";
	$open="categorygroup";
	$categorygroup = $db->fetchAll("categorygroup");
?>
<?php require_once __DIR__. "/../../layouts/header.php"; ?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Bảng</a>
            </li>
            <li class="breadcrumb-item ">Nhóm danh mục </li>
        </ol>

        <!-- Page Content -->
        <h1>Danh sách nhóm danh mục
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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $stt=1; foreach ($categorygroup as $item): ?>
        <tr>
          <th scope="row"><?php echo $item['id'] ?></th>
          <td><?php echo $item['name'] ?></td>
          <td><?php echo $item['slug'] ?></td>

          <td>
              <a class="btn btn-xs btn-info"  href="edit.php?id=<?php echo $item['id'] ?>">Sửa</a>
              <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>">Xoá</a>
          </td>
        </tr>
    <?php $stt++; endforeach ?>
  </tbody>
</table>

<?php require_once __DIR__. "/../../layouts/footer.php"; ?>
