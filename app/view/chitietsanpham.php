<?php
    foreach ($sanpham as $key => $value) {
        # code...
        $iddm=$value['iddm'];
        $idloaidm=$value['idloaidm'];
?>
<main class="wrapperMain_content">	
<div class="layout-productDetail layout-pageProduct">
	<div class="breadcrumb-shop">
        <div class="container">
            <div class="breadcrumb-list  ">
                <ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1">		
                    </li>
                    <?php
                        foreach ($danhmuc as $key => $dm) {
                            # code...
                            if ($iddm==$dm['iddm']) {
                                # code...
                                $tendm = $dm['tendm'];
                                $iddm = $dm['iddm'];
                            }
                        }
                    ?>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="<?php echo BASE_URL?>danhmuc/danhmucsanpham/<?php echo $iddm?>" target="_self" itemprop="item">
                            <span itemprop="name">
                                <?php
                                    echo $tendm;
                                ?>
                            </span>
                        </a>
                        <meta itemprop="position" content="<?php echo $dm['iddm'];?>">
                    </li>
                    <?php
                       foreach ($loaidm as $key => $ldm) {
                            # code...
                            if ($idloaidm==$ldm['idloaidm']) {
                                # code...
                                $tenloaidm= $ldm['tenloaidm'];
                            }
                        }
                    ?>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="<?php echo BASE_URL?>danhmuc/loaidanhmucsanpham/<?php echo $ldm['idloaidm']?>" target="_self" itemprop="item">
                            <span itemprop="name">
                                <?php
                                    echo $tenloaidm;
                                ?>
                                        
                            </span>
                        </a>
                        <meta itemprop="position" content="<?php echo $ldm['idloaidm'];?>">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item" content="<?php echo BASE_URL?>sanpham/chitietsanpham/<?php echo $value['idsp']?>">
                            <strong itemprop="name">
                                <?php
                                    echo $value['tensp'];
                                ?>
                            </strong>
                        </span>
                        <meta itemprop="position" content="3">
                    </li>
                    
                </ol>
            </div>
        </div>
    </div>
	<section class="productDetail-information productDetail_style__02">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12 col-xs-12 productDetail--gallery">
					<div class="product-container-gallery">
						<div class="wrapbox-image wrapbox-image-scrollspy hidden-xs hidden-sm">
							<div class="productGallery_thumb" id="productScroll-spy">
								<ul class="productList-thumb nav navbar-nav">
									<li class="product-thumb active" data-image="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>">
										<a class="product-thumb__item" data-image="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" href="#gallery-scroll-1">					
											<img src="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" alt="<?php echo $value['tensp'];?>">
										</a>					
									</li>	
									<li class="product-sharing product-sharing-scroll">
										<span class="sharing__iconCircleState">
											<span class="sharing__iconCircleState">
												<span class="sharing__primaryState"> <svg class="icon icon--share" role="presentation" viewBox="0 0 24 24"> <g stroke="currentColor" fill="none" fill-rule="evenodd" stroke-width="1.5"> <path d="M8.6,10.2 L15.4,6.8"></path> <path d="M8.6,13.7 L15.4,17.1"></path> <circle stroke-linecap="square" cx="5" cy="12" r="4"></circle> <circle stroke-linecap="square" cx="19" cy="5" r="4"></circle> <circle stroke-linecap="square" cx="19" cy="19" r="4"></circle> </g> </svg> </span>
												<span class="sharing__secondaryState"> <svg class="icon icon--close" role="presentation" viewBox="0 0 16 14"> <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path> </svg> </span>
											</span>	
										</span>	
										<a href="#" target="_blank">
											<span class="facebook" aria-hidden="true">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve"><g><path d="M16.4,1l-3.1,0C9.8,1,9.6,3.3,9.6,6.8v1.7H6.5C6.2,8.5,6,8.8,6,9v1.9c0,0.3,0.2,0.5,0.5,0.5h3.1v9.9c0,0.3,0.2,0.5,0.5,0.5h2c0.3,0,0.5-0.2,0.5-0.5v-9.9h3.6c0.3,0,0.5-0.2,0.5-0.5l0-1.9c0-0.1-0.1-0.3-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.1h-3.6V5.3c0-1.1,0.3-1.7,1.7-1.7l2.1,0c0.3,0,0.5-0.2,0.5-0.5V1.5C16.8,1.2,16.6,1,16.4,1z"></path></g></svg>
											</span>	<span class="toollip-txt">Chia sẻ facebook</span>
										</a> 
										<a class="sharing__link" onclick="HRT.Product.copyLinkProduct()">
											<span class="url-link" aria-hidden="true"><i class="fa fa-link" aria-hidden="true"></i></span>
											<span class="toollip-txt">Sao chép url</span>
										</a>
									</li>
								</ul>
							</div>	
							<div class="productGallery_slider">						
								<ul class="productList-slider" id="productScroll-slider">
									<li class="product-gallery" data-image="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" id="gallery-scroll-1">
										<a class="product-gallery__item" data-fancybox="gallery" href="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>">					
											<img src="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" alt="<?php echo $value['tensp'];?>">
										</a>					
									</li>									
								</ul>	
							</div>
						</div>
						<div class="wrapbox-image mobile_gallery visible-xs visible-sm">
                            <div class="productGallery_slider">	
                                <ul class="productList-slider productCarousel-slider owl-carousel owl-loaded owl-drag" id="productCarousel-slider-mobile">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                    <div class="owl-item">
                                        <li class="product-gallery" data-image="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>">
                                            <a class="product-gallery__item" data-fancybox="gallery" href="<?php echo BASE_URL?>sanpham/chitietsanpham/<?php echo $value['idsp']?>">					
                                                <img src="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" alt=" <?php echo $value['tensp'];?>">
                                            </a>					
                                        </li>
                                    </div>
                                </div>
                            </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev disabled">
                                <span aria-label="Previous">‹</span>
                            </button>
                            <button type="button" role="presentation" class="owl-next">
                                <span aria-label="Next">›</span>
                            </button>
                        </div>
                        <div class="owl-dots">
                            <button role="button" class="owl-dot active">
                                <span></span>
                            </button>
                            <button role="button" class="owl-dot">
                                <span></span>
                            </button>
                            <button role="button" class="owl-dot">
                                <span></span>
                            </button>
                            <button role="button" class="owl-dot">
                                <span></span>
                            </button>
                            <button role="button" class="owl-dot">
                                <span></span>
                            </button>
                        </div>
                    </ul>	
                </div>
            </div>
						<!-- <div class="product-percent"><span class="pro-sale">-13%<br> OFF </span></div> -->
						<div class="product-sharing">
							<span class="sharing__iconCircleState">
								<span class="sharing__primaryState">
									<svg class="Icon Icon--share" role="presentation" viewBox="0 0 24 24">
										<g stroke="currentColor" fill="none" fill-rule="evenodd" stroke-width="1.5">
											<path d="M8.6,10.2 L15.4,6.8"></path>
											<path d="M8.6,13.7 L15.4,17.1"></path>
											<circle stroke-linecap="square" cx="5" cy="12" r="4"></circle>
											<circle stroke-linecap="square" cx="19" cy="5" r="4"></circle>
											<circle stroke-linecap="square" cx="19" cy="19" r="4"></circle>
										</g>
									</svg>
								</span>
								<span class="sharing__secondaryState">
									<svg class="Icon Icon--close" role="presentation" viewBox="0 0 16 14">
										<path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
									</svg>
								</span>
							</span>	
							<a href="#" target="_blank">
								<span class="facebook" aria-hidden="true">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve"><g><path d="M16.4,1l-3.1,0C9.8,1,9.6,3.3,9.6,6.8v1.7H6.5C6.2,8.5,6,8.8,6,9v1.9c0,0.3,0.2,0.5,0.5,0.5h3.1v9.9c0,0.3,0.2,0.5,0.5,0.5h2c0.3,0,0.5-0.2,0.5-0.5v-9.9h3.6c0.3,0,0.5-0.2,0.5-0.5l0-1.9c0-0.1-0.1-0.3-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.1h-3.6V5.3c0-1.1,0.3-1.7,1.7-1.7l2.1,0c0.3,0,0.5-0.2,0.5-0.5V1.5C16.8,1.2,16.6,1,16.4,1z"></path></g></svg>
								</span>	<span class="toollip-txt">Chia sẻ facebook</span>
							</a> 
							<a class="sharing__link">
								<span class="url-link" aria-hidden="true">
									<i class="fa fa-link" aria-hidden="true"></i>
								</span>
								<span class="toollip-txt">Sao chép url</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-12 col-xs-12 productDetail--content" id="detail-product">
					<div class="product-container-detail">
						<div class="product-container-order">
							<div class="product-variants">
								<form id="add-item-form"  method="post" class="variants clearfix">				
                                <div class="select-actions hidden-xs clearfix">
										<div class="quantity-area">
											<input type="button" value="-" onclick="HRT.All.minusQuantity()" class="qty-btn" fdprocessedid="z7f8qe">
											<input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-input" fdprocessedid="wfac4m">
											<input type="button" value="+" onclick="HRT.All.plusQuantity()" class="qty-btn" fdprocessedid="9azdt">
										</div>
										<div class="addcart-area">
                                            <input type="hidden" value="<?=$value['hinhanh']?>">
											<button onclick="addtocartTrangChitiet(this)" id="add-to-cart" class="add-to-cartProduct button dark btn-addtocart btnred addtocart-modal" name="add" fdprocessedid="dx9pn6">
                                                <span>Thêm vào giỏ</span>
                                            </button>
										</div>	
									</div>
									
								</form>
							</div>
							<div class="product-heading">
								<h1><?php echo $value['tensp'];?></h1>
								<span id="pro_sku"><strong>MÃ SP:</strong> <span><?php echo $value['idsp'];?></span></span>
								<span class="pro-soldold hidden"></span>
							</div>
							<div class="product-price" id="price-preview">
                                <!-- <span class="pro-percent">-13%</span>
                                <del>149,000₫</del> -->
                                <span class="pro-price"><?php echo number_format($value['giasp']);?><span>₫</span></span>
                                <input type="hidden" value="<?php echo $value['giasp']?>">
                            </div>
						</div>
						<div class="product-available">
							<!-- <p class="txt-inventory">Đã bán gần hết</p> -->
						</div>
						<div class="product-coutdown product-coutdown-jsdata">
						</div>
                        <div class="product-description product-description--accordion">	
                            <div class="panel-group opened">
                                <div class="panel-title"><h2>THông tin sản phẩm</h2></div>							
                                <div class="panel-description " style="display:block">
                                    <div class="description-productdetail">
                                    <?php echo $value['chitiet'];?>
                                        	<!-- Kich thước (cm):<br>- Chiều cao 31cm&nbsp;<br>
                                            - Chiều ngang 36cm&nbsp;<br>
                                            - Chiều rộng 15cm<div>
                                                - Dây dài 64cm<br>
                                                - Hình ảnh được chụp 100% từ sản phẩm thật, dưới ánh sáng tự nhiên và không qua chỉnh sửa để đảm bảo màu sắc trung thực nhất có thể (không tránh khỏi sai lệch từ 10-20% do thiết bị hiển thị). -->
                                    </div>	
                                </div>
                                </div>
                            </div>
                            <!-- TAB 1-->
                            <!-- TAB 2-->
                            <!-- TAB 3-->
                        </div>
                        <!-- TAB 4-->
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- related -->
<!-- <section class="productDetail-related">
    <div class="container">
        <div class="productRelated-title">
            <h2>Sản phẩm liên quan</h2>
        </div>
        <div class="productRelated-content">
            <div class="listProduct-related listProduct-resize owl-carousel owlCarousel-style owl-loaded owl-drag" id="owlProduct-related">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1848px;">
                        <div class="owl-item active" style="width: 216px; margin-right: 15px;">
                            <div class="product-loop">
                                <div class="product-inner product-resize fixheight" style="height: 364px;">
                                    <div class="proloop-image ">
                                        <div class="pro-sale"><span>-15%</span></div>		
                                            <div class="product--image image-resize" style="height: 288px;">		
                                                <div class="product--image__inner">
                                                    <div class="prod-img first-image">
                                                        <picture>
                                                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/1000296747/product/d9830ca1-d914-4d64-98e0-f42a44b271be_472fc11291fd4f73ac51077bf96c2374_large.jpeg" srcset="//product.hstatic.net/1000296747/product/d9830ca1-d914-4d64-98e0-f42a44b271be_472fc11291fd4f73ac51077bf96c2374_large.jpeg">
                                                            <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/1000296747/product/d9830ca1-d914-4d64-98e0-f42a44b271be_472fc11291fd4f73ac51077bf96c2374_large.jpeg" srcset="//product.hstatic.net/1000296747/product/d9830ca1-d914-4d64-98e0-f42a44b271be_472fc11291fd4f73ac51077bf96c2374_large.jpeg">
                                                            <img class="img-loop lazyloaded" data-src="//product.hstatic.net/1000296747/product/d9830ca1-d914-4d64-98e0-f42a44b271be_472fc11291fd4f73ac51077bf96c2374_large.jpeg" src="//product.hstatic.net/1000296747/product/d9830ca1-d914-4d64-98e0-f42a44b271be_472fc11291fd4f73ac51077bf96c2374_large.jpeg" alt=" NOOBITA - Áo thun tay ngắn cổ V vải tổ ong 7934 ">
                                                        </picture>		
                                                    </div>					
                                                    <div class="prod-img second-image hovered-img hidden-xs">	
                                                        <picture>
                                                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/1000296747/product/810b978c-1240-400c-a7a5-5164507ddbe2_042fde681d8c465e9743bc4e88eb9551_small.jpeg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                            <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/1000296747/product/810b978c-1240-400c-a7a5-5164507ddbe2_042fde681d8c465e9743bc4e88eb9551_large.jpeg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                            <img class="lazyload img-loop " data-src="//product.hstatic.net/1000296747/product/810b978c-1240-400c-a7a5-5164507ddbe2_042fde681d8c465e9743bc4e88eb9551_large.jpeg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" NOOBITA - Áo thun tay ngắn cổ V vải tổ ong 7934 ">
                                                        </picture>		
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="/products/noobita-ao-thun-tay-ngan-co-v-vai-to-ong-7934" class="proloop-link " data-handle="/products/noobita-ao-thun-tay-ngan-co-v-vai-to-ong-7934" title="NOOBITA - Áo thun tay ngắn cổ V vải tổ ong 7934"></a>
                                        </div>					
                                        <div class="proloop-detail">
                                            <h3><a href="/products/noobita-ao-thun-tay-ngan-co-v-vai-to-ong-7934" class="" data-handle="/products/noobita-ao-thun-tay-ngan-co-v-vai-to-ong-7934">NOOBITA - Áo thun tay ngắn cổ V vải tổ ong 7934</a></h3>
                                            <p class="proloop--price">
                                                <span class="price">170,000₫</span>
                                                <span class="price-del">199,000₫</span>
                                            </p>
                                        </div>
                                        <div class="proloop-actions">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="button btn-proloop-cart add-to-cart " onclick="HRT.All.addCartProdItem('1100165229')" title="Thêm vào giỏ">
                                                        <span class="btnico">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -13 456.75885 456">
                                                                <path d="m150.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path>
                                                                <path d="m446.855469 94.035156h-353.101563l-7.199218-40.300781c-4.4375-24.808594-23.882813-44.214844-48.699219-48.601563l-26.101563-4.597656c-5.441406-.96875-10.632812 2.660156-11.601562 8.097656-.964844 5.441407 2.660156 10.632813 8.101562 11.601563l26.199219 4.597656c16.53125 2.929688 29.472656 15.871094 32.402344 32.402344l35.398437 199.699219c4.179688 23.894531 24.941406 41.324218 49.199219 41.300781h210c22.0625.066406 41.546875-14.375 47.902344-35.5l47-155.800781c.871093-3.039063.320312-6.3125-1.5-8.898438-1.902344-2.503906-4.859375-3.980468-8-4zm-56.601563 162.796875c-3.773437 12.6875-15.464844 21.367188-28.699218 21.300781h-210c-14.566407.039063-27.035157-10.441406-29.5-24.800781l-24.699219-139.398437h336.097656zm0 0"></path>
                                                                <path d="m360.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path>
                                                            </svg>
                                                        </span>	<span>Thêm vào giỏ</span> 
                                                    </button>
                                                </div>
                                                <div class="actions-secondary">
                                                    <button type="submit" class="button btn-proloop-checkout" onclick="HRT.All.buyNowProdItem('1100165229')" title="Mua ngay">
                                                        <span class="btnico">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.2 321.2" style="enable-background:new 0 0 321.2 321.2;" xml:space="preserve"> <g> <g> <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z"></path> </g> </g> </svg>
                                                        </span>	<span>Mua ngay</span> 
                                                    </button>
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
</section> -->
<!-- genneral -->
<section class="productDetail-toolbar visible-xs" id="product-toolbar">
<div class="productToolbar-addcart">
    <div class="container">
        <div class="product-actions">
            <div class="block-quantity quantity-selector ">
                <input type="button" value="-" onclick="HRT.All.minusQuantity()" class="qty-btn">
                <input type="text" id="quantity-bottom" name="quantity" value="1" min="1" class="quantity-number">
                <input type="button" value="+" onclick="HRT.All.plusQuantity()" class="qty-btn">
            </div>
            <div class="block-addcart">						
                <button type="button" id="add-to-cartBottom" class="add-to-cartProduct btnred button dark btn-addtocart addtocart-modal" name="add"><span>Thêm vào giỏ</span></button>
            </div>	
        </div>
    </div>
</div>	
</section>
<div class="productDetail-linkcopy"><input class="linkToCopy" readonly="readonly" value="https://www.noobita.vn/products/tui-tote-vai-canvas-in-chu-7933" id="myInput"></div>
</div>
<?php
    }
?>
<script>

    $(document).ready(function(){	
        if(jQuery('.product-coutdown-jsdata .pro-coutdown').length > 0) {
            var time_deal = $('.product-coutdown-jsdata  #deal_day_1045292333').val(); 
            var array_time = time_deal.split('_');
            var endDate = array_time[1];
            $('.product-coutdown-jsdata .clock-day-1045292333').countdown(endDate)
            .on('update.countdown', function(event) {
                var $this = $(this).html(event.strftime(""
                + "<div class='section_cout'><span class='Days'><span> %D </span></span><span class='text'>ngày</span></div>"
                + "<div class='section_cout'><span class='Hours'><span> %H </span></span><span class='text'>giờ</span></div>"
                + "<div class='section_cout'><span class='Minutes'><span> %M </span></span><span class='text'>phút</span></div>"
                + "<div class='section_cout'><span class='Seconds'><span> %S </span></span><span class='text'>giây</span></div>"));
            })
            .on('finish.countdown', function(event) {
                $(this).html(""
                + "<div class='section_cout'><span class='Days'><span> 00 </span></span><span class='text'>ngày</span></div>"
                + "<div class='section_cout'><span class='Hours'><span> 00 </span></span><span class='text'>giờ</span></div>"
                + "<div class='section_cout'><span class='Minutes'><span> 00 </span></span><span class='text'>phút</span></div>"
                + "<div class='section_cout'><span class='Seconds'><span> 00 </span></span><span class='text'>giây</span></div>");
                $(this).parent().find('p').html('Hết thời gian ưu đãi:');
            });
        }
    });
        /* template */
        var pro_template = "style_02";
        var productImg_size = "5";
        $(document).ready(function(){
            if (pro_template == "style_01" && productImg_size > 1){
                var slider = $('#productCarousel-slider');
                var thumbnailSlider = $('#productCarousel-thumb');
                var duration = 500;	

                slider.owlCarousel({
                    items:1,
                    nav: true,
                    dots: true,
                    loop: false,	
                    smartSpeed:1000
                })
                slider.on('changed.owl.carousel', function (e) {
                    thumbnailSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
                    thumbnailSlider.find(".owl-item").removeClass("current");
                    thumbnailSlider.find('.owl-item:nth-child('+ (e.item.index + 1) +')').addClass('current');
                });
                thumbnailSlider.on('initialized.owl.carousel', function() {
                    thumbnailSlider.find(".owl-item").eq(0).addClass("current");
                })
                thumbnailSlider.owlCarousel({
                    loop:false,	
                    nav:false,
                    margin:15,
                    center:false,
                    responsive: {
                        0: {
                            items: 1,	
                        },
                        768: {
                            items: 5,
                        },
                        992: {
                            items: 5,
                        },
                        1200: {
                            items: 5,
                        }
                    }
                })
                thumbnailSlider.on('changed.owl.carousel', function (e) {
                    slider.trigger('to.owl.carousel', [e.item.index, duration, true]);
                    slider.find(".owl-item").removeClass("current");
                    slider.find('.owl-item:nth-child('+ (e.item.index + 1) +')').addClass('current');
                });
                thumbnailSlider.on("click", ".owl-item", function(e) {
                    e.preventDefault();
                    thumbnailSlider.find(".owl-item").removeClass("current");
                    $(this).addClass("current");
                    var number = $(this).index();
                    slider.data('owl.carousel').to(number, duration, true);
                });
            }
            else if(pro_template == "style_02"){
                $('body').scrollspy({
                    target: "#productScroll-spy", 
                    offset: $('.productDetail-information').offset().top
                });
                $('#productScroll-spy a[href*="#"]').click(function(e){
                    e.preventDefault();
                    $('#productScroll-spy li.product-thumb').removeClass('active');
                    $('html, body').animate({
                        scrollTop: $($.attr(this, 'href')).offset().top + 20
                    }, 500);		
                });	
                var sliderMobile = $('#productCarousel-slider-mobile');	
                sliderMobile.owlCarousel({
                    items:1,
                    nav: true,
                    dots: true,
                    lazyLoad:true,		
                    loop: false,	
                    smartSpeed:1000
                })
            }
            else{
                if (productImg_size > 1){
                    var slickSlider = $('#productSlick-slider');
                    var thumbnailSlider = $('#productSlick-thumb');
                    slickSlider.slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        fade: false,
                        infinite: false,
                        speed: 1000,
                        asNavFor: '#productSlick-thumb',
                        dots: true,
                        arrows: true,
                        prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"></button>',
                        nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"></button>',
                    });
                    thumbnailSlider.slick({
                        slidesToShow: 6,
                        slidesToScroll:6,
                        asNavFor: '#productSlick-slider',
                        dots: false,
                        arrows: false,
                        vertical:true,
                        verticalSwiping:true,
                        infinite: false,
                        focusOnSelect: true,
                    });
                    $(document).on('click','#productSlick-thumb .product-thumb__item', function(e){
                        e.preventDefault();
                        $('#productSlick-thumb .product-thumb').removeClass('slick-current');
                        $(this).parent().addClass('slick-current');
                    });

                }
            }
            $('.product-gallery__item[data-fancybox="gallery"]').fancybox({
                protect: true,
                hash : false,
                buttons : [
                    "slideShow",
                    'zoom',
                    "thumbs",
                    'close'
                ],
                animationEffect: "zoom",
                infobar : false,
            });
        });
        </script>
        <script>
        var check_variant = true;
        var fIndex = false;
        var check_scrollstyle2 = '';
        var selectCallback = function(variant, selector) {
            if (variant){
                if(variant.inventory_management == null){
                    jQuery('.product-available').find(".txt-inventory").html('');
                }
                else{
                    var inventoryQty = variant.inventory_quantity;
                    if(inventoryQty == 0){
                        jQuery('.product-available').find(".txt-inventory").html('Đã bán hết');
                    }else{
                        if (inventoryQty > 10){
                            jQuery('.product-available').find(".txt-inventory").html('');
                        }
                        else{
                            jQuery('.product-available').find(".txt-inventory").html('Đã bán gần hết');
                        }
                    }
                }
                if(variant.featured_image != null){
                    //style 01
                    if (pro_template == "style_01"){
                        var indeximg = $("li.product-gallery[data-image='"+ Haravan.resizeImage(variant.featured_image.src,'master').replace('https:','')+"']").parent().index();
                        $('#productCarousel-slider').trigger('to.owl.carousel', [indeximg, 500]);
                        $('#productCarousel-thumb').find('.owl-item').removeClass('current');
                        $('#productCarousel-thumb').find('.owl-item:nth-child('+ (indeximg + 1) +')').addClass('current');
                    }		
                    //style 02	
                    if (pro_template == "style_02"){
                        check_scrollstyle2 = Haravan.resizeImage(variant.featured_image.src,'master').replace('https:','');
                        if ($(window).width() < 992){
                            var indeximg_mb = $("#productCarousel-slider-mobile li.product-gallery[data-image='"+ Haravan.resizeImage(variant.featured_image.src,'master').replace('https:','')+"']").parent().index();
                            $('#productCarousel-slider-mobile').trigger('to.owl.carousel', [indeximg_mb, 500]);
                        }
                    }
                    //style 03	
                    if (pro_template == "style_03"){
                        var indeximg = $("li.product-gallery[data-image='"+ Haravan.resizeImage(variant.featured_image.src,'master').replace('https:','')+"']").index();	
                        $('#productSlick-slider').slick('slickGoTo',indeximg);
                        $('#productSlick-thumb').find('.slick-slide').removeClass('slick-current');
                        $('#productSlick-thumb').find('.slick-slide:nth-child('+ (indeximg + 1) +')').addClass('slick-current');


                    }
                }
                if(variant.sku != null ){
                    jQuery('#pro_sku').html('<strong>SKU:</strong> ' + variant.sku);
                }		
                if(variant.price < variant.compare_at_price){
                    var pro_sold = variant.price ;
                    var pro_comp = variant.compare_at_price / 100;
                    var sale = 100 - (pro_sold / pro_comp) ;
                    var kq_sale = Math.round(sale);
                    jQuery('.product-percent').html('<span class="pro-sale">-' + kq_sale + '%<br> OFF </span>');
                    var html = '<span class="pro-percent">-'+ kq_sale +'%</span><del>' + Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫") + '</del>';	
                    html += '<span class="pro-price">' + Haravan.formatMoney(pro_sold, "{{amount}}₫") + '</span>';
                    jQuery('#price-preview').html(html);
                } 
                else {
                    jQuery('.product-percent').html('');
                    jQuery('#price-preview').html("<span class='pro-price'>" + Haravan.formatMoney(variant.price, "{{amount}}₫" + "</span>"));
                }
                if (variant.available){
                    jQuery('.productToolbar-addcart .add-to-cartProduct').removeAttr('disabled').removeClass('disabled').html("<span>Thêm vào giỏ</span>");
                    jQuery('.addcart-area .add-to-cartProduct').removeAttr('disabled').removeClass('disabled').html("<span>Thêm vào giỏ</span>");
                    //	jQuery('#detail-product #buy-now').removeAttr('disabled').removeClass('disabled').html("<span>Mua ngay</span>").show();
                    jQuery('#detail-product .pro-soldold').addClass('hidden');
                    check_variant = true;
                } 
                else {
                    jQuery('.productToolbar-addcart .add-to-cartProduct').addClass('disabled').attr('disabled', 'disabled').html("<span>Hết hàng</span>");
                    jQuery('.addcart-area .add-to-cartProduct').addClass('disabled').attr('disabled', 'disabled').html("<span>Hết hàng</span>");

                    //	jQuery('#detail-product #buy-now').addClass('disabled').attr('disabled', 'disabled').html("<span>Hết hàng</span>").hide();
                    var message = variant ? "Hết hàng" : "Không có hàng";
                    jQuery('#detail-product .pro-soldold').removeClass('hidden')
                    jQuery('#detail-product .pro-soldold').text(message);
                    check_variant = false;
                }
            }
            else{
                jQuery('.productToolbar-addcart .add-to-cartProduct').addClass('disabled').attr('disabled', 'disabled').html("<span>Hết hàng</span>");
                jQuery('.addcart-area	 .add-to-cartProduct').addClass('disabled').attr('disabled', 'disabled').html("<span>Hết hàng</span>");
                jQuery('#detail-product #buy-now').addClass('disabled').attr('disabled', 'disabled').html("<span>Hết hàng</span>").hide();
                var message = "Không có hàng";
                jQuery('#detail-product .pro-soldold').removeClass('hidden')
                jQuery('#detail-product .pro-soldold').text(message);
                check_variant = false;
            }
            return check_variant;
        };
        jQuery(document).ready(function($){
            
            new Haravan.OptionSelectors("product-select", { product: {"available":true,"compare_at_price_max":14900000.0,"compare_at_price_min":14900000.0,"compare_at_price_varies":false,"compare_at_price":14900000.0,"content":null,"description":"Kich thước (cm):<br>- Chiều cao 31cm&nbsp;<br>- Chiều ngang 36cm&nbsp;<br>- Chiều rộng 15cm<div>- Dây dài 64cm<br>- Hình ảnh được chụp 100% từ sản phẩm thật, dưới ánh sáng tự nhiên và không qua chỉnh sửa để đảm bảo màu sắc trung thực nhất có thể (không tránh khỏi sai lệch từ 10-20% do thiết bị hiển thị).</div>","featured_image":"https://product.hstatic.net/1000296747/product/14942ed9-b630-4d8c-9d06-5adecf951464_803a69d481b046918e41688d87a9699b.jpeg","handle":"tui-tote-vai-canvas-in-chu-7933","id":1045292333,"images":["https://product.hstatic.net/1000296747/product/14942ed9-b630-4d8c-9d06-5adecf951464_803a69d481b046918e41688d87a9699b.jpeg","https://product.hstatic.net/1000296747/product/dc5470e2-e1a6-4f2f-ab92-cd2ba89c5fd6_438cc9a349024e57947b76506d302084.jpeg","https://product.hstatic.net/1000296747/product/b0dcb490-0411-4c71-8c25-9b28a5ff2fe3_82c5a2f55e3e4a50b2248472992af025.jpeg","https://product.hstatic.net/1000296747/product/011ebac5-3cac-4227-a2e5-2c77a994a672_e3cb941c98df4905adfe1748b4607d70.jpeg","https://product.hstatic.net/1000296747/product/dc34ecf0-5030-4656-b7f8-e4a95b213bf2_e72691b4257c435baa7caccf999b3242.jpeg"],"options":["Màu sắc","Kích thước"],"price":13000000.0,"price_max":13000000.0,"price_min":13000000.0,"price_varies":false,"tags":["1NOBITA"],"template_suffix":null,"title":"Túi tote vải canvas in chữ 7933","type":"Khác","url":"/products/tui-tote-vai-canvas-in-chu-7933","pagetitle":"Túi tote vải canvas in chữ 7933","metadescription":"Kich thước (cm):- Chiều cao- Chiều ngang- Dây dài.- Hình ảnh được chụp 100% từ sản phẩm thật, dưới ánh sáng tự nhiên và không qua chỉnh sửa để đảm bảo màu sắc trung thực nhất có thể (không tránh khỏi sai lệch từ 10-20% do thiết bị hiển thị).","variants":[{"id":1100077346,"barcode":"7933-1F","available":true,"price":13000000.0,"sku":"7933-1F","option1":"NÂU","option2":"FREESIZE","option3":"","options":["NÂU","FREESIZE"],"inventory_quantity":3.0,"old_inventory_quantity":3.0,"title":"NÂU / FREESIZE","weight":300.0,"compare_at_price":14900000.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1299750393,"created_at":"0001-01-01T00:00:00","position":5,"product_id":1045292333,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000296747/product/dc34ecf0-5030-4656-b7f8-e4a95b213bf2_e72691b4257c435baa7caccf999b3242.jpeg","variant_ids":[1100077346]}},{"id":1100077347,"barcode":"7933-2F","available":true,"price":13000000.0,"sku":"7933-2F","option1":"XANH","option2":"FREESIZE","option3":"","options":["XANH","FREESIZE"],"inventory_quantity":3.0,"old_inventory_quantity":3.0,"title":"XANH / FREESIZE","weight":300.0,"compare_at_price":14900000.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1299750392,"created_at":"0001-01-01T00:00:00","position":4,"product_id":1045292333,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000296747/product/011ebac5-3cac-4227-a2e5-2c77a994a672_e3cb941c98df4905adfe1748b4607d70.jpeg","variant_ids":[1100077347]}}],"vendor":"Khác","published_at":"2023-03-07T07:06:01.197Z","created_at":"2023-03-05T05:17:24.592Z","not_allow_promotion":false}, onVariantSelected: selectCallback });
            // Add label if only one product option and it isn't 'Title'.
            
                // Auto-select first available variant on page load.
                
                
                
                
                
                $('#detail-product .single-option-selector:eq(0)').val("NÂU").trigger('change');
                
                $('#detail-product .single-option-selector:eq(1)').val("FREESIZE").trigger('change');
                
                
                
                
                
                $('#detail-product .selector-wrapper select').each(function(){
                    $(this).wrap( '<span class="custom-dropdown custom-dropdown--white"></span>');
                    $(this).addClass("custom-dropdown__select custom-dropdown__select--white");
                });
                    
                    });
                    </script>
        <script>
        var swatch_size = parseInt($('#add-item-form .select-swatch').children().size());
        jQuery(document).on('click','#add-item-form .swatch input', function(e) {  
            e.preventDefault();
            var $this = $(this);
            var _available = '';
            $this.parent().siblings().find('label').removeClass('sd');
            $this.next().addClass('sd');
            var name = $this.attr('name');
            var value = $this.val();
            $('#add-item-form select[data-option='+name+']').val(value).trigger('change');
            if(swatch_size == 2){
                if(name.indexOf('1') != -1){
                    $('#add-item-form #variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
                    $('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                    $('#add-item-form #variant-swatch-1 .swatch-element label').removeClass('sd');
                    $('#add-item-form #variant-swatch-1 .swatch-element').removeClass('soldout');
                    $('#add-item-form .selector-wrapper .single-option-selector').eq(1).find('option').each(function(){
                        var _tam = $(this).val();
                        $(this).parent().val(_tam).trigger('change');
                        if(check_variant){
                            if(_available == '' ){
                                _available = _tam;
                            }
                        }else{
                            $('#add-item-form #variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');
                            $('#add-item-form #variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);
                        }
                    })
                    $('#add-item-form .selector-wrapper .single-option-selector').eq(1).val(_available).trigger('change');
                    $('#add-item-form #variant-swatch-1 .swatch-element[data-value="'+_available+'"] label').addClass('sd');
                }
            }
            else if (swatch_size == 3){
                var _count_op2 = $('#add-item-form #variant-swatch-1 .swatch-element').size();
                var _count_op3 = $('#add-item-form #variant-swatch-2 .swatch-element').size();
                if(name.indexOf('1') != -1){
                    $('#add-item-form #variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
                    $('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                    $('#add-item-form #variant-swatch-1 .swatch-element label').removeClass('sd');
                    $('#add-item-form #variant-swatch-1 .swatch-element').removeClass('soldout');
                    $('#add-item-form #variant-swatch-2 .swatch-element label').removeClass('sd');
                    $('#add-item-form #variant-swatch-2 .swatch-element').removeClass('soldout');
                    var _avi_op1 = '';
                    var _avi_op2 = '';
                    $('#add-item-form #variant-swatch-1 .swatch-element').each(function(ind,value){
                        var _key = $(this).data('value');
                        var _unavi = 0;
                        $('#add-item-form .single-option-selector').eq(1).val(_key).change();
                        $('#add-item-form #variant-swatch-2 .swatch-element label').removeClass('sd');
                        $('#add-item-form #variant-swatch-2 .swatch-element').removeClass('soldout');
                        $('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                        $('#add-item-form #variant-swatch-2 .swatch-element').each(function(i,v){
                            var _val = $(this).data('value');
                            $('#add-item-form .single-option-selector').eq(2).val(_val).change();
                            if(check_variant == true){
                                if(_avi_op1 == ''){
                                    _avi_op1 = _key;
                                }
                                if(_avi_op2 == ''){
                                    _avi_op2 = _val;
                                }
                                //console.log(_avi_op1 + ' -- ' + _avi_op2)
                            }else{
                                _unavi += 1;
                            }
                        })
                        if(_unavi == _count_op3){
                            $('#add-item-form #variant-swatch-1 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
                            setTimeout(function(){
                                $('#add-item-form #variant-swatch-1 .swatch-element[data-value = "'+_key+'"] input').attr('disabled','disabled');
                            })
                        }
                    })
                    $('#add-item-form #variant-swatch-1 .swatch-element[data-value="'+_avi_op1+'"] input').click();
                }
                else if(name.indexOf('2') != -1){
                    $('#add-item-form #variant-swatch-2 .swatch-element label').removeClass('sd');
                    $('#add-item-form #variant-swatch-2 .swatch-element').removeClass('soldout');
                    $('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                    $('#add-item-form .selector-wrapper .single-option-selector').eq(2).find('option').each(function(){
                        var _tam = $(this).val();
                        $(this).parent().val(_tam).trigger('change');
                        if(check_variant){
                            if(_available == '' ){
                                _available = _tam;
                            }
                        }else{
                            $('#add-item-form #variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');
                            $('#add-item-form #variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);
                        }
                    })
                    $('#add-item-form .selector-wrapper .single-option-selector').eq(2).val(_available).trigger('change');
                    $('#add-item-form #variant-swatch-2 .swatch-element[data-value="'+_available+'"] label').addClass('sd');
                }
            }
            else{

            }
            if(pro_template == "style_02"){
                //check img style 2
                if(check_scrollstyle2 != '' && $(window).width() > 991 && fIndex == true){
                    var indeximg2 = $("li.product-gallery[data-image='"+ check_scrollstyle2 +"']").index();
                    $('html, body').animate({
                        scrollTop: $('#productScroll-slider li:eq('+ indeximg2 +')').offset().top - 15
                    }, 800);	
                }
            }
        })
        $(document).ready(function(){
            var _chage = '';
            $('#add-item-form .swatch-element[data-value="'+$('#add-item-form .selector-wrapper .single-option-selector').eq(0).val()+'"]').find('input').click();
            $('#add-item-form .swatch-element[data-value="'+$('#add-item-form .selector-wrapper .single-option-selector').eq(1).val()+'"]').find('input').click();
            if(swatch_size == 2){
                var _avi_op1 = '';
                var _avi_op2 = '';
                var _count = $('#add-item-form #variant-swatch-1 .swatch-element').size();
                $('#add-item-form #variant-swatch-0 .swatch-element').each(function(ind,value){
                    var _key = $(this).data('value');
                    var _unavi = 0;
                    $('#add-item-form .single-option-selector').eq(0).val(_key).change();
                    $('#add-item-form #variant-swatch-1 .swatch-element').each(function(i,v){
                        var _val = $(this).data('value');
                        $('#add-item-form .single-option-selector').eq(1).val(_val).change();
                        if(check_variant == true){
                            if(_avi_op1 == ''){
                                _avi_op1 = _key;
                            }
                            if(_avi_op2 == ''){
                                _avi_op2 = _val;
                            }
                        }else{
                            _unavi += 1;
                        }
                    })
                    if(_unavi == _count){
                        //$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
                        /*	$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').find('input').attr('disabled','disabled');*/
                    }
                })
                $('#add-item-form #variant-swatch-1 .swatch-element[data-value = "'+_avi_op2+'"] input').click();
                $('#add-item-form #variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();
            }
            else if(swatch_size == 3){
                var _avi_op1 = '';
                var _avi_op2 = '';
                var _avi_op3 = '';
                var _size_op2 = $('#add-item-form #variant-swatch-1 .swatch-element').size();
                var _size_op3 = $('#add-item-form #variant-swatch-2 .swatch-element').size();
                $('#add-item-form #variant-swatch-0 .swatch-element').each(function(ind,value){
                    var _key_va1 = $(this).data('value');
                    var _count_unavi = 0;
                    $('#add-item-form .single-option-selector').eq(0).val(_key_va1).change();
                    $('#add-item-form #variant-swatch-1 .swatch-element').each(function(i,v){
                        var _key_va2 = $(this).data('value');
                        var _unavi_2 = 0;
                        $('#add-item-form .single-option-selector').eq(1).val(_key_va2).change();
                        $('#add-item-form #variant-swatch-2 .swatch-element').each(function(j,z){
                            var _key_va3 = $(this).data('value');
                            $('#add-item-form .single-option-selector').eq(2).val(_key_va3).change();
                            if(check_variant == true){
                                if(_avi_op1 == ''){
                                    _avi_op1 = _key_va1;
                                }
                                if(_avi_op2 == ''){
                                    _avi_op2 = _key_va2;
                                }
                                if(_avi_op3 == ''){
                                    _avi_op3 = _key_va3;
                                }
                            }else{
                                _unavi_2 += 1;
                            }
                        })
                        if(_unavi_2 == _size_op3){
                            _count_unavi += 1;
                        }
                    })
                    if(_size_op2 == _count_unavi){
                        //$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').addClass('soldout');
                        /*$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').find('input').attr('disabled','disabled');*/
                    }
                })
                $('#add-item-form #variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();
            }
            if (pro_template == "style_02"){
                //stye 2
                fIndex = true;
                if(check_scrollstyle2 != '' && $(window).width() > 991){
                    var indeximg2 = $("li.product-gallery[data-image='"+ check_scrollstyle2 +"']").index();
                    if($(window).scrollTop() > $('.productDetail-information').offset().top){
                        $('html, body').animate({
                            scrollTop: $('#productScroll-slider li:eq('+ indeximg2 +')').offset().top - 15
                        }, 800);	
                    }
                }
            }
        });
        $(document).ready(function(){
            var vl = $('#add-item-form .swatch .color input').val();
            $('#add-item-form .swatch .color input').parents(".swatch").find(".header strong").html(vl);
            $("#add-item-form .select-swap .color" ).hover(function() { 
                var value = $( this ).data("value");
                $(this).parents(".swatch").find(".header strong").html( value );
            },function(){
                var value = $("#add-item-form .select-swap .color label.sd span").html();
                $(this).parents(".swatch").find(".header strong").html( value );
            });
        });
</script>

</main>