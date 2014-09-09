<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Site Wrapper -->
        <div class="site-wrapper">

            <!-- Blog Inner -->
            <div class="container">
                <div class="row">    

                    <!-- Post Information (image, title, date and description of post) -->       
                    <div class="thumbnail blog-inner">
                        <!-- Image -->
                        <img src="http://www.placehold.it/1200x350" alt="Specifie an alternate text for an image">
                        <div class="caption">
                            <!-- Title -->
                            <div class="blog-title">                                
                                    <h3><?php echo html($page->title()) ?></h3>                                
                            </div>
                            <!-- Date, Comments, Views -->
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar"></i> <?php echo $page->date('Y-m-d') ?></span>
                            </div>
                            <!-- Post Description -->
                            <div class="blog-post-details">
                                <?php echo kirbytext($page->text()) ?>
                                <p><a href="<?php echo url('blog') ?>">Back…</a></p>
                            </div>
                        </div>
                    </div>        

                </div><!-- /row -->
            </div><!-- /container -->
            <!-- End Blog Inner -->

        </div><!-- /site-wrapper -->
        <!-- End Site Wrapper -->

<?php snippet('footer') ?>