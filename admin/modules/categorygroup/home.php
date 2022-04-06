<?php 
$open="category";
require_once __DIR__. "/../../autoload/autoload.php";
 
$id=intval(getInput('id'));

$EditCategory = $db->fetchID("categorygroup",$id);    
if(empty($EditCategory)) 
{
	$_SESSION['error']="Dữ liệu không tồn tại";
	redirectAdmin('categorygroup');
}

$home=$EditCategory['home']==0? 1 : 0;
$update= $db->update("categorygroup", array("home" => $home), array("id"=> $id));
if($update>0)
{
	$_SESSION['success']="Cập nhật  thành công";
	redirectAdmin("categorygroup");
}
else
{
	$_SESSION['error']="Dữ liệu không thay đổi";
	redirectAdmin("categorygroup");

}

?>