<!DOCTYPE html>
<html lang="en">
    <head>
        <?php wp_head(); ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php wp_title('|', true, 'right'); ?></title>

        <!-- Icon css link -->
        <link href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/icofont.css" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="<?php echo get_template_directory_uri() ?>/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="<?php echo get_template_directory_uri() ?>/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="120">
       
       
       <div id="preloader">
            <div id="preloader_spinner">
				<div class="pre_inner">
					<div class="dot dot-1"></div>
					<div class="dot dot-2"></div>
					<div class="dot dot-3"></div>
				</div>
            </div>
        </div>
       
       
        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="main_menu_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() ?>/img/fund-inn-ICU-logo.png" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'top-menu',
                                'container'       => '',
                                'menu_class'      => 'nav navbar-nav navbar-right', 
                            ));
                        ?>
                    </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Header Area =================-->