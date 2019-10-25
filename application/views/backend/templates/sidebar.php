<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-book" aria-hidden="true"></i> <span>Simpontren!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $user['name']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              
              <div class="menu_section">

                <!-- QUERY MENU -->
                <?php 
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                                FROM `user_menu` JOIN `user_access_menu`
                                  ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                               WHERE `user_access_menu`.`role_id` = $role_id
                            ORDER BY `user_access_menu`.`menu_id` ASC
                             ";
                $menu = $this->db->query($queryMenu)->result_array();
                ?>

                <?php foreach ( $menu as $m ) : ?>
                <h3><?= $m['menu']; ?></h3>


                <!-- SUBMENU SESUAI MENU -->
                <?php 
                $menuId = $m['id'];
                $querySubMenu = "SELECT * FROM `user_sub_menu`
                                  WHERE `menu_id` = $menuId
                                  AND `is_active` = 1
                                ";
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>

                <?php foreach ( $subMenu as $sm ) : ?>
                <ul class="nav side-menu">     
                  <li>
                    <a href="<?= base_url($sm['url']); ?>">
                      <i class="<?= $sm['icon']; ?>"></i> <?= $sm['title']; ?>
                    </a>
                  </li>
                </ul>
                <?php endforeach; ?>

                <?php endforeach; ?>
                
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('authentication/logout'); ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>