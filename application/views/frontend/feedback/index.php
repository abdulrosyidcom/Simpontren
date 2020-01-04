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
                                <a href="<?= base_url('feedback'); ?>">Feedback</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Umpan Balik</h1>
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
        START PRICING AREA
    =================================-->
    <section class="tesimonial-page-area section--padding">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Umpan Balik
                            <span class="highlighted">Client Kami</span>
                        </h1>
                        <p>Mari kita simak testimoni dari member SIMPONTREN.</p>
                    </div>
                    <!-- end /.section-title -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="testimonial_video">
                        <figure>
                            <img src="images/testv1.jpg" alt="testimonial video 1">

                            <figcaption class="video_play">
                                <button data-toggle="modal" data-target="#myModal">
                                    <img src="images/vpla.png" alt="Play button">
                                </button>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="testimonial_video">
                        <figure>
                            <img src="images/testv2.jpg" alt="testimonial video 1">

                            <figcaption class="video_play">
                                <button data-toggle="modal" data-target="#myModal">
                                    <img src="images/vpla.png" alt="Play button">
                                </button>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div> -->
            <!-- end /.row -->

            <div class="row" data-uk-grid>

                <?php foreach ($testimonials as $testimonial) : ?>

                <div class="col-md-6">
                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="<?= base_url('assets/img/profile/') . $testimonial['image']; ?>" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name"><?= $testimonial['name']; ?></h4>
                                <span class="desig"><?= date('d M Y', $testimonial['date_created']); ?></span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <!-- end /.container -->
                        <div class="testimonial__text">
                            <p><?= substr($testimonial['note'], 0, 200); ?>.</p>
                        </div>
                        <!-- end /.container -->
                    </div>
                    <!-- end /.container -->
                </div>
                <!-- end /.container -->
                
                <?php endforeach; ?>

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRICING AREA
    =================================-->