<?php snippet('header') ?>
<?php snippet('menu') ?>

 <!-- Section General Title -->        
        <!-- Site Wrapper -->
        <div class="site-wrapper">


        <div class="general-title"> 
            <h2>Our Projects</h2>
            <div class="title-divider"></div>
        </div>


            <!-- Projects -->
            <div class="container padding-top padding-bottom">
                
                <!-- Row of filter buttons -->
                <div class="row">
                    <div class="col-md-12">
                        <p class="filter_list">
                            <a href="#" class="filter" data-filter="all">Show All</a>
                            <a href="#education" class="filter" data-filter=".education">Education</a>
                            <a href="#civic" class="filter" data-filter=".civic">Civic</a> 
                            <a href="#cultural" class="filter" data-filter=".cultural">Cultural</a>
                            <a href="#planning" class="filter" data-filter=".planning">Planning</a>
                            <a href="#tenant-improvement" class="filter" data-filter=".tenant-improvement">Tenant Improvement</a>
                            <a href="#renovation" class="filter" data-filter=".renovation">Renovation</a> 
                            <a href="#new-building" class="filter" data-filter=".new-building">New Buildings</a>
                            <a href="#in-progress" class="filter" data-filter=".in-progress">In Progress</a> 
                        </p>
                    </div>
                </div>

                
                <div class="row">    
                    <!-- Project Item (image, title, city, date and description of project)-->
                    <div id="Container">

                        <?php foreach($page->children()->visible() as $project): ?>
                            
                            <?php $tags = $project->tags() ?>
                            <?php $tags_stripped = str_replace(',','', $tags)?>

                            <div class="col-sm-4 col-md-4 project-item mix <?php echo $tags_stripped ?>">
                                <div class="thumbnail projects-thumbnail">
                                    <a href="<?php echo $project->url() ?>">
                                        <?php if ($project->hasImages()): ?>

                                            <?php $image = $project->images()->find('01.jpg') ?>
                                            <img src="<?php echo thumb($image, array('width' => 400, 'height' => 300, 'quality' => 70, 'tosRGB' => true, 'crop' => true))->url() ?>" alt="<?php echo html($project->title()) ?>" width="400" height="300">
                                        <?php else: ?>
                                            <img src="http://www.placehold.it/400x300" alt="Placeholder text">  
                                        <?php endif ?>                                                     
                                    </a>         
                                </div>
                                <div class="project-inner-caption">
                                    <!-- Title -->
                                    <div class="project-title">                    
                                            <h3><?php echo html($project->title()) ?></h3>                                
                                    </div>
                                    <!-- City and Date -->
                                    <p><?php echo html($project->client()) ?></p>             
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div> <!-- / Mix Container -->
                </div> <!-- /row -->
            </div><!-- /container -->
            <!-- / Projects -->
        </div><!-- /site-wrapper -->
        <!-- / Site Wrapper -->

<?php snippet('project-footer') ?> 