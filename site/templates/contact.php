<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Section General Title -->
        <div class="general-title bg-color"> 
            <h2>Contact Us</h2>
            <div class="title-devider"></div>
        </div>

        <!-- Site Wrapper -->
        <div class="site-wrapper">

            <!-- Contact -->
            <div class="container padding-bottom text-center contact-adress">         
                <!-- All Contact Information (phone, street, email, website, working hours) -->
                <div class="row">
                    <!-- Description -->
                    <div class="col-md-8 col-md-offset-2">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </div> 
                    <!-- Adress -->                       
                    <div class="col-sm-4 col-md-4">
                        <h3>Address</h3> 
                        <address>                            
                            <p>
                                901 5th Ave<br>
                                Suite 2720<br>
                                Seattle, WA 98164<br>   
                                United States                         
                            </p>                               
                        </address>                                
                    </div>
                    <!-- Contact Information -->
                    <div class="col-sm-4 col-md-4">
                        <h3>Contact Info</h3>
                        <address>                            
                            <p>
                                
                                <a href="mailto:saarch@saarch.com"><i class="fa fa-envelope-o"></i>saarch@saarch.com</a><br>
                                <a href="https://www.google.com/" target="_blank"><i class="fa fa-desktop"></i>www.saarch.com</a><br>                      
                                <i class="fa fa-phone"></i>(206) 743-5741
                            </p>
                        </address>                                
                    </div>
                    <!-- Working Hours -->
                    <div class="col-sm-4 col-md-4">
                        <h3>Office Hours</h3>
                        <address>                            
                            <p>
                                Monday - Friday: 08:00 - 17:00 <br>
                                Saturday: Closed<br>   
                                Sunday: Closed                         
                            </p>
                        </address>
                    </div>            
                </div><!-- /row -->
                <!-- End All Contact Information -->        

            </div><!-- /container -->
            <!-- End Contact -->

        </div><!-- /site wrapper -->
        <!-- End Site Wrapper -->

        <!-- Contact Form (name, email, phone and message inputs for your email form "should change your email adress in contact.php file") -->
        <div class="bg-color">
            <div class="container">
                <div class="col-lg-12" id="contact">                
                    <div id="message"></div>
                    <form method="post" action="/assets/js/contact_form.php" name="contactform" id="contactform">
                        <fieldset>
                            <div class="col-md-6"> 
                                <!-- Name -->
                                <input name="name" type="text" id="name" size="30" value="" placeholder="Name"/>
                                <br />
                                <!-- Email -->
                                <input name="email" type="text" id="email" size="30" value="" placeholder="Email"/>
                                <br /> 
                                <!-- Phone -->
                                <input name="phone" type="text" id="phone" size="30" value="" placeholder="Phone"/>
                            </div>
                            <!-- Message -->
                            <div class="col-md-6"> 
                                <textarea name="comments" cols="40" rows="5" id="comments" placeholder="Message"></textarea>
                            </div>
                            <!-- Submit Button -->
                            <div class="col-md-12 text-center">                            
                                <button type="submit" class="btn btn-default btn-submit submit" id="submit" value="Submit">Submit</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>  
        </div>
        <!-- End Contact Form -->

        <!-- Google Map (adress on map can be changed in app.js file) -->
            <div id="map-canvas"></div>
        <!-- End Google Map -->

<?php snippet('map-footer') ?>