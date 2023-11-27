<header class="header-style-1">

  <!-- ============================================== TOP MENU ============================================== -->
  <!-- <div class="top-bar animate-dropdown"> 

    <div class="container">
      <div class="cnt-account">
        <ul class="list-unstyled">
          <li><a href=""><i class="icon far fa-bell"></i>Thông báo</a></li>
          <li><a href="?act=hotro"><i class="icon far fa-question-circle"></i>Hổ trợ</a></li>
          <li><a href="?act=cart"><i class="icon fa fa-shopping-cart"></i>Giỏ hàng</a></li>
          <li><a href="?act=checkout"><i class="icon fa fa-check"></i>Thanh toán</a></li>
          <?php if (isset($_SESSION['isLogin'])) { ?>
            <li><a href="?act=taikhoan&xuli=account"><?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></a></li>

          <?php } else { ?>
            <li><a href="?act=taikhoan"><i class="icon fa fa-lock"></i>Đăng nhập</a></li>
          <?php } ?>
        </ul>
      </div>
      <div class="header-top-inner" id="header_top_inner">
        <div class="cnt-account" style="position: relative; left: -50%;">
          <ul class="list-unstyled">
            <li><a href=""><i class="icon far fa-bell"></i>Kênh bán hàng</a></li>
            <li><a href=""><i class="icon fa fa-lock"></i>Kết nối</a></li>
          </ul>
        </div>
        <!-- /.cnt-account -->
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.header-top -->
  <!-- ============= TOP MENU : END ================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="?act=home"><span><i class="fas fa-meteor"></i></span> N8SPORT </a> </div>
          <!-- /.logo -->
          <!-- ============================================================= LOGO : END ============================================================= -->
        </div>
        <!-- /.logo-holder -->

        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
          <!-- /.contact-row -->
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form action="?act=shop" method="post">
              <div class="control-group">
                <input class="search-field" placeholder="TÌM KIẾM SẢN PHẨM TẠI ĐÂY" name="keyword">
                <button class="search-button" type="submit"></button>
              </div>
            </form>
          </div>
          <!-- /.search-area -->
          <!-- ============================================================= SEARCH AREA : END ============================================================= -->
        </div>
        <!-- /.top-search-holder -->

        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

          <div class="dropdown dropdown-cart">
            <?php
            $soluong = 0;
            $thanhtien = 0;
            if (isset($_SESSION['sanpham'])) {
              foreach ($_SESSION['sanpham'] as $value) {
                $soluong += 1;
                $thanhtien += $value['ThanhTien'];
              }
            }
            ?>
            <a href="?act=cart" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
              <div class="items-cart-inner">
                <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                <div class="basket-item-count"><span class="count"><?= $soluong ?></span></div>
              </div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <center>
                  <h3>Giỏ hàng</h3>
                </center>
                <?php if (isset($_SESSION['sanpham'])) {
                  foreach ($_SESSION['sanpham'] as $value) { ?>
                    <div class="cart-item product-summary">
                      <div class="row">
                        <div class="col-xs-4">
                          <div class="image"> <a href="?act=cart"><img src="public\images\products/<?= $value['HinhAnh1'] ?>" alt=""></a> </div>
                        </div>
                        <div class="col-xs-7">
                          <h3 class="name"><a href="?act=cart"><?= $value['TenSP'] ?></a></h3>
                          <div class="price"><?= number_format($value['ThanhTien']) ?> VNĐ</div>
                        </div>
                        <div class="col-xs-1 action"> <a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class="fa fa-trash"></i></a> </div>
                      </div>
                    </div>
                <?php }
                } ?>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Tổng tiền :</span><span class='price'><?= number_format($thanhtien) ?></span> </div>
                  <div class="clearfix"></div>
                  <a href="?act=cart" class="btn btn-upper btn-primary btn-block m-t-20">Thanh toán</a>
                </div>
                <!-- /.cart-total-->

              </li>
            </ul>
            <!-- /.dropdown-menu-->
          </div>
          <!-- /.dropdown-cart -->

          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
        </div>
        <!-- /.top-cart-row -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </div>
  <!-- /.main-header -->

  <!-- ===================== NAVBAR ==================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav" >
                <li class="active dropdown yamm-fw"> <a href="?act=home" class="dropdown-toggle" data-hover="dropdown">Trang chủ</a> </li>
                <li class="dropdown yamm-fw"> <a href="?act=shop" class="dropdown-toggle" data-hover="dropdown">Cửa hàng</a> </li>
               <?php $i = 1;
                foreach ($data_chitietDM as $row) : ?>
                  <li style="cursor: pointer; " class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><?= $data_danhmuc[$i - 1]['TenDM'] ?></a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-menu">
                              <ul class="links">
                                <?php
                                foreach ($row as $value) :
                                ?>
                                  <li><a id="sdsd_menu" href="?act=shop&sp=<?= $i ?>&loai=<?= $value['TenLSP'] ?>"><?= $value['TenLSP']; ?></a></li>
                                <?php endforeach; ?>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                <?php $i++;
                endforeach; ?>
                </li>
                <?php if (isset($_SESSION['isLogin_Admin'])) { ?>
                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Xin Chào <?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-menu">
                              <ul class="links">
                                <li><a id="sdsd_menu" href="admin/">Trang quản lý</a></li>
                                <li><a id="sdsd_menu" href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                <?php } else if (isset($_SESSION['isLogin'])) { ?>
                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Xin Chào <?= $_SESSION['login']['Ten'] ?></a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-menu">
                              <ul class="links">
                                <li><a id="sdsd_menu" href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                <?php } else { ?>
                  <li class="dropdown  navbar-right special-menu"> <a href="?act=taikhoan">Đăng nhập</a> </li>
                <?php } ?>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
          </div>
          <!-- /.navbar-collapse -->

        </div>
        <!-- /.nav-bg-class -->
      </div>
      <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

  </div>
  <!-- /.header-nav -->
  <!-- ============================================== NAVBAR : END ============================================== -->

</header>