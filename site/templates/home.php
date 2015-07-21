<?php snippet('header') ?>
<?php snippet('menu') ?>


<!-- Site Wrapper -->
<div class="site-wrapper">

<!-- Slider -->
        <div id="header-carousel" class="carousel slide carousel-fade header-carousel" data-ride="carousel"> 
            <!-- Slider Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>   
                <li data-target="#header-carousel" data-slide-to="3"></li>   
                <li data-target="#header-carousel" data-slide-to="4"></li>   
                <li data-target="#header-carousel" data-slide-to="5"></li>   
                <li data-target="#header-carousel" data-slide-to="6"></li>   
                <li data-target="#header-carousel" data-slide-to="7"></li>   
                <li data-target="#header-carousel" data-slide-to="8"></li>   
            </ol>   
            <div class="carousel-inner">    



                <!-- Slider Item (image, link and description for your project in slider) -->        
                <div class="item active"> 
                    <!-- Image -->           
                    <div style="background:url(assets/img/slider-images/image1.jpg) center center; background-size:cover; background-repeat:no-repeat;" class="slider-height"></div>      
                </div>

                <!-- Slider Item (image, link and description for your project in slider) -->        
                <div class="item"> 
                    <!-- Image -->           
                    <div style="background:url(assets/img/slider-images/image2.jpg) center center; background-size:cover; background-repeat:no-repeat;" class="slider-height"></div>       
                </div>

                <!-- Slider Item (image, link and description for your project in slider) -->        
                <div class="item"> 
                    <!-- Image -->           
                    <div style="background:url(assets/img/slider-images/image3.jpg) center center; background-size:cover; background-repeat:no-repeat;" class="slider-height"></div>       
                </div>
                <!-- Slider Item (image, link and description for your project in slider) --> 
                <div class="item"> 
                    <!-- Image -->           
                    <div style="background:url(assets/img/slider-images/image4.jpg) center center; background-size:cover; background-repeat:no-repeat;" class="slider-height"></div>       
                </div>
                <!-- Slider Item (image, link and description for your project in slider) --> 
                <div class="item"> 
                    <!-- Image -->           
                    <div style="background:url(assets/img/slider-images/image5.jpg) center center; background-size:cover; background-repeat:no-repeat;" class="slider-height"></div>       
                </div>
                <!-- Slider Item (image, link and description for your project in slider) --> 
                <div class="item"> 
                    <!-- Image -->           
                    <div style="background:url(assets/img/slider-images/image6.jpg) center center; background-size:cover; background-repeat:no-repeat;" class="slider-height"></div>       
                </div>
                <!-- Slider Item (image, link and description for your project in slider) --> 
                <div class="item"> 
                    <!-- Image -->           
                    <div style="background:url(assets/img/slider-images/image7.jpg) center center; background-size:cover; background-repeat:no-repeat;" class="slider-height"></div>       
                </div>          
                <!-- Slider Item (image, link and description for your project in slider) --> 
                <div class="item"> 
                    <!-- Image -->           
                    <div style="background:url(assets/img/slider-images/image8.jpg) center center; background-size:cover; background-repeat:no-repeat;" class="slider-height"></div>       
                </div>          
                <!-- Slider Item (image, link and description for your project in slider) --> 
                <div class="item"> 
                    <!-- Image -->           
                    <div style="background:url(assets/img/slider-images/image9.jpg) center center; background-size:cover; background-repeat:no-repeat;" class="slider-height"></div>       
                </div>                          
            </div>   
        </div>
        <!-- End Slider -->


            <!-- Who We Are -->            
            <div class="container text-center ">
                <!-- Section General Title -->
                <div class="general-title">
                    <h2>Featured Projects</h2>        
                    <div class="title-divider"></div>
                </div>
                <div class="row">
                  <!-- Section Description -->
                    <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
                        <p>What have we done recently?</p>
                    </div>          
                </div><!-- /row -->       
            </div><!-- /container -->                   
            <!-- End Who We Are -->

            <!-- Projects -->            
            <div class="container projects padding-top">
            <!-- <div class="container-fluid projects padding-top"> -->
                <div class="row">
                    
                    <?php $projects = $pages->find('projects')->children()->paginate(6) ?>
                    <?php foreach($projects as $project): ?>

                    <!-- Project Item (image, link and description for your project) -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="project-inner">
                            <a href="<?php echo $project->url() ?>">  
                                <!-- Image --> 
                                
                                <?php if ($project->hasImages()): ?>
                                    <?php $image = $project->images()->find('01.jpg') ?>                 
                                    <img src="<?php echo $image->url() ?>" alt="Placeholder" >                    
                                
                                <?php else: ?>
                                    <img src="http://www.placehold.it/800x600" alt="Placeholder text">  
                                <?php endif ?>

                                <div class="project-caption">
                                    <!-- Title and Date -->
                                    <div class="project-details">
                                        <p><i class="fa fa-plus fa-lg"></i></p>     
                                        <h3><?php echo $project->title() ?></h3>
                                        <p><small><?php echo $project->client() ?></small></p>                                               
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php endforeach ?>                

                </div><!-- /row -->
            </div><!-- /container -->

            <!-- See All Our Work Button -->
            <div class="all-projects text-center">
                <a href="projects" class="btn black-btn">
                    See all our Projects
                </a>
            </div>
                            
            <!-- End Projects -->

            <!-- Our Services -->            
            <section class="padding-top text-center">
                <div class="container"> 
                    <!-- Section General Title -->       
                    <div class="general-title">
                        <h2>Our Services</h2>        
                        <div class="title-divider"></div>
                    </div>  
                    <div class="row padding-top"> 

                        
                        <!-- Services Item (icon, title and description for your service) -->
                        <div class="col-sm-4 col-md-4">
                            <!-- Icon -->  
                            <a href="services.html">
                                <i class="fa fa-building fa-3x"></i>          
                            </a> 
                            <!-- Title -->
                            <div class="service-title">
                                <h3>Design</h3>
                            </div>
                            <!-- Description -->
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                        </div>     


                        <!-- Services Item (icon, title and description for your service) -->
                        <div class="col-sm-4 col-md-4">
                            <!-- Icon -->
                            <a href="services.html">
                                <i class="fa fa-file-text-o fa-3x"></i> 
                            </a>
                            <!-- Title -->
                            <div class="service-title">
                                <h3>Strategy</h3>
                            </div>
                            <!-- Description -->
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>                 
                        </div>   

                        <!-- Services Item (icon, title and description for your service) -->                        
                        <div class="col-sm-4 col-md-4">  
                            <!-- Icon -->
                            <a href="services.html">                                
                                <i class="fa fa-home fa-3x"></i>     
                            </a> 
                            <!-- Title -->  
                            <div class="service-title">      
                                <h3>Advocacy</h3> 
                            </div>   
                            <!-- Description -->                  
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                        </div>
                       

                                               

                    </div><!-- /row -->

                    <!-- View All Services Button -->  
                    <div class="padding-top padding-bottom">  
                        <a href="about" class="btn black-btn">
                            More About Us
                        </a> 
                    </div>

                </div><!-- /container -->
            </section>
            <!-- End Our Services -->
                
            <!-- From Blog -->
            <section class="padding-top text-center">
                <div class="container">
                    <!-- Section General Title -->
                    <div class="general-title">
                        <h2>From the Blog</h2>
                        <div class="title-divider"></div>
                    </div>
                    <div class="row">
                    
                    <?php $articles = $pages->find('blog')->children()->visible()->flip()->paginate(3) ?>

                    <?php foreach($articles as $article): ?>
                    <?php $author = $pages->find('team/' . $article->author()) ?>

                        <!-- Blog Item (image, title, description, link and date for your blog post) -->
                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail blog-post">
                                <!-- Image -->                    
                                <a href="<?php echo $article->url() ?>">
                                    <?php if ($article->hasImages()): ?>
                                    <?php $image = $article->images()->find('01.jpg') ?>                 
                                    <img src="<?php echo $image->url() ?>" alt="Placeholder" >
                                    <?php else: ?>
                                        <img src="http://www.placehold.it/800x600" alt="Placeholder text">  
                                    <?php endif ?>
                                </a>
                                <!-- Title and Description -->
                                <div class="caption">
                                    <div class="blog-inner-title">
                                        <a href="<?php echo $article->url() ?>">
                                            <h3><?php echo html($article->title()) ?></h3>                      
                                        </a>
                                    </div>
                                    <p><?php echo excerpt($article->text(), 150) ?></p>                        
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i> <a href="<?php echo $article->url() ?>"><?php echo $article->date('Y-m-d') ?></a></span>
                                        <span><i class="fa fa-user"></i> <a href="<?php echo $article->url() ?>"><?php echo $author->name() ?></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>                        

                    <?php endforeach ?>                

                    </div><!-- /row -->
                </div><!-- /container -->

                <!-- All Posts Button -->
                <div class="text-center padding-bottom">
                    <a href="blog" class="btn black-btn">See All Posts</a>
                </div>                
            </section>
            <!-- End From blog -->

        </div><!-- /site-wrapper -->
        <!-- End Site Wrapper -->

<?php snippet('footer') ?>