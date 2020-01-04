<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">

    <title><?= $title; ?></title>

    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/plugins.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>style.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>

<body class="preload home1 mutlti-vendor">

    <!-- ================================
    START MENU AREA
    ================================= -->
    <!-- start menu-area -->
    <div class="menu-area">
        <!-- start .top-menu-area -->
        <div class="top-menu-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row">
                    <!-- start .col-md-3 -->
                    <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="logo">
                            <a href="<?= base_url(); ?>">
                                <img src="<?= base_url('assets/frontend/'); ?>images/logo.png" alt="logo image" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">

                        <?php if ($this->session->userdata('email')) : ?>

                            <div class="author-area">

                                <div class="author__notification_area">
                                    <ul>
                                        <li class="has_dropdown">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-cart"></span>
                                                <span class="notification_count"><?= anchor('cart/', $this->cart->total_items()); ?></span>
                                            </div>

                                            <div class="dropdowns dropdown--cart">
                                                <div class="cart_area">
                                                    <!-- <div class="cart_product">
                                                        <div class="product__info">
                                                            <div class="thumbn">
                                                                <img src="" alt="cart product thumbnail">
                                                            </div>

                                                            <div class="info">
                                                                <a class="title" href="single-product.html">Name</a>
                                                                <div class="cat">
                                                                    <span class="lnr lnr-book">as</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="product__action">
                                                            <a href="">
                                                                <span class="lnr lnr-trash"></span>
                                                            </a>
                                                            <p>Total</p>
                                                        </div>
                                                    </div>

                                                    <div class="total">
                                                        <p>
                                                            <span>Total :</span>10</p>
                                                    </div> -->
                                                    <div class="cart_action">
                                                        <a class="go_cart" href="<?= base_url('cart'); ?>">View Cart</a>
                                                        <a class="go_checkout" href="<?= base_url('checkout'); ?>">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="author-author__info inline has_dropdown">
                                    <div class="author__avatar">
                                        <img width="50" class="rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="user avatar">

                                    </div>
                                    <div class="autor__info">
                                        <p class="name">
                                            <?= $user['name']; ?>
                                        </p>
                                        <p class="ammount"><?= date('d M Y', $user['date_created']); ?></p>
                                    </div>

                                    <div class="dropdowns dropdown--author">
                                        <ul>
                                            <li>
                                                <a href="<?= base_url('user'); ?>">
                                                    <span class="lnr lnr-user"></span>Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('user/dashboard'); ?>">
                                                    <span class="lnr lnr-home"></span>Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('user/setting'); ?>">
                                                    <span class="lnr lnr-cog"></span>Setting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('user/article'); ?>">
                                                    <span class="lnr lnr-pencil"></span>Article
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('user/discussions'); ?>">
                                                    <span class="lnr lnr-list"></span>Discussions
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('user/notes'); ?>">
                                                    <span class="lnr lnr-pencil"></span>Notes
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('user/checkout'); ?>">
                                                    <span class="lnr lnr-cart"></span>Checkout
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('authentication/logout'); ?>">
                                                    <span class="lnr lnr-exit"></span>Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mobile_content ">
                                <span class="lnr lnr-user menu_icon"></span>

                                <div class="offcanvas-menu closed">
                                    <span class="lnr lnr-cross close_menu"></span>
                                    <div class="author-author__info">
                                        <div class="author__avatar v_middle">
                                            <img width="50" class="rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="user avatar">
                                        </div>
                                        <div class="autor__info v_middle">
                                            <p class="name">
                                                <?= $user['name']; ?>
                                            </p>
                                            <p class="ammount"><?= date('d M Y', $user['date_created']); ?></p>
                                        </div>
                                    </div>

                                    <div class="author__notification_area">
                                        <ul>
                                            <!-- <li>
                                            <a href="notification.html">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-alarm"></span>
                                                    <span class="notification_count noti">25</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="message.html">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-envelope"></span>
                                                    <span class="notification_count msg">6</span>
                                                </div>
                                            </a>
                                        </li> -->

                                            <li>
                                                <a href="cart.html">
                                                    <div class="icon_wrap">
                                                        <span class="lnr lnr-cart"></span>
                                                        <span class="notification_count purch">2</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdowns dropdown--author">
                                        <ul>
                                            <li>
                                                <a href="<?= base_url('user'); ?>">
                                                    <span class="lnr lnr-user"></span>Profile</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('user/dashboard'); ?>">
                                                    <span class="lnr lnr-home"></span>Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('user/setting'); ?>">
                                                    <span class="lnr lnr-cog"></span>Setting</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('user/article'); ?>">
                                                    <span class="lnr lnr-pencil"></span>Article</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('user/discussions'); ?>">
                                                    <span class="lnr lnr-list"></span>Discussions</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('user/notes'); ?>">
                                                    <span class="lnr lnr-pencil"></span>Notes</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('authentication/logout'); ?>">
                                                    <span class="lnr lnr-exit"></span>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>

                            <!-- start .author-area -->
                            <div class="author-area not_logged_in">
                                <div class="pull-right join">
                                    <a href="<?= base_url('authentication/registration'); ?>" class="btn btn--round btn-secondary  btn--xs">Registration</a>
                                    <a href="<?= base_url('authentication'); ?>" class="btn btn--round btn--xs">Login</a>
                                </div>
                            </div>
                            <!-- end .author-area -->

                        <?php endif; ?>

                    </div>

                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->


        <!-- start .mainmenu_area -->
        <div class="mainmenu">
            <!-- start .container -->
            <div class="container">
                <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <!-- start mainmenu__search -->
                            <div class="mainmenu__search">
                                <form action="#">
                                    <div class="searc-wrap">
                                        <input type="text" placeholder="Search product">
                                        <button type="submit" class="search-wrap__btn">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- start mainmenu__search -->
                        </div>

                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">

                                    <li class="has_dropdown">
                                        <a href="<?= base_url(); ?>">HOME</a>
                                    </li>

                                    <li class="has_dropdown">
                                        <a href="<?= base_url('articles'); ?>">Blog</a>
                                    </li>

                                    <li class="has_dropdown">
                                        <a href="<?= base_url('discussions'); ?>">Discussion</a>
                                    </li>

                                    <li class="has_dropdown">
                                        <a href="<?= base_url('products'); ?>">Product</a>
                                    </li>

                                    <li class="has_dropdown">
                                        <a href="<?= base_url('about'); ?>">About</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>
    <!-- end /.menu-area -->
    <!--================================
    END MENU AREA
    =================================-->