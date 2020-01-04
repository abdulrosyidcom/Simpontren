<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">

        <div class="">

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Tambah Data Produk</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />

                            <form class="form-horizontal" action="<?= base_url('dashboard/create_product'); ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="name" class="col-sm-1 control-label">name</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                                        <?= form_error('name', '<span style="color: red; font-size: 12px;">', '<span>'); ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="category" class="col-sm-2 control-label">Kategori</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="category" name="category">
                                                    <?php foreach ($categorys as $category) : ?>
                                                        <option value="<?= $category['name']; ?>"><?= $category['name']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?= form_error('category', '<span style="color: red; font-size: 12px;">', '<span>'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="image" class="col-sm-2 control-label">Gambar</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="image" name="image">
                                                <!-- <?= form_error('image', '<span style="color: red; font-size: 12px;">', '<span>'); ?> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="price" class="col-sm-1 control-label">Harga</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="price" name="price" value="<?= set_value('price'); ?>">
                                        <?= form_error('price', '<span style="color: red; font-size: 12px;">', '<span>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="qty" class="col-sm-1 control-label">Stok</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="qty" name="qty" value="<?= set_value('qty'); ?>">
                                        <?= form_error('qty', '<span style="color: red; font-size: 12px;">', '<span>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description" class="col-sm-1 control-label">Deskripsi</label>
                                    <div class="col-sm-11">
                                        <textarea name="description" id="" class="ckeditor" cols="30" rows="10"><?= set_value('description'); ?></textarea>
                                        <?= form_error('description', '<span style="color: red; font-size: 12px;">', '<span>'); ?>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /top tiles -->
</div>
<!-- /page content -->