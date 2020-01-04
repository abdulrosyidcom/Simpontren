<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Produk</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <a href="<?= base_url('dashboard/create_product'); ?>" class="btn btn-dark" style="margin-bottom: 15px;">Tambah Data Produk</a>

                    <?= $this->session->flashdata('message'); ?>

                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th>
                                        <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th class="column-title">No.</th>
                                    <th class="column-title">Nama</th>
                                    <th class="column-title">Harga</th>
                                    <th class="column-title">Stok</th>
                                    <th class="column-title">Kategori</th>
                                    <th class="column-title">Foto</th>
                                    <th class="column-title">Aktif</th>
                                    <th class="column-title no-link last"><span class="nobr">Action</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($products as $product) : ?>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" "><?= $no++; ?></td>
                                        <td class=" "><?= $product['name']; ?></td>
                                        <td class=" "><?= $product['price'] ?></td>
                                        <td class=" "><?= $product['qty'] ?></td>
                                        <td class=" "><?= $product['category'] ?></td>
                                        <td class=" ">
                                            <img width="50" src="<?= base_url('assets/img/products/') . $product['image']; ?>" alt="">
                                        </td>
                                        <td class=" ">
                                            <?php if ($product['is_active'] == 'aktif') : ?>
                                                <span class="label label-success"><?= $product['is_active']; ?></span>
                                            <?php else : ?>
                                                <span class="label label-danger"><?= $product['is_active']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="">
                                            <a href="<?= base_url('dashboard/update_product/') . $product['id']; ?>" class="label label-info">Ubah</a>
                                            <a href="<?= base_url('dashboard/delete_product/') . $product['id']; ?>" onclick="return confirm('anda yakin data dihapus?');" class="label label-danger">Hapus</a>
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
</div>
<!-- /page content -->