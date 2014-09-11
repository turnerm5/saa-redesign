<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->
        <div class="general-title bg-color"> 
            <h2><?php echo html($page->title()) ?></h2>
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

                                        <div class="post-box col-md-6 col-lg-6 col-sm-6 col-xs-3">
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

                                <!-- Category -->
                                <li>
                                    <b>Category:</b> <?php echo html($page->tags()) ?>
                                </li>
                            </ul>
                        </div>
                        <!-- Description -->
                        <div class="project-description">
                            <?php echo kirbytext($page->text()) ?>
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

                        <!-- Project Item (image,link and description for your project) -->
                        <div class="col-sm-6 col-md-3">
                            <div class="project-inner">
                                <a href="#">   
                                    <!-- Image -->                 
                                    <img src="/assets/img/portfolio/auburn_library_01.jpg" alt="Specifie an alternate text for an image" >                    
                                    <div class="project-caption">
                                        <!-- Title and Date -->
                                        <div class="project-details">
                                            <p><i class="fa fa-plus fa-lg"></i></p>
                                            <h3>Auburn Library</h3>
                                            <p><small>King County Library System</small></p>                                                
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Project Item (image,link and description for your project) -->
                        <div class="col-sm-6 col-md-3">
                            <div class="project-inner">
                                <a href="#">  
                                    <!-- Image -->                  
                                    <img src="/assets/img/portfolio/ocee_01.jpg" alt="Specifie an alternate text for an image">                    
                                    <div class="project-caption">
                                        <!-- Title and Date -->
                                        <div class="project-details">
                                            <p><i class="fa fa-plus fa-lg"></i></p>
                                            <h3>Opportunity Center</h3>
                                            <p><small>North Seattle College</small></p>                                                
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Project Item (image,link and description for your project) -->
                        <div class="col-sm-6 col-md-3">
                            <div class="project-inner">
                                <a href="#">        
                                    <!-- Image -->            
                                    <img src="/assets/img/portfolio/fs20_01.jpg" alt="Specifie an alternate text for an image">                    
                                    <div class="project-caption">
                                        <!-- Title and Date -->
                                        <div class="project-details">
                                            <p><i class="fa fa-plus fa-lg"></i></p>
                                            <h3>Fire Station 20</h3>
                                            <p><small>City of Seattle</small></p>                                                    
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>            

                        <!-- Project Item (image,link and description for your project) -->
                        <div class="col-sm-6 col-md-3">
                            <div class="project-inner">
                                <a href="#">    
                                    <!-- Image -->                    
                                    <img src="/assets/img/portfolio/douglass_truth_01.jpg" alt="Specifie an alternate text for an image">                        
                                    <div class="project-caption">
                                        <!-- Title and Date -->
                                        <div class="project-details">
                                            <p><i class="fa fa-plus fa-lg"></i></p>
                                            <h3>Douglass-Truth Branch</h3>
                                            <p><small>The Seattle Public Library</small></p>                                                    
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>             

                    </div><!-- /row -->
                </div><!-- /container -->

                <!-- View All Projects Button -->
                <div class="padding-top padding-bottom text-center">  
                    <a href="projects.html" class="btn black-btn">View all Projects</a>
                </div>

            </section>
            <!-- End Related Projects -->

        </div>
        <!-- End Site Wrapper -->

<?php snippet('project-footer') ?>