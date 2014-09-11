<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->        
        <div class="general-title bg-color"> 
            <h2>Our Team</h2>
            <div class="title-devider"></div>
        </div>

        <div class="site-wrapper bg-color">
            <div class="container text-center ">
                
                <div class="row">  
                    <?php $team = $pages->find('team')->children()->visible() ?>
                    <?php foreach($team as $member): ?>

                        <!-- Team Item (name, information about, image, social icons) -->                      
                        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-md-3 col-md-offset-0 col-sm-offset-0 team-item">
                            <!-- Image -->
                            <div class="thumbnail team-inner">
                                <img src="http://www.placehold.it/400x400" onmouseover="http://www.placehold.it/401x401" onmouseout="http://www.placehold.it/400x400" alt="Specifie an alternate text for an image">                                
                            </div>
                            <div class="team-caption">
                                    <!-- Name -->
                                    <div class="team-title">         
                                        <h3><?php echo $member->name() ?></h3>
                                        <h4><?php echo $member->title() ?></h4>                          
                                    </div>
                                    <!-- Info -->
                                    <h5><?php echo $member->role() ?></h5> 
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>


            </div>
        </div><!-- /site-wrapper -->
        <!-- End Site Wrapper -->

<?php snippet('footer') ?>