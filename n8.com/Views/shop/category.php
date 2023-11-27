<div class='col-md-3 sidebar'>
    <!-- ================================== TOP NAVIGATION ================================== -->

    <!-- /.side-menu -->
    <!-- ================================== TOP NAVIGATION : END ================================== -->
    <div class="sidebar-module-container">
        <div class="sidebar-filter">
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget wow fadeInUp">
                <h3 class="section-title">Mua sắm</h3>
                <div class="widget-header">
                    <h4 class="widget-title">Danh mục</h4>
                </div>
                <div class="sidebar-widget-body">
                    <div class="accordion">
                        <?php $i = 1;
                        foreach ($data_chitietDM as $item) : ?>

                            <div class="accordion-group">
                                <div class="accordion-heading"> <a href="<?php echo "#" . $i ?>" data-toggle="collapse" class="accordion-toggle collapsed"><?= $data_danhmuc[$i - 1]['TenDM'] ?></a> </div>
                                <!-- /.accordion-heading -->
                                <div class="accordion-body collapse" id="<?php echo $i; ?>" style="height: 0px;">
                                    <div class="accordion-inner">

                                        <ul>
                                            <?php foreach ($item as $row) : ?>
                                                <li><a href="?act=shop&sp=<?= $i ?>&loai=<?= $row['TenLSP'] ?>"><?= $row['TenLSP'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>

                                    </div>
                                    <!-- /.accordion-inner -->
                                </div>
                                <!-- /.accordion-body -->
                            </div>
                        <?php $i++;
                        endforeach; ?>
                        <!-- /.accordion-group -->

                    </div>
                    <!-- /.accordion -->
                </div>
                <!-- /.sidebar-widget-body -->
            </div>
            <!-- /.sidebar-widget -->
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->
            <!-- /.sidebar-widget -->
            <!-- ============================================== COMPARE: END ============================================== -->
            <!-- ============================================== PRODUCT TAGS ============================================== -->
            <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs">
                <h3 class="section-title">Thương Hiệu</h3>
                <div class="sidebar-widget-body outer-top-xs">
                    <div class="tag-list">
                        <?php foreach ($thuonghieu as $item) : ?>
                            <a class="item" title="Thương hiệu" href="?act=shop&sp=1&loai=<?= $item['TenLSP'] ?>"><?= $item['TenLSP'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- /.sidebar-widget-body -->
            </div>

        </div>
        <!-- /.sidebar-filter -->
    </div>
    <!-- /.sidebar-module-container -->
</div>