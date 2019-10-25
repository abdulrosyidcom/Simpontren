
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->

    <button type="button" class="btn btn-dark buttonInsertSubenu" data-toggle="modal" data-target="#subMenuModal">Tambah Data</button>

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
        
    </div>
    
    <div class="row tile_count">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <?= form_error('menu_id', '<span class="text-danger">', '</span><br>'); ?>
            <?= form_error('title', '<span class="text-danger">', '</span><br>'); ?>
            <?= form_error('url', '<span class="text-danger">', '</span><br>'); ?>
            <?= form_error('icon', '<span class="text-danger">', '</span>'); ?>
            
            <div class="x_panel">
                <div class="x_title">
                    <h2>Submenu</h2>
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
                                <th class="column-title">Title</th>
                                <th class="column-title">Menu</th>
                                <th class="column-title">Url</th>
                                <th class="column-title">Icon</th>
                                <th class="column-title">Active</th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($subMenu as $sm) : ?>
                            <tr class="even pointer">
                                <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                </td>
                                <td class=""><?= $no++; ?></td>
                                <td class=""><?= $sm['title']; ?></td>
                                <td class=""><?= $sm['menu']; ?></td>
                                <td class=""><?= $sm['url']; ?></td>
                                <td class=""><?= $sm['icon']; ?></td>
                                <td class=""><?= $sm['is_active']; ?></td>
                                <td class="last">
                                    <button class="btn btn-info showModalSubmenu" data-toggle="modal" data-target="#subMenuModal" data-id="<?= $sm['id']; ?>">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                    <a href="<?= base_url('dashboard/deletesubmenu/') . $sm['id']; ?>" class="btn btn-danger btn-delete">
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
<div class="modal fade" id="subMenuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('dashboard/submenu'); ?>" method="post">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="subMenuModalLabel">Form Tambah Data Subenu</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <select class="form-control" id="menu_id" name="menu_id">
                        <option value="">Select Menu</option>
                            <?php foreach ( $menus as $menu ) : ?>
                                <option value="<?= $menu['id']; ?>"><?= $menu['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input type="text" class="form-control" id="url" name="url">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" id="icon" name="icon">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" value="1" name="is_active" checked> Is Active
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btnSubmenu">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>