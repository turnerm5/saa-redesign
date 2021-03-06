        <!-- Footer -->
        <div id="footer">
            <div class="container">   
                <div class="row"> 
                    <!-- Copyright -->                                    
                    <div class="col-md-4">
                        <p><?php echo kirbytext($site->copyright()) ?></p>
                    </div>
                    <!-- Footer Social Icons -->
                    <div class="col-md-4 text-center">
                        <a href="http://www.twitter.com/schachtaslani">
                            <i class="fa fa-twitter fa-lg"></i>
                        </a>
                    </div> 
                    
                    <!-- Up Button -->
                    <div class="col-md-4 back-to-top">
                        <a href="#">
                            <i class="fa fa-angle-up fa-2x pull-right"></i>
                        </a>
                    </div>                                                                                                                                                 
                </div><!-- /row -->
            </div><!-- /container -->
        </div>
        <!-- End Footer -->

        <!-- Js Global Compulsory  -->
        <script src="<?php echo u() ?>assets/plugins/jquery-1.11.1.min.js"></script>
        <script src="<?php echo u() ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo u() ?>assets/plugins/lightbox/js/lightbox.js"></script>
        <!-- Js Implementing Plugins  -->
        <script src="<?php echo u() ?>assets/plugins/moderniz.js"></script>
        <script src="<?php echo u() ?>assets/js/jquery.mixitup.js"></script>
        <!-- Js Theme  -->
        <script src="<?php echo u() ?>assets/js/app.js"></script>
        <script src="<?php echo u() ?>assets/js/masonry.js"></script>
        <script src="<?php echo u() ?>assets/js/imagesloaded.min.js"></script>
        <script src="<?php echo u() ?>assets/js/project_filter.js"></script>
        <script>
        
        $(document).ready(function() {

            var $container = $('#masonry ul');

            $container.imagesLoaded( function() {
                $('#masonry ul').masonry({
                    itemSelector: '.post-box',
                    columnWidth: '.post-box',
                });
            });

        });

        </script>

        <!-- Randomize Our Starting Slide -->
    </body>
</html>
