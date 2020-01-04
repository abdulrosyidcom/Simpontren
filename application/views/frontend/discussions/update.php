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
                                <a href="<?= base_url('discussions'); ?>">Forum</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Form Diskusi</h1>
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
                    <div class="question-form cardify p-4">
                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?= $quession['id']; ?>">
                            <div class="form-group">
                                <label for="quession">Judul Prtanyaan</label>
                                <input type="text" id="quession" placeholder="Masukan judul disini" name="quession" value="<?= $quession['quession']; ?>">
                                <?= form_error('quession', '<span class="text-danger">', '</span>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="categorie">Kategori</label>
                                <div class="select-wrap select-wrap2">
                                    <select name="categorie" id="categorie" name="categorie">
                                        <?php foreach ($categories as $categorie) : ?>
                                            <?php if( $categorie['slug'] == $quession['categorie'] ) : ?>
                                                <option value="<?= $categorie['slug']; ?>" selected><?= $categorie['name']; ?></option>
                                                <?php else : ?>
                                                <option value="<?= $categorie['slug']; ?>"><?= $categorie['name']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="icon-arrow-down"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="ckeditor" name="description" id="" cols="30" rows="10"><?= $quession['description']; ?></textarea>
                                <?= form_error('description', '<span class="text-danger">', '</span>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn--md btn-primary">Ubah Pertanyaan</button>
                            </div>
                        </form>
                    </div><!-- ends: .question-form -->
                </div>
                <!-- end .col-md-8 -->
