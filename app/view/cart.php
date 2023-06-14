<div id="layout-cart">
	<div class="breadcrumb-shop"><div class="container">
	<div class="breadcrumb-list  ">
		<ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
				<meta itemprop="position" content="1">		
			</li>
			
			<li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<span itemprop="item" content="<?php echo BASE_URL?>giohang/show"><strong itemprop="name">Giỏ hàng</strong></span>
				<meta itemprop="position" content="2">
			</li>
			
		</ol>
	</div>
</div></div>
	<div class="wrapper-mainCart">
	
		<div class="heading-titleCart"><div class="container"><h1 class="heading-cart">Giỏ hàng của bạn</h1></div></div>
		<div class="content-bodyCart">
			<div class="container">
			<form  method="post" action="<?php echo BASE_URL?>giohang/addDonhang" id="cartformpage">	
				<div class="row">	
				<?php
							if (!empty($_GET['msg'])) {
								$msg = unserialize(urldecode($_GET['msg']));
								foreach ($msg as $key => $value) {
						?>
						<!-- <div class="alert alert-success text-success alert-dismissible fade show" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button> -->
							<strong><?php echo "$value";?>!</strong>
						<!-- </div> -->
						<?php 
								}
							}
						?>
						<div id="bodyCart" class="col-md-8 col-sm-8 col-xs-12 contentCart-detail">
						
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 sidebarCart-sticky">
							<div class="wrap-order-summary">			
								<div class="order-summary-block">
								
									<h2 class="summary-title">Thông tin đơn hàng</h2>
									<div class="summary-total">
										<p>Tổng tiền: <span id="total-cart">0đ</span></p>
									</div>
									<div class="summary-action">						
										<p>Phí vận chuyển.</p>
										<p></p>
										<div class="summary-alert alert alert-danger ">
											Giỏ hàng của bạn hiện chưa đạt mức tối thiểu để thanh toán.
										</div>
										<a id="btnCart-checkout" style="cursor: pointer;" class="checkout-btn btnred " data-price-min="0" data-price-total="220000">THANH TOÁN
											<!-- <button type="button" style="background-color: transparent; border: none;">THANH TOÁN </button> -->
											
										</a>
									</div>
								</div>
								<div class="order-summary-block order-summary-notify ">
									<div class="summary-warning alert-order">						
										<p class="textmr"><strong>Chính sách mua hàng</strong>:</p>
										<p>Hiện chúng tôi chỉ áp dụng thanh toán với đơn hàng có giá trị tối thiểu <strong>0₫ </strong> trở lên.</p>
									</div>
								</div>
							</div>
						</div>
				</div>
			</form>
			</div>
			<script>
					KEY = 'cart'
					if (localStorage.getItem(KEY)) { // kiểm tra local có tồn tại chưa Nếu có thì thêm sp vào
						storage = JSON.parse(localStorage.getItem(KEY));
					} else {
						storage = [];
					}
					$('#btnCart-checkout').click(function(){
						var note = $('textarea#note').val();
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
