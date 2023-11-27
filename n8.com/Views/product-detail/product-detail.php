<?php if ($data != NULL) { ?>
	<div class="breadcrumb">
		<div class="container">
			<div class="breadcrumb-inner">
				<ul class="list-inline list-unstyled">
					<li><a href="?=act=home">Trang chủ</a></li>
					<li><a href="?act=shop">Cửa hàng</a></li>
					<li class='active'><?= $data['TenSP'] ?></li>
				</ul>
			</div><!-- /.breadcrumb-inner -->
		</div><!-- /.container -->
	</div><!-- /.breadcrumb -->
	<div class="body-content outer-top-xs">
		<div class='container'>
			<div class='row single-product'>
				<div class='col-md-12'>
					<div class="detail-block">
						<div class="row  wow fadeInUp">

							<div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
								<div class="product-item-holder size-big single-product-gallery small-gallery">

									<div id="owl-single-product">
										<div class="single-product-gallery-item" id="slide1">
											<a data-lightbox="image-1" data-title="Gallery" href="public\images\products\<?= $data['HinhAnh1'] ?>">
												<img class="img-responsive" alt="" src="public\images\blank.gif" data-echo="public/images/products/<?= $data['HinhAnh1'] ?>">
											</a>
										</div><!-- /.single-product-gallery-item -->

										<div class="single-product-gallery-item" id="slide2">
											<a data-lightbox="image-1" data-title="Gallery" href="public\images\products\<?= $data['HinhAnh2'] ?>">
												<img class="img-responsive" alt="" src="public\images\blank.gif" data-echo="public/images/products/<?= $data['HinhAnh2'] ?>">
											</a>
										</div><!-- /.single-product-gallery-item -->

										<div class="single-product-gallery-item" id="slide3">
											<a data-lightbox="image-1" data-title="Gallery" href="public\images\products\<?= $data['HinhAnh3'] ?>">
												<img class="img-responsive" alt="" src="public\images\blank.gif" data-echo="public/images/products/<?= $data['HinhAnh3'] ?>">
											</a>
										</div><!-- /.single-product-gallery-item -->

										<div class="single-product-gallery-item" id="slide4">
											<a data-lightbox="image-1" data-title="Gallery" href="public\images\products\<?= $data['HinhAnh1'] ?>">
												<img class="img-responsive" alt="" src="public\images\blank.gif" data-echo="public/images/products/<?= $data['HinhAnh1'] ?>">
											</a>
										</div><!-- /.single-product-gallery-item -->

									</div><!-- /.single-product-slider -->


									<div class="single-product-gallery-thumbs gallery-thumbs">

										<div id="owl-single-product-thumbnails">
											<div class="item">
												<a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
													<img class="img-responsive" width="85" alt="" src="public\images\blank.gif" data-echo="public/images/products/<?= $data['HinhAnh1'] ?>">
												</a>
											</div>

											<div class="item">
												<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
													<img class="img-responsive" width="85" alt="" src="public\images\blank.gif" data-echo="public/images/products/<?= $data['HinhAnh2'] ?>">
												</a>
											</div>
											<div class="item">

												<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
													<img class="img-responsive" width="85" alt="" src="public\images\blank.gif" data-echo="public/images/products/<?= $data['HinhAnh3'] ?>">
												</a>
											</div>
											<div class="item">

												<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
													<img class="img-responsive" width="85" alt="" src="public\images\blank.gif" data-echo="public/images/products/<?= $data['HinhAnh1'] ?>">
												</a>
											</div>
										</div><!-- /#owl-single-product-thumbnails -->

									</div><!-- /.gallery-thumbs -->

								</div><!-- /.single-product-gallery -->
							</div><!-- /.gallery-holder -->
							<div class='col-sm-6 col-md-7 product-info-block'>
								<div class="product-info">
									<h1 class="name"><?= $data['TenSP'] ?></h1>

									<div class="rating-reviews m-t-20">
										<div class="row">
											<div class="col-sm-3">
												<div class="rating rateit-small"></div>
											</div>
											<div class="col-sm-8">
												<div class="reviews">
													<a href="#" class="lnk">(13 Reviews)</a>
												</div>
											</div>
										</div><!-- /.row -->
									</div><!-- /.rating-reviews -->
									<div class="description-container m-t-20">
										<?= $data['KieuDang'] ?>
									</div><!-- /.description-container -->
									<div class="description-container m-t-20">
										<?= $data['MoTa'] ?>

									</div><!-- /.description-container -->

									<div class="price-container info-container m-t-20">
										<div class="row">
											<div class="col-sm-6">
												<div class="price-box">
													<span class="price"><?= number_format($data['DonGia']) ?>đ</span>
												</div>
											</div>
										</div><!-- /.row -->
									</div><!-- /.price-container -->

									<div class="quantity-container info-container">
										<div class="row" style="display: flex;">

											<div class="col-sm-7">
												<a href="?act=cart&xuli=add&id=<?= $data['MaSP'] ?>" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i>Thêm giỏ hàng</a>
											</div>
											<div   class="col-sm-7">
												<a href="?act=cart&xuli=add&id=<?= $data['MaSP'] ?>" class="btn btn-primary"><i class="fa fa-heart inner-right-vs"></i>Yêu Thích</a>
											</div>


										</div><!-- /.row -->
									</div><!-- /.quantity-container -->






								</div><!-- /.product-info -->
							</div><!-- /.col-sm-7 -->
						</div><!-- /.row -->
					</div>

					<div class="product-tabs inner-bottom-xs  wow fadeInUp">
						<div class="row">
							<div class="col-sm-3">
								<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
									<li class="active"><a data-toggle="tab" href="#review">SIZE</a></li>
									<li><a data-toggle="tab" href="#description">Mô tả</a></li>

								</ul><!-- /.nav-tabs #product-tabs -->
							</div>
							<div class="col-sm-9">

								<div class="tab-content">

									<div id="description" class="tab-pane in">
										<div class="product-tab">
											<p class="text"><?= $data['MoTa'] ?></p>
										</div>
									</div><!-- /.tab-pane -->
									<div id="review" class="tab-pane  active">
										<div class="product-tab">

											<div class="product-reviews">
												<h4 class="title">Bảng chọn size giày</h4>
											</div><!-- /.product-reviews -->



											<div class="product-add-review">
												<div class="review-table">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th class="cell-label">&nbsp;</th>
																	<th>37</th>
																	<th>38</th>
																	<th>39</th>
																	<th>40</th>
																	<th>41</th>
																	<th>42</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="cell-label">Chọn</td>
																	<td><input type="radio" name="quality" class="radio" value="1"></td>
																	<td><input type="radio" name="quality" class="radio" value="2"></td>
																	<td><input type="radio" name="quality" class="radio" value="3"></td>
																	<td><input type="radio" name="quality" class="radio" value="4"></td>
																	<td><input type="radio" name="quality" class="radio" value="5"></td>
																	<td><input type="radio" name="quality" class="radio" value="6"></td>
																</tr>
															</tbody>
														</table><!-- /.table .table-bordered -->
													</div><!-- /.table-responsive -->
												</div><!-- /.review-table -->
											</div><!-- /.product-add-review -->

										</div><!-- /.product-tab -->
									</div><!-- /.tab-pane -->

								</div><!-- /.tab-content -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.product-tabs -->

					<!-- ============================================== UPSELL PRODUCTS ============================================== -->
					<section class="section featured-product wow fadeInUp">
						<h3 class="section-title">Sản phẩm liên quan</h3>
						<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
							<?php foreach ($data_lq as $item) { ?>
								<div class="item item-carousel">
									<div class="products">
										<div class="product">
											<div class="product-image">
												<div class="image">
													<a href="?act=detail&id=<?= $item['MaSP'] ?>"><img src="public\images\products\<?= $item['HinhAnh1'] ?>" alt=""></a>
												</div><!-- /.image -->
											</div><!-- /.product-image -->


											<div class="product-info text-left">
												<h3 class="name"><a href="?act=detail&id=<?= $item['MaSP'] ?>"><?= $item['TenSP'] ?></a></h3>
												<div class="rating rateit-small"></div>
												<div class="description"></div>

												<div class="product-price">
													<span class="price"><?= $data['DonGia'] ?></span>

												</div><!-- /.product-price -->

											</div><!-- /.product-info -->
											<div class="cart clearfix animate-effect">
												<div class="action">
													<ul class="list-unstyled">
														<li class="add-cart-button btn-group">
															<button onclick="location.href='?act=detail&id=<?= $item['MaSP'] ?>'" class="btn btn-primary icon" data-toggle="dropdown" type="button">
																<i class="fa fa-shopping-cart"></i>
															</button>
															<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

														</li>

														<li class="lnk wishlist">
															<a class="add-to-cart" href="?act=detail&id=<?= $item['MaSP'] ?>" title="Wishlist">
																<i class="icon fa fa-heart"></i>
															</a>
														</li>

													</ul>
												</div><!-- /.action -->
											</div><!-- /.cart -->
										</div><!-- /.product -->

									</div><!-- /.products -->
								</div><!-- /.item -->
							<?php } ?>
						</div><!-- /.home-owl-carousel -->
					</section><!-- /.section -->
					<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

				</div><!-- /.col -->
				<div class="clearfix"></div>
			</div><!-- /.row -->
			<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
		</div><!-- /.container -->
	</div><!-- /.body-content -->
<?php } else {
	require_once("Views/error-404.php");
} ?>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId: '2652621865018691',
			xfbml: true,
			version: 'v7.0'
		});
		FB.AppEvents.logPageView();
	};

	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {
			return;
		}
		js = d.createElement(s);
		js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>