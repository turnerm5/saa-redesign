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
                <a href="#">
                    <i class="fa fa-building fa-3x"></i>     
                </a>    
                <!-- Title and Description -->
                <div class="service-title">  
                    <h3>Architecture</h3>      
                </div>                
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>            
            </div>  

            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">  
                <!-- Icon -->
                <a href="#">
                    <i class="fa fa-home fa-3x"></i>     
                </a>     
                <!-- Title and Description -->
                <div class="service-title">    
                    <h3>Interior Design</h3>                      
                </div>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>            
            </div>    

            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">   
                <!-- Icon -->  
                <a href="#">
                    <i class="fa fa-bars fa-3x"></i>
                </a>    
                <!-- Title and Description -->
                <div class="service-title">  
                    <h3>Planning</h3>                      
                </div>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>            
            </div>    

            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">  
                <!-- Icon -->
                <a href="#">
                    <i class="fa fa-university fa-3x"></i>
                </a>  
                <!-- Title and Description -->
                <div class="service-title">       
                    <h3>Historic <br>Renovations</h3>  
                </div>               
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>            
            </div>           

            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">
                <!-- Icon -->
                <a href="#">
                    <i class="fa fa-leaf fa-3x"></i>
                </a>  
                <!-- Title and Description --> 
                <div class="service-title">         
                    <h3>Sustainable <br>Design</h3>  
                </div>                   
                <p>Our buildings response to our client’s goals for sustainable programs, maintenance and operations.</p>            
            </div>        

            <!-- Service Item (title, icon and description for your service) -->
            <div class="col-sm-6 col-md-2">    
                <!-- Icon -->
                <a href="">
                    <i class="fa fa-users fa-3x"></i>     
                </a>    
                <!-- Title and Description -->
                <div class="service-title">   
                    <h3>Consensus <br>Building</h3>                      
                </div>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>            
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