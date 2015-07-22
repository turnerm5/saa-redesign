<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->        
        
<!-- Site Wrapper -->
<div class="site-wrapper">

    <div class="general-title">
        <h2>SAARCHBLOG</h2>
        <div class="title-divider"></div>
    </div>

    <!-- Blog Posts -->
    <div class="container padding-top padding-bottom">
        <?php $articles = $page->children()->visible()->flip()->paginate(6) ?>
        <?php $count = 0 ?>
        
        <?php foreach($articles as $article): ?>
            
            <?php if ($count % 3 == 0): ?>
                <div class="row">
            <?php endif?>
            
            <?php $author = $pages->find('team/' . $article->author()) ?>
                <!-- Blog Post (image, title, date and description of post) --> 
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="blog-inner">
                        <!-- Image -->
                        <a href="<?php echo $article->url() ?>">
                            <?php if ($article->hasImages()): ?>
                            <?php $image = $article->images()->find('01.jpg') ?>                 
                            <img class="img-responsive" src="<?php echo thumb($image, array('width' => 400, 'height' => 300, 'crop' => true))->url() ?>" alt="Placeholder" width="<?php echo thumb($image, array('width' => 400, 'height' => 300, 'crop' => true))->width() ?>" height="<?php echo thumb($image, array('width' => 400, 'height' => 300, 'crop' => true))->height() ?>">
                            <?php else: ?>
                                <img class="img-responsive" src="http://www.placehold.it/400x300" alt="Placeholder text">  
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="fa fa-calendar"></i> <a href="#"> <?php echo $article->date('Y-m-d') ?></a>
                                    </div>
                                    <div class="col-md-8">
                                        <i class="fa fa-user"></i> <a href="#"> <?php echo $author->name() ?></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Description -->
                            <p><?php echo excerpt($article->text(), 250) ?></p>                    
                        </div>
                    </div>
                </div>

                
                
                <?php $count = $count + 1 ?>
                <?php if ($count % 3 == 0): ?>
                    </div>
                <?php endif?>
            <?php endforeach ?>     
    </div>
    <!-- End Blog Posts -->
        
        

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

</div>
<!-- End Site Wrapper -->

<?php snippet('project-footer') ?>