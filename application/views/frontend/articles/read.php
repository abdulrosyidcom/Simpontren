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
                                <a href="<?= base_url() ?>">Home</a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('articles') ?>">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Blog Details : <?= $article['title']; ?></h1>
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
                    <div class="single_blog blog--default">
                        <article>
                            <figure>
                                <img src="<?= base_url('assets/img/article/') . $article['image']; ?>" alt="Blog image">
                            </figure>
                            <div class="blog__content">
                                <a href="#" class="blog__title">
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
                                            <span class="lnr lnr-bubble"></span><?= $commentar; ?></p>
                                        <!-- <p class="view">
                                            <span class="lnr lnr-eye"></span>345
                                        </p> -->
                                    </div>
                                </div>
                            </div>

                            <div class="single_blog_content">
                                <p>
                                    <?= $article['content']; ?>
                                </p>

                                <div class="share_tags">
                                    <div class="share">
                                        <p>Kirim pos ini ke :</p>
                                        <div class="social_share active">
                                            <ul class="social_icons">
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
                                                        <span class="fa fa-linkedin"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end social_share -->
                                    </div>
                                    <!-- end bog_share_ara  -->

                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#"><?= $article['category']; ?></a>
                                            </li>
                                            <!-- <li>
                                                <a href="#">Marketing</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- end /.single_blog -->

                    <div class="comment_area">
                        <div class="comment__title">
                            <h4>comments</h4>
                        </div>

                        <?php foreach ( $commentars as $commentar ) : ?>
                        <div class="comment___wrapper">
                            <ul class="media-list">
                                <li class="depth-1">
                                    <div class="media">
                                        <div class="pull-left no-pull-xs">
                                            <a href="#" class="cmnt_avatar">
                                                <img src="<?= base_url('assets/img/profile/') . $commentar['image']; ?>" width="50" class="media-object" alt="Sample Image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="media_top">
                                                <div class="heading_left pull-left">
                                                    <a href="#">
                                                        <h4 class="media-heading"><?= $commentar['author']; ?></h4>
                                                    </a>
                                                    <span><?= date('d M Y', $article['date_created']); ?></span>
                                                </div>
                                                <a href="#" class="reply hidden-xs-m pull-right">Reply</a>
                                            </div>
                                            <p><?= $commentar['commentar']; ?></p>
                                            <a href="#" class="reply visible-xs-m  pull-right">Reply</a>
                                        </div>
                                    </div>
                                </li>    
                            </ul>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="comment_area comment--form">
                        <!-- start reply_form -->
                        <div class="comment__title">
                            <h4>Tinggalkan Komentar</h4>
                        </div>
                        <div class="commnet_form_wrapper">
                            <div class="row">
                                <!-- start form -->
                                <form class="cmnt_reply_form" action="" method="post">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="input_field" name="commentar" placeholder="Ketik disini..." rows="10" cols="80"></textarea>
                                            <?= form_error('commentar', '<span class="text-danger">', '</span>') ?>
                                        </div>

                                        <?php if ( $this->session->userdata('email') ) : ?>
                                        <button type="submit" class="btn btn--round btn--default" name="btn">Komentar</button>
                                        <?php else: ?>
                                        <a href="<?= base_url('authentication'); ?>" class="btn btn--round btn--default">Harap Login</a>
                                        <?php endif; ?>
                                    </div>
                                </form>
                                <!-- end form -->
                            </div>
                        </div>
                        <!-- end /.commnet_form_wrapper -->
                    </div>
                    <!-- end /.comment_area_wrapper -->
                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4">
                    <aside class="sidebar sidebar--blog">
                        <!-- <div class="sidebar-card card--search card--blog_sidebar">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>

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
                        </div> -->

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