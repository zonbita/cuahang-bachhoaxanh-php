<?php
$open="category";
require_once __DIR__. "/../../autoload/autoload.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data=
    [
        "name"=>    postInput('name'),
        "slug"=>    to_slug(postInput("name"))
    ];

    $error=[];

    if(postInput('name')=='')
    {
        $error['name']="Bạn phải nhập danh mục";
    }

    if(empty($error))
    {
        $isset = $db->fetchOne("category", "name='".$data['name']."' ");
        if(count($isset)>0)
        {
            $_SESSION['error']="Tên đã tồn tại";
        }
        else
        {
            $id_insert = $db->insert("category",$data);
            if($id_insert>0)
            {
                $_SESSION['success']="Thêm mới thành công";
                redirectAdmin("category");
            }
            else
            {
                $_SESSION['error']="Thêm mới thất bại";

            }
        }

    }
}
?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html"></a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo modules("category") ?>">Danh mục</a>
    </li>
    <li class="breadcrumb-item ">Thêm mới</li>
</ol>
<!-- Page Content -->
<h1>Thêm mới danh mục</h1>
<div class="clearfix"></div>
<?php require_once __DIR__. "/../../../partials/notification.php"; ?>
<hr>
</div>
<form class="form-horizontal" role="form" action="" method="POST">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Tên danh mục</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="name">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Lưu</button>
        </div>
    </div>
</form>
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>
