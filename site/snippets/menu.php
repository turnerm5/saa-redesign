        <!-- Header (navigation menu, and logo) -->
        <nav class="navbar navbar-default navbar-fixed-top header-navbar" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">
                                <img class="hidden-sm hidden-xs" src="/assets/img/logo-header.png" alt="Specifie an alternate text for an image">
                                <img class="visible-sm visible-xs hidden-md hidden-lg" style="position: absolute; top: 0; left: 15px;" src="/assets/img/logo-header-small.png" alt="Specifie an alternate text for an image">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">                        
								<?php foreach($pages->visible() AS $p): ?>
									<li <?php echo ($p->isOpen()) ? ' class="active"' : '' ?> ><a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
								<?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </nav>
        <!-- End Header -->