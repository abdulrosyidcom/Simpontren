<!--================================
        START BREADCRUMB AREA
    =================================-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="active">
                            <a href="<?= base_url('cart'); ?>">Shopping Cart</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Shopping Cart</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
        END BREADCRUMB AREA
    =================================-->

<!--================================
            START DASHBOARD AREA
    =================================-->
<section class="cart_area section--padding2 bgcolor">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?= $this->session->flashdata('message'); ?>

                <div class="product_archive added_to__cart">
                    <div class="title_area">
                        <div class="row">
                            <div class="col-md-5">
                                <h4>Product Details</h4>
                            </div>
                            <div class="col-md-3">
                                <h4 class="add_info">Qty</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Price</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Remove</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <?php foreach ($this->cart->contents() as $product) : ?>

                            <div class="col-md-12">
                                <div class="single_product clearfix">
                                    <div class="col-lg-5 col-md-7 v_middle">
                                        <div class="product__description">
                                            <img src="<?= base_url('assets/img/products/') . $product['image']; ?>" width="100" alt="Purchase image">
                                            <div class="short_desc">
                                                <a href="">
                                                    <h4><?= $product['name']; ?></h4>
                                                </a>
                                                <!-- <p>Deskripsi</p> -->
                                            </div>
                                        </div>
                                        <!-- end /.product__description -->
                                    </div>
                                    <!-- end /.col-md-5 -->

                                    <div class="col-lg-3 col-md-2 v_middle">
                                        <div class="product__additional_info">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <img src="images/catword.png" alt=""><?= $product['qty']; ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end /.product__additional_info -->
                                    </div>
                                    <!-- end /.col-md-3 -->

                                    <div class="col-lg-4 col-md-3 v_middle">
                                        <div class="product__price_download">
                                            <div class="item_price v_middle">
                                                <span>Rp. <?= number_format($product['price'], 0, ',', '.'); ?></span>
                                            </div>
                                            <div class="item_action v_middle">
                                                <a href="" class="remove_from_cart">
                                                    <span class="lnr lnr-trash"></span>
                                                </a>
                                            </div>
                                            <!-- end /.item_action -->
                                        </div>
                                        <!-- end /.product__price_download -->
                                    </div>
                                    <!-- end /.col-md-4 -->
                                </div>
                                <!-- end /.single_product -->
                            </div>

                        <?php endforeach; ?>


                    </div>
                    <!-- end /.row -->

                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="cart_calculation">
                                <div class="cart--subtotal">
                                    <p>
                                        <span>Cart Subtotal Rp.</span><?= number_format($this->cart->total(), 0, ',', '.'); ?></p>
                                </div>
                                <div class="cart--total">
                                    <p>
                                        <span>total</span>Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?></p>
                                </div>

                                <a href="<?= base_url('cart/delete_cart'); ?>" class="btn btn--round btn--md checkout_link btn-danger">Hapus</a>
                                <a href="<?= base_url('checkout'); ?>" class="btn btn--round btn--md checkout_link">Lanjutkan Kepembayaran</a>
                            </div>
                        </div>
                        <!-- end .col-md-12 -->
                    </div>
                    <!-- end .row -->
                </div>
                <!-- end /.product_archive2 -->
            </div>
            <!-- end .col-md-12 -->
        </div>
        <!-- end .row -->

    </div>
    <!-- end .container -->
</section>
<!--================================
            END DASHBOARD AREA
    =================================-->