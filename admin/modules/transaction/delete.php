<?php
  $open="transaction";
  require_once __DIR__. "/../../autoload/autoload.php";
  $id = $_GET['id'];

  $deleteadmin = $db->fetchID("transaction",$id);
  if(empty($deleteadmin))
  {
      $_SESSION['error']="Dữ liệu không tồn tại";
      redirectAdmin('admin');
  }

  $num=$db->delete("transaction",$id);
  if($num>0)
  {
      //$_SESSION['success']="Xoá thành công";
      echo"<SCRIPT LANGUAGE='JavaScript'>alert('Xóa thành công!');</script>";
      redirectAdmin("transaction");
  }
  else
  {
      //$_SESSION['success']="Xoá thất bại";
        echo"<SCRIPT LANGUAGE='JavaScript'>alert('Xóa thất bại!');</script>";
      redirectAdmin("transaction");
  }
 ?>
