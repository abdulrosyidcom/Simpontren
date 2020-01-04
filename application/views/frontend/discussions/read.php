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
                                <a href="<?= base_url('discussions'); ?>">Forum</a>
                            </li>
                            <li class="active">
                                <a href="">Forum Details</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Detail Quession</h1>
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
            START DASHBOARD AREA
    =================================-->
    <section class="support_threads_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="forum_detail_area ">
                        <div class="cardify forum--issue">
                            <div class="title_vote clearfix">
                                <h3><?= $quession['quession']; ?></h3>

                                <!-- <div class="vote">
                                    <a href="#">
                                        <span class="lnr lnr-thumbs-up"></span>
                                    </a>
                                    <a href="#">
                                        <span class="lnr lnr-thumbs-down"></span>
                                    </a>
                                </div> -->
                                <!-- end .vote -->
                            </div>
                            <!-- end .title_vote -->
                            <div class="suppot_query_tag">
                                <a href="#" class="user">
                                    <img class="poster_avatar" src="<?= base_url('assets/img/profile/') . $quession['image']; ?>" alt="Support Avatar"> <?= $quession['author']; ?>
                                </a>
                                <span style="font-size: 12px;">Terbit pada tanggal <?= date('d M Y', $quession['date_created']); ?></span>
                                <span class="support_tag"><?= $quession['categorie']; ?></span>
                            </div>
                            <p><?= $quession['description']; ?></p>
                        </div>
                        <!-- end .forum_issue -->

                        <div class="forum--replays cardify">
                            <div class="area_title">
                                <h4><?= $answer; ?> Jawaban</h4>
                            </div>
                            <!-- end .area_title -->

                            <?php foreach ( $commentars as $commentar ) : ?>

                                <div class="forum_single_reply">
                                    <div class="reply_avatar">
                                        <img src="<?= base_url('assets/img/profile/') . $commentar['image'] ?>" alt="<?  $commentar['author'] ?>">
                                    </div>

                                    <div class="reply_content">
                                        <div class="name_vote">
                                            <div class="pull-left">
                                                <h4><?=  $commentar['author']; ?>
                                                    <!-- <span>staff</span> -->
                                                </h4>
                                                <p>Terbit pada tanggal <?= date('d M Y', $commentar['date_created']); ?></p>
                                            </div>
                                            <!-- end .pull-left -->

                                            <div class="vote">
                                                <a href="#" class="active">
                                                    <span class="lnr lnr-thumbs-up"></span>
                                                </a>
                                                <a href="#" class="">
                                                    <span class="lnr lnr-thumbs-down"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end .vote -->
                                        <p><?= $commentar['commentar']; ?></p>
                                    </div>
                                    <!-- end .reply_content -->
                                </div>
                                <!-- end .forum_single_reply -->

                            <?php endforeach; ?>
                        
                            <div class="comment-form-area">
                                <?= $this->session->flashdata('message'); ?>
                                <!-- comment reply -->
                                <?php if ($this->session->userdata('email')) : ?>
                                <h4>Tinggalkan Jawaban</h4>
                                    <div class="media comment-form support__comment">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="rounded-circle" width="70" class="media-object" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Commentator Avatar">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <form action="" method="post" class="comment-reply-form">
                                                <textarea name="commentar" class="ckeditor" id="ckeditor" cols="30" rows="10"></textarea>
                                                <?= form_error('commentar', '<span class="text-danger">', '</span>'); ?>
                                                <br>
                                                <button type="submit" class="btn btn--sm btn--round">Kirim Jawaban</button>
                                            </form>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="alert alert-warning">
                                        Maaf, Untuk menjawab pertanyaan ini anda harus login terlebih dahulu
                                    </div>
                                <?php endif; ?>
                                <!-- comment reply -->
                            </div>
                        </div>
                        <!-- end .forum_replays -->
                    </div>
                    <!-- end .forum_detail_area -->
                </div>
                <!-- end .col-md-8 -->