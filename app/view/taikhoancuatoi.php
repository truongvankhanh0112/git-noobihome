<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<main class="wrapperMain_content">	<div class="layout-account">
	<div class="container">
		<div class="wrapbox-heading-account">
			<div class="header-page clearfix"><br>
				<h1 style="text-align: center;">Tài khoản của bạn </h1>
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
							<p class="title-detail">Thông tin tài khoản</p>
							
							<h2 class="name_account text-lowercase"><?=$_SESSION['account'][0]['hoten']?></h2>
							<p class="email "><?=$_SESSION['account'][0]['email']?></p>
							<div class="address ">
								
								<p>Giới tính: 
									<?php
										if ($_SESSION['account'][0]['gioitinh']==1) {
											echo "Nam";
										}else{
											echo "Nữ";
										}
									?>
								</p>
								<p>Số điện thoại: <?=$_SESSION['account'][0]['sdt']?></p>
								<p>Địa chỉ: <strong> <?=$_SESSION['account'][0]['diachi']?></strong> </p>
							</div>
					</div>
				</div><br>
				<div class="col-xs-12 wrap_orderAccount" id="customer_orders">	
					<div class="customer-table-wrap">							
						<div class="customer_order customer-table-bg">		
							<p class="title-detail">Danh sách đơn hàng mới nhất</p>
							<div class="table-responsive-overflow">
								<div class="table-responsive">
									<table class="table table-customers">
										<thead>
											<tr>
												<th class="order_number text-center">Mã đơn hàng</th>
												<th class="date text-center">Ngày đặt</th>
												<th class="total text-right">Tổng đơn hàng</th>
												<th class="payment_status text-center">Trạng thái</th>
												<th class="fulfillment_status text-center">Địa chỉ nhận hàng</th>
												<th >Thanh toán</th>

											</tr>
										</thead>
										<tbody>
											<?php 
											foreach ($donhang as $key => $value) {
												# code...
												
												echo '<tr class="odd ">
														<td class="text-center"><a href="'.BASE_URL.'giohang/ctdh/'.$value['iddonhang'].'" title="">#'.$value['iddonhang'].'</a></td>
														<td class="text-center"><span>'.$value['ngayxuathd'].'</span></td>
														<td class="text-right"><span class="total money">'.number_format($value['giatridh']).'đ</span></td>
														<td class="text-center"><span class="status_pending">';
															$ttdh = $value['trangthaidonhang'];
															switch ($ttdh) {
																case '1':
																	# code...
																	echo 'Chờ xử lý';
																	break;
																case '2':
																	echo 'Đang vận chuyển';
																	break;
																case '3':
																	echo 'Hoàn thành';
																	break;
																default:
																	# code...
																	break;
															}
													echo	'</td>
														<td class="text-center"><span class="status_not fulfilled">'.$value['diachinhanhang'].'</span></td>
														<td>';
															$thanhtoan = $value['thanhtoan'];
															switch ($thanhtoan) {
																case '0':
																	echo '<p class="text-danger"> Chưa thanh toán</p>';
																	break;
																case '1':
																	echo '<p class="text-success"> Đã thanh toán</p>';
																	break;
																default:
																	# code...
																	break;
															}
													echo '
														</td>
													</tr>';
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