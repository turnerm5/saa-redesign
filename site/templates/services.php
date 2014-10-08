<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title --> 
<div class="general-title bg-color">
    <h2>What we do</h2>
    <div class="title-devider"></div>
</div>
<!-- /Section General Title -->

<!-- Site Wrapper -->
<div class="site-wrapper">

    <!-- Services -->
    <!-- TODO: Link this to Kirby -->
    <div class="container text-center padding-bottom">        
        <div class="row">    

            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">  
                <!-- Icon -->   
                <a href="projects#new-building">
                    <i class="fa fa-building fa-3x"></i>     
                </a>    
                <!-- Title and Description -->
                <div class="service-title">  
                    <h3>Architecture</h3>      
                </div>                
                <p>New. Renovations. Historic.</p>            
            </div>  

            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">  
                <!-- Icon -->
                <a href="projects#tenant-improvement">
                    <i class="fa fa-home fa-3x"></i>     
                </a>     
                <!-- Title and Description -->
                <div class="service-title">    
                    <h3>Interior Design</h3>                      
                </div>
                <p>Texture. Color. Material. Light.</p>            
            </div>    

            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">   
                <!-- Icon -->  
                <a href="projects#planning">
                    <i class="fa fa-bars fa-3x"></i>
                </a>    
                <!-- Title and Description -->
                <div class="service-title">  
                    <h3>Planning</h3>                      
                </div>
                <p>Campus. Facilities. Site.</p>            
            </div>    

            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">  
                <!-- Icon -->
                <a href="projects#renovation">
                    <i class="fa fa-university fa-3x"></i>
                </a>  
                <!-- Title and Description -->
                <div class="service-title">       
                    <h3>Renovations</h3>  
                </div>               
                <p>Context. History.</p>            
            </div>           

            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">
                <!-- Icon -->
                <a href="projects#new-building">
                    <i class="fa fa-leaf fa-3x"></i>
                </a>  
                <!-- Title and Description --> 
                <div class="service-title">         
                    <h3>Sustainable <br>Design</h3>  
                </div>                   
                <p>LEED. Maintenance. Operations.</p>            
            </div>        

            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">    
                <!-- Icon -->
                <a href="projects#planning">
                    <i class="fa fa-users fa-3x"></i>     
                </a>    
                <!-- Title and Description -->
                <div class="service-title">   
                    <h3>People <br> Something</h3>                      
                </div>
                <p>Consensus. Design Thinking.</p>            
            </div>          
        </div><!-- /row -->
    </div><!-- /container -->
    <!-- End Services -->

    <!-- Additional Services -->
    <section class="text-center bg-color padding-bottom">

        <!-- Section General Title -->
        <div class="general-title">
            <h2>Our Clients</h2>
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
    <!-- End Additional Services -->

</div>
<!-- End Site Wrapper -->

<?php snippet('footer') ?>