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


                    <?php $articles = $page->children()->visible()->flip()->paginate(6) ?>

                    <?php foreach($articles as $article): ?>
                        <?php $author = $pages->find('authors/' . $article->author()) ?>

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
                                        <span><i class="fa fa-user"></i> <a href="#"> <?php echo $author->name() ?></a></span>
                                    </div>
                                    <!-- Description -->
                                    <p><?php echo excerpt($article->text(), 300) ?></p>                    
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>          
                
                    <?php if($articles->pagination()->hasPages()): ?>
                        <div class="col-lg-12 text-center padding-bottom">
                            <ul class="pagination">
                                <?php if($articles->pagination()->hasPrevPage()): ?>
                                    <li><a href="<?php echo $articles->pagination()->prevPageURL() ?>">«</a></li>
                                <?php endif ?>

                                <?php foreach($articles->pagination()->range(6) as $paging): ?>
                                    <li<?php if($articles->pagination()->page() == $paging) echo html(' class=active') ?>><a href="<?php echo $articles->pagination()->pageURL($paging); ?>"><?php echo $paging; ?></a></li>
                                <?php endforeach ?>
                                
                                <?php if($articles->pagination()->hasNextPage()): ?>
                                    <li><a href="<?php echo $articles->pagination()->nextPageURL() ?>">»</a></li>
                                <?php endif ?>

                            </ul>
                        </div>
                    <?php endif ?>           

                </div><!-- /row -->    
            </div><!-- /container -->
            <!-- End Blog -->

        </div>
        <!-- End Site Wrapper -->

<?php snippet('footer') ?>