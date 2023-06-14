<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo BASE_URL ?>app/view/dashboard/assets/images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- App css -->
    <link href="<?php echo BASE_URL ?>app/view/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="<?php echo BASE_URL ?>app/view/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL ?>app/view/dashboard/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?php echo BASE_URL ?>app/view/dashboard/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            <!-- Tên admin -->
                            <?=$_SESSION['account'][0]['hoten']?>  <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="<?php echo BASE_URL ?>login/logout" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                        <i class="mdi mdi-settings-outline noti-icon"></i>
                    </a>
                </li>


            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="<?php echo BASE_URL ?>login/dashboard" class="logo text-center logo-dark">
                    <span class="logo-lg">
                            <img src="<?php echo BASE_URL ?>app/view/dashboard/assets/images/logo-dark.png" alt="" height="26">
                            <!-- <span class="logo-lg-text-dark">Simple</span> -->
                    </span>
                    <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">S</span> -->
                    <img src="<?php echo BASE_URL ?>app/view/dashboard/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                </a>

                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                            <img src="<?php echo BASE_URL ?>app/view/dashboard/assets/images/logo-light.png" alt="" height="26">
                            <!-- <span class="logo-lg-text-light">Simple</span> -->
                    </span>
                    <span class="logo-sm">
                            <!-- <span class="logo-lg-text-light">S</span> -->
                    <img src="<?php echo BASE_URL ?>app/view/dashboard/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile">
                            <i class="mdi mdi-menu"></i>
                        </button>
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">


            <div class="user-box">
                <div class="float-left">
                    <img src="<?php echo BASE_URL ?>app/view/dashboard/assets/images\users\avatar-1.jpg" alt="" class="avatar-md rounded-circle">
                </div>
                <div class="user-info">
                    <!-- Tên quản trị viên -->
                    <a href="#"><?=$_SESSION['account'][0]['hoten']?></a>
                    <p class="text-muted m-0">Administrator</p>
                </div>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="<?php echo BASE_URL ?>login/dashboard">
                            <i class="ti-home"></i>
                            <span> Trang chủ </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-pencil-alt"></i>
                            <span>  Danh mục sản phẩm  </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="<?php echo BASE_URL ?>danhmuc/dsdm">Danh sách danh mục</a></li>
                            <li><a href="<?php echo BASE_URL ?>danhmuc/dsloaidm">Danh sách loại danh mục</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL ?>sanpham/">
                            <i class="ti-home"></i>
                            <span> Sản Phẩm </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL ?>taikhoan/dstk">
                            <i class="fa-sharp fa-solid fa-users"></i>
                            <span> Tài khoản </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL ?>giohang/dsDH">
                            <i class="fa-sharp fa-solid fa-users"></i>
                            <span> Đơn hàng </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL ?>khuyenmai/makhuyenmai">
                            <i class="fa-sharp fa-solid fa-users"></i>
                            <span> Khuyến Mãi </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-menu-alt"></i>
                            <span>  Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-advanced.html">Advanced Tables</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-share"></i>
                            <span>  Multi Level  </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);">Level 1.1</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                        <span class="menu-arrow"></span>
                                    </a>
                                <ul class="nav-third-level nav" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Level 2.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Level 2.2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>


        </div>
        <!-- Left Sidebar End -->
                <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start container-fluid -->
                <div class="container-fluid">
