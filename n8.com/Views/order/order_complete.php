<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Trang chủ</a></li>
                <li class='active'>Theo dõi đơn hàng</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
    <div class="container">
        <div>
            <h3>
                <center>
                    <p>Cảm ơn bạn đã đăt hàng. Đơn đặt hàng của bạn đã được nhận</p>
                    <p>Vui Lòng Chờ Xét Duyệt</p>
                </center>
            </h3>
        </div>
        <div class="row ">
            <div class="shopping-cart">
                <div class="col-md-5 col-sm-12 cart-shopping-total">
                    <h3>Thông tin khách hàng</h3>
                    <table class="table">
                        <form action="?act=checkout" method="POST">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            <div class="cart-sub-total">
                                             Tên khách hàng<strong>:</strong> <?= $data_inforcustomer['NguoiNhan'] ?>
                                            </div>
                                        </div>
                                        <div class="cart-sub-total">
                                            Email: <?=$data_inforcustomer['Email']?>
                                        </div>
                                        <div class="cart-sub-total">
                                            Số điện thoại: <?=$data_inforcustomer['SDT']?>
                                        </div>
                                        <div class="cart-sub-total">
                                            Địa chỉ: <?=$data_inforcustomer['DiaChi']?>
                                        </div>
                                    </th>
                                </tr>
                            </thead><!-- /thead -->
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
                                            Vật chuyển<span class="inner-left-md">20.000đ</span>
                                        </div>
                                        <div class="cart-sub-total">
                                            Vat<span class="inner-left-md">0đ</span>
                                        </div>
                                        <div class="cart-grand-total">
                                            Tổng tiền<span class="inner-left-md"><?= number_format($count + 20000) ?>đ</span>
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