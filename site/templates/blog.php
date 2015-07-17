<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->        
        
        <!-- Site Wrapper -->
        <div class="site-wrapper">

        <div class="general-title">
            <h2>SAARCHBLOG</h2>
            <div class="title-divider"></div>
        </div>

            <!-- Blog -->
            <div class="container padding-top padding-bottom">
                
                <div class="row">
                    <div id="Container">
                        <?php $articles = $page->children()->visible()->flip()->paginate(6) ?>

                        <?php foreach($articles as $article): ?>
                            <?php $author = $pages->find('team/' . $article->author()) ?>

                            <!-- Blog Post (image, title, date and description of post) --> 
                            <div class="col-sm-4 col-md-4 col-xs-6 mix">
                                <div class="thumbnail blog-inner">
                                    <!-- Image -->
                                    <a href="<?php echo $article->url() ?>">
                                        <?php if ($article->hasImages()): ?>
                                        <?php $image = $article->images()->find('01.jpg') ?>                 
                                        <img src="<?php echo $image->url() ?>" alt="Placeholder" >
                                        <?php else: ?>
                                            <img src="http://www.placehold.it/800x600" alt="Placeholder text">  
                                        <?php endif ?>
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
                    </div>          
                </div> <!-- end row -->
                
                

                <!-- Pagination -->
                <div class="row">
                    <?php if($articles->pagination()->hasPages()): ?>
                        <div class="col-lg-12 text-center">
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
                <!-- /Pagination -->

            </div><!-- /container -->
            <!-- End Blog -->

        </div>
        <!-- End Site Wrapper -->

<?php snippet('project-footer') ?>