        <div class="dashboard_contents dashboard_statement_area">
            <div class="container">
                

                <div class="row">
                    <div class="col-md-12">

                        <?= $this->session->flashdata('message'); ?>

                        <div class="statement_table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Quession</th>
                                        <th>Author</th>
                                        <th>Status</th>
                                        <th>Date Created</th>
                                        <th>Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ( $discussions as $discussion ) : ?>
                                        <td><?= $no++; ?></td>
                                        <td><?= substr( $discussion['quession'] , 0, 20 ); ?></td>
                                        <td><?= $discussion['author']; ?></td>

                                        <?php if ( $discussion['status'] == 'Solved' ) : ?>
                                            <td class="type">
                                                <span class="sale"><?= $discussion['status']; ?></span>
                                            </td>
                                        <?php else: ?>
                                            <td class="type">
                                                <span class="withdrawal"><?= $discussion['status']; ?></span>
                                            </td>
                                        <?php endif; ?>

                                        <td><?= date('d M Y', $discussion['date_created']); ?></td>

                                        <?php if ( $discussion['is_active'] == 'aktif' ) : ?>
                                            <td class="type">
                                                <span class="sale"><?= $discussion['is_active']; ?></span>
                                            </td>
                                        <?php else: ?>
                                            <td class="type">
                                                <span class="withdrawal"><?= $discussion['is_active']; ?></span>
                                            </td>
                                        <?php endif; ?>

                                        <td class="type">
                                            <a href="<?= base_url('discussions/update_quession/') . $discussion['id']; ?>" class="">
                                                <span class="credited">Update</span>
                                            </a>
                                            <a href="<?= base_url('discussions/delete_quession/') . $discussion['id']; ?>" onclick="return confirm('Yakin nihh mau dihapus?');">
                                                <span class="withdrawal">Delete</span>
                                            </a>
                                        </td>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                            <!-- <div class="pagination-area pagination-area2">
                                <nav class="navigation pagination " role="navigation">
                                    <div class="nav-links">
                                        <a class="prev page-numbers" href="#">
                                            <span class="lnr lnr-arrow-left"></span>
                                        </a>
                                        <a class="page-numbers current" href="#">1</a>
                                        <a class="page-numbers" href="#">2</a>
                                        <a class="page-numbers" href="#">3</a>
                                        <a class="next page-numbers" href="#">
                                            <span class="lnr lnr-arrow-right"></span>
                                        </a>
                                    </div>
                                </nav>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->



    <!-- Modals -->
    <div class="modal fade rating_modal" id="userArticleModal" tabindex="-1" role="dialog" aria-labelledby="rating_modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="rating_modal">Form Tambah Data Artikel</h3>
                    <p>by
                        <a href="<?= base_url('user'); ?>"><?= $user['name']; ?></a>
                    </p>
                </div>
                <!-- end /.modal-header -->

                <div class="modal-body">
                    <form action="<?= base_url('user/article'); ?>" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" class="form-control" name="title">
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" id="category" name="category">
                                        <?php foreach ( $categorys as $category ) : ?>
                                            <option value="<?= $category['name']; ?>"><?= $category['name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content">content</label>
                            <textarea name="content" class="ckeditor" id="content" cols="30" rows="10"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn--round btn--default">Simpan</button>
                        <button class="btn btn--round modal_close" data-dismiss="modal">Close</button>
                    </form>
                    <!-- end /.form -->
                </div>
                <!-- end /.modal-body -->
            </div>
        </div>
    </div>