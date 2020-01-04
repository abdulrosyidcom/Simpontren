                <div class="col-lg-4">
                    <aside class="sidebar support--sidebar">
                        <?php if( !$this->session->userdata('email') ) : ?>
                            <a href="<?= base_url('authentication'); ?>" class="login_promot">
                                <span class="lnr lnr-lock"></span>Anda Belum Login
                            </a>
                            <?php else: ?>
                                <a href="<?= base_url('discussions/quession'); ?>" class="login_promot">
                                    <span class="lnr lnr-pencil"></span>Pertanyaan
                                </a>
                        <?php endif; ?>

                        <div class="sidebar-card card--forum_categories">
                            <div class="card-title">
                                <h4>Forum Kategori</h4>
                            </div>
                            <div class="collapsible-content">

                                <?php 
                                
                                $queryCategorie = "SELECT * FROM discussion_categorie";

                                $dataCategories = $this->db->query($queryCategorie)->result_array();
                                
                                // $queryTotalCategorie = "SELECT *
                                //                           FROM `discussion_categorie` JOIN `discussion`
                                //                          WHERE `discussion_categorie`.`slug` = `discussion`.`categorie`
                                //                         ";
                                // $totalCategory = $this->db->query($queryTotalCategorie)->num_rows();

                                ?>

                                <ul class="card-content">
                                    <?php foreach ( $dataCategories as $dataCategorie ) : ?>
                                        <li>
                                            <a href="<?= base_url('discussions/categorie/') . $dataCategorie['slug']; ?>">
                                                <span class="lnr lnr-chevron-right"></span><?= $dataCategorie['name']; ?>
                                                <!-- <span class="item-count"><?= $totalCategory; ?></span> -->
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <!-- end /.collapsible_content -->
                        </div>
                        <!-- end .card--forum_categories -->

                        <?php 
                        
                        $queryTopDiscussions = "SELECT * FROM discussion LIMIT 5";

                        $dataTopDiscussions = $this->db->query($queryTopDiscussions)->result_array();
                        
                        ?>

                        <div class="sidebar-card card--top_discussion">
                            <div class="card-title">
                                <h4>Diskusi Teratas</h4>
                            </div>
                            <div class="collapsible-content">
                                <ul class="card-content">
                                    <?php foreach ( $dataTopDiscussions as $dataTopDiscussion ) : ?>
                                        <li>
                                            <a href="<?= base_url('discussions/read/') . $dataTopDiscussion['url_quession']; ?>">
                                                <span></span><?= substr( $dataTopDiscussion['quession'], 0, 34); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <!-- end /.collapsible_content -->
                        </div>
                        <!-- end .card--forum_categories -->
                    </aside>
                    <!-- end .sidebar -->
                </div>
                <!-- end .col-md-4 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->