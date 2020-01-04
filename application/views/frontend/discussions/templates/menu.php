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
                            <li class="active">
                                <a href="<?= base_url('discussions'); ?>">Forum</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Forum Dukungan</h1>
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
    <section class="support_threads_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="support_threads">
                        <div class="thread_sort_area clearfix">
                            <div class="sort_options">
                                <ul>

                                    <?php foreach ($menuDiscussions as $menuDiscussion) : ?>
                                    <?php if ($menuDiscussion['title'] == $subTitle) : ?>
                                        <li class="active">
                                    <?php else: ?>
                                        <li class="">
                                    <?php endif; ?>
                                            <a href="<?= base_url() . $menuDiscussion['url']; ?>"><?= $menuDiscussion['title']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                    
                                </ul>
                            </div>
                            <!-- end .sort_options -->

                            <div class="thread_search_area">
                                <form action="#">
                                    <div class="searc-wrap">
                                        <input type="text" placeholder="Search forum">
                                        <button type="submit" class="search-wrap__btn">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end .thread_search_area -->
                        </div>
                        <!-- end .thread_sort_area -->