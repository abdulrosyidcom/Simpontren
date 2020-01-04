    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="<?= base_url(); ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?= base_url('user/') . $title; ?>"><?= $title; ?></a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Author's <?= $title; ?></h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START DASHBOARD AREA
    =================================-->
    <section class="dashboard-area">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="dashboard_menu">

                            <?php foreach ($menus as $menu) : ?>
                                <?php if ($menu['title'] == $title) : ?>
                                    <li class="active">
                                    <?php else : ?>
                                    <li class="">
                                    <?php endif; ?>
                                    <a href="<?= base_url('user/' . $menu['url']); ?>">
                                        <span class="<?= $menu['icon']; ?>"></span><?= $menu['title']; ?>
                                    </a>
                                    </li>
                                <?php endforeach; ?>
                        </ul>
                        <!-- end /.dashboard_menu -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->