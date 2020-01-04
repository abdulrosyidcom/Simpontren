        <div class="dashboard_contents dashboard_statement_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <div class="date_area">
                                    <button type="submit" data-target="#userArticleModal" data-toggle="modal" class="btn btn--sm btn--round btn--color1">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-md-12">

                        <?= form_error('title', '<span class="text-danger">', '</span><br>') ?>
                        <?= form_error('content', '<span class="text-danger">', '</span>') ?>

                        <?= $this->session->flashdata('message'); ?>

                        <div class="statement_table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>date Created</th>
                                        <th>Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ( $articles as $article ) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $article['title']; ?></td>
                                        <td><?= $article['author']; ?></td>
                                        <td><?= date('d M Y', $article['date_created']); ?></td>
                                        <?php if ( $article['is_active'] == 'active' ) : ?>
                                            <td class="type">
                                                <span class="sale"><?= $article['is_active']; ?></span>
                                            </td>
                                        <?php else: ?>
                                            <td class="type">
                                                <span class="withdrawal"><?= $article['is_active']; ?></span>
                                            </td>
                                        <?php endif; ?>
                                        <td class="type">
                                            <a href="<?= base_url('user/updatearticle/') . $article['id']; ?>" class="">
                                                <span class="credited">Update</span>
                                            </a>
                                            <a href="<?= base_url('user/deletearticle/') . $article['id']; ?>" onclick="return confirm('Yakin nihh mau dihapus?');">
                                                <span class="withdrawal">Delete</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>

                            <div class="pagination-area pagination-area2">
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
                            </div>
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