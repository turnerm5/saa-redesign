<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Site Wrapper -->
        <div class="site-wrapper">

            <!-- Blog Inner -->
            <div class="container">   
                    
                    <!-- Post Information (image, title, date and description of post) -->       
                    <div class="blog-inner">
                        <div class="row">
                            <!-- Image -->
                            <div class="col-md-12">
                                <img src="http://www.placehold.it/1200x350" alt="Specifie an alternate text for an image" class="img-responsive">
                            </div>
                            
                        </div> <!-- /row -->
                        <div class="row">
                            <!-- Date, Comments, Views -->
                            <div class="col-md-4 col-md-push-8 blog-meta-inner">
                                <span><i class="fa fa-calendar"></i> <?php echo $page->date('Y-m-d') ?></span>
                                <br>
                                <span><i class="fa fa-user"></i> <?php echo $page->author() ?></span>
                            </div>

                            <!-- Blog Text -->
                            <div class="col-md-8 col-md-pull-4 caption">
                                <!-- Title -->
                                <div class="blog-title">                                
                                    <h3><?php echo html($page->title()) ?></h3>                                
                                    <?php echo kirbytext($page->text()) ?>
                                    <p><a href="<?php echo url('blog') ?>">Back…</a></p>
                                </div>
                            </div> <!-- /text -->


                                <!-- Post Description -->
                        </div> <!-- /row -->
                    </div>        

                </div><!-- /row -->
            </div><!-- /container -->
            <!-- End Blog Inner -->

        </div><!-- /site-wrapper -->
        <!-- End Site Wrapper -->

<?php snippet('footer') ?>