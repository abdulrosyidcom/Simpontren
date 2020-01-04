<section class="dashboard-area">
    <div class="dashboard_contents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard_title_area">
                        <div class="dashboard__title">
                            <h3>Konfirmasi Checkout</h3>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <form action="" method="post" class="setting_form" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-lg-12">

                        <?= form_error('confirm', '<div class="alert alert-danger">', '</div>') ?>

                        <div class="information_module">
                            <a class="toggle_title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>Upload Bukti Transaksi
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set profile_images toggle_module collapse" id="collapse3">
                                <div class="information_wrapper">
                                    <div class="profile_image_area">
                                        <img width="200" src="<?= base_url('assets/img/checkout/') . $ckout['confirm']; ?>" alt="Author profile area">
                                        <div class="img_info">
                                            <p class="bold">Bukti Pembayaran</p>
                                            <p class="subtitle">JPG, GIF or PNG 100x100 px</p>
                                        </div>

                                        <label for="cover_photo" class="upload_btn">
                                            <input type="file" id="cover_photo" name="confirm">
                                            <span class="btn btn--sm btn--round" aria-hidden="true">Upload Image</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end /.information_module -->
                    </div>
                    <!-- end /.col-md-6 -->

                    <div class="col-md-12">
                        <div class="dashboard_setting_btn">
                            <button type="submit" class="btn btn--round btn--md">Konfirmasi</button>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
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