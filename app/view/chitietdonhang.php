<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<main class="wrapperMain_content">	<div class="layout-account">
	<div class="container">
		<div class="wrapbox-heading-account">
			<div class="header-page clearfix"><br>
				<h1 style="text-align: center;">Chi tiết đơn hàng</h1>
			</div>
		</div><br><br>
		<div class="wrapbox-content-account">
			<div class="row">
				<div class="col-xs-12 col-md-3 col-sm-12 sidebar-account">
					<div class="AccountSidebar">
                    <h3 class="AccountTitle titleSidebar">Tài khoản</h3>
                    <div class="AccountContent">
                        <div class="AccountList">
                            <ul class="list-unstyled">			
                                <li class="current"><a href="<?php echo BASE_URL?>login/taikhoancuatoi">Thông tin tài khoản</a></li>
                                <li><a href="<?php echo BASE_URL?>index/addDiachi">Thay đổi thông tin tài khoản</a></li>
                                <li class="last"><a href="<?php echo BASE_URL ?>/login/logout">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
				</div>
				<div class="col-xs-12 col-md-9 col-sm-12">
					<div class="row wrap_content_account">
						<div class="col-xs-12 wrap_inforAccount" id="customer_sidebar">
                            <?php
                                foreach ($ctdh as $key => $value) {
                                    # code...
                                }
                            ?>
							<p class="title-detail">Đơn hàng: <strong>#<?=$value['iddonhang']?></strong></p>
                            <a href="<?php echo BASE_URL?>login/taikhoancuatoi">Quay lại trang tài khoản</a>
					</div>
				</div><br>
				<div class="col-xs-12 wrap_orderAccount" id="customer_orders">	
					<div class="customer-table-wrap">							
						<div class="customer_order customer-table-bg">		
							<div class="table-responsive-overflow">
								<div class="table-responsive">
									<table class="table table-customers">
										<thead>
											<tr>
												<th class="order_number text-center">Mã đơn hàng</th>
                                                <th></th>
												<th class="date text-center">Sản phẩm</th>
												<th class="total text-right">Đơn giá</th>
												<th class="payment_status text-center">Số lượng</th>
												<th class="fulfillment_status text-center">Thành tiền</th>
											</tr> 
										</thead>
										<tbody>
											<?php 
                                            foreach ($sanpham as $key => $sp) {
                                                # code...
                                                $idsp = $sp['idsp'];
                                                foreach ($ctdh as $key => $value) {
                                                    # code...
                                                    if ($value['idSp']==$idsp) {
                                                        # code...
                                                            echo '<tr class="odd ">
                                                            <td class="text-center"><a href="#" title="">#'.$value['iddonhang'].'</a></td>
                                                            <td><img src="'.BASE_URL.'public/uploads/sanpham/'.$sp['hinhanh'].'" alt="" width="70px"> </td>
                                                            <td class="text-center"><span>'.$sp['tensp'].'</span></td>
                                                            <td class="text-right"><span class="total money">'.number_format($value['dongia']).'đ</span></td>
                                                            <td class="text-center"><span class="status_pending">'.$value['soluong'].'</td>
                                                            <td class="text-center"><span class="status_not fulfilled text-danger">'.number_format($value['thanhtien']).'đ</span></td>
                                                        </tr>';
                                                    }
                                                }
                                            }
												// print_r(is_array($donhang));
											?>
											
											
										</tbody>
										
									</table>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

		</main>