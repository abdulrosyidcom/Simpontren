
  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">

        <div class="col-sm-8" style="margin-top : 50px;">
            <form class="form-horizontal" action="<?= base_url('dashboard/edit'); ?>" method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                       <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>

                <input type="hidden" name="id" value="<?= $user['id']; ?>">

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" value="<?= $user['name']; ?>">
                        <?= form_error('name', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="email" disabled value="<?= $user['email']; ?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="mobile" class="col-sm-2 control-label">No Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" name="mobile" class="form-control" id="mobile" value="<?= $user['mobile']; ?>">
                        <?= form_error('mobile', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" id="address" value="<?= $user['address']; ?>">
                        <?= form_error('address', '<span class="text-danger">', '</span>'); ?>
                        
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="number_home" class="col-sm-2 control-label">No Home</label>
                    <div class="col-sm-10">
                        <input type="text" name="number_home" class="form-control" id="number_home" value="<?= $user['number_home']; ?>">
                        <?= form_error('number_home', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="about" class="col-sm-2 control-label">About</label>
                    <div class="col-sm-10">
                        <textarea name="about" class="form-control" id="" cols="30" rows="10"><?= $user['about']; ?></textarea>
                        <?= form_error('about', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="img-thumbnail" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="">
                            </div>
                            <div class="col-sm-10">
                                <input type="file" name="image" style="margin-top : 40px;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>

                



    
            </form>
        </div>
      
    </div>
    <!-- /top tiles -->

  </div>
  <!-- /page content -->