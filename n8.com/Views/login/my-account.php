<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="?act=home">Trang chủ</a></li>
				<li class='active'>Tài khoản</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="checkout-box faq-page">
			<div class="row">
				<div class="col-md-12">
					<h2 class="heading-title">Thông tin tài khoản</h2>
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
						<div class="panel panel-default checkout-step-01">

							<!-- panel-heading -->
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
										<span>1</span>Thông tin cá nhân
									</a>
								</h4>
							</div>
							<!-- panel-heading -->

							<div id="collapseOne" class="panel-collapse collapse in">
								<b>
									<?php if (isset($_COOKIE['doimk'])) {
										echo $_COOKIE['doimk'];
									} ?>
								</b>
								<!-- panel-body  -->
								<div class="panel-body">
									<table class="table">
										<form action="?act=taikhoan&xuli=update" id="form1" method="post">
											<thead>
												<tr>
													<th>
														Họ :<div class="cart-sub-total">
															<div class="cart-sub-total">
																<input type="text" value="<?= $data['Ho'] ?>" class="form-control" placeholder="Người nhận">
															</div>

														</div>
														Tên :<div class="cart-sub-total">
															<div class="cart-sub-total">
																<input type="text" value="<?= $data['Ten'] ?>" class="form-control" placeholder="Người nhận">
															</div>

														</div>
														Email :<div class="cart-sub-total">
															<div class="cart-sub-total">
																<input type="text" value="<?= $data['Email'] ?>" class="form-control" placeholder="Email">
															</div>

														</div>
														Số điện thoại :<div class="cart-sub-total">
															<div class="cart-sub-total">
																<input type="text" value="<?= $data['SDT'] ?>" class="form-control" placeholder="Số điện thoại">
															</div>

														</div>
														Địa chỉ :<div class="cart-sub-total">
															<div class="cart-sub-total">
																<input type="text" value="<?= $data['DiaChi'] ?>" class="form-control" placeholder="Địa chỉ">
															</div>

														</div>
													</th>
												</tr>
											</thead><!-- /thead -->
											<tbody>
												<tr>
													<td>
														<div class="cart-checkout-btn pull-right">
															<button for="form1" type="submit" class="btn btn-primary checkout-btn">Đổi thông tin</button>
														</div>
													</td>
												</tr>
											</tbody><!-- /tbody -->
										</form>
									</table><!-- /table -->
								</div>
								<!-- panel-body  -->

							</div><!-- row -->
						</div>
						<!-- checkout-step-01  -->
						<!-- checkout-step-02  -->
						<div class="panel panel-default checkout-step-02">
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
										<span>2</span>ĐỔI MẬT KHẨU
									</a>
								</h4>
							</div>
							<div id="collapse4" class="panel-collapse collapse">
									<div class="single-log-info">
										<div class="custom-input">
											<form action="?act=taikhoan&xuli=update" method="post">
												<input type="password" placeholder="Mật khẩu hiện tại .. " name="MatKhau" minlength="6" required />
												<input type="password" placeholder="Mật khẩu mới .. " name="MatKhauMoi" />
												<input type="password" placeholder="Xác nhận lại mật khẩu .." name="MatKhauXN" />
												<div class="submit-text text-left">
													<button type="submit_pw" value="submit form">Lưu</button>
												</div>
											</form>
										</div>
									</div>
								</div>
						</div>
						<!-- checkout-step-02  -->

					</div><!-- /.checkout-steps -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
</div><!-- /.body-content -->

<script>
	$(document).ready(function() {
		$(".changecolor").switchstylesheet({
			seperator: "color"
		});
		$('.show-theme-options').click(function() {
			$(this).parent().toggleClass('open');
			return false;
		});
	});

	$(window).bind("load", function() {
		$('.show-theme-options').delay(2000).trigger('click');
	});
</script>
<!-- For demo purposes – can be removed on production : End -->