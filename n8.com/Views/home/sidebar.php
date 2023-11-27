      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
          <!-- ================================== TOP NAVIGATION : END ================================== -->
          <!-- ============================================== HOT DEALS: END ============================================== -->
          <div class="sidebar-widget outer-bottom-small wow fadeInUp">
              <h3 class="section-title">Gợi ý hôm nay</h3>
              <div class="sidebar-widget-body outer-top-xs">

                  <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                      <?php
                        if ($data_random != NULL) {
                        ?>

                          <div class="item">
                              <div class="products special-product">
                                  <?php
                                    for ($i = 0; $i < count($data_random); $i++) {
                                    ?>
                                      <div class="product">
                                          <div class="product-micro">
                                              <div class="row product-micro-row">
                                                  <div class="col col-xs-5">
                                                      <div class="product-image">
                                                          <div class="image"> <a href="?act=detail&id=<?= $data_random[$i]['MaSP'] ?>"> <img src="public\images\products\<?= $data_random[$i]['HinhAnh1'] ?>" alt=""> </a> </div>
                                                          <!-- /.image -->

                                                      </div>
                                                      <!-- /.product-image -->
                                                  </div>
                                                  <!-- /.col -->
                                                  <div class="col col-xs-7">
                                                      <div class="product-info">
                                                          <h3 class="name"><a href="?act=detail&id=<?= $data_random[$i]['MaSP'] ?>"><?= $data_random[$i]['TenSP'] ?></a></h3>
                                                          <div class="rating rateit-small"></div>
                                                          <div class="product-price"> <span class="price"><?= number_format($data_random[$i]['DonGia']) ?>đ</span> </div>
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
                      <?php
                        if ($data_random != NULL) {
                        ?>
                          <div class="item">
                              <div class="products special-product">

                                  <?php
                                    for ($i = 0; $i < count($data_random); $i++) {
                                    ?>
                                      <div class="product">
                                          <div class="product-micro">
                                              <div class="row product-micro-row">
                                                  <div class="col col-xs-5">
                                                      <div class="product-image">
                                                          <div class="image"> <a href="?act=detail&id=<?= $data_random[$i]['MaSP'] ?>"> <img src="public\images\products\<?= $data_random[$i]['HinhAnh1'] ?>" alt=""> </a> </div>
                                                          <!-- /.image -->

                                                      </div>
                                                      <!-- /.product-image -->
                                                  </div>
                                                  <!-- /.col -->
                                                  <div class="col col-xs-7">
                                                      <div class="product-info">
                                                          <h3 class="name"><a href="?act=detail&id=<?= $data_random[$i]['MaSP'] ?>"><?= $data_random[$i]['TenSP'] ?></a></h3>
                                                          <div class="rating rateit-small"></div>
                                                          <div class="product-price"> <span class="price"><?= number_format($data_random[$i]['DonGia']) ?>đ</span> </div>
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
          <!-- ============================================== HOT DEALS ============================================== -->
          <?php
            if ($data_random != NULL) {
            ?>
              <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
                  <h3 class="section-title">ƯU ĐÃI LỚN</h3>
                  <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                      <div class="item">
                          <div class="products">
                              <div class="hot-deal-wrapper">
                                  <div class="image"> <img src="public/images/products/<?= $data_random[1]['HinhAnh1'] ?>" alt=""> </div>
                                  <div class="sale-offer-tag"><span>50%<br>
                                          off</span></div>
                                  <div class="timing-wrapper">
                                      <div class="box-wrapper">
                                          <div class="date box"> <span class="key">27</span> <span class="value">DAYS</span> </div>
                                      </div>
                                      <div class="box-wrapper">
                                          <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                                      </div>
                                      <div class="box-wrapper">
                                          <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                                      </div>
                                      <div class="box-wrapper hidden-md">
                                          <div class="seconds box"> <span class="key">59</span> <span class="value">SEC</span> </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- /.hot-deal-wrapper -->

                              <div class="product-info text-left m-t-20">
                                  <h3 class="name"><a href="?act=detail&id=<?= $data_random[1]['MaSP'] ?>"><?= $data_random[1]['TenSP'] ?></a></h3>
                                  <div class="rating rateit-small"></div>
                        
                                  <div class="product-price"> <span class="price"><?= number_format($data_random[1]['DonGia'] / 2 ) ?>đ</span> <span class="price-before-discount"><?= number_format($data_random[1]['DonGia']) ?>đ</span> </div>
                                  <!-- /.product-price -->

                              </div>
                              <!-- /.product-info -->

                              <div class="cart clearfix animate-effect">
                                  <div class="action">
                                      <div class="add-cart-button btn-group">
                                          <button class="btn btn-primary icon" onclick="location.href='?act=detail&id=<?= $data_random[1]['MaSP'] ?>'" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                          <button class="btn btn-primary cart-btn" onclick="location.href='?act=detail&id=<?= $data_random[1]['MaSP'] ?>'" type="button">Thêm giỏ hàng</button>
                                      </div>
                                  </div>
                                  <!-- /.action -->
                              </div>
                              <!-- /.cart -->
                          </div>
                      </div>
                  </div>
                  <!-- /.sidebar-widget -->
              </div>
          <?php } ?>
          <!-- ============================================== SPECIAL OFFER ============================================== -->

          <div class="sidebar-widget outer-bottom-small wow fadeInUp">
              <h3 class="section-title">Sản phẩm bán chạy</h3>
              <div class="sidebar-widget-body outer-top-xs">

                  <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                      <?php
                        if ($data_sanpham1 != NULL) {
                        ?>

                          <div class="item">
                              <div class="products special-product">
                                  <?php
                                    for ($i = 0; $i < count($data_sanpham1); $i++) {
                                    ?>
                                      <div class="product">
                                          <div class="product-micro">
                                              <div class="row product-micro-row">
                                                  <div class="col col-xs-5">
                                                      <div class="product-image">
                                                          <div class="image"> <a href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>"> <img src="public\images\products\<?= $data_sanpham1[$i]['HinhAnh1'] ?>" alt=""> </a> </div>
                                                          <!-- /.image -->

                                                      </div>
                                                      <!-- /.product-image -->
                                                  </div>
                                                  <!-- /.col -->
                                                  <div class="col col-xs-7">
                                                      <div class="product-info">
                                                          <h3 class="name"><a href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>"><?= $data_sanpham1[$i]['TenSP'] ?></a></h3>
                                                          <div class="rating rateit-small"></div>
                                                          <div class="product-price"> <span class="price"><?= number_format($data_sanpham1[$i]['DonGia']) ?>đ</span> </div>
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
                      <?php
                        if ($data_sanpham2 != NULL) {
                        ?>
                          <div class="item">
                              <div class="products special-product">

                                  <?php
                                    for ($i = 0; $i < count($data_sanpham2); $i++) {
                                    ?>
                                      <div class="product">
                                          <div class="product-micro">
                                              <div class="row product-micro-row">
                                                  <div class="col col-xs-5">
                                                      <div class="product-image">
                                                          <div class="image"> <a href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>"> <img src="public\images\products\<?= $data_sanpham2[$i]['HinhAnh1'] ?>" alt=""> </a> </div>
                                                          <!-- /.image -->

                                                      </div>
                                                      <!-- /.product-image -->
                                                  </div>
                                                  <!-- /.col -->
                                                  <div class="col col-xs-7">
                                                      <div class="product-info">
                                                          <h3 class="name"><a href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>"><?= $data_sanpham2[$i]['TenSP'] ?></a></h3>
                                                          <div class="rating rateit-small"></div>
                                                          <div class="product-price"> <span class="price"><?= number_format($data_sanpham2[$i]['DonGia']) ?>đ</span> </div>
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
          <!-- ============================================== SPECIAL OFFER : END ============================================== -->
          <!-- ============================================== PRODUCT TAGS ============================================== -->
          <div class="sidebar-widget product-tag wow fadeInUp">
              <h3 class="section-title">Thương Hiệu</h3>
              <div class="sidebar-widget-body outer-top-xs">

                  <div class="tag-list">
                      <?php foreach ($thuonghieu as $item) : ?>
                          <a class="item" title="Thương hiệu" href="?act=shop&sp=<?= $item['MaDM'] ?>"><?= $item['TenDM'] ?></a>
                      <?php endforeach; ?>
                  </div>

                  <!-- /.tag-list -->
              </div>
              <!-- /.sidebar-widget-body -->
          </div>
          <!-- /.sidebar-widget -->
      </div>
      <!-- /.sidemenu-holder -->