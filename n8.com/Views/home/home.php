<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR : END ============================================== -->
            <?php require_once('sidebar.php'); ?>
            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->
                <?php include('banner.php'); ?>
                <!-- ========================================= SECTION – HERO : END ========================================= -->
                <!-- ============================================== INFO BOXES : END ============================================== -->
                <!-- ============================================== SCROLL TABS ============================================== -->
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">Sản phẩm mới nhất</h3>
                    </div>
                    <div class="tab-content outer-top-xs">
                        <?php if ($data_limit1 != NULL) { ?>
                            <div class="tab-pane in active" id="all">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        <?php for ($i = 0; $i < count($data_limit1); $i++) { ?>
                                            <div class="item item-carousel">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="?act=detail&id=<?= $data_limit1[$i]['MaSP'] ?>"><img src="public\images\products\<?= $data_limit1[$i]['HinhAnh1'] ?>" alt=""></a> </div>
                                                            <!-- /.image -->
                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="?act=detail&id=<?= $data_limit1[$i]['MaSP'] ?>"><?= $data_limit1[$i]['TenSP'] ?></a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="description"></div>
                                                            <div class="product-price"> <span class="price"><?= number_format($data_limit1[$i]['DonGia']) ?>đ</span> <span class="price-before-discount"><?= number_format($data_limit1[$i]['DonGiaCu']) ?>đ </span></div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                        <!-- /.product-info -->
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button onclick="location.href='?act=detail&id=<?= $data_limit1[$i]['MaSP'] ?>'" data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                                    </li>
                                                                    <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="?act=detail&id=<?= $data_random[$i]['MaSP'] ?>" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>

                                                                </ul>
                                                            </div>
                                                            <!-- /.action -->
                                                        </div>
                                                        <!-- /.cart -->
                                                    </div>
                                                    <!-- /.product -->

                                                </div>
                                                <!-- /.products -->
                                            </div>
                                            <!-- /.item -->
                                        <?php } ?>
                                    </div>
                                    <!-- /.home-owl-carousel -->
                                </div>
                                <!-- /.product-slider -->
                            </div>
                        <?php } ?>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.scroll-tabs -->
                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">Sản phẩm bán chạy</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                        <?php if ($data_random != NULL) { ?>
                            <?php for ($i = 0; $i < count($data_random); $i++) { ?>
                                <div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image"> <a href="?act=detail&id=<?= $data_random[$i]['MaSP'] ?>"><img src="public\images\products\<?= $data_random[$i]['HinhAnh1'] ?>" alt=""></a> </div>
                                            </div>
                                            <!-- /.product-image -->

                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="?act=detail&id=<?= $data_random[$i]['MaSP'] ?>"><?= $data_random[$i]['TenSP'] ?></a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price"> <span class="price"><?= number_format($data_random[$i]['DonGia']) ?>đ </span> <span class="price-before-discount"><?= number_format($data_random[$i]['DonGiaCu']) ?>đ </span> </div>
                                                <!-- /.product-price -->

                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                            <button onclick="location.href='?act=detail&id=<?= $data_random[$i]['MaSP'] ?>'" class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                        </li>
                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="?act=detail&id=<?= $data_random[$i]['MaSP'] ?>" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                    </ul>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                        <!-- /.product -->

                                    </div>
                                    <!-- /.products -->
                                </div>
                                <!-- /.item -->
                        <?php }
                        } ?>
                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" style="width: 100%; height: 300px;" src="public/images/banners/sale.jpg" alt=""> </div>
                                <div class="strip strip-text">
                                </div>
                                <div class="new-label">
                                    <div class="text">NEW</div>
                                </div>
                                <!-- /.new-label -->
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.wide-banners -->
                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                <!-- ============================================== BEST SELLER ============================================== -->

                <div class="best-deal wow fadeInUp outer-bottom-xs">
                    <h3 class="section-title">HÃNG GIÀY KHÁC</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                            <?php if ($data_tuychon1 != NULL) { ?>
                                <div class="item">
                                    <div class="products best-product">
                                        <?php for ($i = 0; $i < count($data_tuychon1); $i++) { ?>
                                            <div class="product">
                                                <div class="product-micro">
                                                    <div class="row product-micro-row">
                                                        <div class="col col-xs-5">
                                                            <div class="product-image">
                                                                <div class="image"> <a href="?act=detail&id=<?= $data_tuychon1[$i]['MaSP'] ?>"> <img src="public\images\products\<?= $data_tuychon1[$i]['HinhAnh1'] ?>" alt=""> </a> </div>
                                                                <!-- /.image -->

                                                            </div>
                                                            <!-- /.product-image -->
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col2 col-xs-7">
                                                            <div class="product-info">
                                                                <h3 class="name"><a href="?act=detail&id=<?= $data_tuychon1[$i]['MaSP'] ?>"><?= $data_tuychon1[$i]['TenSP'] ?></a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="product-price"> <span class="price"><?= number_format($data_tuychon1[$i]['DonGia']) ?>đ</span><span class="price-before-discount"><?= number_format($data_tuychon1[$i]['DonGiaCu']) ?>đ</span></div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.product-micro-row -->
                                                </div>
                                                <!-- /.product-micro -->

                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($data_tuychon2 != NULL) { ?>
                                <div class="item">
                                    <div class="products best-product">
                                        <?php for ($i = 0; $i < count($data_tuychon2); $i++) { ?>
                                            <div class="product">
                                                <div class="product-micro">
                                                    <div class="row product-micro-row">
                                                        <div class="col col-xs-5">
                                                            <div class="product-image">
                                                                <div class="image"> <a href="?act=detail&id=<?= $data_tuychon2[$i]['MaSP'] ?>"> <img src="public\images\products\<?= $data_tuychon2[$i]['HinhAnh1'] ?>" alt=""> </a> </div>
                                                                <!-- /.image -->

                                                            </div>
                                                            <!-- /.product-image -->
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col2 col-xs-7">
                                                            <div class="product-info">
                                                                <h3 class="name"><a href="?act=detail&id=<?= $data_tuychon2[$i]['MaSP'] ?>"><?= $data_tuychon2[$i]['TenSP'] ?></a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="product-price"> <span class="price"><?= number_format($data_tuychon2[$i]['DonGia']) ?>đ</span><span class="price-before-discount"><?= number_format($data_tuychon2[$i]['DonGiaCu']) ?>đ </span> </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.product-micro-row -->
                                                </div>
                                                <!-- /.product-micro -->

                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($data_tuychon3 != NULL) { ?>
                                <div class="item">
                                    <div class="products best-product">
                                        <?php for ($i = 0; $i < count($data_tuychon3); $i++) { ?>
                                            <div class="product">
                                                <div class="product-micro">
                                                    <div class="row product-micro-row">
                                                        <div class="col col-xs-5">
                                                            <div class="product-image">
                                                                <div class="image"> <a href="#"> <img src="public\images\products\<?= $data_tuychon3[$i]['HinhAnh1'] ?>" alt=""> </a> </div>
                                                                <!-- /.image -->

                                                            </div>
                                                            <!-- /.product-image -->
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col2 col-xs-7">
                                                            <div class="product-info">
                                                                <h3 class="name"><a href="#"><?= $data_tuychon3[$i]['TenSP'] ?></a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="product-price"> <span class="price"><?= number_format($data_tuychon3[$i]['DonGia']) ?>đ</span> <span class="price-before-discount"><?= number_format($data_tuychon3[$i]['DonGiaCu']) ?>đ </span></div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.product-micro-row -->
                                                </div>
                                                <!-- /.product-micro -->

                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($data_tuychon5 != NULL) { ?>
                                <div class="item">
                                    <div class="products best-product">
                                        <?php for ($i = 0; $i < count($data_tuychon5); $i++) { ?>
                                            <div class="product">
                                                <div class="product-micro">
                                                    <div class="row product-micro-row">
                                                        <div class="col col-xs-5">
                                                            <div class="product-image">
                                                                <div class="image"> <a href="#"> <img src="public\images\products\<?= $data_tuychon5[$i]['HinhAnh1'] ?>" alt=""> </a> </div>
                                                                <!-- /.image -->

                                                            </div>
                                                            <!-- /.product-image -->
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col2 col-xs-7">
                                                            <div class="product-info">
                                                                <h3 class="name"><a href="#"><?= $data_tuychon5[$i]['TenSP'] ?></a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="product-price"> <span class="price"><?= number_format($data_tuychon5[$i]['DonGia']) ?>đ</span> <span class="price-before-discount"><?= number_format($data_tuychon5[$i]['DonGiaCu']) ?>đ </span></div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.product-micro-row -->
                                                </div>
                                                <!-- /.product-micro -->

                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($data_tuychon1 != NULL) { ?>
                                <div class="item">
                                    <div class="products best-product">
                                        <?php for ($i = 0; $i < count($data_tuychon1); $i++) { ?>
                                            <div class="product">
                                                <div class="product-micro">
                                                    <div class="row product-micro-row">
                                                        <div class="col col-xs-5">
                                                            <div class="product-image">
                                                                <div class="image"> <a href="?act=detail&id=<?= $data_tuychon1[$i]['MaSP'] ?>"> <img src="public\images\products\<?= $data_tuychon1[$i]['HinhAnh1'] ?>" alt=""> </a> </div>
                                                                <!-- /.image -->

                                                            </div>
                                                            <!-- /.product-image -->
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col2 col-xs-7">
                                                            <div class="product-info">
                                                                <h3 class="name"><a href="#"><?= $data_tuychon1[$i]['TenSP'] ?></a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="product-price"> <span class="price"><?= number_format($data_tuychon1[$i]['DonGia']) ?>đ</span><span class="price-before-discount"><?= number_format($data_tuychon1[$i]['DonGiaCu']) ?>đ </span> </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.product-micro-row -->
                                                </div>
                                                <!-- /.product-micro -->

                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== BEST SELLER : END ============================================== -->
                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <section class="section wow fadeInUp new-arriavls">
                    <h3 class="section-title">FLASH SALE</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                        <?php if ($data_tuychon2 != NULL) { ?>
                            <?php for ($i = 0; $i < count($data_tuychon2); $i++) { ?>
                                <div class="item item-carousel">

                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image"> <a href="?act=detail&id=<?= $data_tuychon2[$i]['MaSP'] ?>"><img src="public\images\products\<?= $data_tuychon2[$i]['HinhAnh1'] ?>" alt=""></a> </div>
                                            </div>
                                            <!-- /.product-image -->

                                            <div class="product-info text-left">
                                                <h3 class="name"><a href=""><?= $data_tuychon2[$i]['TenSP'] ?></a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price"> <span class="price"><?= number_format($data_tuychon2[$i]['DonGia']) ?>đ</span> <span class="price-before-discount"><?= number_format($data_tuychon2[$i]['DonGiaCu']) ?>đ</span> </div>
                                                <!-- /.product-price -->

                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                        </li>
                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="?act=detail&id=<?= $data_random[$i]['MaSP'] ?>" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                        <li class="lnk"> <a class="add-to-cart" href="?act=detail&id=<?= $data_random[$i]['MaSP'] ?>" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                    </ul>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                        <!-- /.product -->

                                    </div>
                                    <!-- /.products -->

                                </div>
                            <?php } ?>
                            <!-- /.item -->
                        <?php } ?>
                    </div>

                    <!-- /.home-owl-carousel -->
                </section>
                <h3 class="section-title" style="text-align: center; "><a style="color: Blue;" href="?act=shop"> vào cửa hàng để xem nhiều hơn!</a></h3>
                <!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

            </div>
            <!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div>
        <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div>
    <!-- /.container -->
</div>