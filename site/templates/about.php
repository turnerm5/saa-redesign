<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->
        <!-- Site Wrapper -->
        <div class="site-wrapper">

        <div class="general-title container">
            <h2>Philosophy</h2>
            <div class="title-divider"></div>
        </div>

            <!-- About Us -->
            <div class="container">

                <!-- Our Studio (studio information and images for slider) -->
                <div class="row padding-top padding-bottom">        
                    <div class="col-md-10 col-md-offset-1">
                        <!-- Description -->
                        <div class="col-md-6">                            
                            <p><?php echo kirbytext($page->column1()) ?></p>
                        </div>
                        <!-- Description -->
                        <div class="col-md-6">
                            <p><?php echo kirbytext($page->column2()) ?></p>
                        </div>
                    </div>         

                </div><!-- /row -->
            </div><!-- /container -->
            <!-- End About Us -->

            <!-- Our Team -->
            <section class="container text-center">
                <!-- Section General Title -->
                <div class="general-title">
                    <h2>Leadership</h2>
                    <div class="title-divider"></div>
                </div>
                <div class="container">
                    <div class="row">  
                    <?php $team = $pages->find('team')->children()->visible()->paginate(4) ?>
                    <?php foreach($team as $member): ?>
                        <!-- Team Item (name, information about, image, social icons) -->                      
                        <div class="col-sm-6 col-md-3 team-item">
                            <!-- Image -->
                            <div class="thumbnail team-inner">
                                <?php if ($member->hasImages()): ?>
                                    <?php $image = $member->images()->find('01.jpg') ?>                 
                                    <img src="<?php echo $image->url() ?>" alt="Specifie an alternate text for an image">
                                <?php else: ?>
                                    <img src="http://www.placehold.it/500x500" alt="Placeholder text">
                                <?php endif ?>                                
                            </div>
                            <div class="team-caption">
                                    <!-- Name -->
                                    <div class="team-title">         
                                        <h3><?php echo $member->name() ?></h3>
                                        <h4><?php echo $member->title() ?></h4>                            
                                    </div>
                                    <!-- Info -->
                                    <h5><?php echo $member->role() ?></h5> 
                                    <!-- <p><?php echo $member->bio() ?></p> -->
                            </div>
                        </div>
                    <?php endforeach ?>

                    </div><!-- /row -->

                    <!-- View All Team Members Button -->  
                    <div class="padding-bottom">  
                        <a href="team" class="btn black-btn">
                            View All Team Members
                        </a>
                    </div>

                </div><!-- /container -->
            </section>
            <!-- End Our Team -->
            
            <!-- Clients -->
            <section class="padding-bottom text-center container">
                <div class="general-title">
                    <h2>Clients</h2>
                    <div class="title-divider"></div>
                </div>
                <div class="container">
                    <div class="row">      
                        
                        <div class="col-md-4">
                            <h3>Education</h3>
                            <?php echo kirbytext($page->clients_education()) ?>
                        </div>
                        
                        <div class="col-md-4">
                            <h3>Civic / Cultural</h3>
                            <?php echo kirbytext($page->clients_civic_cultural()) ?>
                        </div>  

                        <div class="col-md-4">
                            <h3>Spiritual</h3>
                            <?php echo kirbytext($page->clients_spiritual()) ?>
                        </div>
                        

                    </div><!-- /row -->
            </div><!-- /container -->
        </section>
        <!-- End Our Clients -->

        </div>
        <!-- End Site Wrapper -->   

<?php snippet('about-footer') ?>