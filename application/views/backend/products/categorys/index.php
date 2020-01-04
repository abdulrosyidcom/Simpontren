<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->

    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#categoryModal">Tambah Data Kategori</button>

    <div class="row tile_count">
        <div class="col-md-7 col-sm-12 col-xs-12">

            <?= form_error('name', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <div class="x_panel">
                <div class="x_title">
                    <h2>Category Product</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th>
                                        <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th class="column-title">No</th>
                                    <th class="column-title">Category</th>
                                    <th class="column-title">Date Created</th>
                                    <th class="column-title">Active</th>
                                    <th class="column-title no-link last"><span class="nobr">Action</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($categorys as $category) : ?>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=""><?= $no++; ?></td>
                                        <td class=""><?= $category['name'] ?></td>
                                        <td class=""><?= date('d M Y', $category['date_created']); ?></td>
                                        <td class="">
                                            <?php if ($category['is_active'] == 'aktif') : ?>
                                                <span class="label label-success"><?= $category['is_active']; ?></span>
                                            <?php else : ?>
                                                <span class="label label-danger"><?= $category['is_active']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="last">
                                            <button class="btn btn-info" data-toggle="modal" data-target="#categoryModal">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                            <a href="" class="btn btn-danger" onclick="return confirm('Yakin Mau Dihapus Nih ?');">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /top tiles -->
</div>
<!-- /page content -->




<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('dashboard/product_category'); ?>" method="post">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title labelModalCategoryArticle" id="modalLabel">Tambah Kategori</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="aktif">aktif</option>
                            <option value="tidak">tidak</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>