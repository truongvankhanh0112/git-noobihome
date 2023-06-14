<main class="wrapperMain_content">
    <section class="section-index-bannerlink">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <div class="bannerlink-block groupbanner-hover">
                        <div class="bannerlink-block--image ">
                            <a href="collections/alice-blue" aria-label="Alice Blue">
                                <img class=" lazyloaded" data-src="//theme.hstatic.net/1000296747/1000891809/14/categorybanner_1_img.jpg?v=19" src="//theme.hstatic.net/1000296747/1000891809/14/categorybanner_1_img.jpg?v=19" alt="Alice Blue">
                            </a>
                        </div>
                        <div class="bannerlink-block--caption">
                            <p class="tagline">Phong cách vintage</p>
                            <h2 class="htitle">Alice Blue</h2>
                            <p class="txtdesc">Thời trang nữ</p>
                            <p class="action">
                                <a class="button" href="collections/alice-blue">Xem ngay <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <div class="bannerlink-block groupbanner-hover">
                        <div class="bannerlink-block--image ">
                            <a href="collections/phu-kien" aria-label="Accessories">
                                <img class=" lazyloaded" data-src="//theme.hstatic.net/1000296747/1000891809/14/categorybanner_2_img.jpg?v=19" src="//theme.hstatic.net/1000296747/1000891809/14/categorybanner_2_img.jpg?v=19" alt="Accessories">
                            </a>
                        </div>
                        <div class="bannerlink-block--caption">
                            <p class="tagline">Phụ kiện thời trang</p>
                            <h2 class="htitle">Accessories</h2>
                            <p class="txtdesc">Nón, giày dép, túi xách...</p>
                            <p class="action">
                                <a class="button" href="collections/phu-kien">Xem ngay  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkbanner -->
    <?php
        foreach ($danhmuc1 as $key => $value) {
            # code...
            $iddm=$value['iddm'];
    ?>
    <section class="section-collection-reversed section-mrtop  section-reverse-odd  ">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="hTitle">
                    <a href="<?php echo BASE_URL?>danhmuc/san_pham_theo_danh_muc/<?php echo $value['iddm']?>">
                        Noobi Home
                    </a>
                </h2>
                <p class="subTitle text-uppercase"><?=$value['tendm']?></p>
            </div>
            <div class="section-content ">
                <div class="rowFlex-collection">
                    <div class="col-md-6 col-sm-12 col-xs-12 wrapbox-column-banner">
                        <div class="wrapimage-container text-center">
                            <figure class="groupbanner_image groupbanner-hover">
                                <a class="groupbanner_image_link" href="/collections/noobihome-home">
                                    <img class=" lazyloaded" data-src="//theme.hstatic.net/1000296747/1000891809/14/home_collection_1_banner.jpg?v=19" src="//theme.hstatic.net/1000296747/1000891809/14/home_collection_1_banner.jpg?v=19" alt="noobihome">
                                </a>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 wrapbox-column-products">
                        <div class="wraplist-container">
                            <div class="row listProduct-row listProduct-resize-1  ">
                                <div class="owlCarousel-reversed owl-carousel owlCarousel-style owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1142px;">
                                            <?php
                                                foreach ($sanpham as $key => $value) {
                                                    # code...
                                                    if ($value['iddm']==$iddm) {
                                                        # code...
                                                        
                                            ?>
                                            <div class="owl-item active" style="width: 190.333px;">
                                                <div class="row-product">
                                                    <div class="product-small product-loop">
                                                        <div class="product-inner product-resize fixheight" style="height: 297px;">
                                                            <div class="proloop-image ">
                                                                <!-- <div class="pro-sale"><span>-2%</span></div> -->
                                                                <div class="product--image image-resize" style="height: 232px;">
                                                                    <div class="product--image__inner">
                                                                        <div class="prod-img first-image">
                                                                            <picture>
                                                                                <source media="(max-width: 480px)" data-srcset="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" srcset="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>">
                                                                                <source media="(min-width: 481px) and (max-width:991px)" data-srcset="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" srcset="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>">
                                                                                <source media="(min-width: 992px)" data-srcset="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" srcset="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>">
                                                                                <img class="img-loop lazyloaded" data-src="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" src="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>"
                                                                                    alt=" noobihome - <?php echo $value['tensp']?>">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="prod-img second-image hovered-img hidden-xs hidden-sm">
                                                                            <picture>
                                                                                <source media="(max-width: 991px)" data-srcset="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" srcset="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>jpg">
                                                                                <source media="(min-width: 992px)" data-srcset="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" srcset="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>">
                                                                                <img class="img-loop lazyloaded" data-src="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" alt="<?php echo $value['tensp']?>" src="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>">
                                                                            </picture>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="<?php echo BASE_URL?>sanpham/chitietsanpham/<?php echo $value['idsp']?>" class="proloop-link   quickview-product " data-handle="sanpham/ctsp/<?php echo $value['idsp']?>" title="noobihome - <?php echo $value['tensp']?>"></a>
                                                            </div>
                                                            <div class="proloop-detail">
                                                                <!-- Tên sản phẩm -->
                                                                <h3>
                                                                    <a href="<?php echo BASE_URL?>sanpham/chitietsanpham/<?php echo $value['idsp']?>" class=" name-sp quickview-product " data-handle="sanpham/ctsp/<?php echo $value['idsp']?>">
                                                                        noobihome - <?php echo $value['tensp']?>
                                                                    </a>
                                                                </h3>
                                                                <p class="proloop--price">
                                                                    <span class="price"><?php echo number_format($value['giasp'])?>₫</span>
                                                                    <!-- <span class="price-del">245,000₫</span> -->
                                                                </p>
                                                            </div>
                                                            <div class="proloop-actions">
                                                                <div class="proloop-actions__inner">
                                                                    <div class="actions-primary">
                                                                            <span>
                                                                            <input type="hidden" name="idsp" value="<?php echo $value['idsp']?>">
                                                                            <input type="hidden" name="tensp" value="<?php echo $value['tensp']?>">
                                                                            <input type="hidden" name="hinhanh" value="<?php echo $value['hinhanh'];?>">
                                                                            <input type="hidden" name="giasp" value="<?php echo $value['giasp'];?>">
                                                                            <input type="hidden" name="soluong" value="1" min="1">
                                                                            <button type="button" class="button btn-proloop-cart add-to-cart " onclick="addtocart(this)" title="Thêm vào giỏ">
                                                                            </span>
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
                                                                        <button type="submit" class="button btn-proloop-checkout" onclick="HRT.All.buyNowProdItem('1099784311')" title="Mua ngay">
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
                                            <?php
                                                    }
                                                }
                                                
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
        }
    ?>
</main>
