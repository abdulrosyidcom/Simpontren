
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->

    <div class="flash-data-role" data-flashdatarole="<?= $this->session->flashdata('message'); ?>">
        
    </div>
    
    <div class="row tile_count">
        <div class="col-md-7 col-sm-12 col-xs-12">

            <div class="x_panel">
                <div class="x_title">
                    <h2>Role : <?= $role['role']; ?></h2>
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
                                <th class="column-title">Menu</th>
                                <th class="column-title">Access</th>
                            </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ( $menu as $m ) : ?>
                                <tr class="even pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=""><?= $no++; ?></td>
                                    <td class=""><?= $m['menu']; ?></td>
                                    <td class="last">
                                        <div class="checkbox">
                                            <label>
                                                <input class="form-check-access" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                            </label>
                                        </div>
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