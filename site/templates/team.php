<?php snippet('header') ?>
<?php snippet('menu') ?>


<div class="site-wrapper">

<!-- Section General Title -->        
<div class="general-title"> 
    <h2>Our Team</h2>
    <div class="title-divider"></div>
</div>

    <div class="container padding-top padding-bottom text-center ">
        
        <div class="row clearfix">  
            <!-- Only give us employees who still work here -->
            <?php $team = $pages->find('team')->children()->visible()?>
            <!-- For each team member -->
            <?php foreach($team as $member): ?>
                    
                    <!-- Team Item (name, information about, image, social icons) -->                      
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-md-4 col-lg-3 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 team-item">
                        
                        <!-- Image -->
                        <div class="thumbnail team-inner ">
                            <?php if ($member->hasImages()): ?>
                                <?php $image = $member->images()->find('01.jpg') ?>                 
                                <img class="img-responsive" src="<?php echo $image->url() ?>" width="500" height="500" alt="Test">
                            <?php else: ?>
                                <img class="img-responsive" src="http://www.placebear.com/500/500" width="500" height="500" alt="Placeholder text"> 
                            <?php endif ?>                                 
                        </div>
                        <!-- End Image -->
                        
                        <!-- Caption -->
                        <div class="team-caption">
                                <div class="team-title">         
                                    <h3><?php echo $member->name() ?></h3>
                                    <?php if ($member->title() == "") : ?>
                                        <h4>&nbsp;</h4>
                                    <?php else: ?>
                                        <h4><?php echo $member->title() ?></h4>
                                    <?php endif ?>                      
                                    <h5 class="team-inner"><?php echo $member->role() ?></h5>
                                    <p><a href="mailto:<?php echo $member->email() ?>"><?php echo $member->email() ?></a></p>
                                </div> 
                        </div>
                        <!-- /Caption -->

                    </div>
                    <!-- End Team Item -->
            <?php endforeach ?>
        </div> <!-- /row -->
    </div> <!-- /container -->
</div><!-- /site-wrapper -->
<!-- End Site Wrapper -->

<?php snippet('footer') ?>