
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->

    <button type="button" class="btn btn-dark buttonCreateMenu" data-toggle="modal" data-target="#roleModal">Tambah Data Role</button>

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
        
    </div>
    
    <div class="row tile_count">
        <div class="col-md-7 col-sm-12 col-xs-12">

            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <div class="x_panel">
                <div class="x_title">
                    <h2>Role</h2>
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
                                <th class="column-title">Role</th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ( $role as $r ) : ?>
                                <tr class="even pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=""><?= $no++; ?></td>
                                    <td class=""><?= $r['role']; ?></td>
                                    <td class="last">
                                        <a href="<?= base_url('dashboard/roleaccess/') . $r['id']; ?>" class="badge">access</a>
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
<div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('dashboard/menu'); ?>" method="post">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalLabel">Form Tambah Data Role</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="menu">Role</label>
                        <input type="text" class="form-control" id="role" name="role">
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