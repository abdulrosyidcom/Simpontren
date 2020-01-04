    <!--================================
            START DASHBOARD AREA
    =================================-->
    <section class="dashboard-area dashboard_purchase">

        <div class="dashboard_contents">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-bar clearfix filter-bar2">

                            <div class="dashboard__title pull-left">
                                <h3>Detail Produk</h3>
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

                <?= $this->session->flashdata('message'); ?>

                <div class="product_archive">
                    <div class="title_area">
                        <div class="row">
                            <div class="col-md-5">
                                <h4>Nama Produk</h4>
                            </div>
                            <div class="col-md-3">
                                <h4 class="add_info">Qty</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Harga</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Subtotal</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <?php $total = 0; ?>

                        <?php foreach ($order_product as $op) : ?>
                            <?php $subtotal = $op['qty'] * $op['price']; ?>
                            <?php $total += $subtotal; ?>

                            <div class="col-md-12">
                                <div class="single_product clearfix">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5">
                                            <div class="product__description">
                                                <!-- <img width="100" src="" alt="Purchase image"> -->
                                                <div class="short_desc">
                                                    <h4><?= $op['name'] ?></h4>
                                                </div>
                                            </div>
                                            <!-- end /.product__description -->
                                        </div>
                                        <!-- end /.col-md-5 -->

                                        <div class="col-lg-3 col-md-3 col-6 xs-fullwidth">
                                            <div class="product__additional_info">
                                                <ul>
                                                    <li>
                                                        <p><?= $op['qty']; ?></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end /.col-md-3 -->

                                        <div class="col-lg-4 col-md-4 col-6 xs-fullwidth">
                                            <div class="product__price_download">
                                                <div class="item_price v_middle">
                                                    <p>Rp. <?= number_format($op['price'], 0, ',', '.'); ?></p>
                                                </div>
                                                <div class="item_action v_middle">

                                                    <p class="mr-5">Rp. <?= number_format($subtotal, 0, ',', '.'); ?></p>

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
                                        <a href="" class="btn btn--md btn--round">Total : Rp. <?= number_format($total, 0, ',', '.'); ?></a>
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