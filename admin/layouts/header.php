<!DOCTYPE html>
<?php
	if( !isset($_SESSION['name_id']))
	{
		header("Location: ./login.php");
	}else{
		$id = intval(getInput('id'));
		$category = $db->fetchAll("category");
	}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Trang Quản Lý Admin</title>
        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url() ?>public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="<?php echo base_url() ?>public/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="<?php echo base_url() ?>public/admin/css/sb-admin.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
            <a class="navbar-brand mr-1" href="<?php echo base_url() ?>/admin">Xin chào Admin</a>
            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
            </button>
            <!-- Navbar Search -->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Navbar -->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item" href="#">1</a>
                        <a class="dropdown-item" href="#">2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">3</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-danger">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                        <a class="dropdown-item" href="#">1</a>
                        <a class="dropdown-item" href="#">2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">3</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Thiết lập</a>
                        <a class="dropdown-item" href="#">Hành động</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Thoát</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Bảng điều khiển</span>
                    </a>
                </li>
                <li class="<?php echo isset($open) && $open =='categorygroup' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo modules("categorygroup") ?>">
                    <i class="fas fa-fw fas fa-list "></i>
                    <span>Nhóm danh mục</span>
                    </a>
                </li>
                <li class="<?php echo isset($open) && $open =='category' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo modules("category") ?>">
                    <i class="fas fa-fw fas fa-list "></i>
                    <span>Danh mục sản phẩm</span>
                    </a>
                </li>
                 <li class="<?php echo isset($open) && $open=='product' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo modules("product") ?>">
                    <i class="fas fa-fw fas fa-database"></i>
                    <span>Sản phẩm</span>
                    </a>
                </li>
                <li class="<?php echo isset($open) && $open=='admin' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo modules("admin") ?>">
                    <i class="fas fa-fw fas fa-user-tie"></i>
                    <span>Admin</span>
                    </a>
                </li>
                <li class="<?php echo isset($open) && $open=='user' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo modules("user") ?>">
                    <i class="fas fa-fw fas fa-user-tie"></i>
                    <span>Tài khoản</span>
                    </a>
                </li>
                <li class="<?php echo isset($open) && $open=='transaction' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo modules("transaction") ?>">
                    <i class="fas fa-fw fas fa-user-tie"></i>
                    <span>Đơn hàng</span>
                    </a>
                </li>
            
            </ul>
            <div id="content-wrapper">
                <div class="container-fluid">
                    <!-- Breadcrumbs-->
