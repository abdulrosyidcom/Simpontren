        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <h3>Pengaturan akun</h3>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="flash-datauserupdate" data-datauserupdate="<?= $this->session->flashdata('message'); ?>"></div>

                <form action="" method="post" class="setting_form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="information_module">
                                <a class="toggle_title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Informasi Pribadi
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set toggle_module collapse show" id="collapse2">
                                    <div class="information_wrapper form--fields">
                                        <div class="form-group">
                                            <label for="name">Nama Akun
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="name" class="text_field" placeholder="Nama" value="<?= $user['name']; ?>" name="name">
                                            <?= form_error('name', '<span class="text-danger">', '</span>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="email" class="text_field" placeholder="Email" value="<?= $user['email']; ?>" name="email">
                                            <?= form_error('email', '<span class="text-danger">', '</span>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">Nomor Telepon
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="mobile" class="text_field" placeholder="Nomor Telepon" value="<?= $user['mobile']; ?>" name="mobile">
                                            <?= form_error('mobile', '<span class="text-danger">', '</span>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Alamat
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="address" class="text_field" placeholder="Alamat Lengkap" value="<?= $user['address']; ?>" name="address">
                                            <?= form_error('address', '<span class="text-danger">', '</span>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="number_home">Nomor Rumah
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="number_home" class="text_field" placeholder="Nomor Rumah" value="<?= $user['number_home']; ?>" name="number_home">
                                            <?= form_error('number_home', '<span class="text-danger">', '</span>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="about">Penulis Bio</label>
                                            <textarea name="about" id="about" class="text_field" placeholder="Penjelasan singkat tentang diri anda atau akun anda..."><?= $user['about']; ?></textarea>
                                            <?= form_error('about', '<span class="text-danger">', '</span>') ?>
                                        </div>
                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <div class="col-lg-6">
                            <div class="information_module">
                                <a class="toggle_title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Profile Gambar & Cover
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set profile_images toggle_module collapse" id="collapse3">
                                    <div class="information_wrapper">
                                        <div class="profile_image_area">
                                            <img width="80" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Author profile area">
                                            <div class="img_info">
                                                <p class="bold">Profile Image</p>
                                                <p class="subtitle">JPG, GIF or PNG 100x100 px</p>
                                            </div>

                                            <label for="cover_photo" class="upload_btn">
                                                <input type="file" id="cover_photo" name="image">
                                                <span class="btn btn--sm btn--round" aria-hidden="true">Upload Image</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.information_module -->

                            <div class="information_module">
                                <a class="toggle_title" href="#collapse5" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Sosil Profil
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set social_profile toggle_module collapse " id="collapse5">
                                    <div class="information_wrapper">
                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-facebook"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="https://facebook.com/abdulrosyidcom" name="facebook" value="<?= $user['facebook']; ?>">
                                                <?= form_error('facebook', '<span class="text-danger">', '</span>') ?>
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-twitter"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="https://twitter.com/abdulrosyidit" name="twitter" value="<?= $user['twitter']; ?>">
                                                <?= form_error('twitter', '<span class="text-danger">', '</span>') ?>
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->
                                        
                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-instagram"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="https://instagram.com/abdulrosyidcom" name="instagram" value="<?= $user['instagram']; ?>">
                                                <?= form_error('instagram', '<span class="text-danger">', '</span>') ?>
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-dribbble"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="http://abdulrosyid.com" name="website" value="<?= $user['website']; ?>">
                                                <?= form_error('website', '<span class="text-danger">', '</span>') ?>
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->
                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.social_profile -->
                            </div>
                            <!-- end /.information_module -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <div class="col-md-12">
                            <div class="dashboard_setting_btn">
                                <button type="submit" class="btn btn--round btn--md">Simpan Perubahan</button>
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