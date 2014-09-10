<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->        
        <div class="general-title bg-color">
            <h2>SAA Blog</h2>
            <div class="title-devider"></div>
        </div>

        <!-- Site Wrapper -->
        <div class="site-wrapper">

            <!-- Blog -->
            <div class="container">
                <div class="row">


                    <?php foreach($page->children()->visible()->flip() as $article): ?>

                        <!-- Blog Post (image, title, date and description of post) --> 
                        <div class="col-sm-6 col-md-6">
                            <div class="thumbnail blog-inner">
                                <!-- Image -->
                                <a href="<?php echo $article->url() ?>">
                                    <img src="http://www.placehold.it/800x600" alt="Specifie an alternate text for an image">
                                </a>        
                                <div class="caption">
                                    <!-- Title -->
                                    <div class="blog-inner-title">  
                                        <a href="<?php echo $article->url() ?>">
                                            <h3><?php echo html($article->title()) ?></h3>                                    
                                        </a>                                  
                                    </div>
                                    <!-- Date -->
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i> <a href="#"> <?php echo $article->date('Y-m-d') ?></a></span>
                                    </div>
                                    <!-- Description -->
                                    <p><?php echo excerpt($article->text(), 300) ?></p>                    
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>          

                    <!-- Pagination -->
                    <div class="col-lg-12 text-center padding-bottom">
                        <ul class="pagination">
                            <li class="disabled"><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>        

                </div><!-- /row -->    
            </div><!-- /container -->
            <!-- End Blog -->

        </div>
        <!-- End Site Wrapper -->

<?php snippet('footer') ?>