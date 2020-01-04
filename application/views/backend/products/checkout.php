<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Checkout Confirmation</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                    <th class="column-title">No.</th>
                                    <th class="column-title">Name</th>
                                    <th class="column-title">Alamat</th>
                                    <th class="column-title">Konfirmasi</th>
                                    <th class="column-title">Tanggal Pemesanan</th>
                                    <th class="column-title">Batas Pembayaran</th>
                                    <th class="column-title no-link last"><span class="nobr">Action</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($checkout as $ckout) : ?>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" "><?= $no++; ?></td>
                                        <td class=" "><?= $ckout['name']; ?></td>
                                        <td class=" "><?= $ckout['address']; ?></td>
                                        <td class=" ">
                                            <?php if ($ckout['confirm'] == 'default.jpg') : ?>
                                                <span class="label label-danger">Belum Dikonfirmasi</span>
                                            <?php else : ?>
                                                <img width="70" src="<?= base_url('assets/img/checkout/') . $ckout['confirm']; ?>" alt="">
                                            <?php endif; ?>
                                        </td>
                                        <td class=" "><?= $ckout['date_created']; ?></td>
                                        <td class=" "><?= $ckout['pay_limit']; ?></td>
                                        <td class=" ">
                                            <a href="<?= base_url('dashboard/show_checkout/') . $ckout['id']; ?>" class="label label-info">Detail</a>
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