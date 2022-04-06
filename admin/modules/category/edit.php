<?php
$open="category";
require_once __DIR__. "/../../autoload/autoload.php";

$id=intval(getInput('id'));

$EditCategory = $db->fetchID("category",$id);
if(empty($EditCategory))
{
    $_SESSION['error']="Dữ liệu không tồn tại";
    redirectAdmin('category');
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data=
    [
        "name"=>    postInput('name'),
        "slug"=>    to_slug(postInput("name")),
        "category_group"=> postInput('category_group')
    ];

    $error=[];

    if(postInput('name')=='')
    {
        $error['name']="Bạn phải nhập danh mục";
    }

    if(empty($error))
    {
        if($EditCategory['name'] != $data['name'])
        {
            $isset = $db->fetchOne("category", "name='".$data['name']."' ");
            if(count($isset)>0)
            {
                $_SESSION['error']="Tên đã tồn tại";
            }
            else
            {
                $id_update = $db->update("category",$data,array("id"=>$id));
                if($id_update>0)
                {
                    $_SESSION['success']="Cập nhật  thành công";
                    redirectAdmin("category");
                }
                else
                {
                    $_SESSION['error']="Dữ liệu không thay đổi";
                    redirectAdmin("category");

                }
            }
        }
        else
        {
            $id_update = $db->update("category",$data,array("id"=>$id));
            if($id_update>0)
            {
                $_SESSION['success']="Cập nhật  thành công";
                redirectAdmin("category");
            }
            else
            {
                $_SESSION['error']="Dữ liệu không thay đổi";
                redirectAdmin("category");

            }
        }

    }
}
?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="index.html">Danh mục</a>
    </li>
    <li class="breadcrumb-item ">Thêm mới</li>
</ol>
<!-- Page Content -->
<h1>Thêm mới danh mục</h1>
<hr>
</div>
<form class="form-horizontal" role="form" action="" method="POST">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Tên danh mục</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="name" value="<?php echo $EditCategory['name'] ?>">
            <input type="number" class="form-control" id="inputEmail3" placeholder="" name="category_group" value="<?php echo $EditCategory['category_group'] ?>">
                        <!-- <?php if(isset($error['name'])): ?>
                            <p class="text-danger"> <?php echo $error['name'] ?> </p>
                            <?php endif ?> -->
                            <?php require_once __DIR__. "/../../../partials/notification.php"; ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Lưu</button>
                        </div>
                    </div>
                </form>
                <?php require_once __DIR__. "/../../layouts/footer.php"; ?>
