<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h2>Discussions</h2>
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
            
                <?= $this->session->flashdata('message'); ?>

                <div class="x_content">

                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th>
                                <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">No.</th>
                            <th class="column-title">Author</th>
                            <th class="column-title">image</th>
                            <th class="column-title">Question</th>
                            <th class="column-title">Status</th>
                            <th class="column-title">Active</th>
                            <th class="column-title">Date Created</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($discussions as $discussion) : ?>
                        <tr class="even pointer">
                            <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                            </td>
                            </td>
                            <td class=" "><?= $no++; ?></td>
                            <td class=" "><?= $discussion['author']; ?></td>
                            <td class=" ">
                                <img width="40" class="img-circle" src="<?= base_url('assets/img/profile/') . $discussion['image']; ?>" alt="">
                            </td>
                            <td class=" "><?= substr ($discussion['quession'], 0, 30); ?></td>
                            <td class=" ">
                                <?php if( $discussion['status'] == 'Solved' ) : ?>
                                    <span class="label label-success"><?= $discussion['status']; ?></span>
                                    <?php else: ?>
                                    <span class="label label-danger"><?= $discussion['status']; ?></span>
                                <?php endif; ?>
                            </td>
                            <td class=" ">
                                <?php if( $discussion['is_active'] == 'aktif' ) : ?>
                                    <span class="label label-success"><?= $discussion['is_active']; ?></span>
                                    <?php else: ?>
                                    <span class="label label-danger"><?= $discussion['is_active']; ?></span>
                                <?php endif; ?>
                            </td>
                            <td class=""><?= date('d M Y', $discussion['date_created']); ?></td>
                            <td>
                                <a href="" data-id="<?= $discussion['id']; ?>" data-toggle="modal" data-target="#backendDiscussionModal" class="btn btn-info updateDataDiscussion">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <a href="<?= base_url('dashboard/delete_discussion/') . $discussion['id']; ?>" class="btn btn-danger" onclick="return confirm('Beneran mau dihapus?');">
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
<div class="modal fade" id="backendDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('dashboard/update_discussion'); ?>" method="post">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="subMenuModalLabel">Form Ubah Discussion</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" name="question" id="question">
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="">Select Menu</option>
                            <option value="aktif">Aktif</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
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