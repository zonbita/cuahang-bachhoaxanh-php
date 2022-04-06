<?php
require_once __DIR__. "/autoload/autoload.php";
if( isset($_SESSION['name_id']))
{
	session_destroy();

	header("Location: ./login.php");
};

?>
