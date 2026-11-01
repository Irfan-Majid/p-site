<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	
<html> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="keywords" content="HTML5,CSS3,Template" />
        <meta name="description" content="BETA" />
        <meta name="Author" content="Optimo Solution" />
        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/demo/favicon.ico" />
        <!-- WEB FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />
        <!-- CORE CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/sky-forms.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/weather-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/line-icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/owl-carousel/owl.pack.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/animate.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/flexslider.css" rel="stylesheet" type="text/css" />
        <!-- SHOP -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
        <!-- REVOLUTION SLIDER -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/revolution-slider.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layerslider.css" rel="stylesheet" type="text/css" />
        <!-- BLOG -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layout-blog.css" rel="stylesheet" type="text/css" />
        <!-- THEME CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/header-default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/footer-default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/red.css" rel="stylesheet" type="text/css" id="color_scheme" />
        <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layout-dark.css" rel="stylesheet" type="text/css"  />-->
        <!-- Morenizr -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/modernizr.min.js"></script>
        <!--[if lte IE 8]>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/respond.js"></script>
        <![endif]-->
    </head>
    <body class="smoothscroll">
        <div id="wrapper">
            <div id="header"><!-- class="sticky" for sticky menu -->
                <!-- Top Bar -->
                <header id="topBar">
                    <div class="container">

                        <div class="pull-right fsize13 margin-top10 hide_mobile">

                            <!-- mail , phone -->
                            <nav class="nav-second">
                                <ul class="nav nav-pills nav-second">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> About</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Contact Us</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Login</a></li>
                                </ul>
                            </nav>
                            <div class="block text-right"><!-- social -->
                                <a href="#" class="social fa fa-facebook"></a>
                                <a href="#" class="social fa fa-twitter"></a>
                                <a href="#" class="social fa fa-google-plus"></a>
                                <a href="#" class="social fa fa-linkedin"></a>
                                <a href="#" class="social fa fa-pinterest"></a>
                            </div><!-- /social -->
                        </div>
                        <!-- Logo -->
                        <?php
                        $logo = CHtml::image(Yii::app()->theme->baseUrl . '/assets/images/logo.png', 'Logo', array('alt' => Yii::app()->name, 'class' => '', 'title' => Yii::app()->name, 'style' => 'height:50px;'));
                        echo CHtml::link($logo, array('site/index'), array('class' => 'logo'));
                        ?>
                    </div><!-- /.container -->
                </header>
                <!-- /Top Bar -->
                <!-- Top Nav -->
                <header id="topNav">
                    <div class="container">
                        <!-- Mobile Menu Button -->
                        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- Search -->
                        <form class="search" method="get" action="http://theme.stepofweb.com/Epona/v1.2/HTML/page-search.html">
                            <input type="text" class="form-control" name="s" value="" placeholder="Search">
                            <button class="fa fa-search"></button>
                        </form>
                        <!-- /Search -->

                        <!-- Top Nav -->
                        <div class="navbar-collapse nav-main-collapse collapse">
                            <nav class="nav-main">
                                <ul id="topMain" class="nav nav-pills nav-main">
                                    <li class="mega-menu dropdown active">
                                        <?php echo CHtml::link('HOME <span>welcome</span>', array('site/index'), array('class' => '')); ?>
                                    </li>
                                    <li class="mega-menu">
                                        <?php echo CHtml::link('PRODUCTS <span>categories</span>', array('product/index'), array('class' => '')); ?>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">FEATURES <span>components</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-toggle" href="#"><i class="fa fa-heart-o"></i> Headers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-header-transparent.html">Transparent Header</a></li>
                                                    <li><a href="feature-header-translucent.html">Translucent Header</a></li>
                                                    <li><a href="feature-header-below-slider.html">Header Below Slider</a></li>
                                                    <li><a href="feature-header-sticky.html">Sticky Header</a></li>
                                                    <li><a href="feature-header-1.html">Header #1 (default)</a></li>
                                                    <li><a href="feature-header-2.html">Header #2</a></li>
                                                    <li><a href="feature-header-3.html">Header #3</a></li>
                                                    <li><a href="feature-header-4.html">Header #4</a></li>
                                                    <li><a href="feature-header-5.html">Header #5</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#"><i class="fa fa-heart-o"></i> Footers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-footer-1.html#footer">Footer #1 (default)</a></li>
                                                    <li><a href="feature-footer-2.html#footer">Footer #2</a></li>
                                                    <li><a href="feature-footer-3.html#footer">Footer #3</a></li>
                                                    <li><a href="feature-footer-4.html#footer">Footer #4</a></li>
                                                    <li><a href="feature-footer-5.html#footer">Footer #5</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#"><i class="fa fa-heart"></i> Sliders</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">Revolution Slider</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="slider-revolution-fixed-width.html">Fixed Width</a></li>
                                                            <li><a href="slider-revolution-full-width.html">Full Width</a></li>
                                                            <li><a href="slider-revolution-full-screen.html">Full Screen</a></li>
                                                            <li><a href="slider-revolution-video-gallery.html">Video Gallery</a></li>
                                                            <li><a href="slider-revolution-captions.html">Captions</a></li>
                                                            <li><a href="slider-revolution-thumbnav-small.html">Thumbnails Nav - Small</a></li>
                                                            <li><a href="slider-revolution-thumbnav-large.html">Thumbnails Nav - Large</a></li>
                                                            <li><a href="http://theme.stepofweb.com/Epona/v1.2/Documentation/Revolution_Slider/editor/00.Editor-Captions.html" target="_blank" rel="nofollow"><i class="fa fa-pencil-square-o"></i> <em>Captions Editor</em></a></li>
                                                            <li><a href="http://theme.stepofweb.com/Epona/v1.2/Documentation/Revolution_Slider/editor/01.Editor-Transitions.html" target="_blank" rel="nofollow"><i class="fa fa-pencil-square-o"></i> <em>Transitions Editor</em></a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">Layer Slider</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="slider-layer-full-width.html">Full Width</a></li>
                                                            <li><a href="slider-layer-fixed-width.html">Fixed Width</a></li>
                                                            <li><a href="slider-layer-captions.html">Captions</a></li>
                                                            <li><a href="slider-layer-video-gallery.html">Video Gallery</a></li>
                                                            <li><a href="slider-layer-carousel.html">Carousel</a></li>
                                                            <li><a href="slider-layer-3d-transitions.html">2D &amp; 3D Transitions</a></li>
                                                            <li><a href="slider-layer-thumbnav.html">Thumbnails Nav</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">Flex Slider</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="slider-flex-fixed-width.html">Fixed Width</a></li>
                                                            <li><a href="slider-flex-full-width.html">Full Width</a></li>
                                                            <li><a href="slider-flex-carousel.html">Carousel</a></li>
                                                            <li><a href="slider-flex-video-gallery.html">Video Gallery</a></li>
                                                            <li><a href="slider-flex-thumbnav.html">Thumbnails Nav</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">OWL Carousel</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="slider-owl-full-width.html">Full Width</a></li>
                                                            <li><a href="slider-owl-fixed-width.html">Fixed Width</a></li>
                                                            <li><a href="slider-owl-fixed-progress.html">Fixed Width + Progress</a></li>
                                                            <li><a href="slider-owl-carousel.html">Carousel</a></li>
                                                            <li><a href="slider-owl-fade.html">Effect: Fade</a></li>
                                                            <li><a href="slider-owl-backslide.html">Effect: Back Slide</a></li>
                                                            <li><a href="slider-owl-godown.html">Effect: Go Down</a></li>
                                                            <li><a href="slider-owl-fadeup.html">Effect: Fade Up</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#"><i class="fa fa-code"></i> Shortcodes</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="shortcodes-counters.html">Counters</a></li>
                                                    <li><a href="shortcodes-toggles.html">Toggles</a></li>
                                                    <li><a href="shortcodes-forms-bootstrap.html">Forms</a></li>
                                                    <li><a href="shortcodes-tables-default.html"><span class="label label-warning pull-right">New</span> Tables</a></li>
                                                    <li><a href="shortcodes-buttons-default.html">Buttons</a></li>
                                                    <li><a href="shortcodes-html-editor.html"><span class="label label-warning pull-right">New</span> HTML Editors</a></li>
                                                    <li><a href="shortcodes-tabs-and-accordions.html">Tabs &amp; Accordions</a></li>
                                                    <li><a href="shortcodes-callouts.html">Callouts</a></li>
                                                    <li><a href="shortcodes-dividers.html">Dividers</a></li>
                                                    <li><a href="shortcodes-lightbox.html">Lightbox</a></li>
                                                    <li><a href="shortcodes-icons-and-boxes.html">Icons &amp; Boxes</a></li>
                                                    <li><a href="shortcodes-carousel.html">Carousel</a></li>
                                                    <li><a href="shortcodes-progress-bars.html">Progress Bars</a></li>
                                                    <li><a href="shortcodes-alerts.html">Alerts</a></li>
                                                    <li><a href="shortcodes-video.html">Video &amp; Audio</a></li>
                                                    <li><a href="shortcodes-tooltips-and-popover.html">Tooltips &amp; Popovers</a></li>
                                                    <li><a href="shortcodes-modals.html">Modals</a></li>
                                                    <li><a href="shortcodes-thumbnails.html">Thumbnails</a></li>
                                                    <li><a href="shortcodes-testimonials.html">Testimonials</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">Icons</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-icons-fontawsome.html">Font Awsome</a></li>
                                                    <li><a href="feature-icons-glyphicons.html">Glyphicons Icons</a></li>
                                                    <li><a href="feature-icons-weather.html">Weather Icons</a></li>
                                                    <li><a href="feature-icons-linecons.html">Linecons Icons</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">Maps</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-maps-google.html">Google Maps</a></li>
                                                    <li><a href="feature-maps-vectorial.html">Vectorial Maps</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="feature-animations.html">Animations</a></li>
                                            <li><a href="feature-grid.html">Grid System</a></li>
                                            <li><a href="feature-typography.html">Typography</a></li>
                                            <li>
                                                <a class="dropdown-toggle" href="#"><b>Infinite Menu</b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Menu Level 2</a></li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">Menu Level 2</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Menu Level 3</a></li>
                                                            <li>
                                                                <a class="dropdown-toggle" href="#">Menu Level 3</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="#">Menu Level 4</a></li>
                                                                    <li>
                                                                        <a class="dropdown-toggle" href="#">Menu Level 4</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a href="#">Menu Level 5</a></li>
                                                                            <li><a href="#">! INFINITE LEVELS !</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">PORTFOLIO <span>projects</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio-2-columns.html">2 Columns</a></li>
                                            <li><a href="portfolio-3-columns.html">3 Columns</a></li>
                                            <li><a href="portfolio-4-columns.html">4 Columns</a></li>
                                            <li class="divider"></li>
                                            <li><a href="portfolio-single-basic.html">Single Basic</a></li>
                                            <li><a href="portfolio-single-slider.html">Single Full Slider</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">BLOG <span>recent news</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-sidebar-left.html">Blog Sidebar Left</a></li>
                                            <li><a href="blog-sidebar-right.html">Blog Sidebar Right</a></li>
                                            <li><a href="blog-without-sidebar.html">Blog Without Sidebar</a></li>
                                            <li class="divider"></li>
                                            <li><a href="blog-single-sidebar.html">Blog Single With Sidebar</a></li>
                                            <li><a href="blog-single-without-sidebar.html">Blog Single Without Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu">
                                        <a class="dropdown-toggle" href="#">SHOP <span>our products</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h3>Shop Pages</h3>
                                                        <ul>
                                                            <li><a href="shop-page-full.html"><i class="fa fa-angle-right"></i> Shop Full Width</a></li>
                                                            <li><a href="shop-page-full-product.html"><i class="fa fa-angle-right"></i> Shop Product Full Width</a></li>
                                                            <li><a href="shop-page-sidebar.html"><i class="fa fa-angle-right"></i> Shop Sidebar</a></li>
                                                            <li><a href="shop-page-sidebar-product.html"><i class="fa fa-angle-right"></i> Shop Product Sidebar</a></li>
                                                            <li><a href="shop-page-cart.html"><i class="fa fa-angle-right"></i> Shop Cart</a></li>
                                                            <li><a href="shop-page-checkout.html"><i class="fa fa-angle-right"></i> Shop Checkout</a></li>
                                                            <li><a href="shop-page-order-history.html"><i class="fa fa-angle-right"></i> Order History</a></li>
                                                            <li><a href="shop-page-order-history-summary.html"><i class="fa fa-angle-right"></i> Order History Summary</a></li>
                                                            <li><a href="page-invoice.html"><i class="fa fa-angle-right"></i> Invoice</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h3>Shop Components</h3>
                                                        <ul>
                                                            <li><a href="shop-components-featured-slider.html"><i class="fa fa-certificate"></i> Featured Slider</a></li>
                                                            <li><a href="shop-components-featured-products.html"><i class="fa fa-trophy"></i> Featured Products</a></li>
                                                            <li><a href="shop-components-product-carousel.html"><i class="fa fa-code"></i> Product Carousel</a></li>
                                                            <li><a href="shop-components-product-categories.html"><i class="fa fa-tags"></i> Product Categories</a></li>
                                                            <li><a href="page-login.html"><i class="fa fa-user"></i> Login/Register</a></li>
                                                            <li><a href="page-account-settings.html"><i class="fa fa-key"></i> Account Settings</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h3>Widgetized</h3>
                                                        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/demo/desktop.png" alt="" />
                                                        <p>Epona Megamenu can be 1-4 columns, full width, including widgetized images.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">CONTACT <span>write us</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="contact-1.html">Contact Version 1</a></li>
                                            <li><a href="contact-2.html">Contact Version 2</a></li>
                                            <li><a href="contact-3.html">Contact Version 3</a></li>
                                            <li><a href="contact-4.html">Contact Version 4</a></li>
                                            <li><a href="contact-5.html">Contact Version 5</a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </nav>
                        </div>
                        <!-- /Top Nav -->

                    </div><!-- /.container -->
                </header>
                <!-- /Top Nav -->
            </div>
            <?php echo $content; ?>
            <!-- FOOTER -->
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <!-- col #1 -->
                        <div class="logo_footer dark col-md-3">
                            <img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/logo_footer.png" height="50" class="logo" />
                            <p class="block">
                                4th Street, Suite 88<br />
                                New York NY 10887<br />
                                Email: youremail@yourdomain.com<br />
                                Phone: +40 (0) 111 1234 567<br />
                                Fax: +40 (0) 111 1234 568<br />
                            </p>
                            <p class="block"><!-- social -->
                                <a href="#" class="social fa fa-facebook"></a>
                                <a href="#" class="social fa fa-twitter"></a>
                                <a href="#" class="social fa fa-google-plus"></a>
                                <a href="#" class="social fa fa-linkedin"></a>
                            </p><!-- /social -->
                        </div>
                        <!-- /col #1 -->
                        <!-- col #2 -->
                        <div class="spaced col-md-3 col-sm-4 hidden-xs">
                            <h4>Recent <strong>Posts</strong></h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="block" href="#">New CSS3 Transitions this Year</a>
                                    <small>June 29, 2014</small>
                                </li>
                                <li>
                                    <a class="block" href="#">Inteligent Transitions In UX Design</a>
                                    <small>June 29, 2014</small>
                                </li>
                                <li>
                                    <a class="block" href="#">Lorem Ipsum Dolor</a>
                                    <small>June 29, 2014</small>
                                </li>
                            </ul>
                        </div>
                        <!-- /col #2 -->
                        <!-- col #3 -->
                        <div class="spaced col-md-3 col-sm-4 hidden-xs">
                            <h4>Recent <strong>Tweets</strong></h4>
                            <ul class="list-unstyled fsize13">
                                <li>
                                    <i class="fa fa-twitter"></i> <a href="#">@John Doe</a> Pilsum dolor lorem sit consectetur adipiscing orem sequat <small class="ago">8 mins ago</small>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i> <a href="#">@John Doe</a> Remonde sequat ipsum dolor lorem sit consectetur adipiscing  <small class="ago">8 mins ago</small>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i> <a href="#">@John Doe</a> Imperdiet condimentum diam dolor lorem sit consectetur adipiscing <small class="ago">8 mins ago</small>
                                </li>
                            </ul>
                        </div>
                        <!-- /col #3 -->
                        <!-- col #4 -->
                        <div class="spaced col-md-3 col-sm-4">
                            <h4>About <strong>Us</strong></h4>
                            <p>
                                Incredibly beautiful responsive Bootstrap Template for Corporate and Creative Professionals.
                            </p>
                            <h4><small><strong>Subscribe to our Newsletter</strong></small></h4>
                            <form id="newsletterSubscribe" method="post" action="http://theme.stepofweb.com/Epona/v1.2/HTML/php/newsletter.php" class="input-group">
                                <input required type="email" class="form-control" name="newsletter_email" id="newsletter_email" value="" placeholder="E-mail Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary">SUBMIT</button>
                                </span>
                            </form>

                        </div>
                        <!-- /col #4 -->
                    </div>
                </div>
                <hr />
                <div class="copyright">
                    <div class="container text-center fsize12">
                        Copyright &copy; <?php echo date('Y'); ?> <?php echo Yii::app()->name; ?>. Developed by <?php echo CHtml::link('Optimo Solution', 'http://www.optimosolution.com', array('target' => '_blank')); ?>
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->
            <a href="#" id="toTop"></a>
        </div><!-- /#wrapper -->
        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery.isotope.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/masonry.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/knob/js/jquery.knob.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/revolution_slider.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/scripts.js"></script>
    </body>
</html>