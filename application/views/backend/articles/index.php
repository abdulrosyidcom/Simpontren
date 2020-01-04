
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">

        
        <a href="<?= base_url('dashboard/create_article'); ?>" class="btn btn-dark">Tambah Data Artikel</a>
        
        <?= $this->session->flashdata('message'); ?>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h2>Data Artikel</h2>
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
                            <th class="column-title">No.</th>
                            <th class="column-title">Title</th>
                            <th class="column-title">Category</th>
                            <th class="column-title">Author</th>
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
                        <?php foreach ($articles as $article) : ?>
                        <tr class="even pointer">
                            <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" "><?= $no++; ?></td>
                            <td class=" "><?= substr($article['title'], 0, 20); ?></td>
                            <td class=" "><?= $article['category']; ?></td>
                            <td class=" "><?= $article['author']; ?></td>
                            <td class=" ">
                                <?php if ( $article['is_active'] == 'active' ) : ?>
                                    <span class="label label-success"><?= $article['is_active']; ?></span>
                                    <?php else: ?>
                                    <span class="label label-danger"><?= $article['is_active']; ?></span>
                                <?php endif; ?>
                            </td>
                            <td class=" "><?= date('D M Y', $article['date_created']); ?></td>
                            <td>
                                <a href="<?= base_url('dashboard/update_article/') . $article['url_title']; ?>" class="btn btn-info">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <a href="<?= base_url('dashboard/delete_article/') . $article['url_title']; ?>" class="btn btn-danger" onclick="return confirm('Beneran mau dihapus?');">
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