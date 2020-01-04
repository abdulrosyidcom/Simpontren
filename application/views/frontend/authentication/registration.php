    <!--================================
            START SIGNUP AREA
    =================================-->
    <section class="signup_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="<?= base_url('authentication/registration'); ?>" method="post">
                        <div class="cardify signup_form">
                            <div class="login--header">
                                <h3>Buat Akun Baru</h3>
                                <p>
                                    Silakan isi bidang berikut dengan informasi yang sesuai untuk mendaftarkan akun SIMPONTREN baru.
                                </p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">

                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input id="name" name="name" type="text" class="text_field" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', '<span class="text-danger">', '<span>'); ?>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="text_field" name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<span class="text-danger">', '<span>'); ?>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password_one">Password</label>
                                    <input id="password_one" type="password" class="text_field" name="password_one">
                                    <?= form_error('password_one', '<span class="text-danger">', '<span>'); ?>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password_two">Password</label>
                                    <input id="password_two" type="password" class="text_field" name="password_two">
                                    <?= form_error('password_two', '<span class="text-danger">', '<span>'); ?>
                                </div>

                                <button type="submit" class="btn btn--md btn--round register_btn">Daftar Sekarang</button>

                                <div class="login_assist">
                                    <p>Sudah memiliki akun ?
                                        <a href="<?= base_url('authentication'); ?>">Login</a>
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
            END SIGNUP AREA
    =================================-->