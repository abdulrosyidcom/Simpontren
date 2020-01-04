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
                        <li>
                            <a href="<?= base_url('products/category/') . $product['category']; ?>"><?= $product['category']; ?></a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title"><?= $product['name']; ?></h1>
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


<!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
<section class="single-product-desc">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="item-preview item-preview2">
                    <div class="prev-slide">
                        <img src="<?= base_url('assets/img/products/') . $product['image']; ?>">
                    </div>

                    <div class="item__preview-thumb">
                        <div class="item-action">
                            <div class="action-btns">
                                <a href="<?= base_url('cart/add_cart/') . $product['id']; ?>" class="btn btn--round btn--lg btn--icon">
                                    <span class="lnr lnr-cart"></span>Tambah Ke Cart</a>
                            </div>
                        </div>
                        <!-- end /.item__action -->

                        <div class="item_social_share">
                            <p>
                                <img src="<?= base_url('assets/frontend/'); ?>images/svg/share.svg" alt="This is share svg">
                                <span>Share this item</span>
                            </p>

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
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-pinterest"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-linkedin"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social-->

                        </div>
                        <!-- end /.item__preview-thumb-->
                    </div>
                    <!-- end /.item__preview-thumb-->


                </div>
                <!-- end /.item-preview-->

                <div class="item-info">
                    <div class="item-navigation">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">Item Details</a>
                            </li>
                            <li>
                                <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab">Comments </a>
                            </li>

                        </ul>
                    </div>
                    <!-- end /.item-navigation -->

                    <div class="tab-content">
                        <div class="tab-pane fade show product-tab active" id="product-details">
                            <div class="tab-content-wrapper">
                                <h1><?= $product['name']; ?></h1>
                                <p><?= $product['description']; ?></p>
                            </div>
                        </div>
                        <!-- end /.tab-content -->

                        <div class="tab-pane fade product-tab" id="product-comment">
                            <div class="thread">
                                <ul class="media-list thread-list">

                                    <?php if (empty($comments)) : ?>
                                        <div class="container">
                                            <div class="alert alert-danger">Produk Belum Ada Komentar</div>
                                        </div>
                                    <?php else : ?>
                                        <?php foreach ($comments as $comment) : ?>
                                            <li class="single-thread">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object rounded-circle" src="<?= base_url('assets/img/profile/') . $comment['image']; ?>" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div>
                                                            <div class="media-heading">
                                                                <a href="#">
                                                                    <h4><?= $comment['author']; ?></h4>
                                                                </a>
                                                                <span><?= date('d - M - Y', $comment['date_created']); ?></span>
                                                            </div>
                                                        </div>
                                                        <p><?= $comment['comment']; ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- end single comment thread /.comment-->
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                                <!-- end /.media-list -->

                                <div class="comment-form-area">

                                    <?= $this->session->flashdata('message'); ?>

                                    <h4>Komentar</h4>
                                    <!-- comment reply -->
                                    <div class="media comment-form">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="<?= base_url('assets/frontend/') ?>images/m7.png" alt="Commentator Avatar">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <form action="" method="post" class="comment-reply-form">
                                                <textarea name="comment" placeholder="Write your comment..."></textarea>
                                                <?= form_error('comment', '<span class="text-danger">', '<span><br>'); ?>
                                                <br>
                                                <?php if ($this->session->userdata('email')) : ?>
                                                    <button type="submit" class="btn btn--sm btn--round mt-4">Komentar</button>
                                                <?php else : ?>
                                                    <a href="<?= base_url('authentication'); ?>" class="btn btn--sm btn--round mt-4">Anda Belum Login</a>
                                                <?php endif; ?>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- comment reply -->
                                </div>
                                <!-- end /.comment-form-area -->
                            </div>
                            <!-- end /.comments -->
                        </div>
                        <!-- end /.product-comment -->
                    </div>
                    <!-- end /.tab-content -->
                </div>
                <!-- end /.item-info -->
            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4">
                <aside class="sidebar sidebar--single-product">
                    <div class="sidebar-card card-pricing card--pricing2">
                        <div class="price">
                            <h1>
                                <sup>Rp.</sup>
                                <span><?= $product['price']; ?></span>
                            </h1>
                        </div>
                        <!-- <ul class="pricing-options">
                            <li>
                                <div class="custom-radio">
                                    <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                    <label for="opt1" data-price="60">
                                        <span class="circle"></span>Single Site License </label>
                                </div>

                                <p>Nunc placerat mi id nisi interdum is mollis. Praesent pharetra, justo ut sceleris que
                                    the mattis, leo quam.</p>
                            </li>

                            <li>
                                <div class="custom-radio">
                                    <input type="radio" id="opt2" class="" name="filter_opt">
                                    <label for="opt2" data-price="120">
                                        <span class="circle"></span>2 Sites License</label>
                                </div>

                                <p>Nunc placerat mi id nisi interdum is mollis. Praesent pharetra, justo ut sceleris que
                                    the mattis, leo quam.</p>
                            </li>
                        </ul> -->
                        <!-- end /.pricing-options -->

                        <!-- <div class="purchase-button">
                            <a href="#" class="btn btn--lg btn--round">Purchase Now</a>
                            <a href="#" class="btn btn--lg btn--round cart-btn">
                                <span class="lnr lnr-cart"></span> Add To Cart</a>
                        </div> -->
                        <!-- end /.purchase-button -->
                    </div>
                    <!-- end /.sidebar--card -->

                    <div class="sidebar-card card--metadata">
                        <ul class="data">
                            <li>
                                <p>
                                    <span class="lnr lnr-cart pcolor"></span>Terjual</p>
                                <span>426</span>
                            </li>
                            <li>
                                <p>
                                    <span class="lnr lnr-eye scolor"></span>Lihat</p>
                                <span><?= $product['view']; ?></span>
                            </li>
                            <li>
                                <p>
                                    <span class="lnr lnr-bubble mcolor3"></span>Comments</p>
                                <span>35</span>
                            </li>
                        </ul>


                        <!-- <div class="rating product--rating">
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
                            <span class="rating__count">( 26 Ratings )</span>
                        </div> -->
                        <!-- end /.rating -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--product-infos">
                        <div class="card-title">
                            <h4>Informasi Produk</h4>
                        </div>

                        <ul class="infos">
                            <li>
                                <p class="data-label">Dirilis</p>
                                <p class="info"><?= date('d M Y', $product['date_created']); ?></p>
                            </li>
                            <li>
                                <p class="data-label">Kategori</p>
                                <p class="info"><?= $product['category']; ?></p>
                            </li>

                        </ul>
                    </div>
                    <!-- end /.aside -->

                    <div class="author-card sidebar-card ">
                        <div class="card-title">
                            <h4>Informasi Member</h4>
                        </div>

                        <div class="author-infos">
                            <div class="author_avatar">
                                <img src="<?= base_url('assets/img/profile/') . $product['author_image']; ?>">
                            </div>

                            <div class="author">
                                <h4><?= $product['author_name']; ?></h4>
                                <p>Bergabung sejak <?= date('d M Y', $product['date_created']); ?></p>
                            </div>
                            <!-- end /.author -->

                            <div class="social social--color--filled">
                                <ul>
                                    <li>
                                        <a href="<?= $product['author_facebook']; ?>">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $product['author_twitter']; ?>">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $product['author_instagram']; ?>">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social -->

                            <div class="author-btn">
                                <a href="#" class="btn btn--sm btn--round">View Profile</a>
                                <a href="#" class="btn btn--sm btn--round">Message</a>
                            </div>
                            <!-- end /.author-btn -->
                        </div>
                        <!-- end /.author-infos -->


                    </div>
                    <!-- end /.author-card -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->

<!--============================================
        START MORE PRODUCT ARE
    ==============================================-->
<section class="more_product_area section--padding">
    <div class="container">
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>More Items
                        <!-- <span class="highlighted">by Aazztech</span> -->
                    </h1>
                </div>
            </div>
            <!-- end /.col-md-12 -->

            <!-- start .col-md-4 -->
            <?php foreach ($products as $product) : ?>

                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="<?= base_url('assets/img/products/') . $product['image']; ?>">
                            <div class="prod_btn">
                                <a href="<?= base_url('products/read/') . $product['id']; ?>" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Cart</a>
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
                                        <!-- <img src="<?= base_url('assets/frontend/'); ?>images/cathtm.png" alt="category image">Plugin -->
                                        <span class="lnr lnr-book"><?= $product['category']; ?></span>
                                    </a>
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

                            <!-- <div class="rating product--rating">
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
                            </div> -->

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

            <?php endforeach; ?>

        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.container -->
</section>
<!--============================================
        END MORE PRODUCT AREA
    ==============================================-->


<!--================================
        START CALL TO ACTION AREA
    =================================-->
<section class="call-to-action bgimage">
    <div class="bg_image_holder">
        <img src="images/calltobg.jpg" alt="">
    </div>
    <div class="container content_above">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-wrap">
                    <h1 class="text--white">Ready to Join Our Marketplace!</h1>
                    <h4 class="text--white">Over 25,000 designers and developers trust the MartPlace.</h4>
                    <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================
        END CALL TO ACTION AREA
    =================================-->