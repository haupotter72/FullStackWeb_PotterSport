<!-- ========= HEADER : END ================ -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="?act=home">Trang chủ</a></li>
        <li class='active'>Cửa hàng</li>
        <i style="position: relative;right: -45rem;"> &nbsp;&nbsp; Số sản phẩm <?= $data_tong ?></i>
      </ul>
    </div>
    <!-- /.breadcrumb-inner -->
  </div>
  <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <?php require_once('category.php'); ?>
      <!-- /.sidebar -->
      <div class='col-md-9'>
        <!-- ================== SECTION – HERO ====================== -->
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <?php
            if (isset($data) and $data != NULL) { ?>
              <div class="tab-pane active " id="grid-container">
                <div class="category-product">
                  <div class="row">

                    <?php foreach ($data as  $value) {
                    ?>
                      <div class="col-sm-6 col-md-4 wow fadeInUp">

                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image"> <a href="?act=detail&id=<?= $value['MaSP'] ?>"><img src="public\images\products\<?= $value['HinhAnh1'] ?>" alt=""></a> </div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name"><a href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?></a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price"> <span class="price"><?= number_format($value['DonGia']) ?>đ</span> <span class="price-before-discount"></span> </div>
                              <!-- /.product-price -->

                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" onclick="location.href='?act=detail&id=<?= $value['MaSP'] ?>'" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Thêm giỏ hàng</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                  <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
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
                  </div>
                  <!-- /.row -->
                </div>
              </div>
              <!-- /.tab-pane -->
            <?php
            } else {
              echo "Không có dữ liệu";
            } ?>
            <div class="tab-pane " id="list-container">
              <div class="category-product">
                <?php
                if (isset($data) and $data != NULL) { ?>
                  <?php foreach ($data as  $value) {
                  ?>
                    <div class="category-product-inner wow fadeInUp">
                      <div class="products">
                        <div class="product-list product">
                          <div class="row product-list-row">
                            <div class="col col-sm-4 col-lg-4">
                              <div class="product-image">
                                <div class="image"> <img src="public\images\products\<?= $value['HinhAnh1'] ?>" alt=""> </div>
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-sm-8 col-lg-8">
                              <div class="product-info">
                                <h3 class="name"><a href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?></a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price"> <span class="price"><?= number_format($value['DonGia']) ?>đ</span> <span class="price-before-discount"></span> </div>
                                <!-- /.product-price -->
                                <div class="description m-t-10">
                                  <?= $value['KieuDang'] ?> <br>
                                  <?= $value['MoTa'] ?>
                                </div>
                                <div class="cart clearfix animate-effect">
                                  <div class="action">
                                    <ul class="list-unstyled">
                                      <li class="add-cart-button btn-group">
                                        <button onclick="location.href='?act=detail&id=<?= $value['MaSP'] ?>'" class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                        <button onclick="location.href='?act=detail&id=<?= $value['MaSP'] ?>'" class="btn btn-primary cart-btn" type="button">Thêm giỏ hàng</button>
                                      </li>
                                      <li class="lnk wishlist"> <a class="add-to-cart" href="?act=detail&id=<?= $value['MaSP'] ?>" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    </ul>
                                  </div>
                                  <!-- /.action -->
                                </div>
                                <!-- /.cart -->

                              </div>
                              <!-- /.product-info -->
                            </div>
                            <!-- /.col -->
                          </div>
                        </div>
                        <!-- /.product-list -->
                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.category-product-inner -->
                <?php }
                } else {
                  echo "Không có dữ liệu";
                } ?>
              </div>

              <!-- /.category-product -->
            </div>
            <!-- /.tab-pane #list-container -->
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="active"><a href="?act=shop&trang=1">1</a></li>
                  <?php if ($data_tong > 8 and isset($test)) {
                    for ($i = 2; $i <= $data_tong / 4; $i++) { ?>
                      <li class="prev"><a href="?act=shop&trang=<?= $i ?>"><?= $i ?></a></li>
                  <?php }
                  } ?>

                </ul>
                <!-- /.list-inline -->
              </div>
              <!-- /.pagination-container -->
            </div>
            <!-- /.text-right -->

          </div>
          <!-- /.filters-container -->

        </div>
        <!-- /.search-result-container -->

      </div>
      <!-- /.col -->
    </div>
  </div>
  <!-- /.container -->

</div>