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
                                <a href="<?= base_url('user'); ?>">Author Profile</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Author's Profile</h1>
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
        START AUTHOR AREA
    =================================-->
    <section class="author-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <aside class="sidebar sidebar_author">
                        <div class="author-card sidebar-card">
                            <div class="author-infos">
                                <div class="author_avatar">
                                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Presenting the broken author avatar :D">
                                </div>

                                <div class="author">
                                    <h4><?= $user['name']; ?></h4>
                                    <p>Bergabung sejak : <?= date('d M Y', $user['date_created']); ?></p>
                                </div>
                                <!-- end /.author -->

                                

                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.social -->

                            </div>
                            <!-- end /.author-infos -->


                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card author-menu">
                            <ul>
                                <li>
                                    <a href="#" class="active">Profile</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.author-menu -->
                    </aside>
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="author-info mcolorbg4">
                                <p>Total Sales</p>
                                <h3>4,369</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info pcolorbg">
                                <p>Total sales</p>
                                <h3>36,957</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info scolorbg">
                                <p>Total Ratings</p>
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
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(26)</span>
                                </div>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-12 col-sm-12">

                            <div class="author_module about_author">
                                <h2>About
                                    <span><?= $user['name']; ?></span>
                                </h2>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattisleo
                                    quam aliquet congue. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo
                                    ut scelerisque the mattisleo quam aliquet congue. Nunc placerat mi id nisi interdum mollis.
                                    Prae sent pharetra, justo ut scelerisque the mattisleo quam aliquet congue.</p>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattisleo
                                    quam aliquet congue. Nunc placerat mi id nisi interdum mollis. Praesent pharetra.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-title-area">
                                <div class="product__title">
                                    <h2>Newest Products</h2>
                                </div>

                                <a href="#" class="btn btn--sm">See all Items</a>
                            </div>
                            <!-- end /.product-title-area -->
                        </div>
                        <!-- end /.col-md-12 -->

                        <!-- start .col-md-4 -->
                        <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

                                <div class="product__thumbnail">
                                    <img src="images/p4.jpg" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                        <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title">
                                        <h4>Yannan Na nakka muka</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/auth3.jpg" alt="author image">
                                            <p>
                                                <a href="#">AazzTech</a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#">
                                                <img src="images/cathtm.png" alt="category image">Plugin</a>
                                        </li>
                                    </ul>

                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the
                                        mattis, leo quam aliquet congue.</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>$10</span>
                                        <p>
                                            <span class="lnr lnr-heart"></span> 48</p>
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
                                                <span class="fa fa-star-half-o"></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="sell">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <span>50</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-4 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.col-md-8 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END AUTHOR AREA
    =================================-->