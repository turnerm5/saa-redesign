<?php snippet('header') ?>
<?php snippet('menu') ?>

 <!-- Section General Title -->        
        <div class="general-title bg-color"> 
            <h2>Our Projects</h2>
            <div class="title-devider"></div>
        </div>

        <!-- Site Wrapper -->
        <div class="site-wrapper">

            <!-- Projects -->
            <div class="container">
                
                <!-- Row of filter buttons -->
<!--                 <div class="row">
                    <div class="col-md-12">
                        <p class="filter_list">
                            Filter by: 
                            <a href="#" class="filter" data-filter="all">All</a>
                            <a href="#" class="filter" data-filter=".education">Education</a>
                            <a href="#" class="filter" data-filter=".civic">Civic</a> 
                            <a href="#" class="filter" data-filter=".cultural">Cultural</a>
                            <a href="#" class="filter" data-filter=".spiritual">Spiritual</a> 
                            <a href="#" class="filter" data-filter=".planning">Planning</a>
                            <a href="#" class="filter" data-filter=".tenant-improvement">Tenant Improvement</a>
                            <a href="#" class="filter" data-filter=".renovation">Renovation</a> 
                            <a href="#" class="filter" data-filter=".new-building">New Building</a>
                            <a href="#" class="filter" data-filter=".in-progress">In Progress</a> 
                        </p>
                    </div>
                </div>     -->

                <!-- Row of filter buttons -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group btn-group-xs">
                            <button type="button" class="filter btn btn-link" data-filter="all">All</button>
                            <button type="button" class="filter btn btn-link" data-filter=".education">Education</button>
                            <button type="button" class="filter btn btn-link" data-filter=".civic">Civic</button>
                            <button type="button" class="filter btn btn-link" data-filter=".cultural">Cultural</button>
                            <button type="button" class="filter btn btn-link" data-filter=".spiritual">Spiritual</button>
                            <button type="button" class="filter btn btn-link" data-filter=".planning">Planning</button>
                            <button type="button" class="filter btn btn-link" data-filter=".tenant-improvement">Tenant Improvement</button>
                            <button type="button" class="filter btn btn-link" data-filter=".renovation">Renovation</button>
                            <button type="button" class="filter btn btn-link" data-filter=".new-building">New Building</button>
                            <button type="button" class="filter btn btn-link" data-filter=".in-progress">In Progress</button>
                        </div>
                    </div>
                </div>

                
                <div class="row">    
                    <!-- Project Item (image, title, city, date and description of project)-->
                    <div id="Container">

                            <?php $counter = 0; ?>

                            <?php foreach($page->children()->visible() as $project): ?>
                                
                                <?php $tags = $project->tags() ?>
                                <?php $tags_stripped = str_replace(',','', $tags)?>

                                    <div class="col-sm-6 col-md-4 project-item mix <?php echo $tags_stripped ?>">
                                        <div class="thumbnail projects-thumbnail">
                                            <a href="<?php echo $project->url() ?>">
                                                <?php if ($project->hasImages()): ?>

                                                    <?php $image = $project->images()->find('01.jpg') ?>
                                                    <img src="<?php echo $image->url() ?>" alt="<?php echo html($project->title()) ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>">
                                                <?php else: ?>
                                                    <img src="http://www.placehold.it/800x600" alt="Placeholder text">  
                                                <?php endif ?>                                                     
                                            </a>         
                                        </div>
                                        <div class="project-inner-caption">
                                            <!-- Title -->
                                            <div class="project-title">                    
                                                    <h3><?php echo html($project->title()) ?></h3>                                
                                            </div>
                                            <!-- City and Date -->
                                            <p><i class="fa fa-map-marker"></i> <?php echo html($project->client()) ?></p>             
                                        </div>
                                    </div>

                            <?php endforeach ?>

                        </div>

                    </div> <!-- End Mix Container -->
                </div>
            </div><!-- /container -->
            <!-- End Projects -->
        </div><!-- /site-wrapper -->
        <!-- End Site Wrapper -->

<?php snippet('project-footer') ?>