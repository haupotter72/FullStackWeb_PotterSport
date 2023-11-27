<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Trang chủ</a></li>
				<li class='active'>Thanh toán</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">


				<div class="col-md-5 col-sm-12 cart-shopping-total">
					<h3>Địa chỉ giao hàng</h3>
					<table class="table">
						<form action="?act=checkout&xuli=save" method="POST">
							<thead>
								<tr>
									<th>
										<div class="cart-sub-total">
											<div class="cart-sub-total">
												<input type="text" name="NguoiNhan" class="form-control unicase-form-control text-input" placeholder="Người nhận">
											</div>
										</div>
										<div class="cart-sub-total">
											<input type="email" name="Email" class="form-control unicase-form-control text-input" placeholder="Địa chỉ email">
										</div>
										<div class="cart-sub-total">
											<input type="text" name="SDT" class="form-control unicase-form-control text-input" placeholder="Số điện thoại">
										</div>
										<div class="cart-sub-total">
											<input type="text" name="DiaChi" class="form-control unicase-form-control text-input" placeholder="Địa chỉ giao hàng">
										</div>
									</th>
								</tr>
							</thead><!-- /thead -->
							<tbody>
								<tr>
									<td>
										<div class="cart-checkout-btn pull-right">
											<button type="submit" class="btn btn-primary checkout-btn">Đặt hàng</button>
										</div>
									</td>
								</tr>
							</tbody><!-- /tbody -->
						</form>
					</table><!-- /table -->
				</div><!-- /.cart-shopping-total -->
				<div class="col-md-2 col-sm-6 estimate-ship-tax">
				</div><!-- /.estimate-ship-tax -->
				<div class="col-md-4 col-sm-12 cart-shopping-total">
					<h3>Hóa đơn</h3>
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
											Vận chuyển<span class="inner-left-md">20.000đ</span>
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
						</form>
					</table><!-- /table -->
				</div><!-- /.cart-shopping-total -->
			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
</div><!-- /.body-content -->