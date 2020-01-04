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
                            <a href="<?= base_url('checkout'); ?>">Checkout</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Checkout</h1>
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
<?php $grand_total = 0; ?>
<?php if ($checkout = $this->cart->contents()) : ?>
    <?php foreach ($checkout as $item) : ?>
        <?php $grand_total = $grand_total + $item['subtotal'] ?>
    <?php endforeach; ?>
    <!--================================
            START DASHBOARD AREA
    =================================-->
    <section class="dashboard-area">
        <div class="dashboard_contents">
            <div class="container">
                <form action="<?= base_url('checkout/proccess_checkout') ?>" method="post" class="setting_form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>Data Transaksi</h4>
                                </div>

                                <div class="information__set">
                                    <div class="information_wrapper form--fields">

                                        <div class="form-group">
                                            <label for="name">Nama Lengkap
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="name" name="name" class="text_field" value="<?= $user['name']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="email" name="email" class="text_field" value="<?= $user['email']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">No Handphone
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="mobile" name="mobile" class="text_field" value="<?= $user['mobile']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Alamat</label>
                                            <input type="text" id="address" name="address" class="text_field" value="<?= $user['address']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="delivery_service">Jasa Pengiriman</label>
                                            <select class="text_field" id="delivery_service" name="delivery_service">
                                                <option value="JNE">JNE</option>
                                                <option value="TIKI">TIKI</option>
                                                <option value="POS Indonesia">POS Indonesia</option>
                                                <option value="Gojek">Gojek</option>
                                                <option value="Grab">Grab</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="bank">Pilih Rekening BANK</label>
                                            <select class="text_field" id="bank" name="bank">
                                                <option value="BRI - 0832354343">BRI - 0832354343</option>
                                                <option value="BNI - 9273873948">BNI - 9273873948</option>
                                                <option value="MANDIRI - 4857345475">MANDIRI - 9233403403</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <div class="col-lg-6">
                            <div class="information_module order_summary">
                                <div class="toggle_title">
                                    <h4>Ringkasan Pesanan</h4>
                                </div>

                                <ul>
                                    <?php foreach ($this->cart->contents() as $product) : ?>
                                        <li class="item">
                                            <a href="#" target="_blank"><?= $product['name']; ?></a>
                                            <span>Rp. <?= number_format($product['price'], 0, ',', '.'); ?></span>
                                        </li>
                                    <?php endforeach; ?>

                                    <li class="total_ammount">
                                        <p>Total</p>

                                        <span>Rp. <?= number_format($grand_total, 0, ',', '.'); ?></span>

                                    </li>
                                </ul>

                            </div>
                            <!-- end /.information_module-->
                        </div>
                        <!-- end /.col-md-6 -->
                    </div>
                    <!-- end /.row -->
                    <button type="submit" class="btn btn--round btn--default">Konfirmasi Order</button>
                </form>
                <!-- end /form -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->

<?php else : ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger mt-4" style="margin-bottom: 300px;">Keranjang Belanja Anda Masih Kodong!</div>
            </div>
        </div>
    </div>
<?php endif; ?>