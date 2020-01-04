
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
    
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Update Artikel</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Update Data Artikel</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="#">Settings 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="close-link">
                                        <i class="fa fa-close"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br/>

                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                
                                <input type="hidden" name="url_title" value="<?= $article['url_title']; ?>">
                                <div class="form-group">
                                    <label for="title" class="col-sm-1 control-label">Title</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="title" name="title" value="<?= $article['title']; ?>">
                                        <?= form_error('title', '<span style="color: red; font-size: 12px;">', '<span>'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="category" class="col-sm-1 control-label">category</label>
                                    <div class="col-sm-11">
                                        <select class="form-control" id="category" name="category">
                                            <?php foreach ($categorys as $category) : ?>
                                            <option value="<?= $category['name']; ?>"><?= $category['name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="is_active" class="col-sm-1 control-label">Aktif</label>
                                    <div class="col-sm-11">
                                        <select class="form-control" id="is_active" name="is_active">
                                            <option value="active">active</option>
                                            <option value="proccess">proccess</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="content" class="col-sm-1 control-label">Konten</label>
                                    <div class="col-sm-11">
                                        <textarea name="content" id="" class="ckeditor" cols="30" rows="10"><?= $article['content']; ?> ?></textarea>
                                        <?= form_error('content', '<span style="color: red; font-size: 12px;">', '<span>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="content" class="col-sm-1 control-label">Image</label>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="<?= base_url('assets/img/article/') . $article['image']; ?>" class="img-thumbnail" alt="">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" style="margin-top: 25px;" id="image" name="image">
                                        </div>
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