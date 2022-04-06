<?php 
$open="user";
require_once __DIR__. "/../../autoload/autoload.php";

$id=intval(getInput('id'));
 
$deleteadmin = $db->fetchID("users",$id);    
if(empty($deleteadmin))
{
    $_SESSION['error']="Dữ liệu không tồn tại";
    redirectAdmin('user');
}		

$num=$db->delete("users",$id);
if($num>0)
{
    $_SESSION['success']="Xoá thành công";
    redirectAdmin("user");
}
else
{
    $_SESSION['success']="Xoá thất bại";
    redirectAdmin("user");
}
?>

