    <!--================================
            START DASHBOARD AREA
    =================================-->
    <section class="dashboard-area dashboard_purchase">

        <div class="dashboard_contents">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">

                        <?= $this->session->flashdata('message'); ?>

                        <div class="filter-bar clearfix filter-bar2">

                            <div class="dashboard__title pull-left">
                                <h3>Konfirmasi Checkout</h3>
                            </div>

                            <!-- <div class="pull-right">
                                <div class="filter__option filter--text">
                                    <p>
                                        <span>230</span> Products Purchased</p>
                                </div>

                                <div class="filter__option filter--select">
                                    <div class="select-wrap">
                                        <select name="price">
                                            <option value="low">Price : Low to High</option>
                                            <option value="high">Price : High to low</option>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                </div>
                                <div class="filter__option filter--select">
                                    <div class="select-wrap">
                                        <select name="price">
                                            <option value="12">12 Items per page</option>
                                            <option value="15">15 Items per page</option>
                                            <option value="25">25 Items per page</option>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                </div>
                            </div> -->
                            <!-- end /.pull-right -->
                        </div>
                        <!-- end /.filter-bar -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="product_archive">
                    <div class="title_area">
                        <div class="row">
                            <div class="col-md-5">
                                <h4>Nama</h4>
                            </div>
                            <div class="col-md-3">
                                <h4 class="add_info">Tanggal Pemesanan</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Konfirmasi</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Aksi</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <?php foreach ($checkout as $ckout) : ?>
                            <div class="col-md-12">
                                <div class="single_product clearfix">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5">
                                            <div class="product__description">
                                                <!-- <img width="100" src="" alt="Purchase image"> -->
                                                <div class="short_desc">
                                                    <h4><?= $ckout['name'] ?></h4>
                                                    <p class="mb-0"><?= $ckout['address']; ?></p>
                                                    <p class="mb-0"><?= $ckout['email']; ?></p>
                                                    <p class="mb-0"><?= $ckout['bank']; ?></p>
                                                </div>
                                            </div>
                                            <!-- end /.product__description -->
                                        </div>
                                        <!-- end /.col-md-5 -->

                                        <div class="col-lg-3 col-md-3 col-6 xs-fullwidth">
                                            <div class="product__additional_info">
                                                <ul>
                                                    <li>
                                                        <p>
                                                            <span>Terbit: </span><?= $ckout['date_created']; ?></p>
                                                    </li>
                                                    <!-- <li class="license">
                                                    <p>
                                                        <span>Licence:</span> Regular</p>
                                                </li> -->
                                                    <li>
                                                        <p><span>Batas:</span> <?= $ckout['pay_limit']; ?></p>
                                                    </li>
                                                    <li>
                                                        <!-- <a href="#">
                                                            <span class="lnr lnr-book"></span><img src="<?= base_url('assets/'); ?>images/catword.png" alt="">
                                                        </a> -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end /.col-md-3 -->

                                        <div class="col-lg-4 col-md-4 col-6 xs-fullwidth">
                                            <div class="product__price_download">
                                                <div class="item_price v_middle">
                                                    <!-- <span>Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?></span> -->
                                                    <?php if ($ckout['confirm'] == 'default.jpg') : ?>
                                                        <span class="withdrawal bg-danger text-white">Belum Dikonfirmasi</span>
                                                    <?php else : ?>
                                                        <img width="100" src="<?= base_url('assets/img/checkout/') . $ckout['confirm']; ?>" alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="item_action v_middle">

                                                    <a href="<?= base_url('user/show_product/') . $ckout['id']; ?>" class="btn btn--md btn--round bg-info">Detail</a>
                                                    <a href="<?= base_url('user/confirm_checkout/') . $ckout['id']; ?>" class="btn btn--md btn--round bg-success">Konfirmasi</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                        <div class="col-md-12">
                            <div class="pagination-area pagination-area2">
                                <nav class="navigation pagination " role="navigation">
                                    <div class="nav-links">
                                        <a class="prev page-numbers" href="#">
                                            <span class="lnr lnr-arrow-left"></span>
                                        </a>
                                        <a class="page-numbers current" href="#">1</a>
                                        <a class="page-numbers" href="#">2</a>
                                        <a class="page-numbers" href="#">3</a>
                                        <a class="next page-numbers" href="#">
                                            <span class="lnr lnr-arrow-right"></span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                            <!-- end /.pagination-area -->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.product_archive2 -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->