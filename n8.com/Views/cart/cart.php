<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="?act=home">Trang chủ</a></li>
				<li class='active'>Giỏ hàng</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th class="cart-romove item">Xóa</th>
									<th class="cart-description item">Hình Ảnh</th>
									<th class="cart-product-name item">Tên sản phẩm</th>
									<th class="cart-qty item">Số lượng</th>
									<th class="cart-total last-item">Thành tiền</th>
								</tr>
							</thead><!-- /thead -->
							<tfoot>
								<tr>
									<td colspan="7">
										<div class="shopping-cart-btn">
											<span class="">
												<a href="?act=shop" class="btn btn-upper btn-primary outer-left-xs">Tiếp tục mua sắm</a>
												<a href="?act=cart&xuli=deleteall" class="btn btn-upper btn-primary pull-right outer-right-xs">Cập nhật giỏ hàng</a>
											</span>
										</div><!-- /.shopping-cart-btn -->
									</td>
								</tr>
							</tfoot>
							<tbody>
								<?php
								if (isset($_SESSION['sanpham'])) {
									foreach ($_SESSION['sanpham'] as $value) { ?>
										<tr>
											<td class="romove-item"><a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
											<td class="cart-image">
												<a class="entry-thumbnail" href="?act=detail&id=<?= $value['MaSP'] ?>">
													<img src="public\images\products\<?= $value['HinhAnh1']?>" alt="">
												</a>
											</td>
											<td class="cart-product-name-info">
												<h4 class='cart-product-description'><a href="?act=detail&id=<?= $value['MaSP'] ?>"><?=$value['TenSP']?></a></h4>
												<div class="row">
													<div class="col-sm-4">
														<div class="rating rateit-small"></div>
													</div>
													<div class="col-sm-8">
														<div class="reviews">
															(06 Reviews)
														</div>
													</div>
												</div><!-- /.row -->
												<div class="cart-product-info">
													<span class="product-color">COLOR:<span></span></span>
												</div>
											</td>

											<td class="cart-product-quantity">
												<div class="quant-input">
													<div class="arrows">
														<div class="arrow plus gradient"><a href="?act=cart&xuli=update&id=<?=$value['MaSP']?>"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></a></div>
														<div class="arrow minus gradient"><a href="?act=cart&xuli=delete&id=<?=$value['MaSP']?>"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></a></div>
													</div>
													<input type="text" value="<?= $value['SoLuong'] ?>">
												</div>
											</td>

											<td class="cart-product-grand-total"><span class="cart-grand-total-price"><?= number_format($value['ThanhTien']) ?>đ</span></td>
										</tr>
								<?php }
								} ?>
							</tbody><!-- /tbody -->
						</table><!-- /table -->
					</div>
				</div><!-- /.shopping-cart-table -->
				<div class="col-md-2 col-sm-6 estimate-ship-tax">
				</div><!-- /.estimate-ship-tax -->

				<div class="col-md-4 col-sm-12 estimate-ship-tax">
					<table class="table">
						<thead>
							<tr>
								<th>
									<span class="estimate-title">MÃ GIẢM GIÁ</span>
									<p>Nhập mã giảm giá nếu bạn có !</p>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="form-group">
										<input type="text" class="form-control unicase-form-control text-input" placeholder="Nhập mã tại đây...">
									</div>
									<div class="clearfix pull-right">
										<button type="submit" class="btn-upper btn btn-primary">áp dụng</button>
									</div>
								</td>
							</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
				</div><!-- /.estimate-ship-tax -->

				<div class="col-md-4 col-sm-12 cart-shopping-total">
					<h3>CHI TIẾT THANH TOÁN</h3>
					<table class="table">
						<form action="?act=checkout" method="POST">
							<thead>
								<tr>
									<th>
										<div class="cart-sub-total">
											<div class="cart-sub-total">
												Tổng Giỏ Hàng<span class="inner-left-md"><?= number_format($count) ?>đ</span>
											</div><span class="inner-left-md"><?= number_format($count) ?>đ</span>
										</div>
										<div class="cart-sub-total">
											Giảm giá<span class="inner-left-md">0%</span>
										</div>
										<div class="cart-sub-total">
											Vật chuyển<span class="inner-left-md">20.000đ</span>
										</div>
										<div class="cart-sub-total">
											Vat<span class="inner-left-md">0đ</span>
										</div>
										<div class="cart-grand-total">
											Tổng tiền<span class="inner-left-md"><?=number_format($count+20000)?>đ</span>
										</div>
									</th>
								</tr>
							</thead><!-- /thead -->
							<tbody>
								<tr>
									<td>
										<div class="cart-checkout-btn pull-right">
											<button type="submit" class="btn btn-primary checkout-btn">Đặt hàng</button>
											<span class="">Thanh toán với nhiều địa chỉ!</span>
										</div>
									</td>
								</tr>
							</tbody><!-- /tbody -->
						</form>
					</table><!-- /table -->
				</div><!-- /.cart-shopping-total -->
			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
</div><!-- /.body-content -->