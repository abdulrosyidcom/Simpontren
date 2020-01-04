<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Detail Produk</h2>
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
                                    <th class="column-title">Nama Produk</th>
                                    <th class="column-title">QTY</th>
                                    <th class="column-title">Harga</th>
                                    <th class="column-title">Sub Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $total = 0;
                                $no = 1;
                                ?>

                                <?php foreach ($order_product as $op) : ?>
                                    <?php $subtotal = $op->qty * $op->price; ?>
                                    <?php $total += $subtotal; ?>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" "><?= $no++; ?></td>
                                        <td class=""><?= $op->name; ?></td>
                                        <td class=""><?= $op->qty; ?></td>
                                        <td class=""><?= number_format($op->price, 0, ',', '.'); ?></td>
                                        <td class=""><?= number_format($subtotal, 0, ',', '.'); ?></td>
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