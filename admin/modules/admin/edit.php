<?php 
$open="admin";
require_once __DIR__. "/../../autoload/autoload.php";
 

$id=intval(getInput('id'));

$Editadmin = $db->fetchID("admin",$id);    
if(empty($Editadmin))
{
    $_SESSION['error']="Dữ liệu không tồn tại";
    redirectAdmin('admin');
}   

//ds sanpham



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data=
    [
        "name"=>    postInput('name'),
        "email"=>    postInput('email'),
        "phone"=>    postInput('phone'),
        //"password"=>  MD5(postInput('password')),
        "address"=>  postInput('address'),
    ];

    $error=[];

    if(postInput('name')=='')
    {
        $error['name']="Bạn phải nhập họ tên";
    }
    if(postInput('email')=='')
    {
        $error['email']="Mời bạn nhập email";
    }
    if(postInput('phone')=='')
    {
        $error['phone']="Mời bạn nhập sdt";
    }
    if(postInput('address')=='')
    {
        $error['address']="Mời bạn nhập địa chỉ";
    }
    // if($data['password'] != MD5(postInput("re_password")))
    // {
    //     $error['password']="Mật khẩu không khớp";

    // }
    if(postInput('password') != NULL && postInput('re_password') != NULL)
    {
        if(postInput('password') != postInput('re_password'))
        {
            $error['password']="Mật khẩu không khớp";
        }
        else
        {
            $data['password']=MD5(postInput("password"));
        }
    }
    if(empty($error))
    {
        
       $id_update = $db->update("admin",$data,array("id"=>$id));
       if($id_update>0 )
        {
            $_SESSION['success']="Cập nhật thành công";
            redirectAdmin("admin");
        }
        else
        {
            $_SESSION['error']="Cập nhật thất bại";
            redirectAdmin("admin");

        }
        //_debug($data);
    }
}    		
?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo modules("admin") ?>">Admin</a>
    </li>
    <li class="breadcrumb-item ">Thêm mới</li>
</ol>
<!-- Page Content -->
<h1>Thêm mới Admin</h1>
<div class="clearfix"></div>
<?php require_once __DIR__. "/../../../partials/notification.php"; ?>
<hr>                    
</div>
<form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Họ và tên</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputname" placeholder="" name="name" 
            value="<?php echo $Editadmin['name'] ?>">
            <?php if(isset($error['name'])): ?>
                <p class="text-danger"> <?php echo $error['name'] ?></p>
            <?php endif ?>           
        </div>
    </div>
    <div class="form-group">
        <label for="inputemail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-8">
            <input type="email" class="form-control" id="inputemail" placeholder="" name="email"
            value="<?php echo $Editadmin['email'] ?>">
            <?php if(isset($error['email'])): ?>
                <p class="text-danger"> <?php echo $error['email'] ?></p>
            <?php endif ?>           
        </div>
    </div>
    
    <div class="form-group">
        <label for="inputphone" class="col-sm-2 control-label">SDT</label>
        <div class="col-sm-8">
            <input type="number" class="form-control" id="inputphone" placeholder="" name="phone"
            value="<?php echo $Editadmin['phone'] ?>">           
        </div>
        <?php if(isset($error['phone'])): ?>
                <p class="text-danger"> <?php echo $error['phone'] ?></p>
            <?php endif ?>
    </div>
    <div class="form-group">
        <label for="inputpw" class="col-sm-2 control-label">Mật khẩu</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" id="inputpw" placeholder="" name="password">           
        </div>
        <?php if(isset($error['password'])): ?>
                <p class="text-danger"> <?php echo $error['password'] ?></p>
            <?php endif ?>
    </div>
    <div class="form-group">
        <label for="inputphone" class="col-sm-2 control-label">Nhập lại mật khẩu</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" id="inputpw" placeholder="" name="re_password">           
        </div>
        <?php if(isset($error['re_password'])): ?>
                <p class="text-danger"> <?php echo $error['re_password'] ?></p>
            <?php endif ?>
    </div>
    <div class="form-group">
        <label for="inputaddress" class="col-sm-2 control-label">Địa chỉ</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputaddress" placeholder="" name="address"
            value="<?php echo $Editadmin['address'] ?>">
            <?php if(isset($error['address'])): ?>
                <p class="text-danger"> <?php echo $error['address'] ?></p>
            <?php endif ?>           
        </div>
    </div>               
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Lưu</button>
        </div>
    </div>
</form>
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>
