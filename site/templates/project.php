<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->
        <div class="general-title bg-color"> 
            <h2>
            <?php if($page->longtitle()) : ?>
                <?php echo html($page->longtitle()) ?>
            <?php else : ?>
                <?php echo html($page->title()) ?>
            <?php endif ?>
            </h2>
            <div class="title-devider"></div>
        </div>

        <!-- Site Wrapper -->
        <div class="site-wrapper">

            <!-- Project Inner -->
            <div class="container">
                <div class="row">

                    <!-- Project Image Gallery (for more images in your gallery, image width can be changed in styles.css class gallery-inner) -->
                    <div class="col-sm-8 col-md-8">
                        <div id="masonry">    
                            <ul>
                                <!-- Image -->

                                <?php if($page->hasImages()): ?> 
                                    <?php foreach($page->images() as $image): ?>        
                                        <!-- Image -->
                                        <?php if($page->hasOneImage()): ?>
                                            <div class="post-box col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <?php else: ?>
                                            <div class="post-box col-md-6 col-lg-6 col-sm-6 col-xs-3">
                                        <?php endif ?>
                                            <li>
                                                <a href="<?php echo $image->url() ?>" data-lightbox="project_photos" data-title="<?php echo $image->caption() ?>">
                                                    <img class="img-responsive" src="<?php echo $image->url() ?>" alt="<?php echo html($page->title()) ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>">
                                                </a>
                                            </li>
                                        </div>

                                    <?php endforeach ?>

                                <?php else: ?>    

                                    <div class="post-box col-md-4 col-lg-4 col-sm-4 col-xs-2">
                                        <li>
                                            <a href="http://placehold.it/800x600" data-lightbox="project_photos" data-title="Placeholder Image">
                                                <img class="img-responsive" src="http://placehold.it/800x600" alt="Placeholder Image" width="800" height="600">
                                            </a>
                                        </li>
                                    </div>

                                    <div class="post-box col-md-4 col-lg-4 col-sm-4 col-xs-2">
                                        <li>
                                            <a href="http://placehold.it/600x800" data-lightbox="project_photos" data-title="Placeholder Image">
                                                <img class="img-responsive" src="http://placehold.it/600x800" alt="Placeholder Image" width="600" height="800">
                                            </a>
                                        </li>
                                    </div>

                                    <div class="post-box col-md-4 col-lg-4 col-sm-4 col-xs-2">
                                        <li>
                                            <a href="http://placehold.it/600x800" data-lightbox="project_photos" data-title="Placeholder Image">
                                                <img class="img-responsive" src="http://placehold.it/600x800" alt="Placeholder Image" width="600" height="800">
                                            </a>
                                        </li>
                                    </div>

                                    <div class="post-box col-md-4 col-lg-4 col-sm-4 col-xs-2">
                                        <li>
                                            <a href="http://placehold.it/600x800" data-lightbox="project_photos" data-title="Placeholder Image">
                                                <img class="img-responsive" src="http://placehold.it/600x800" alt="Placeholder Image" width="600" height="800">
                                            </a>
                                        </li>
                                    </div>

                                    <div class="post-box col-md-4 col-lg-4 col-sm-4 col-xs-2">
                                        <li>
                                            <a href="http://placehold.it/800x600" data-lightbox="project_photos" data-title="Placeholder Image">
                                                <img class="img-responsive" src="http://placehold.it/800x600" alt="Placeholder Image" width="800" height="600">
                                            </a>
                                        </li>
                                    </div>

                                    <div class="post-box col-md-4 col-lg-4 col-sm-4 col-xs-2">
                                        <li>
                                            <a href="http://placehold.it/800x600" data-lightbox="project_photos" data-title="Placeholder Image">
                                                <img class="img-responsive" src="http://placehold.it/800x600" alt="Placeholder Image" width="800" height="600">
                                            </a>
                                        </li>
                                    </div>
                                                                                                
                                <?php endif ?>

                                <!-- Put in the else statement here. If there are no images, put 4 placeholder images. -->

                            </ul>
                        </div>
                    </div>

                    <!-- Project Information (location, date, category some information about your project) -->
                    <div class="col-sm-4">
                        <!-- Start Project Info -->
                        <div class="project-info">
                            <ul>
                                <!-- Customer -->
                                <li>
                                    <b>Client:</b> <?php echo html($page->client()) ?>
                                </li>

                                <!-- Location -->
                                <li>
                                    <b>Location:</b> <?php echo html($page->location()) ?>
                                </li>

                                <!-- Date -->
                                <li>
                                    <b>Date:</b> <?php echo $page->date('Y') ?>
                                </li>

                                <!-- SF -->
                                <li>
                                    <?php if ($page->sf() != "") : ?>
                                        <b>Square Feet:</b> <?php echo html($page->sf()) ?>
                                    <?php else : ?>
                                        <b>Square Feet:</b> N/A
                                    <?php endif ?>
                                </li>

                                <!-- Category -->
                                <li>
                                    <?php $tags = explode(",",$page->tags()) ?>
                                    <b>Category: </b>
                                    <?php foreach ($tags as $tag) : ?>
                                        <?php $tag_stripped = str_replace(" ", "", $tag)?>
                                        <?php $tag_formatted = ucwords(str_replace("-", " ", $tag_stripped)) ?>
                                        <a href="/projects#<?php echo $tag_stripped ?>"><?php echo $tag_formatted ?><?php if (end($tags) != $tag) : ?>,<?php endif ?></a>
                                    <?php endforeach ?>
                                </li>
                            </ul>
                        </div>
                        <!-- End Project Info -->

                        <!-- Description -->
                        <div class="project-description">
                            <?php echo kirbytext($page->text()) ?>
                        </div>
                        <!-- End Description -->
                    
                        <div class="btn-group btn-group-sm padding-top">
                            <a href="/projects" class="btn black-btn">Back to All Projects</a>
                        </div>

                    </div>

                </div><!-- row -->    
            </div><!-- /container -->
            <!-- End Project Inner -->


            <!-- Related Projects -->
            <section class="projects padding-top">
                <!-- Section General Title -->
                <div class="general-title"> 
                    <h2>Related Projects</h2>
                    <div class="title-devider"></div>
                </div>

                <div class="container-fluid">
                    <div class="row">        

                        <?php foreach(related($page->related()) as $related): ?>
                            <!-- Project Item (image,link and description for your project) -->
                            <div class="col-sm-6 col-md-3">
                                <div class="project-inner">
                                    <a href="<?php echo $related->url() ?>">   
                                        <!-- Image -->                 
                                        <?php if ($related->hasImages()): ?>
                                        <?php $image = $related->images()->find('01.jpg') ?>                 
                                            <img src="<?php echo $image->url() ?>" alt="Placeholder" >
                                        <?php else: ?>
                                            <img src="http://www.placehold.it/800x600" alt="Placeholder text">  
                                        <?php endif ?>                   
                                        <div class="project-caption">
                                            <!-- Title and Date -->
                                            <div class="project-details">
                                                <p><i class="fa fa-plus fa-lg"></i></p>
                                                <h3><?php echo html($related->title()) ?></h3>
                                                <p><small><?php echo html($related->client()) ?></small></p>                                                
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach ?> 

                    </div><!-- /row -->
                </div><!-- /container -->

            </section>
            <!-- End Related Projects -->

        </div>
        <!-- End Site Wrapper -->

<?php snippet('project-footer') ?>