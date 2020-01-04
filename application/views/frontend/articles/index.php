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
                                <a href="<?= base_url('articles'); ?>">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title"></h1>
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
            START LOGIN AREA
    =================================-->
    <section class="blog_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <?php foreach ( $articles as $article ) : ?>

                    <div class="single_blog blog--default">
                        <figure>
                            <img src="<?= base_url('assets/img/article/') . $article['image']; ?>">

                            <figcaption>
                                <div class="blog__content">
                                    <a href="<?= base_url('articles/read/') . $article['url_title']; ?>" class="blog__title">
                                        <h4><?= $article['title']; ?></h4>
                                    </a>

                                    <div class="blog__meta mt-4">
                                        <div class="author">
                                            <span class="lnr lnr-user"></span>
                                            <p>by
                                                <a href="#"><?= $article['author']; ?></a>
                                            </p>
                                        </div>
                                        <div class="date_time">
                                            <span class="lnr lnr-clock"></span>
                                            <p><?= date('d M Y', $article['date_created']); ?></p>
                                        </div>
                                        <div class="comment_view">
                                            <p class="comment">
                                                <span class="lnr lnr-bubble"></span>45</p>
                                            <p class="view">
                                                <span class="lnr lnr-eye"></span>345</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="btn_text">
                                    <p><?= substr($article['content'], 0, 400); ?></p>
                                    <a href="<?= base_url('articles/read/') . $article['url_title']; ?>" class="btn btn--md btn--round">Lanjut Membaca</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end /.single_blog -->

                    <?php endforeach; ?>

                    <?php if( empty($articles) ) : ?>
                        <img width="500" src="<?= base_url('assets/img/notfound/article.png'); ?>" alt="">
                    <?php endif; ?>

                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4">
                    <aside class="sidebar sidebar--blog">
                        <div class="sidebar-card card--search card--blog_sidebar">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>
                            <!-- end /.card-title -->

                            <div class="card_content">
                                <form action="" method="post">
                                    <div class="searc-wrap">
                                        <input type="text" placeholder="Cari data artikel..." name="keyword">
                                        <button type="submit" class="search-wrap__btn">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end /.card_content -->
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card sidebar--post card--blog_sidebar">
                            <div class="card-title">
                                <!-- Nav tabs -->
                                <ul class="nav post-tab" role="tablist">
                                    <li>
                                        <a href="<?= base_url('articles'); ?>" id="popular-tab" aria-controls="popular" role="tab" data-toggle="tab" aria-selected="true">Post Terbaru</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.card-title -->

                            <div class="card_content">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active fade show" id="popular" aria-labelledby="popular-tab">
                                        <ul class="post-list">
                                            <?php foreach ( $articles as $article ) : ?>
                                            <li>
                                                <div class="thumbnail_img">
                                                    <img src="<?= base_url('assets/img/article/') . $article['image']; ?>" alt="blog thumbnail">
                                                </div>
                                                <div class="title_area">
                                                    <a href="<?= base_url('articles/read/') . $article['url_title']; ?>">
                                                        <h4><?= substr ( $article['title'], 0, 20 ); ?></h4>
                                                    </a>
                                                    <div class="date_time">
                                                        <span class="lnr lnr-clock"></span>
                                                        <p><?= date('d M Y', $article['date_created']); ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; ?>
                                            
                                        </ul>
                                        <!-- end /.post-list -->
                                    </div>
                                </div>
                                <!-- end /.tab-content -->
                            </div>
                            <!-- end /.card_content -->
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card card--blog_sidebar card--category">
                            <div class="card-title">
                                <h4>Kategori</h4>
                            </div>
                            <div class="collapsible-content">
                                <ul class="card-content">
                                    <?php foreach ( $categorys as $category ) : ?>
                                        <li>
                                            <a href="<?= base_url('articles/category/') . $category['slug']; ?>">
                                                <span class="lnr lnr-chevron-right"></span><?= $category['name']; ?>
                                                <!-- <span class="item-count"><?= $categoryTotal; ?></span> -->
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <!-- end /.collapsible_content -->
                        </div>
                        <!-- end /.sidebar-card -->
                    </aside>
                    <!-- end /.aside -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
            END LOGIN AREA
    =================================-->