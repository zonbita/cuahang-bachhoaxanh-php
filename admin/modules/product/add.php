<?php
$open="product";
require_once __DIR__. "/../../autoload/autoload.php";

//ds sanpham
$category=$db->fetchAll("category");


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data=
    [
        "name"=>    postInput('name'),
        //"slug"=>    to_slug(postInput("name")),
        "category_id"=>  postInput('category_id'),
        "price"=>  postInput('price'),
        "content"=>  postInput('content'),
        "number"=>    postInput('number'),

    ];

    $error=[];

    if(postInput('name')=='')
    {
        $error['name']="Bạn phải nhập danh mục";
    }
    if(postInput('category_id')=='')
    {
        $error['category_id']="Mời bạn chọn tên danh mục";
    }
    if(postInput('price')=='')
    {
        $error['price']="Mời bạn nhập giá sp";
    }
    if(postInput('number')=='')
    {
        $error['number']="Mời bạn nhập số lượng";
    }
    if(postInput('content')=='')
    {
        $error['content']="Mời bạn nhập nội dung";
    }
    if( ! isset($_FILES['image']))
    {
        $error['image']= "Mời bạn chọn hình ảnh";
    }
    if(empty($error))
    {
        if(isset($_FILES['image']))
        {
            $file_name  = $_FILES['image']['name'];
            $file_tmp   = $_FILES['image']['tmp_name'];
            $file_type  = $_FILES['image']['type'];
            $file_erro  = $_FILES['image']['error'];

            if($file_erro ==0)
            {
                $part= $_SERVER["DOCUMENT_ROOT"] ."/cuahang/public/uploads/product/";
                $data['image']=$file_name;
            }
        }
        $id_insert = $db->insert("product",$data);
        if($id_insert)
        {
            move_uploaded_file($file_tmp, $part.$file_name);
            $_SESSION['success']="Thêm mới thành công";
            //redirectAdmin("product");
        }
        else
        {
            $_SESSION['error']="Thêm mới thất bại";
        }
    }
}
?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Thông tin</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo modules("product") ?>">Sản phẩm</a>
    </li>
    <li class="breadcrumb-item active">Thêm mới</li>
</ol>
<!-- Page Content -->
<h1>Thêm mới sản phẩm</h1>
<div class="clearfix"></div>
<?php require_once __DIR__. "/../../../partials/notification.php"; ?>
<hr>
</div>
<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputcategory" class="col-sm-2 control-label">Danh mục sản phẩm</label>
                <div class="col-sm-6">
                    <select class="form-control" name="category_id">
                        <option value="">Mời chọn danh mục sản phẩm</option>
                        <?php foreach ($category as $item): ?>
                            <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <?php if(isset($error['category_id'])): ?>
                        <p class="text-danger"> <?php echo $error['category_id'] ?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputname" class="col-sm-2 control-label">Tên sản phẩm</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputname" placeholder="" name="name">
                    <?php if(isset($error['name'])): ?>
                        <p class="text-danger"> <?php echo $error['name'] ?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputprice" class="col-sm-2 control-label">Giá</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputprice" placeholder="" name="price">
                    <?php if(isset($error['price'])): ?>
                        <p class="text-danger"> <?php echo $error['price'] ?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputsale" class="col-sm-2 control-label">Giảm giá(%)</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" id="inputsale" placeholder="0" name="sale">
                </div>
            </div>

            <div class="form-group">
                <label for="inputnumber" class="col-sm-2 control-label">Số lượng</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputnumber" placeholder="" name="number" value="999">
                    <?php if(isset($error['number'])): ?>
                        <p class="text-danger"> <?php echo $error['number'] ?></p>
                    <?php endif ?>
                </div>
            </div>


            <div class="form-group">
                <label for="inputimage" class="col-sm-2 control-label">Ảnh</label>
                <div class="col-sm-4">
                    <input type="file" class="form-control" id="inputimage" placeholder="" name="image">
                    <?php if(isset($error['image'])): ?>
                        <p class="text-danger"> <?php echo $error['image'] ?></p>
                    <?php endif ?>

                </div>
            </div>




            <div class="form-group">
                <label for="inputcontent" class="col-sm-2 control-label">Nội dung</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="content" rows="4"></textarea>
                    <?php if(isset($error['content'])): ?>
                        <p class="text-danger"> <?php echo $error['content'] ?></p>
                    <?php endif ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>
