<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->
        <div class="general-title bg-color">
            <h2>Our Practice</h2>
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
                                <!-- Image -->
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
                    <h2>Our Team</h2>
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

            <!-- Our Clients -->           
            <div class="container padding-top padding-bottom">
                <div class="general-title">
                    <h2>Awards</h2>
                    <div class="title-devider"></div>
                </div>

                <div id="Container">
                    
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <p class="sort_list">
                                Sort by: 
                                <a class="sort" data-sort="date:asc">Date</a>
                                <a class="sort" data-sort="project:asc">Project</a>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="mix" data-project="2" data-date="1"><p>AIA WA Council Civic Design Awards, Citation, 2013 | Fire Station 30, City of Seattle</p></div>
                            <div class="mix" data-project="5" data-date="2"><p>AIA Washington Council Civic Design Awards, Honor Award, 2012 | Opportunity Center, North Seattle College</p></div>
                            <div class="mix" data-project="2" data-date="3"><p>Copper Development Association, Copper In Architecture Award, 2012 | Fire Station 30, City of Seattle</p></div>
                            <div class="mix" data-project="2" data-date="4"><p>AIA Project Of The Month, January 2012 | Fire Station 30, City of Seattle</p></div>
                            <div class="mix" data-project="6" data-date="5"><p>Masonry Institute of Washington, Merit Award 2012 | Maier Hall, Peninsula College</p></div>
                            <div class="mix" data-project="2" data-date="6"><p>Seattle Design Commission, Award For Design Excellence, 2011 | Fire Station 30, City of Seattle</p></div>
                            <div class="mix" data-project="2" data-date="7"><p>F.I.E.R.O. Honor Award, 2011 | Fire Station 30, City of Seattle</p></div>
                            <div class="mix" data-project="6" data-date="8"><p>AIA Seattle Honor Awards, Commendation, 2011 | Maier Hall, Peninsula College</p></div>
                            <div class="mix" data-project="6" data-date="9"><p>American School & University Design Awards, Post-Secondary Citation, 2011 | Maier Hall, Peninsula College</p></div>
                            <div class="mix" data-project="6" data-date="10"><p>AIA Washington Council Civic Design Awards, Honor Award, 2010 | Library Media Center, Peninsula College</p></div>
                            <div class="mix" data-project="7" data-date="11"><p>American School & University Outstanding Design: Renovation/Modernization, 2010 | Culinary Academy, Seattle Central College</p></div>
                            <div class="mix" data-project="6" data-date="12"><p>American School & University Design Awards, Louis I. Kahn Citation, 2009 | Library Media Center, Peninsula College</p></div>
                            <div class="mix" data-project="8" data-date="13"><p>AIA Pacific NW Region Awards, Merit Award, 2009 | Douglass-Truth Branch Library, The Seattle Public Library</p></div>
                            <div class="mix" data-project="8" data-date="14"><p>Copper Development Association, Copper In Architecture Award, 2009 | Douglass-Truth Branch Library, The Seattle Public Library</p></div>
                            <div class="mix" data-project="8" data-date="15"><p>AIA Washington Council Civic Design Awards, Honor Award, 2007 | Douglass-Truth Branch Library, The Seattle Public Library</p></div>
                            <div class="mix" data-project="8" data-date="16"><p>AIA Project Of The Month, February 2007 | Douglass-Truth Branch Library, The Seattle Public Library</p></div>
                            <div class="mix" data-project="8" data-date="17"><p>Seattle Magazine, Best of Architecture Awards, 2006 | Douglass-Truth Branch Library, The Seattle Public Library</p></div>
                            <div class="mix" data-project="4" data-date="18"><p>AIA Washington Council Civic Design Awards, Merit Award, 2004 | Spellman Library, Grays Harbor College</p></div>
                            <div class="mix" data-project="9" data-date="19"><p>AIA Washington Council Civic Design Awards, Citation, 2003 | Art Gallery, Tacoma Community College</p></div>
                            <div class="mix" data-project="10" data-date="20"><p>AIA Pacific NW Regional Award, Merit Award, 2000 | Temple B'nai Torah</p></div>
                            <div class="mix" data-project="10" data-date="21"><p>Masonry Institute Most Artistic Use of Masonry Award, 1998 | Temple B'nai Torah</p></div>
                            <div class="mix" data-project="10" data-date="22"><p>AIA Seattle Honor Awards, Merit Award, 1998 | Temple B'nai Torah</p></div>
                            <div class="mix" data-project="10" data-date="23"><p>Masonry Institute Honor Award, 1998 | Temple B'nai Torah</p></div>
                            <div class="mix" data-project="3" data-date="24"><p>AIA Project of the Month, June 1997 | Student Activities Offices, The Evergreen State College</p></div>
                            <div class="mix" data-project="3" data-date="25"><p>AIA Seattle Honor Awards, Merit Award, 1995 | Student Activities Offices, The Evergreen State College</p></div>
                            <div class="mix" data-project="1" data-date="26"><p>AIA Seattle Honor Awards, Merit Award, 1993 | College Services Building, Bellingham Technical College</p></div>
                            <div class="mix" data-project="3" data-date="27"><p>Bonneville Power Administration/Portland Chapter AIA, Honor Award, 1993 | Student Activities Offices, The Evergreen State College</p></div>
                        </div>
                    </div> <!-- End .row -->
                </div> <!-- End #Container -->
            </div><!-- /container -->
            <!-- End Our Clients -->

        </div>
        <!-- End Site Wrapper -->   

<?php snippet('about-footer') ?>