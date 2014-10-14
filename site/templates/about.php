<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->
        <div class="general-title bg-color">
            <h2>Practice Philosophy</h2>
            <div class="title-devider"></div>
        </div>

        <!-- Site Wrapper -->
        <div class="site-wrapper">

            <!-- About Us -->
            <div class="container">

                <!-- Our Studio (studio information and images for slider) -->
                <div class="row padding-bottom">        
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

                    <!-- Slider for images from your studio -->
                    <div class="col-md-10 col-md-offset-1 padding-top">              
                        <div id="studio-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators about-indicators">
                                <li data-target="#studio-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#studio-carousel" data-slide-to="1"></li>
                                <li data-target="#studio-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php if($page->hasImages()): ?> 
                                    <?php foreach($page->images() as $image): ?>        
                                        <div class="item">
                                            <img class="img-responsive" src="<?php echo $image->url() ?>" alt="<?php echo html($page->title()) ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>">
                                        </div>

                                    <?php endforeach ?>

                                <?php else: ?>    
                                    
                                <div class="item active">
                                    <img src="http://www.placehold.it/1200x600" alt="Specifie an alternate text for an image">
                                </div>
                                <!-- Image -->
                                <div class="item">
                                    <img src="http://www.placehold.it/1200x600" alt="Specifie an alternate text for an image"> 
                                </div>
                                <!-- Image -->
                                <div class="item">
                                    <img src="http://www.placehold.it/1200x600" alt="Specifie an alternate text for an image">
                                </div>
                                                                                                
                                <?php endif ?>

                            </div>           
                        </div>
                    </div>    

                </div><!-- /row -->
            </div><!-- /container -->
            <!-- End About Us -->

            <!-- Our Team -->
            <section class="bg-color text-center">
                <!-- Section General Title -->
                <div class="general-title bg-color">
                    <h2>Team</h2>
                    <div class="title-devider"></div>
                </div>
                <div class="container">
                    <div class="row">  
                    <?php $team = $pages->find('team')->children()->visible()->paginate(4) ?>
                    <?php foreach($team as $member): ?>
                        <!-- Team Item (name, information about, image, social icons) -->                      
                        <div class="col-sm-6 col-md-3 team-item">
                            <!-- Image -->
                            <div class="thumbnail team-inner">
                                <img src="http://www.placehold.it/700x700" alt="Specifie an alternate text for an image">                                
                            </div>
                            <div class="team-caption">
                                    <!-- Name -->
                                    <div class="team-title">         
                                        <h3><?php echo $member->name() ?></h3>
                                        <h4><?php echo $member->title() ?></h4>                            
                                    </div>
                                    <!-- Info -->
                                    <h5><?php echo $member->role() ?></h5> 
                                    <p><?php echo $member->bio() ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>

                    </div><!-- /row -->

                    <!-- View All Team Members Button -->  
                    <div class="padding-top padding-bottom">  
                        <a href="team" class="btn black-btn">
                            View All Team Members
                        </a>
                    </div>

                </div><!-- /container -->
            </section>
            <!-- End Our Team -->
            
            <!-- Our Awards -->  
            <section class="text-center padding-bottom">         
                <div class="container padding-top padding-bottom">
                    <div class="general-title">
                        <h2>Awards</h2>
                        <div class="title-devider"></div>
                    </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 text-center">
                                <p><?php echo kirbytext($page->awards()) ?></p>
                            </div>
                        </div> <!-- End .row -->
                    </div> <!-- End #Container -->
                </div><!-- /container -->
            </section>

            <section class="padding-bottom bg-color text-center">
                <div class="general-title">
                    <h2>Clients</h2>
                    <div class="title-devider"></div>
                </div>
                <div class="container">
                    <div class="row">      
                        
                        <div class="col-md-4">
                            <h3>Education</h3>
                            <?php echo kirbytext($page->clients_education()) ?>
                        </div>
                       
                        <div class="col-md-4">
                            <h3>Spiritual</h3>
                            <?php echo kirbytext($page->clients_spiritual()) ?>
                        </div>
                        
                        <div class="col-md-4">
                            <h3>Civic / Cultural</h3>
                            <?php echo kirbytext($page->clients_civic_cultural()) ?>
                        </div>  
                    </div><!-- /row -->
            </div><!-- /container -->
        </section>
        <!-- End Our Clients -->

        </div>
        <!-- End Site Wrapper -->   

<?php snippet('about-footer') ?>