<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->        
        <div class="general-title bg-color"> 
            <h2>Our Team</h2>
            <div class="title-devider"></div>
        </div>

        <div class="site-wrapper">
            <div class="container text-center ">
                
                <div class="row">  
                    <?php $team = $pages->find('team')->children()->visible() ?>
                    <?php foreach($team as $member): ?>

                        <!-- Team Item (name, information about, image, social icons) -->                      
                        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-md-3 col-md-offset-0 col-sm-offset-0 team-item">
                            <!-- Image -->
                            <div class="thumbnail team-inner">
                                <img class="img-responsive" src="http://www.placehold.it/700x700" alt="Specifie an alternate text for an image">                                
                            </div>
                            <div class="team-caption">
                                    <!-- Name -->
                                    <div class="team-title">         
                                        <h3><?php echo $member->name() ?></h3>
                                        <h4><?php echo $member->title() ?></h4>                      
                                        <h5><?php echo $member->role() ?></h5>
                                        <p><a href="mailto:<?php echo $member->email() ?>"><?php echo $member->email() ?></a></p>

                                    </div> 
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>


            </div>
        </div><!-- /site-wrapper -->
        <!-- End Site Wrapper -->

<?php snippet('footer') ?>