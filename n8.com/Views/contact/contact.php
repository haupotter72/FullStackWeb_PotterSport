	<div class="breadcrumb">
		<div class="container">
			<div class="breadcrumb-inner">
				<ul class="list-inline list-unstyled">
					<li><a href="?act=home">Trang chủ</a></li>
					<li class='active'>Liên hệ</li>
				</ul>
			</div><!-- /.breadcrumb-inner -->
		</div><!-- /.container -->
	</div><!-- /.breadcrumb -->

	<div class="body-content">
		<div class="container">
			<div class="contact-page">
				<div class="row">

					<div class="col-md-12 contact-map outer-bottom-vs">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15342.955240961428!2d108.2532374!3d15.9750106!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1634701158782!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
					<div class="col-md-9 contact-form">
						<div class="col-md-12 contact-title">
							<h4>Liên hệ tại đây!</h4>
						</div>
						<div class="col-md-4 ">
							<form class="register-form" role="form">
								<div class="form-group">
									<label class="info-title" for="exampleInputName">Tên của bạn <span>*</span></label>
									<input type="email" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="">
								</div>
							</form>
						</div>
						<div class="col-md-4">
							<form class="register-form" role="form">
								<div class="form-group">
									<label class="info-title" for="exampleInputEmail1">Địa chỉ Email <span>*</span></label>
									<input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
								</div>
							</form>
						</div>
						<div class="col-md-4">
							<form class="register-form" role="form">
								<div class="form-group">
									<label class="info-title" for="exampleInputTitle">Tiêu đề <span>*</span></label>
									<input type="email" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="">
								</div>
							</form>
						</div>
						<div class="col-md-12">
							<form class="register-form" role="form">
								<div class="form-group">
									<label class="info-title" for="exampleInputComments">Lời nhắn <span>*</span></label>
									<textarea class="form-control unicase-form-control" id="exampleInputComments"></textarea>
								</div>
							</form>
						</div>
						<div class="col-md-12 outer-bottom-small m-t-20">
							<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Gửi tin nhắn</button>
						</div>
					</div>
					<div class="col-md-3 contact-info">
						<div class="contact-title">
							<h4>Thông tin</h4>
						</div>
						<div class="clearfix address">
							<span class="contact-i"><i class="fa fa-map-marker"></i></span>
							<span class="contact-span">Trường Đại Học Công Nghệ Thông Tin và Truyền Thông Việt Hàn</span>
						</div>
						<div class="clearfix phone-no">
							<span class="contact-i"><i class="fa fa-mobile"></i></span>
							<span class="contact-span">+(84) 926835096
		
							</span>
						</div>
						<div class="clearfix email">
							<span class="contact-i"><i class="fa fa-envelope"></i></span>
							<span class="contact-span"><a href="#">@vku.udn.vn</a></span>
						</div>
					</div>
				</div><!-- /.contact-page -->
			</div><!-- /.row -->
		</div><!-- /.container -->

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



	</div>
