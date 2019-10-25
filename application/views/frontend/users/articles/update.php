        <div class="dashboard_contents dashboard_statement_area">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">

                        <?= $this->session->flashdata('message'); ?>

                        <div class="statement_table table-responsive">
                            
                            <div class="container">
                                <div class="row mt-5 justify-content-center">
                                    <div class="col-md-10">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <input type="hidden" value="<?= $article['id']; ?>" name="id">
                                            <div class="form-group">
                                                <label for="title">Judul</label>
                                                <input type="text" id="title" class="text_field" name="title" value="<?= $article['title']; ?>">
                                                <?= form_error('title', '<span class="text-danger">', '</span>'); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="category">Kategori</label>
                                                <div class="select-wrap select-wrap2">
                                                    <select name="category" id="category" class="text_field" name="category">
                                                        <?php foreach ($categorys as $category) : ?>
                                                            <option value="<?= $category['name']; ?>"><?= $category['name']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <span class="lnr lnr-chevron-down"></span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <img class="img-thumbnail" src="<?= base_url('assets/img/article/') . $article['image']; ?>" alt="">
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <label for="image">Gambar</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile" name="image">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="content">Konten</label>
                                                <textarea name="content" id="" cols="30" rows="10" class="ckeditor"><?= $article['content']; ?></textarea>
                                                <?= form_error('content', '<span class="text-danger">', '</span>'); ?>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn--round btn--default">Update</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
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