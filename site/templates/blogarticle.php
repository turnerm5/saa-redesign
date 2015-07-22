<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Site Wrapper -->
<div class="site-wrapper">

    <!-- Blog Inner -->
    <div class="container">   
            
            <?php $author = $pages->find('team/' . $page->author()) ?>

            <!-- Post Information (image, title, date and description of post) -->       
            <div class="blog-inner">
                
                <!-- Blog Content + Sidebar -->
                <div class="row"> 
                    <!-- Date, Comments, Views -->
                    <div class="col-md-4 col-md-push-8 blog-meta-inner">
                        <h5>Date Published</h5>
                        <p><?php echo $page->date('D, M d, Y') ?></p>
                        <h5>Author</h5>
                        <a href="mailto:<?php echo $author->email() ?>"><?php echo $author->name() ?></a>
                        <h5>Author Bio</h5>
                        <?php echo kirbytext($author->bio()) ?>
                        
                        <?php if ($author->favorite() != ""): ?>
                            <h5>Author Inspiration</h5>
                            <?php echo kirbytext($author->favorite()) ?>
                        <?php endif ?>

                    </div>
                    <!-- /Date, Comments, Views -->

                    <!-- Blog Text -->
                    <div class="col-md-8 col-md-pull-4 caption">
                        <div class="blog-title">                                
                            <h3><?php echo html($page->title()) ?></h3>                                
                        </div>
                        <?php echo kirbytext($page->text()) ?>
                        <a href="/blog" class="btn black-btn">
                            Go Back
                        </a>
                    </div>
                    <!-- /Blog Text -->

                </div>
                <!-- /Blog Content + Sidebar -->
                
                <!-- Disqus -->
                <div class="row">
                    <div class="col-md-8">
                        <?php snippet('disqus', array('disqus_shortname' => 'saarchstaging', 'disqus_developer' => true)) ?>
                    </div>
                </div>
                <!-- /Disqus -->  

        </div><!-- /blog-inner -->
    </div><!-- /container -->
</div><!-- /site-wrapper -->

<?php snippet('footer') ?>