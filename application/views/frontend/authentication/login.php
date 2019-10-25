    <!--================================
            START LOGIN AREA
    =================================-->
    <section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="<?= base_url('authentication'); ?>" method="post">
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Selamat Datang Kembali</h3>
                                <p>Anda dapat masuk dengan nama pengguna Anda</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">

                                <?= $this->session->flashdata('message'); ?>
                                
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="text_field" name="email">
                                    <?= form_error('email', '<span class="text-danger">', '</span>') ?>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="text_field" name="password">
                                    <?= form_error('password', '<span class="text-danger">', '</span>') ?>
                                </div>

                                <!-- <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="ch2">
                                        <label for="ch2">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text">Remember me</span>
                                        </label>
                                    </div>
                                </div> -->

                                <button class="btn btn--md btn--round" type="submit">Login</button>

                                <div class="login_assist">
                                    <p class="recover">Belum punya akun ?
                                        <a href="<?= base_url('authentication/registration'); ?>">Registrasi</a>
                                    </p>
                                </div>
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END LOGIN AREA
    =================================-->