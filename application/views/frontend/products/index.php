<!--================================
        START SEARCH AREA
    =================================-->
<section class="search-wrapper">
    <div class="search-area2 bgimage">
        <div class="bg_image_holder">
            <img src="images/search.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="search">
                        <div class="search__title">
                            <h3>
                                <span><?= $totalProduct; ?></span> Produk yang sudah dapat ditransaksi</h3>
                        </div>
                        <div class="search__field">
                            <form action="#">
                                <div class="field-wrapper">
                                    <input class="relative-field rounded" type="text" placeholder="Cari produk disini..">
                                    <button class="btn btn--round" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="<?= base_url(); ?>">Home</a>
                                </li>
                                <li class="active">
                                    <a href="<?= base_url('products'); ?>">All Products</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.search-area2 -->
</section>
<!--================================
        END SEARCH AREA
    =================================-->

<!--================================
        START FILTER AREA
    =================================-->
<div class="filter-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filter-bar filter--bar2">
                    <div class="pull-right">
                        <!-- <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <select name="price">
                                        <option value="low">Price : Low to High</option>
                                        <option value="high">Price : High to low</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div>
                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <select name="price">
                                        <option value="12">12 Items per page</option>
                                        <option value="15">15 Items per page</option>
                                        <option value="25">25 Items per page</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div> -->
                        <div class="filter__option filter--layout">
                            <a href="category-grid.html">
                                <div class="svg-icon">
                                    <img class="svg" src="<?= base_url('assets/frontend/'); ?>images/svg/grid.svg" alt="it's just a layout control folks!">
                                </div>
                            </a>
                            <a href="category-list.html">
                                <div class="svg-icon">
                                    <img class="svg" src="<?= base_url('assets/frontend/'); ?>images/svg/list.svg" alt="it's just a layout control folks!">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end filter-bar -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end filter-bar -->
    </div>
</div>
<!--================================
        END FILTER AREA
    =================================-->


<!--================================
        START PRODUCTS AREA
    =================================-->
<section class="products section--padding2">
    <!-- start container -->
    <div class="container">

        <?= $this->session->flashdata('message'); ?>

        <!-- start .row -->
        <div class="row">


            <!-- start .col-md-3 -->
            <div class="col-lg-3">
                <!-- start aside -->
                <aside class="sidebar product--sidebar">
                    <div class="sidebar-card card--category">
                        <a class="card-title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                            <h4>Kategori
                                <span class="lnr lnr-chevron-down"></span>
                            </h4>
                        </a>
                        <div class="collapse show collapsible-content" id="collapse1">
                            <ul class="card-content">
                                <?php foreach ($categorys as $category) : ?>
                                    <li>
                                        <a href="<?= base_url('products/category/') . $category['slug']; ?>">
                                            <span class="lnr lnr-chevron-right"></span><?= $category['name'] ?>
                                            <!-- <span class="item-count">35</span> -->
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <!-- end /.collapsible_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--filter">
                        <a class="card-title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse2">
                            <h4>Filter Products
                                <span class="lnr lnr-chevron-down"></span>
                            </h4>
                        </a>
                        <div class="collapse show collapsible-content" id="collapse2">
                            <ul class="card-content">
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt1" class="" name="filter_opt">
                                        <label for="opt1">
                                            <span class="circle"></span>Trending Products</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt2" class="" name="filter_opt">
                                        <label for="opt2">
                                            <span class="circle"></span>Popular Products</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt3" class="" name="filter_opt">
                                        <label for="opt3">
                                            <span class="circle"></span>New Products</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt4" class="" name="filter_opt">
                                        <label for="opt4">
                                            <span class="circle"></span>Best Seller</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt5" class="" name="filter_opt">
                                        <label for="opt5">
                                            <span class="circle"></span>Best Rating</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt6" class="" name="filter_opt">
                                        <label for="opt6">
                                            <span class="circle"></span>Free Support</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt7" class="" name="filter_opt">
                                        <label for="opt7">
                                            <span class="circle"></span>On Sale</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end /.sidebar-card -->

                    <!-- <div class="sidebar-card card--slider">
                            <a class="card-title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse3">
                                <h4>Filter Products
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse3">
                                <div class="card-content">
                                    <div class="range-slider price-range"></div>

                                    <div class="price-ranges">
                                        <span class="from rounded">$30</span>
                                        <span class="to rounded">$300</span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <!-- end /.sidebar-card -->
                </aside>
                <!-- end aside -->
            </div>
            <!-- end /.col-md-3 -->

            <!-- start col-md-9 -->
            <div class="col-lg-9">
                <div class="row">

                    <?php foreach ($products as $product) : ?>

                        <div class="col-lg-4 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card product--card-small">

                                <div class="product__thumbnail">
                                    <img height="150" src="<?= base_url('assets/img/products/') . $product['image']; ?>" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="<?= base_url('products/read/') . $product['id']; ?>" class="transparent btn--sm btn--round">More Info</a>
                                        <!-- <a href="single-product.html" class="transparent btn--sm btn--round">Card</a> -->

                                        <?php if ($this->session->userdata('email')) : ?>
                                            <!-- <button type="submit" onclick="document.location.href = '<?= base_url('cart/add_single/') . $product['id']; ?>' " class="transparent btn--sm btn--round">Cart</button> -->

                                            <a href="<?= base_url('cart/add_cart/') . $product['id']; ?>" class="transparent btn--sm btn--round">Cart</a>
                                        <?php else : ?>
                                            <button type="button" onclick="alert('mau beli login dulu kang');" class="transparent btn--sm btn--round">Cart</button>
                                        <?php endif; ?>
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title">
                                        <h4><?= $product['name']; ?></h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="<?= base_url('assets/img/profile/') . $product['author_image']; ?>" alt="author image">
                                            <p>
                                                <a href="#"><?= $product['author_name']; ?></a>
                                            </p>
                                        </li>
                                        <li class="out_of_class_name">
                                            <div class="sell">
                                                <p>
                                                    <span class="lnr lnr-eye"></span>
                                                    <span><?= $product['view']; ?></span>
                                                </p>
                                            </div>
                                            <div class="rating product--rating">
                                                <ul>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-half-o"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>Rp. <?= number_format($product['price'], 0, ',', '.'); ?></span>
                                    </div>
                                    <a href="#">
                                        <span class="lnr lnr-book"></span><?= $product['category']; ?></a>
                                </div>
                            </div>
                        </div>
                        <!-- end /.col-md-6 -->

                    <?php endforeach; ?>

                </div>
            </div>
            <!-- end /.col-md-9 -->
        </div>
        <!-- end /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="pagination-area categorised_item_pagination">
                    <nav class="navigation pagination" role="navigation">
                        <div class="nav-links">
                            <a class="prev page-numbers" href="#">
                                <span class="lnr lnr-arrow-left"></span>
                            </a>
                            <a class="page-numbers current" href="#">1</a>
                            <a class="page-numbers" href="#">2</a>
                            <a class="page-numbers" href="#">3</a>
                            <a class="next page-numbers" href="#">
                                <span class="lnr lnr-arrow-right"></span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->

</section>
<!--================================
        END PRODUCTS AREA
    =================================-->


<!--================================
        START CALL TO ACTION AREA
    =================================-->
<section class="call-to-action bgimage">
    <div class="bg_image_holder">
        <img src="images/calltobg.jpg" alt="">
    </div>
    <div class="container content_above">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-wrap">
                    <h1 class="text--white">Siap bergabung dengan pasar kami!</h1>
                    <h4 class="text--white">Lebih dari 100 yang sudah memepercayai kami</h4>
                    <a href="<?= base_url('authentication/registration'); ?>" class="btn btn--lg btn--round btn--white callto-action-btn">Bergabung Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================
        END CALL TO ACTION AREA
    =================================-->