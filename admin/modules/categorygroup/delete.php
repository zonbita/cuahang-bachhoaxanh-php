<?php 
$open="categorygroup";
require_once __DIR__. "/../../autoload/autoload.php";

$id=intval(getInput('id'));

$EditCategory = $db->fetchID("categorygroup",$id);    
if(empty($EditCategory))
{
    $_SESSION['error']="Dữ liệu không tồn tại";
    redirectAdmin('categorygroup');
}		 


//check danhmuc co sp không

$is_product=$db->fetchOne("product","category_id=$id ");
if($is_product==NULL)
{
	$num=$db->delete("categorygroup",$id);
	if($num>0)
	{
		$_SESSION['success']="Xoá thành công";
		redirectAdmin("categorygroup");
	}
	else
	{
		$_SESSION['error']="Xoá thất bại";
		redirectAdmin("categorygroup");
	}
	
}
else
{
	$_SESSION['error']="Danh mục có chứa sản phẩm, không thể xoá";
	redirectAdmin("categorygroup");
}

?>
