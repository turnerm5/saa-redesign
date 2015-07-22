<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Site Wrapper -->
<div class="site-wrapper">
        
        <?php $author = $pages->find('team/' . $page->author()) ?>

        <!-- Post Information (image, title, date and description of post) -->                   
        <div class="container blog-post">
        <!-- Blog Content + Sidebar -->
            <div class="row"> 
                
                <div class="blog-title col-md-9">                                
                    <h3><?php echo html($page->title()) ?></h3>                               
                    
                    
                    <?php echo kirbytext($page->text()) ?>

                                        
                </div>
                <!-- /Blog Text -->
                
                <!-- Date, Comments, Views -->
                <div class="col-md-3 blog-meta-inner">
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
            </div>
                
        
            <!-- Disqus -->
            <div class="row">
                <div class="col-md-9 padding-top">
                    <?php snippet('disqus', array('disqus_shortname' => 'saarchstaging', 'disqus_developer' => true)) ?>
                </div>
            </div>
            <!-- /Disqus -->  
        </div>
    </div> <!-- /container -->
</div><!-- /site-wrapper -->

<?php snippet('footer') ?>