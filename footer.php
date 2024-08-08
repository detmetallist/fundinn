        <!--================Footer Area =================-->
        <footer class="footer_area" id="contact">
            <div class="subscrib_area">
                <div class="container">
                    <div class="subscrib_inner">
                        <div class="main_title">
                            <h2><?php echo get_post_meta($post->ID, 'zagolovok11', 1);?></h2>
                            <p><?php echo get_post_meta($post->ID, 'text11', 1);?></p>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="&#xf003;   Enter Your E-Mail">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">SEND</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-xs-6">
                            <aside class="f_widget home_widget">
                                <div class="f_title">
                                    <h3>App Home</h3>
                                </div>
                                <?php 
                                    wp_nav_menu(array(
                                        'theme_location' => 'top-menu',
                                        'container'       => '',
                                        'menu_class'      => '', 
                                    ));
                                ?>
                            </aside>
                        </div>
                        <div class="col-md-2 col-xs-6">
                            <aside class="f_widget home_widget">
                                <div class="f_title">
                                    <h3>Support</h3>
                                </div>
                                <ul>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Offer</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <aside class="f_widget contact_widget">
                                <div class="f_title">
                                    <h3>Contact Us</h3>
                                </div>
                                <form class="row contact_widget_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Your Message......."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit your quote" class="btn submint_btn form-control">SEND NOW</button>
                                     </div>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copy_right">
                <div class="container">
                    <div class="pull-left">
                        <p class="copyright"><?php echo get_post_meta($post->ID, 'text_copyright', 1);?></p>
                    </div>
                    <div class="pull-right">
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'bottom-menu',
                                'container'       => '',
                                'menu_class'      => '', 
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="<?php echo get_template_directory_uri() ?>/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra Plugin -->
        <script src="<?php echo get_template_directory_uri() ?>/vendors/parallax/jquery.parallax-scroll.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/counterup/waypoints.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/counterup/jquery.counterup.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/flexslider/flex-slider.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/flexslider/mixitup.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/swiper/js/swiper.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/flipster-slider/jquery.flipster.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/vendors/nice-selector/jquery.nice-select.min.js"></script>
        
        <script src="<?php echo get_template_directory_uri() ?>/js/theme.js"></script>
    </body>
</html>
<?php wp_footer(); ?>