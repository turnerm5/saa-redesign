<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->
        <!-- Site Wrapper -->
        <div class="site-wrapper">

            <div class="general-title"> 
                <h2>
                <?php if($page->longtitle()) : ?>
                    <?php echo html($page->longtitle()) ?>
                <?php else : ?>
                    <?php echo html($page->title()) ?>
                <?php endif ?>
                </h2>
                <div class="title-divider"></div>
            </div>

            <!-- Project Inner -->
            <div class="container padding-top padding-bottom">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div id="masonry">    
                            <ul>
                                <?php if($page->hasImages()): ?> 
                                    <?php foreach($page->images()->not('99.jpg') as $image): ?>        
                                        <div class="post-box col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                        <li>
                                            <a href="<?php echo $image->url() ?>" data-lightbox="project_photos" data-title="<?php echo $image->caption() ?>">
                                                <img class="img-responsive" src="<?php echo $image->url() ?>" alt="<?php echo html($page->title()) ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>">
                                            </a>
                                        </li>
                                        </div>
                                    <?php endforeach ?>
                                <?php else: ?>    
                                    <div class="post-box col-md-3 col-lg-3 col-sm-3 col-xs-2">
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
                            </ul>
                        </div> <!-- /#masonry -->
                    </div> <!-- /.col-sm-12 -->
                </div> <!-- /.row -->
                
                <div class="row padding-top">
                <!-- Project Information (location, date, category some information about your project) -->

                    <div class="col-sm-8">

                        <!-- Description -->
                        <div class="project-description">
                            <?php echo kirbytext($page->text()) ?>
                        </div>
                        <!-- End Description -->
                    
                        <div class="btn-group btn-group-sm padding-top">
                            <a href="/projects" class="btn black-btn">Back to All Projects</a>
                        </div>

                    </div>
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
                        </div> <!-- /.project-info -->
                    </div> <!-- /.col-sm-4 -->
                </div><!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-wrapper -->

<?php snippet('project-footer') ?>