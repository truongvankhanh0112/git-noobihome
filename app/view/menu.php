<div class="mainBody-theme-container mainBody-modalshow  ">
        <div class="mainHeader--height" style="min-height: 104px;">
            <header class="mainHeader  mainHeader_temp02" id="site-header">
                <div class="topbar">
                    <div class="container">
                        <ul class="topbar-slideText ">

                            <li class="discount">
                                <!-- Miễn phí vận chuyển với đơn hàng trên <strong>300k</strong> -->
                                <P></P>
                            </li>


                        </ul>

                    </div>
                </div>

                <div class="mainHeader-middle">
                    <div class="container">
                        <div class="flex-container-header">
                            <div class="header-wrap-iconav header-wrap-action visible-sm visible-xs">
                                <div class="header-action">
                                    <div class="header-action-item header-action_menu">
                                        <div class="header-action_text">
                                            <a class="header-action__link header-action_clicked" href="javascript:void(0)" id="site-menu-handle" aria-label="Menu" title="Menu">
                                                <span class="box-icon">								
                                        <span class="hamburger-menu" aria-hidden="true">
                                            <span class="bar"></span>
                                                </span>
                                                <span class="box-icon--close">
                                            <svg viewBox="0 0 19 19" role="presentation"><path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path></svg>
                                        </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="header-action_dropdown">
                                            <span class="box-triangle">
                                    <svg viewBox="0 0 20 9" role="presentation">
                                        <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                    </svg>
                                </span>
                                            <div class="header-dropdown_content">
                                                <div class="sitenav-menu menu-mobile" id="siteNav-menu">
                                                    <div class="menu-mobile--wrap">
                                                        <div class="menu-mobile--bottom">
                                                            <nav id="mp-menu" class="mp-menu mp-cover">
                                                                <div class="mp-level" data-level="1">
                                                                    <div class="mplus-menu">
                                                                        <ul class="mm-panel vertical-menu-list list-root">
                                                                            <li class="active">
                                                                                <a class="parent" href="/">Trang chủ</a>
                                                                            </li>
                                                                                <?php
                                                                                    foreach ($danhmuc as $key => $value) {
                                                                                        $iddm = $value['iddm'];
                                                                                ?>
                                                                                <li class="" data-menu-root="<?php echo $iddm ?>">

                                                                                    <a class="parent" href="<?php echo BASE_URL?>index/danhmuc/danhmucsanpham/<?php echo $value['iddm']?>"><?php echo $value['tendm'] ?>
                                                                                        <i>
                                                                                            <svg class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
                                                                                                <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </a>
                                                                                    </li>
                                                                                <?php 
                                                                                    }
                                                                                ?>
                                                                        </ul>
                                                                            <?php
                                                                                foreach ($danhmuc as $key => $value) {
                                                                                    # code..
                                                                                    $iddm = $value['iddm'];
                                                                            ?>
                                                                        <ul class="mm-panel list-child" id="<?php echo $value['iddm']?>">
                                                                            <li><a href="javascript:;"><i class="fa fa-angle-left" aria-hidden="true"></i>Quay về</a></li>
                                                                            <li><a href="<?php echo BASE_URL?>index/danhmuc/loaidanhmucsanpham/<?php echo $value['iddm']?>"><b>Xem tất cả "<?php echo $value['tendm']?>"</b></a></li>
                                                                            <?php
                                                                                foreach ($loaidm as $key => $value) {
                                                                                    # code...
                                                                                    if ($value['iddm']==$iddm) {
                                                                                        # code...
                                                                                   
                                                                            ?>
                                                                            <li class="">
                                                                                <a href="/collections/ao-thun"><span>-</span><?php echo $value['tenloaidm']?></a>
                                                                            </li>
                                                                            <?php
                                                                                    }
                                                                                }
                                                                            ?>
                                                                        </ul>
                                                                            <?php
                                                                                    }
                                                                            ?>
                                                                    </div>
                                                                </div>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="header-wrap-logo">
                                <div class="wrap-logo" itemscope="" itemtype="http://schema.org/Organization">
                                    <h1><a href="<?php echo BASE_URL?>" itemprop="url">noobi home</a></h1>
                                </div>
                            </div>
                            <div class="header-wrap-menu hidden-sm hidden-xs ">
                                <nav class="navbar-mainmenu">
                                    <ul class="menuList-primary">
                                        <li class="active">
                                            <a href="<?php echo BASE_URL?>" title="Trang chủ"> 
                                                Trang chủ
                                            </a>
                                        </li>
                                            <?php
                                                foreach ($danhmuc as $key => $value) {
                                                    $iddm = $value['iddm'];
                                            ?>
                                        <li class="has-submenu ">
                                            <a href="<?php echo BASE_URL?>danhmuc/danhmucsanpham/<?php echo $value['iddm']?>" title="<?php echo $value['tendm'] ?>"> 
                                            <?php echo $value['tendm'] ?>
                                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            </a>
                                                <ul class="menuList-submain">
                                                <?php
                                                    foreach ($loaidm as $key => $value) {
                                                        if ($value['iddm']==$iddm) {
                                                            # code...
                                                ?>
                                                        <li class="">
                                                            <a href="<?php echo BASE_URL?>danhmuc/loaidanhmucsanpham/<?php echo $value['idloaidm'];?>" title="<?php echo $value['tenloaidm'];?>"> 
                                                                <?php echo $value['tenloaidm'];?>
                                                            </a>
                                                        </li>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                                </ul>
                                        </li>
                                            <?php 
                                                }
                                                
                                            ?>
                                        <!-- <li class="has-submenu active">
                                            <a href="/" title="Thông tin"> 
                                                Thông tin
                                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            </a>
                                            <ul class="menuList-submain">
                                                <li class="">
                                                    <a href="/pages/lien-he" title="Liên hệ"> 
                                                        Liên hệ
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/pages/kiem-tra-don-hang" title="Kiểm tra đơn hàng"> 
                                                        Kiểm tra đơn hàng
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/pages/quy-dinh-doi-tra-hang" title="Chính sách đổi hàng."> 
                                                        Chính sách đổi hàng.
                                                    </a>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-wrap-action">
                                <div class="header-action">
                                    <div class="header-action-item header-action_search">
                                        <div class="header-action_text">
                                            <a class="header-action__link header-action_clicked" href="javascript:void(0)" id="site-search-handle" aria-label="Tìm kiếm" title="Tìm kiếm">
                                                <span class="box-icon">								
                                        <svg class="svg-ico-search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve">
                                            <g>
                                                <path d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"></path>
                                            </g>
                                        </svg>
                                        <span class="box-icon--close">
                                            <svg viewBox="0 0 19 19" role="presentation"><path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path></svg>
                                        </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="header-action_dropdown">
                                            <span class="box-triangle">
                                                <svg viewBox="0 0 20 9" role="presentation">
                                                    <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                                </svg>
                                            </span>
                                            <div class="header-dropdown_content">
                                                <div class="sitenav-content sitenav-search">
                                                    <p class="boxtitle">Tìm kiếm</p>
                                                    <div class="search-box wpo-wrapper-search">
                                                        <form action="/search" class="searchform searchform-categoris ultimate-search">
                                                            <div class="wpo-search-inner">
                                                                <input type="hidden" name="type" value="product">
                                                                <input required="" id="inputSearchAuto" class="input-search" name="q" maxlength="40" autocomplete="off" type="text" size="20" placeholder="Tìm kiếm sản phẩm...">
                                                            </div>
                                                            <button type="submit" class="btn-search btn" id="search-header-btn">
                                                                <svg version="1.1" class="svg search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve"><path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path><rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect></svg>
                                                            </button>
                                                        </form>
                                                        <div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
                                                            <div class="resultsContent"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-action-item header-action_account">
                                        <div class="header-action_text">
                                            <a class="header-action__link  header-action_clicked " href="javascript:void(0);" id="site-account-handle" aria-label="Tài khoản" title="Tài khoản">
                                                <span class="box-icon">								
                                        <svg class="svg-ico-account" viewBox="0 0 1024 1024">
                                            <path class="path1" d="M486.4 563.2c-155.275 0-281.6-126.325-281.6-281.6s126.325-281.6 281.6-281.6 281.6 126.325 281.6 281.6-126.325 281.6-281.6 281.6zM486.4 51.2c-127.043 0-230.4 103.357-230.4 230.4s103.357 230.4 230.4 230.4c127.042 0 230.4-103.357 230.4-230.4s-103.358-230.4-230.4-230.4z"></path>
                                            <path class="path2" d="M896 1024h-819.2c-42.347 0-76.8-34.451-76.8-76.8 0-3.485 0.712-86.285 62.72-168.96 36.094-48.126 85.514-86.36 146.883-113.634 74.957-33.314 168.085-50.206 276.797-50.206 108.71 0 201.838 16.893 276.797 50.206 61.37 27.275 110.789 65.507 146.883 113.634 62.008 82.675 62.72 165.475 62.72 168.96 0 42.349-34.451 76.8-76.8 76.8zM486.4 665.6c-178.52 0-310.267 48.789-381 141.093-53.011 69.174-54.195 139.904-54.2 140.61 0 14.013 11.485 25.498 25.6 25.498h819.2c14.115 0 25.6-11.485 25.6-25.6-0.006-0.603-1.189-71.333-54.198-140.507-70.734-92.304-202.483-141.093-381.002-141.093z"></path>
                                        </svg>
                                        <span class="box-icon--close">
                                            <svg viewBox="0 0 19 19" role="presentation"><path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path></svg>
                                        </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="header-action_dropdown ">
                                            <span class="box-triangle">
                                                <svg viewBox="0 0 20 9" role="presentation">
                                                    <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                                </svg>
                                            </span>
                                            
                                            <?php
                                                if (!isset($_SESSION['account'][0]['idtk'])) {
                                            ?>
                                            <div class="header-dropdown_content">
                                                <div class="site_account sitenav-account " id="siteNav-account">
                                                    <div class="site_account_panel_list">
                                                        <div id="header-login-panel" class="site_account_panel site_account_default is-selected">
                                                            <div class="site_account_header">
                                                                <h2 class="site_account_title heading">Đăng nhập tài khoản</h2>
                                                                <p class="site_account_legend">Nhập email và mật khẩu của bạn:</p>
                                                                <?php
                                                                    if (!empty($_GET['msg'])) {
                                                                        $msg = unserialize(urldecode($_GET['msg']));
                                                                        foreach ($msg as $key => $value) {
                                                                ?>
                                                                <div class="alert text-danger alert-dismissible show" role="alert">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                    <strong><?php echo "$value";?>!</strong>
                                                                </div>
                                                                <?php 
                                                                        }
                                                                    }
                                                                ?>
                                                            </div>
                                                            <div class="site_account_inner">
                                                            <form accept-charset="UTF-8" action="<?php echo BASE_URL?>login" id="customer_login" method="post">
                                                                <input name="form_type" type="hidden" value="customer_login">
                                                                <input name="utf8" type="hidden" value="✓">
                                                                <div class="form__input-wrapper form__input-wrapper--labelled">
                                                                    <input type="email" id="login-customer[email]" class="form__field form__field--text" name="email" required="required" fdprocessedid="q0loaf">
                                                                    <label for="login-customer[email]" class="form__floating-label">Email</label>
                                                                </div>
                                                                <div class="form__input-wrapper form__input-wrapper--labelled">
                                                                    
                                                                    <input type="password" id="login-customer[password]" class="form__field form__field--text" name="pass" required="required" autocomplete="current-password" fdprocessedid="gg4yzs">
                                                                    <label for="login-customer[password]" class="form__floating-label">Mật khẩu</label>						
                                                                </div>
                                                                <button type="submit" class="form__submit button dark" id="form_submit-login" fdprocessedid="e2w1ji">Đăng nhập</button>
                                                                <script>

                                                                </script>
                                                            </form>
                                                                <div class="site_account_secondary-action">
                                                                    <p>Khách hàng mới? 
                                                                        <a class="link" href="<?php BASE_URL?>login/dangky">Tạo tài khoản</a>
                                                                    </p>
                                                                    <!-- <p>Quên mật khẩu? 
                                                                        <button aria-controls="header-recover-panel" class="js-link link" fdprocessedid="9oovow">Khôi phục mật khẩu</button>
                                                                    </p> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                }else{
                                            ?>
                                            <div class="header-dropdown_content">
                                                    <div class="site_account sitenav-account  sitenav-account_info " id="siteNav-account">
                                                        <div class="site_account_panel_list">
                                                            <div class="site_account_info">
                                                                    <div class="site_account_header">
                                                                    <h2 class="site_account_title size-small heading">Thông tin tài khoản</h2>
                                                                </div>
                                                                <div class="site_account_inner">
                                                                    <ul>
                                                                        <li class="user-name text-capitalize"><span><?php echo $_SESSION['account'][0]['hoten'];?></span></li>
                                                                        <li><a href="<?php echo BASE_URL?>login/taikhoancuatoi">Tài khoản của tôi</a></li>
                                                                        <?php
                                                                            if ($_SESSION['account'][0]['loaitk'] == 1) { 
                                                                        ?>
                                                                        <li><a href="<?php echo BASE_URL?>login/dashboard">Trang quản trị</a></li>
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                        <li><a href="<?php echo BASE_URL?>login/logout">Đăng xuất</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="header-action-item header-action_cart">
                                        <div class="header-action_text">
                                            <a class="header-action__link  header-action_clicked " href="javascript:void(0);" id="site-cart-handle" aria-label="Giỏ hàng" title="Giỏ hàng">
                                                <span onclick="showcart(this)" class="box-icon">								
                                                    <svg class="svg-ico-cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 -13 456.75885 456" width="456pt">
                                                        <path d="m150.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path>
                                                        <path d="m446.855469 94.035156h-353.101563l-7.199218-40.300781c-4.4375-24.808594-23.882813-44.214844-48.699219-48.601563l-26.101563-4.597656c-5.441406-.96875-10.632812 2.660156-11.601562 8.097656-.964844 5.441407 2.660156 10.632813 8.101562 11.601563l26.199219 4.597656c16.53125 2.929688 29.472656 15.871094 32.402344 32.402344l35.398437 199.699219c4.179688 23.894531 24.941406 41.324218 49.199219 41.300781h210c22.0625.066406 41.546875-14.375 47.902344-35.5l47-155.800781c.871093-3.039063.320312-6.3125-1.5-8.898438-1.902344-2.503906-4.859375-3.980468-8-4zm-56.601563 162.796875c-3.773437 12.6875-15.464844 21.367188-28.699218 21.300781h-210c-14.566407.039063-27.035157-10.441406-29.5-24.800781l-24.699219-139.398437h336.097656zm0 0"></path>
                                                        <path d="m360.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path>
                                                    </svg>
                                                    <span class="box-icon--close">
                                                        <svg viewBox="0 0 19 19" role="presentation"><path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path></svg>
                                                    </span>
                                                        <span class="count-holder">
                                                            <!-- đếm số lượng sản phẩm trong giỏ -->
                                                            <span class="count" id="count" >0</span>
                                                        </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="header-action_dropdown">
                                            <span class="box-triangle">
                                                <svg viewBox="0 0 20 9" role="presentation">
                                                    <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                                </svg>
                                            </span>
                                            <div class="header-dropdown_content">
                                                <div class="sitenav-content sitenav-cart">
                                                    <p class="boxtitle">Giỏ hàng</p>
                                                    <div class="cart-view clearfix">
                                                        <div class="cart-view-scroll">
                                                            <table id="clone-item-cart" class="table-clone-cart">
                                                                <tbody>
                                                                    <tr class="mini-cart__item hidden">
                                                                        <td class="mini-cart__left">
                                                                            <a class="mnc-link" href="" title=""><img src="" alt=""></a>
                                                                        </td>
                                                                        <td class="mini-cart__right">
                                                                            <p class="mini-cart__title">
                                                                                <a class="mnc-title mnc-link" href="" title=""></a>
                                                                                <span class="mnc-variant">	</span>
                                                                            </p>
                                                                            <div class="mini-cart__quantity">
                                                                                <span class="mnc-value"></span>
                                                                            </div>
                                                                            <div class="mini-cart__price"><span class="mnc-price"></span> </div>
                                                                            <div class="mini-cart__remove"></div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <table >
                                                                <tbody id="cart-view">
                                                                    <!-- <tr class="mini-cart__empty">
                                                                        <td>
                                                                            <div class="svgico-mini-cart">
                                                                                <svg width="81" height="70" viewBox="0 0 81 70"><g transform="translate(0 2)" stroke-width="4" fill="none" fill-rule="evenodd"><circle stroke-linecap="square" cx="34" cy="60" r="6"></circle><circle stroke-linecap="square" cx="67" cy="60" r="6"></circle><path d="M22.9360352 15h54.8070373l-4.3391876 30H30.3387146L19.6676025 0H.99560547"></path></g></svg>
                                                                            </div>
                                                                            Hiện chưa có sản phẩm
                                                                        </td>
                                                                    </tr> -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="cart-view-line"></div>
                                                        <div class="cart-view-total">
                                                            <table class="table-total">
                                                                <tbody>
                                                                    <tr></tr>
                                                                    <tr>
                                                                        <td class="mnc-total text-left">TỔNG TIỀN:</td>
                                                                        <td class="mnc-total text-right" id="total-view-cart"></td>
                                                                    </tr>
                                                                    <tr class="mini-cart__button">
                                                                        <td><a href="<?php echo BASE_URL?>giohang/show" class="linktocart button ">Xem giỏ hàng</a></td>
                                                                        <td><a id="btnCart-checkout1" type="button" style="cursor: pointer;" class="linktocheckout button btnred">Thanh toán</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <input type="hidden" id="note1">
                                                            <script>
                                                                KEY = 'cart'
                                                                if (localStorage.getItem(KEY)) { // kiểm tra local có tồn tại chưa Nếu có thì thêm sp vào
                                                                    storage = JSON.parse(localStorage.getItem(KEY));
                                                                } else {
                                                                    storage = [];
                                                                }
                                                                $('#btnCart-checkout1').click(function(){
                                                                    var note = $('#note1').val();
                                                                    // console.log(note);
                                                                        $.ajax({
                                                                            url: "<?php echo BASE_URL?>giohang/aaaa",
                                                                            method: "post",
                                                                            data: {	storage: storage,
                                                                                    note: note
                                                                                },
                                                                            success:function(data){
                                                                                console.log(data);
                                                                                window.location="<?php echo BASE_URL?>giohang/checkout";
                                                                            }
                                                                        });
                                                                });
                                                        </script>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-search-mobile ">
                    <div class=" search-box wpo-wrapper-search">
                        <form action="/search" class="searchform-mobile searchform-categoris ultimate-search">
                            <div class="wpo-search-inner">
                                <input type="hidden" name="type" value="product">
                                <input required="" id="inputSearchAuto-mb" class="input-search" name="q" maxlength="40" autocomplete="off" type="text" size="20" placeholder="Tìm kiếm sản phẩm...">
                            </div>
                            <button type="submit" class="btn-search btn" id="search-header-btn-mb">
                    <span class="search-icon"><svg version="1.1" class="svg search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve"><path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path><rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect></svg></span>	
                    <span class="search-close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg></span>	
                </button>
                        </form>
                        <div id="ajaxSearchResults-mb" class="smart-search-wrapper ajaxSearchResults" style="display: none">
                            <div class="resultsContent"></div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
