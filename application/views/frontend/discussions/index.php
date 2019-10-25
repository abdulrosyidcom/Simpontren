                        
                        <?= $this->session->flashdata('message'); ?>

                        <div class="support_thread_list cardify">
                            
                            <?php foreach ($discussions as $discussion) : ?>
                            
                            <div class="support_thread--single">
                                <div class="support_thread_info">
                                    <a href="<?= base_url('discussions/read/') . $discussion['url_quession']; ?>" class="support_title"><?= $discussion['quession']; ?>
                                        <?php if ( $discussion['status'] == 'Solved' ) : ?>
                                        <span class="solved"><?= $discussion['status']; ?></span>
                                        <?php else: ?>
                                        <span class="closed"><?= $discussion['status']; ?></span>
                                        <?php endif; ?>
                                    </a>
                                    <div class="suppot_query_tag">
                                        <a href="#" class="user">
                                            <img class="poster_avatar" src="<?= base_url('assets/img/profile/') . $discussion['image']; ?>" alt="Support Avatar">
                                            <?= $discussion['author']; ?>
                                        </a>
                                        <span style="font-size: 10px;">Terbit pada tanggal <?= date('d M Y', $discussion['date_created']); ?></span>
                                        <span class="support_tag"><?= $discussion['categorie']; ?></span>
                                    </div>
                                </div>
                                <!-- end .support_thread_info -->

                                <div class="support_thread_meta">
                                    <ul>
                                        <!-- <li class="answer_time">
                                            <img src="<?= base_url('vendors/PortfolioEcommerce/'); ?>images/support_avat4.png" alt="Support images">
                                            <span class="time">1h ago</span>
                                        </li> -->
                                        <li>
                                            <p class="number">
                                            <?php foreach ($answer as $ans): ?>
                                                    <?php echo $ans->total; ?>
					                            <?php endforeach ?>
                                            </p>
                                            <span>Suara</span>
                                        </li>
                                        <li>
                                            <p class="number">6</p>
                                            <span>Balasan</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end .support_thread_meta -->
                            </div>

                            <?php endforeach; ?>
                            
                        </div>
                        <!-- end .support_thread_list -->
                    </div>
                    <!-- end .support_threads -->
                </div>
                <!-- end .col-md-8 -->

                