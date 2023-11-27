<div id="hero">
  <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
    <?php
    foreach ($data_banner as  $value) {  ?>
      <a href="?act=shop">
        <div class="item"  style="background-image: url(public/images/sliders/<?= $value['HinhAnh'] ?>);">
          <div class="container-fluid">
            <!-- /.caption -->
          </div>
          <!-- /.container-fluid -->
        </div>
      </a>
    <?php
    } ?>
    <!-- /.item -->
  </div>
  <!-- /.owl-carousel -->
</div>
<!-- ============================================== INFO BOXES ============================================== -->

<!-- /.info-boxes -->