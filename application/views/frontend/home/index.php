<div class="flash-flashdatalogout" data-flashdatalogout="<?= $this->session->flashdata('message'); ?>">

</div>
<!--================================
    START HERO AREA
    =================================-->
<section class="hero-area bgimage">
    <div class="bg_image_holder">
        <!-- <img src="<?= base_url('assets/frontend/'); ?>images/hero_area_bg1.jpg" alt="background-image"> -->
        <img src="<?= base_url('assets/img/header/header-home.jpg'); ?>" alt="background-image">
    </div>
    <!-- start hero-content -->
    <div class="hero-content content_above">
        <!-- start .contact_wrapper -->
        <div class="content-wrapper">
            <!-- start .container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <!-- start col-md-12 -->
                    <div class="col-md-12">
                        <div class="hero__content__title">
                            <h1>
                                <span class="light">Pasar Produk Digital</span>
                                <span class="bold">Matholi'ul Anwar</span>
                            </h1>
                            <p class="tagline"></p>
                        </div>

                        <!-- start .hero__btn-area-->
                        <div class="hero__btn-area">
                            <a href="<?= base_url('products'); ?>" class="btn btn--round btn--lg">Lihat Semua Produk</a>
                            <a href="<?= base_url('articles'); ?>" class="btn btn--round btn--lg">Lihat Semua Artikel</a>
                        </div>
                        <!-- end .hero__btn-area-->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end .contact_wrapper -->
    </div>
    <!-- end hero-content -->

    <!--start search-area -->
    <div class="search-area">
        <!-- start .container -->
        <div class="container">
            <!-- start .container -->
            <div class="row">
                <!-- start .col-sm-12 -->
                <div class="col-sm-12">
                    <!-- start .search_box -->
                    <div class="search_box">
                        <form action="#">
                            <input type="text" class="text_field" placeholder="Search your products...">
                            <div class="search__select select-wrap">
                                <select name="category" class="select--field" id="blah">
                                    <option value="">All Categories</option>
                                    <option value="">PSD</option>
                                    <option value="">HTML</option>
                                    <option value="">WordPress</option>
                                    <option value="">All Categories</option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                            <button type="submit" class="search-btn btn--lg">Search Now</button>
                        </form>
                    </div>
                    <!-- end ./search_box -->
                </div>
                <!-- end /.col-sm-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!--start /.search-area -->
</section>
<!--================================
    END HERO AREA
    =================================-->

<!--================================
    START FEATURE AREA
    =================================-->
<section class="features section--padding">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="<?= base_url('assets/frontend/'); ?>images/feature1.png" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>khitobiah</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Khithabah merupakan proses transmisi ajaran islam yaitu proses penyampaian ajaran Islam melalui bahasa lisan.</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="<?= base_url('assets/frontend/'); ?>images/feature2.png" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Forum Diskusi</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Berdiskusi dengan instruktur dan santri lain untuk memecahkan permasalahan dan menambah pengetahuan</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="<?= base_url('assets/frontend/'); ?>images/feature3.png" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>E-Commerce</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                            leo quam aliquet diam congue is laoreet elit metus.</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
    END FEATURE AREA
    =================================-->


<!--================================
    START FEATURED PRODUCT AREA
    =================================-->
<section class="featured-products bgcolor  section--padding">
    <!-- start /.container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area ">
                    <div class="product__title">
                        <h2>Produk Unggulan</h2>
                    </div>

                    <div class="product__slider-nav rounded">
                        <span class="lnr lnr-chevron-left nav_left"></span>
                        <span class="lnr lnr-chevron-right nav_right"></span>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>

    <!-- start .featured-product-slider -->



    <div class="container">
        <div class="row">
            <div class="col-md-12 no0-padding">
                <div class="featured-product-slider prod-slider1">

                    <?php foreach ($products as $product) : ?>

                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="<?= base_url('assets/img/products/') . $product['image']; ?>" alt="Featured products">
                                <div class="prod_btn">
                                    <a href="<?= base_url('products/read') . $product['id']; ?>" class="transparent btn--sm btn--round">More Info</a>
                                    <a href="<?= base_url('cart/add_cart/') . $product['id']; ?>" class="transparent btn--sm btn--round">Cart</a>
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="<?= base_url('products/read/') . $product['id']; ?>" class="product_title">
                                        <h4><?= $product['name']; ?></h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="<?= base_url('assets/img/profile/') . $product['author_image']; ?>" alt="author image">
                                            <p>
                                                <a href="#"><?= $product['author_name']; ?></a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="<?= base_url('products/category/') . $product['category']; ?>">
                                                <span class="lnr lnr-book"></span> <?= $product['category']; ?></a>
                                        </li>
                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p><?= $product['description']; ?></p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <!-- <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="#">website</a>
                                            </li>
                                            <li>
                                                <a href="#">plugin</a>
                                            </li>
                                            <li>
                                                <a href="#">landing page</a>
                                            </li>
                                        </ul>
                                    </div> -->
                                    <!-- end /.tags -->
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span>Rp. <?= $product['price']; ?></span>
                                            <p>
                                                <span class="lnr lnr-eye"></span> <?= $product['view']; ?></p>
                                        </div>
                                        <div class="sell">
                                            <p>
                                                <span class="lnr lnr-cart"></span>
                                                <span>16</span>
                                            </p>
                                        </div>

                                        <div class="rating product--rating">
                                            <ul>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <!-- end /.featured__preview-img -->
    </div>
    <!-- end /.featured-product-slider -->
</section>
<!--================================
    END FEATURED PRODUCT AREA
    =================================-->


<!--================================
    START PRODUCTS AREA
    =================================-->
<section class="products section--padding">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area">
                    <div class="product__title">
                        <h2>Produk Rilis Terbaru</h2>
                    </div>

                    <div class="filter__menu">
                        <p>Filter by:</p>
                        <div class="filter__menu_icon">
                            <a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="svg" src="<?= base_url('assets/frontend/'); ?>images/svg/menu.svg" alt="menu icon">
                            </a>

                            <ul class="filter_dropdown dropdown-menu" aria-labelledby="drop1">
                                <li>
                                    <a href="#">Trending items</a>
                                </li>
                                <li>
                                    <a href="#">Best seller</a>
                                </li>
                                <li>
                                    <a href="#">Best rating</a>
                                </li>
                                <li>
                                    <a href="#">Low price</a>
                                </li>
                                <li>
                                    <a href="#">High price</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start row -->
        <div class="row">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="sorting">
                    <ul>
                        <?php foreach ($productCategorys as $category) : ?>
                            <li>
                                <a href="<?= base_url('products/category/') . $category['slug']; ?>"><?= $category['name']; ?></a>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">

            <?php foreach ($products as $product) : ?>

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="<?= base_url('assets/img/products/') . $product['image']; ?>" height="230" alt="Product Image">
                            <div class="prod_btn">
                                <a href="<?= base_url('products/read/') . $product['id']; ?>" class="transparent btn--sm btn--round">More Info</a>
                                <a href="" class="transparent btn--sm btn--round">Cart</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="<?= base_url('products/read/') . $product['id']; ?>" class="product_title">
                                <h4><?= $product['name']; ?></h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="<?= base_url('assets/img/profile/') . $product['author_image']; ?>" alt="author image">
                                    <p>
                                        <a href="#"><?= $product['author_name']; ?></a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="<?= base_url('products/category/') . $product['category']; ?>">
                                        <span class="lnr lnr-book"></span><?= $product['category']; ?></a>
                                </li>
                            </ul>

                            <p><?= $product['description']; ?></p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>Rp. <?= $product['price']; ?></span>
                                <p>
                                    <span class="lnr lnr-eye"></span> <?= $product['view']; ?></p>
                            </div>
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>16</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->

            <?php endforeach; ?>

        </div>
        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">
            <div class="col-md-12">
                <div class="more-product">
                    <a href="<?= base_url('products'); ?>" class="btn btn--lg btn--round">All New Products</a>
                </div>
            </div>
            <!-- end ./col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
    END PRODUCTS AREA
    =================================-->


<section class="why_choose section--padding">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Mengapa Memilih
                        <span class="highlighted">Simpontren</span>
                    </h1>
                    <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid
                        est laborum dolo rumes fugats untras.</p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start row -->
        <div class="row">
            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .reason -->
                <div class="feature2">
                    <span class="feature2__count">01</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-license pcolor"></span>
                        <h3 class="feature2-title">Pembayaran Satu Kali</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                            leo quam aliquet diam congue is laoreet elit metus.</p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">02</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-magic-wand scolor"></span>
                        <h3 class="feature2-title">Produk Berkualitas</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                            leo quam aliquet diam congue is laoreet elit metus.</p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">03</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-lock mcolor1"></span>
                        <h3 class="feature2-title">Pembayaran 100% Aman</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                            leo quam aliquet diam congue is laoreet elit metus.</p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">04</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-chart-bars mcolor2"></span>
                        <h3 class="feature2-title">Kode yang Terorganisasi dengan Baik</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                            leo quam aliquet diam congue is laoreet elit metus.</p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">05</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-leaf mcolor3"></span>
                        <h3 class="feature2-title">Pembaruan Gratis Seumur Hidup</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                            leo quam aliquet diam congue is laoreet elit metus.</p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">06</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-phone mcolor4"></span>
                        <h3 class="feature2-title">Dukungan Cepat dan Ramah</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                            leo quam aliquet diam congue is laoreet elit metus.</p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
    END COUNTER UP AREA
    =================================-->

<!--================================
    START TESTIMONIAL
    =================================-->
<section class="testimonial-area section--padding">
    <!-- start .container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Umpan Balik
                        <span class="highlighted">Client Kami</span>
                    </h1>
                    <p>Mari kita simak testimoni dari member SIMPONTREN.</p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start row -->
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-slider">

                    <?php foreach ($testimonials as $testimonial) : ?>

                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="<?= base_url('assets/img/profile/') . $testimonial['image']; ?>" alt="<?= $testimonial['name']; ?>">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name"><?= $testimonial['name']; ?></h4>
                                    <span class="desig">Terbit Pada : <?= date('d M Y', $testimonial['date_created']); ?></span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p><?= substr($testimonial['note'], 0, 200); ?>.</p>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

                <div class="all-testimonial">
                    <a href="<?= base_url('feedback'); ?>" class="btn btn--lg btn--round">View All Reviews</a>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end container -->
</section>
<!--================================
    END TESTIMONIAL
    =================================-->

<!--================================
    START LATEST NEWS
    =================================-->
<section class="latest-news section--padding">
    <!-- start /.container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Berita
                        <span class="highlighted">Terbaru</span>
                    </h1>
                    <p>Kumpulan Artikel dan Khitobiah dari Santri.</p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">

            <?php foreach ($articles as $article) :  ?>

                <div class="col-lg-4 col-md-6">
                    <div class="news">
                        <div class="news__thumbnail">
                            <img height="200" src="<?= base_url('assets/img/article/') . $article['image']; ?>" alt="<?= $article['image']; ?>">
                        </div>
                        <div class="news__content">
                            <a href="<?= base_url('articles/read/') . $article['url_title']; ?>" class="news-title">
                                <h4><?= substr($article['title'], 0, 25); ?></h4>
                            </a>
                            <p><?= $article['content']; ?></p>
                        </div>
                        <div class="news__meta">
                            <div class="date">
                                <span class="lnr lnr-clock"></span>
                                <p><?= date('d M Y', $article['date_created']); ?></p>
                            </div>

                            <div class="other">
                                <ul>
                                    <li>
                                        <span class="lnr lnr-bubble"></span>
                                        <span>45</span>
                                    </li>
                                    <li>
                                        <span class="lnr lnr-eye"></span>
                                        <span>345</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-4 -->

            <?php endforeach; ?>

        </div>

        <div class="all-testimonial">
            <a href="<?= base_url('articles'); ?>" class="btn btn--lg btn--round">View All Reviews</a>
        </div>

    </div>
    <!-- end /.container -->
</section>
<!--================================
    END LATEST NEWS
    =================================-->

<!--================================
    START SPECIAL FEATURES AREA
    =================================-->
<section class="special-feature-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="special-feature feature--1">
                    <img src="<?= base_url('assets/frontend/'); ?>images/spf1.png" alt="Special Feature image">
                    <h3 class="special__feature-title">Garansi 30 Hari Uang
                        <span class="highlight">Kembali</span>
                    </h3>
                </div>
            </div>
            <!-- end /.col-md-6 -->
            <div class="col-md-6">
                <div class="special-feature feature--2">
                    <img src="<?= base_url('assets/frontend/'); ?>images/spf2.png" alt="Special Feature image">
                    <h3 class="special__feature-title">Cepat dan ramah
                        <span class="highlight">Dukung</span>
                    </h3>
                </div>
            </div>
            <!-- end /.col-md-6 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
    END SPECIAL FEATURES AREA
    =================================-->

<!--================================
    START CALL TO ACTION AREA
    =================================-->
<section class="call-to-action bgimage">
    <div class="bg_image_holder">
        <img src="<?= base_url('assets/frontend/'); ?>images/calltobg.jpg" alt="">
    </div>
    <div class="container content_above">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-wrap">
                    <h1 class="text--white">Siap bergabung jadi member kami!</h1>
                    <h4 class="text--white">Lebih dari 10.000 member yang mempercayai kami.</h4>
                    <a href="<?= base_url('authentication/registration'); ?>" class="btn btn--lg btn--round btn--white callto-action-btn">Gabung Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================
    END CALL TO ACTION AREA
    =================================-->