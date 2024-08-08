<?php get_header(); ?>
        
        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <h1><?php echo get_post_meta($post->ID,'zagolovok',1);?></h1>
            <h2><?php echo get_post_meta($post->ID, 'podzagolovok', 1);?></h2>
            <div class="knopka"><a class="slider_btn" href="<?php echo get_post_meta($post->ID,'button1_href',1);?>"><?php echo get_post_meta($post->ID,'button1_name',1);?></a></div>
        </section>
        <!--================End Slider Area =================-->
    
        
        <!--================Choose Us Area =================-->
        <section class="choose_us_area" id="chooseus">
            <div class="col-md-6">
                <div class="row left_choose_image">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/mockup-img/m-image-1.png" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/mockup-img/m-image-2.png" alt="" data-parallax='{"x": 25, "y": -50}'></li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/mockup-img/m-image-3.png" alt="" data-parallax='{"x": 50, "y": -100}'></li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/mockup-img/m-image-4.png" alt="" data-parallax='{"x": 90, "y": -180}'></li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/mockup-img/m-image-5.png" alt="" data-parallax='{"x": 20, "y": -30}'></li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/mockup-img/m-image-6.png" alt="" data-parallax='{"x": 90, "y": -100}'></li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/mockup-img/m-image-7.png" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/mockup-img/m-image-8.png" alt="" data-parallax='{"x": 90, "y": -180}'></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right_choose_image">
                    <div class="left_title">
                        <h2><?php echo get_post_meta($post->ID,'zagolovok3',1);?></h2>
                        <p><?php echo get_post_meta($post->ID,'text3',1);?></p>
                    </div>
                    <div class="row choose_item_inner">
                        <div class="col-md-6 col-xs-6">
                            <div class="choose_item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><i class="icofont icofont-<?php echo get_post_meta($post->ID,'znachok3_item1',1);?>"></i></a>
                                    </div>
                                    <div class="media-body">
                                        <h4><?php echo get_post_meta($post->ID,'zagolovok3_item1',1);?></h4>
                                        <p><?php echo get_post_meta($post->ID,'podzagolovok3_item1',1);?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="choose_item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><i class="icofont icofont-<?php echo get_post_meta($post->ID,'znachok3_item2',1);?>"></i></a>
                                    </div>
                                    <div class="media-body">
                                        <h4><?php echo get_post_meta($post->ID,'zagolovok3_item2',1);?></h4>
                                        <p><?php echo get_post_meta($post->ID,'podzagolovok3_item2',1);?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="choose_item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><i class="icofont icofont-<?php echo get_post_meta($post->ID,'znachok3_item3',1);?>"></i></a>
                                    </div>
                                    <div class="media-body">
                                        <h4><?php echo get_post_meta($post->ID,'zagolovok3_item3',1);?></h4>
                                        <p><?php echo get_post_meta($post->ID,'podzagolovok3_item3',1);?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="choose_item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><i class="icofont icofont-<?php echo get_post_meta($post->ID,'znachok3_item4',1);?>"></i></a>
                                    </div>
                                    <div class="media-body">
                                        <h4><?php echo get_post_meta($post->ID,'zagolovok3_item4',1);?></h4>
                                        <p><?php echo get_post_meta($post->ID,'podzagolovok3_item4',1);?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Choose Us Area =================-->

        <!--================App Feature Area =================-->
        <section class="app_feature_area" id="feature">
            <div class="container">
                <div class="main_title">
                    <h2><?php echo get_post_meta($post->ID,'zagolovok2',1);?></h2>
                    <p><?php echo get_post_meta($post->ID,'podzagolovok2',1);?></p>
                </div>
                <div class="row app_feature_inner">
                    <div class="col-md-3">
                        <div class="app_feature_item_inner">
                            <div class="app_feature_item">
                                <div class="round_icon">
                                    <i class="fa fa-<?php echo get_post_meta($post->ID,'znachok_item1',1);?>"></i>
                                </div>
                                <a href="#"><h4><?php echo get_post_meta($post->ID,'zagolovok_item1',1);?></h4></a>
                                <p><?php echo get_post_meta($post->ID,'podzagolovok_item1',1);?></p>
                            </div>
                            <div class="app_feature_item">
                               <div class="round_icon">
                                    <i class="fa fa-<?php echo get_post_meta($post->ID,'znachok_item3',1);?>"></i>
                                </div>
                                <a href="#"><h4><?php echo get_post_meta($post->ID,'zagolovok_item3',1);?></h4></a>
                                <p><?php echo get_post_meta($post->ID,'podzagolovok_item3',1);?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="app_round_image">
                            <img class="round_c" src="<?php echo get_template_directory_uri() ?>/img/round-circle.png" alt="">
                            <img class="app_mobile" src="<?php echo get_template_directory_uri() ?>/img/app-mobile.png" alt="">
                        </div>
                        <div class="app_feature_item app_middle">
                           <div class="round_icon">
                                <i class="fa fa-<?php echo get_post_meta($post->ID,'znachok_item5',1);?>"></i>
                            </div>
                            <a href="#"><h4><?php echo get_post_meta($post->ID,'zagolovok_item5',1);?></h4></a>
                            <p><?php echo get_post_meta($post->ID,'podzagolovok_item5',1);?></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="app_feature_item_inner left_feature">
                            <div class="app_feature_item">
                                <div class="round_icon">
                                    <i class="fa fa-<?php echo get_post_meta($post->ID,'znachok_item2',1);?>"></i>
                                </div>
                                <a href="#"><h4><?php echo get_post_meta($post->ID,'zagolovok_item2',1);?></h4></a>
                                <p><?php echo get_post_meta($post->ID,'podzagolovok_item2',1);?></p>
                            </div>
                            <div class="app_feature_item">
                               <div class="round_icon">
                                    <i class="fa fa-<?php echo get_post_meta($post->ID,'znachok_item4',1);?>"></i>
                                </div>
                                <a href="#"><h4><?php echo get_post_meta($post->ID,'zagolovok_item4',1);?></h4></a>
                                <p><?php echo get_post_meta($post->ID,'podzagolovok_item4',1);?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="knopka"><a href="<?php echo get_post_meta($post->ID, 'button_idea_href', 1);?>"><?php echo get_post_meta($post->ID, 'button_idea_name', 1);?></a></div>
            </div>
        </section>
        <!--================End App Feature Area =================-->

        <!--================Customer Count Area =================-->
        <section class="customer_count_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="customer_count_item">
                            <i class="fa fa-<?php echo get_post_meta($post->ID, 'znachok_item_stat1', 1);?>"></i>
                            <h5><?php echo get_post_meta($post->ID, 'zagolovok_item_stat1', 1);?></h5>
                            <h4 class="counter"><?php echo get_post_meta($post->ID, 'chislo_item_stat1', 1);?></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="customer_count_item">
                            <i class="fa fa-<?php echo get_post_meta($post->ID, 'znachok_item_stat2', 1);?>"></i>
                            <h5><?php echo get_post_meta($post->ID, 'zagolovok_item_stat2', 1);?></h5>
                            <h4 class="counter"><?php echo get_post_meta($post->ID, 'chislo_item_stat2', 1);?></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="customer_count_item">
                            <i class="fa fa-<?php echo get_post_meta($post->ID, 'znachok_item_stat3', 1);?>"></i>
                            <h5><?php echo get_post_meta($post->ID, 'zagolovok_item_stat3', 1);?></h5>
                            <h4 class="counter"><?php echo get_post_meta($post->ID, 'chislo_item_stat3', 1);?></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="customer_count_item">
                            <i class="fa fa-<?php echo get_post_meta($post->ID, 'znachok_item_stat4', 1);?>"></i>
                            <h5><?php echo get_post_meta($post->ID, 'zagolovok_item_stat4', 1);?></h5>
                            <h4 class="counter"><?php echo get_post_meta($post->ID, 'chislo_item_stat4', 1);?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Customer Count Area =================-->
        
        <!--================Satisfaction Area =================-->
        <section class="satisfaction_area" id="about">
            <div class="container">
                <div class="main_title">
                    <h2><?php echo get_post_meta($post->ID,'zagolovok4',1);?></h2>
                    <p><?php echo get_post_meta($post->ID,'text4',1);?></p>
                </div>
                <div class="row satisfaction_item_inner">
                    <div class="col-md-4 col-xs-6">
                        <div class="satisfaction_item">
                            <div class="sat_icon">
                                <i class="fa fa-<?php echo get_post_meta($post->ID, 'znachok_item4_1', 1);?>" aria-hidden="true"></i>
                            </div>
                            <a href="#"><h4><?php echo get_post_meta($post->ID, 'zagolovok_item4_1', 1);?></h4></a>
                            <p><?php echo get_post_meta($post->ID, 'podzagolovok_item4_1', 1);?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="satisfaction_item">
                            <div class="sat_icon">
                                <i class="fa fa-<?php echo get_post_meta($post->ID, 'znachok_item4_2', 1);?>" aria-hidden="true"></i>
                            </div>
                            <a href="#"><h4><?php echo get_post_meta($post->ID, 'zagolovok_item4_2', 1);?></h4></a>
                            <p><?php echo get_post_meta($post->ID, 'podzagolovok_item4_2', 1);?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="satisfaction_item">
                            <div class="sat_icon">
                                <i class="fa fa-<?php echo get_post_meta($post->ID, 'znachok_item4_3', 1);?>" aria-hidden="true"></i>
                            </div>
                            <a href="#"><h4><?php echo get_post_meta($post->ID, 'zagolovok_item4_3', 1);?></h4></a>
                            <p><?php echo get_post_meta($post->ID, 'podzagolovok_item4_3', 1);?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Satisfaction Area =================-->
        
        <!--================Video Area =================-->
        <section class="video_area">
            <div class="container">
                <!--<div class="video_inner">
                    <img src="<?php echo get_template_directory_uri() ?>/img/video-img.png" alt="">
                    <div class="video_text">
                        <a class="popup-youtube" href="<?php echo get_post_meta($post->ID, 'video4', 1);?>"><i class="icofont icofont-play-alt-2"></i></a>
                        <h5>Play Video</h5>
                    </div>
                </div> -->
                <div class="user_slider_inner">
                    <div class="user_slider owl-carousel">
                        <div class="item">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p><?php echo get_post_meta($post->ID, 'slide_text', 1);?></p>
                            <a href="#"><h4><?php echo get_post_meta($post->ID, 'sliade_chuvak_name', 1);?></h4></a>
                            <h5><?php echo get_post_meta($post->ID, 'sliade_chuvak_company', 1);?></h5>
                            <?php $img=get_post_meta($post->ID, 'slide_chuvak_1', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                            <img class="img-circle" src="<?php echo $src[0]; ?>" alt="">
                        </div>
                        <!--<div class="item">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#"><h4>Mr. Jonathon Smith</h4></a>
                            <h5>CEO, Hazrat Group</h5>
                            <img class="img-circle" src="<?php echo get_template_directory_uri() ?>/img/user/user-1.png" alt="">
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#"><h4>Mr. Jonathon Smith</h4></a>
                            <h5>CEO, Hazrat Group</h5>
                            <img class="img-circle" src="<?php echo get_template_directory_uri() ?>/img/user/user-1.png" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--================End Video Area =================-->

                <!--================Team Members Area =================-->
        <section class="team_members_area" id="experts">
            <div class="container">
                <div class="main_title">
                    <h2><?php echo get_post_meta($post->ID, 'zagolovok8', 1);?></h2>
                    <p><?php echo get_post_meta($post->ID, 'text8', 1);?></p>
                </div>
                <div class="team_slider owl-carousel">
                    <?php if(get_post_meta($post->ID, 'slide_expert_1', true)): ?>
                        <div class="item">
                            <div class="team_slider_item">
                                <?php $img=get_post_meta($post->ID, 'slide_expert_1', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                                <img src="<?php echo $src[0]; ?>">
                                <div class="team_hover">
                                    <div class="team_hover_inner">
                                        <div class="team_hover_inner">
                                            <div class="team_inner_text">
                                                <h4><?php echo get_post_meta($post->ID, 'slide_expert_name1', 1);?></h4>
                                                <h5><?php echo get_post_meta($post->ID, 'slide_expert_spec1', 1);?></h5>
                                                <ul>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_1_1', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_1_1', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_1_2', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_1_2', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_1_3', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_1_3', 1);?>" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_1_4', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_1_4', 1);?>" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID, 'slide_expert_2', true)): ?>
                        <div class="item">
                            <div class="team_slider_item">
                                <?php $img=get_post_meta($post->ID, 'slide_expert_2', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                                <img src="<?php echo $src[0]; ?>">
                                <div class="team_hover">
                                    <div class="team_hover_inner">
                                        <div class="team_hover_inner">
                                            <div class="team_inner_text">
                                                <h4><?php echo get_post_meta($post->ID, 'slide_expert_name2', 1);?></h4>
                                                <h5><?php echo get_post_meta($post->ID, 'slide_expert_spec2', 1);?></h5>
                                                <ul>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_2_1', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_2_1', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_2_2', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_2_2', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_2_3', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_2_3', 1);?>" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_2_4', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_2_4', 1);?>" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID, 'slide_expert_3', true)): ?>
                        <div class="item">
                            <div class="team_slider_item">
                                <?php $img=get_post_meta($post->ID, 'slide_expert_3', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                                <img src="<?php echo $src[0]; ?>">
                                <div class="team_hover">
                                    <div class="team_hover_inner">
                                        <div class="team_hover_inner">
                                            <div class="team_inner_text">
                                                <h4><?php echo get_post_meta($post->ID, 'slide_expert_name3', 1);?></h4>
                                                <h5><?php echo get_post_meta($post->ID, 'slide_expert_spec3', 1);?></h5>
                                                <ul>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_3_1', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_3_1', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_3_2', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_3_2', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_3_3', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_3_3', 1);?>" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_3_4', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_3_4', 1);?>" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID, 'slide_expert_4', true)): ?>
                        <div class="item">
                            <div class="team_slider_item">
                                <?php $img=get_post_meta($post->ID, 'slide_expert_4', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                                <img src="<?php echo $src[0]; ?>">
                                <div class="team_hover">
                                    <div class="team_hover_inner">
                                        <div class="team_hover_inner">
                                            <div class="team_inner_text">
                                                <h4><?php echo get_post_meta($post->ID, 'slide_expert_name4', 1);?></h4>
                                                <h5><?php echo get_post_meta($post->ID, 'slide_expert_spec4', 1);?></h5>
                                                <ul>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_4_1', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_4_1', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_4_2', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_4_2', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_4_3', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_4_3', 1);?>" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_4_4', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_4_4', 1);?>" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID, 'slide_expert_5', true)): ?>
                        <div class="item">
                            <div class="team_slider_item">
                                <?php $img=get_post_meta($post->ID, 'slide_expert_5', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                                <img src="<?php echo $src[0]; ?>">
                                <div class="team_hover">
                                    <div class="team_hover_inner">
                                        <div class="team_hover_inner">
                                            <div class="team_inner_text">
                                                <h4><?php echo get_post_meta($post->ID, 'slide_expert_name5', 1);?></h4>
                                                <h5><?php echo get_post_meta($post->ID, 'slide_expert_spec5', 1);?></h5>
                                                <ul>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_5_1', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_5_1', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_5_2', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_5_2', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_5_3', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_5_3', 1);?>" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_5_4', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_5_4', 1);?>" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID, 'slide_expert_6', true)): ?>
                        <div class="item">
                            <div class="team_slider_item">
                                <?php $img=get_post_meta($post->ID, 'slide_expert_6', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                                <img src="<?php echo $src[0]; ?>">
                                <div class="team_hover">
                                    <div class="team_hover_inner">
                                        <div class="team_hover_inner">
                                            <div class="team_inner_text">
                                                <h4><?php echo get_post_meta($post->ID, 'slide_expert_name6', 1);?></h4>
                                                <h5><?php echo get_post_meta($post->ID, 'slide_expert_spec6', 1);?></h5>
                                                <ul>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_6_1', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_6_1', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_6_2', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_6_2', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_6_3', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_6_3', 1);?>" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_6_4', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_6_4', 1);?>" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID, 'slide_expert_7', true)): ?>
                        <div class="item">
                            <div class="team_slider_item">
                                <?php $img=get_post_meta($post->ID, 'slide_expert_7', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                                <img src="<?php echo $src[0]; ?>">
                                <div class="team_hover">
                                    <div class="team_hover_inner">
                                        <div class="team_hover_inner">
                                            <div class="team_inner_text">
                                                <h4><?php echo get_post_meta($post->ID, 'slide_expert_name7', 1);?></h4>
                                                <h5><?php echo get_post_meta($post->ID, 'slide_expert_spec7', 1);?></h5>
                                                <ul>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_7_1', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_7_1', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_7_2', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_7_2', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_7_3', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_7_3', 1);?>" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_7_4', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_7_4', 1);?>" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID, 'slide_expert_8', true)): ?>
                        <div class="item">
                            <div class="team_slider_item">
                                <?php $img=get_post_meta($post->ID, 'slide_expert_8', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                                <img src="<?php echo $src[0]; ?>">
                                <div class="team_hover">
                                    <div class="team_hover_inner">
                                        <div class="team_hover_inner">
                                            <div class="team_inner_text">
                                                <h4><?php echo get_post_meta($post->ID, 'slide_expert_name8', 1);?></h4>
                                                <h5><?php echo get_post_meta($post->ID, 'slide_expert_spec8', 1);?></h5>
                                                <ul>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_8_1', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_8_1', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_8_2', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_8_2', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_8_3', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_8_3', 1);?>" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_8_4', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_8_4', 1);?>" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID, 'slide_expert_9', true)): ?>
                        <div class="item">
                            <div class="team_slider_item">
                                <?php $img=get_post_meta($post->ID, 'slide_expert_9', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                                <img src="<?php echo $src[0]; ?>">
                                <div class="team_hover">
                                    <div class="team_hover_inner">
                                        <div class="team_hover_inner">
                                            <div class="team_inner_text">
                                                <h4><?php echo get_post_meta($post->ID, 'slide_expert_name9', 1);?></h4>
                                                <h5><?php echo get_post_meta($post->ID, 'slide_expert_spec9', 1);?></h5>
                                                <ul>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_9_1', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_9_1', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_9_2', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_9_2', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_9_3', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_9_3', 1);?>" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_9_4', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_9_4', 1);?>" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID, 'slide_expert_10', true)): ?>
                        <div class="item">
                            <div class="team_slider_item">
                                <?php $img=get_post_meta($post->ID, 'slide_expert_10', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                                <img src="<?php echo $src[0]; ?>">
                                <div class="team_hover">
                                    <div class="team_hover_inner">
                                        <div class="team_hover_inner">
                                            <div class="team_inner_text">
                                                <h4><?php echo get_post_meta($post->ID, 'slide_expert_name10', 1);?></h4>
                                                <h5><?php echo get_post_meta($post->ID, 'slide_expert_spec10', 1);?></h5>
                                                <ul>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_10_1', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_10_1', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_10_2', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_10_2', 1);?>"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_10_3', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_10_3', 1);?>" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo get_post_meta($post->ID, 'slide_expert_soc_10_4', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'slide_expert_soc_img_10_4', 1);?>" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!--================End Team Members Area =================-->
        
        <!--================MacBook Mockup Area =================-->
        <section class="install_app_area">
            <div class="col-md-6">
                <div class="row">
                    <div class="install_left_content">
                        <div class="left_title">
                            <h2><?php echo get_post_meta($post->ID, 'zagolovok5', 1);?></h2>
                        </div>
                        <div class="install_content">
                            <h5><?php echo get_post_meta($post->ID, 'podzagolovok5', 1);?></h5>
                            <p><?php echo get_post_meta($post->ID, 'text5', 1);?></p>
                            <a class="gradient_bg_btn" href="<?php echo get_post_meta($post->ID, 'knopka_href_5_1', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'knopka_znachok_5_1', 1);?>" aria-hidden="true"></i><?php echo get_post_meta($post->ID, 'knopka_name_5_1', 1);?></a>
                            <a class="gradient_bor_btn" href="<?php echo get_post_meta($post->ID, 'knopka_href_5_2', 1);?>"><i class="fa fa-<?php echo get_post_meta($post->ID, 'knopka_znachok_5_2', 1);?>" aria-hidden="true"></i><?php echo get_post_meta($post->ID, 'knopka_name_5_2', 1);?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="install_mockup_img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/macbook-res.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--================End MacBook Mockup Area =================-->

        <!--================Pricing Table Area =================-->
        <section class="price_table_area" id="price">
            <div class="container">
                <div class="main_title">
                    <h2><?php echo get_post_meta($post->ID, 'zagolovok7', 1);?></h2>
                    <p><?php echo get_post_meta($post->ID, 'text7', 1);?></p>
                </div>
                <div class="price_table_inner">
                    <div class="price_item">
                        <div class="price_header">
                            <h3><?php echo get_post_meta($post->ID, 'tarif1_name', 1);?></h3>
                            <h2><?php echo get_post_meta($post->ID, 'tarif1_cena', 1);?></h2>
                            <!--<h6>/месяц</h6>-->
                        </div>
                        <ul>
                            <p><?php echo get_post_meta($post->ID, 'tarif1_opis', 1);?></p>
                        </ul>
                        <a class="price_btn" href="<?php echo get_post_meta($post->ID, 'knopka_href_6_1', 1);?>"><?php echo get_post_meta($post->ID, 'knopka_name_6_1', 1);?></a>
                    </div>
                    <div class="price_item">
                        <div class="price_header">
                            <h3><?php echo get_post_meta($post->ID, 'tarif2_name', 1);?></h3>
                            <h2><?php echo get_post_meta($post->ID, 'tarif2_cena', 1);?></h2>
                        </div>
                        <ul>
                            <p><?php echo get_post_meta($post->ID, 'tarif2_opis', 1);?></p>
                        </ul>
                        <a class="price_btn" href="<?php echo get_post_meta($post->ID, 'knopka_href_6_2', 1);?>"><?php echo get_post_meta($post->ID, 'knopka_name_6_2', 1);?></a>
                    </div>
                    <div class="price_item">
                        <div class="price_header">
                            <h3><?php echo get_post_meta($post->ID, 'tarif3_name', 1);?></h3>
                            <h2><?php echo get_post_meta($post->ID, 'tarif3_cena', 1);?></h2>
                        </div>
                        <ul>
                            <p><?php echo get_post_meta($post->ID, 'tarif3_opis', 1);?></p>
                        </ul>
                        <a class="price_btn" href="<?php echo get_post_meta($post->ID, 'knopka_href_6_3', 1);?>"><?php echo get_post_meta($post->ID, 'knopka_name_6_3', 1);?></a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Pricing Table Area =================-->
        
        <!--================App Screen Area =================-->
        <section class="app_screen_area" id="screenshot">
            <div class="container">
                <div class="main_title">
                    <h2><?php echo get_post_meta($post->ID, 'zagolovok6', 1);?></h2>
                    <p><?php echo get_post_meta($post->ID, 'text6', 1);?></p>
                </div>
                <div class="app_screen_inner">
                    <div class="app_screen_slider owl-carousel">
                        <?php if(get_post_meta($post->ID, 'slide6_1', true)): ?>
                            <?php $img=get_post_meta($post->ID, 'slide6_1', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                            <div class="item">
                                <img src="<?php echo $src[0]; ?>" alt="">
                                <p><?php echo get_post_meta($post->ID, 'slide6_1_text', 1);?></p>
                            </div>
                        <?php endif; ?>
                        <?php if(get_post_meta($post->ID, 'slide6_2', true)): ?>
                            <?php $img=get_post_meta($post->ID, 'slide6_2', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                            <div class="item">
                                <img src="<?php echo $src[0]; ?>" alt="">
                                <p><?php echo get_post_meta($post->ID, 'slide6_2_text', 1);?></p>
                            </div>
                        <?php endif; ?>
                        <?php if(get_post_meta($post->ID, 'slide6_3', true)): ?>
                            <?php $img=get_post_meta($post->ID, 'slide6_3', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                            <div class="item">
                                <img src="<?php echo $src[0]; ?>" alt="">
                                <p><?php echo get_post_meta($post->ID, 'slide6_3_text', 1);?></p>
                            </div>
                        <?php endif; ?>
                        <?php if(get_post_meta($post->ID, 'slide6_4', true)): ?>
                            <?php $img=get_post_meta($post->ID, 'slide6_4', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                            <div class="item">
                                <img src="<?php echo $src[0]; ?>" alt="">
                                <p><?php echo get_post_meta($post->ID, 'slide6_4_text', 1);?></p>
                            </div>
                        <?php endif; ?>
                        <?php if(get_post_meta($post->ID, 'slide6_5', true)): ?>
                            <?php $img=get_post_meta($post->ID, 'slide6_5', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                            <div class="item">
                                <img src="<?php echo $src[0]; ?>" alt="">
                                <p><?php echo get_post_meta($post->ID, 'slide6_5_text', 1);?></p>
                            </div>
                        <?php endif; ?>
                        <?php if(get_post_meta($post->ID, 'slide6_6', true)): ?>
                            <?php $img=get_post_meta($post->ID, 'slide6_6', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                            <div class="item">
                                <img src="<?php echo $src[0]; ?>" alt="">
                                <p><?php echo get_post_meta($post->ID, 'slide6_6_text', 1);?></p>
                            </div>
                        <?php endif; ?>
                        <?php if(get_post_meta($post->ID, 'slide6_7', true)): ?>
                            <?php $img=get_post_meta($post->ID, 'slide6_7', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                            <div class="item">
                                <img src="<?php echo $src[0]; ?>" alt="">
                                <p><?php echo get_post_meta($post->ID, 'slide6_7_text', 1);?></p>
                            </div>
                        <?php endif; ?>
                        <?php if(get_post_meta($post->ID, 'slide6_8', true)): ?>
                            <?php $img=get_post_meta($post->ID, 'slide6_8', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                            <div class="item">
                                <img src="<?php echo $src[0]; ?>" alt="">
                                <p><?php echo get_post_meta($post->ID, 'slide6_8_text', 1);?></p>
                            </div>
                        <?php endif; ?>
                        <?php if(get_post_meta($post->ID, 'slide6_9', true)): ?>
                            <?php $img=get_post_meta($post->ID, 'slide6_9', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                            <div class="item">
                                <img src="<?php echo $src[0]; ?>" alt="">
                                <p><?php echo get_post_meta($post->ID, 'slide6_9_text', 1);?></p>
                            </div>
                        <?php endif; ?>
                        <?php if(get_post_meta($post->ID, 'slide6_10', true)): ?>
                            <?php $img=get_post_meta($post->ID, 'slide6_10', 1); $src = wp_get_attachment_image_src( $img,'full');?>
                            <div class="item">
                                <img src="<?php echo $src[0]; ?>" alt="">
                                <p><?php echo get_post_meta($post->ID, 'slide6_10_text', 1);?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="knopka"><a href="#">Предложить инвестиции</a></div>
        </section>
        <!--================End App Screen Area =================-->
        
        <!--================Question Area =================-->
        <section class="question_area">
            <div class="container">
                <div class="main_title">
                    <h2><?php echo get_post_meta($post->ID, 'zagolovok9', 1);?></h2>
                    <p><?php echo get_post_meta($post->ID, 'text9', 1);?></p>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="left_question_inner">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php if(get_post_meta($post->ID, 'vopros1', 1)!=""): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                            <?php echo get_post_meta($post->ID, 'vopros1', 1);?>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                        <?php echo get_post_meta($post->ID, 'otvet1', 1);?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID, 'vopros2', 1)!=""): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                                            <?php echo get_post_meta($post->ID, 'vopros2', 1);?>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                        <?php echo get_post_meta($post->ID, 'otvet2', 1);?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID, 'vopros3', 1)!=""): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading3">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed">
                                            <?php echo get_post_meta($post->ID, 'vopros3', 1);?>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" aria-labelledby="heading3">
                                        <div class="panel-body">
                                        <?php echo get_post_meta($post->ID, 'otvet3', 1);?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID, 'vopros4', 1)!=""): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading4">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed">
                                            <?php echo get_post_meta($post->ID, 'vopros4', 1);?>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" aria-labelledby="heading4">
                                        <div class="panel-body">
                                        <?php echo get_post_meta($post->ID, 'otvet4', 1);?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID, 'vopros5', 1)!=""): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading5">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed">
                                            <?php echo get_post_meta($post->ID, 'vopros5', 1);?>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" aria-labelledby="heading5">
                                        <div class="panel-body">
                                        <?php echo get_post_meta($post->ID, 'otvet5', 1);?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID, 'vopros6', 1)!=""): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading6">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed">
                                            <?php echo get_post_meta($post->ID, 'vopros6', 1);?>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" aria-labelledby="heading6">
                                        <div class="panel-body">
                                        <?php echo get_post_meta($post->ID, 'otvet6', 1);?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID, 'vopros7', 1)!=""): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading7">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed">
                                            <?php echo get_post_meta($post->ID, 'vopros7', 1);?>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" aria-labelledby="heading7">
                                        <div class="panel-body">
                                        <?php echo get_post_meta($post->ID, 'otvet7', 1);?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID, 'vopros8', 1)!=""): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading8">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed">
                                            <?php echo get_post_meta($post->ID, 'vopros8', 1);?>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" aria-labelledby="heading8">
                                        <div class="panel-body">
                                        <?php echo get_post_meta($post->ID, 'otvet8', 1);?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID, 'vopros9', 1)!=""): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading4">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9" class="collapsed">
                                            <?php echo get_post_meta($post->ID, 'vopros9', 1);?>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" aria-labelledby="heading9">
                                        <div class="panel-body">
                                        <?php echo get_post_meta($post->ID, 'otvet9', 1);?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID, 'vopros10', 1)!=""): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading10">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10" class="collapsed">
                                            <?php echo get_post_meta($post->ID, 'vopros10', 1);?>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" aria-labelledby="heading10">
                                        <div class="panel-body">
                                        <?php echo get_post_meta($post->ID, 'otvet10', 1);?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="right_question_img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/question-tab.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Question Area =================-->
        
        <!--================Latest Blog Area =================-->
        <section class="latest_blog_area" id="blog">
            <div class="container">
                <div class="main_title">
                    <h2><?php echo get_post_meta($post->ID, 'zagolovok10', 1);?></h2>
                    <p><?php echo get_post_meta($post->ID, 'text10', 1);?></p>
                </div>
                <div class="row latest_blog_inner">
                    <div class="col-md-6">
                        <?php
                                    $args = array( 'posts_per_page' => 1, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC' );
                                    query_posts($args);
                                    while ( have_posts() ) : the_post();
                        ?>
                        <div class="l_blog_big_item">
                            <div class="l_blog_img">
                                <div class="l_blog_slider owl-carousel">
                                    <div class="item">
                                        <?php echo the_post_thumbnail('home1_thumb'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="l_blog_text">
                                <div class="l_blog_text_inner">
                                    <div class="blog_date">
                                        <a href="<?php the_permalink(); ?>"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d'); get_date(get_the_date('m')); echo get_the_date('Y'); ?></a>
                                        <a href="<?php the_permalink(); ?>">0 комментариев</a>
                                    </div>
                                    <a href="<?php the_permalink(); ?>"><h4><?php echo the_title(); ?></h4></a>
                                    <?php 
                                        $content = get_the_content('подробнее');
                                        $postOutput = wp_trim_words( preg_replace('/<img[^>]+./','', $content), 30, ' ...' );
                                    ?>
                                    <p><?php echo $postOutput ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="right_l_blog">
                            <?php
                                    $args = array( 'posts_per_page' => 4, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC' );
                                    query_posts($args);
                                    $post_num=1;
                                    while ( have_posts() ) : the_post();
                                    if($post_num!=1):
                                        ?>
                                            <div class="media">
                                                <div class="media-left">
                                                    <?php echo the_post_thumbnail('home2_thumb'); ?>
                                                </div>
                                                <div class="media-body">
                                                    <a href="<?php the_permalink(); ?>"><h4><?php echo the_title(); ?></h4></a>
                                                    <a href="<?php the_permalink(); ?>"><h5><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d'); get_date(get_the_date('m')); echo get_the_date('Y'); ?></h5></a>
                                                    <?php 
                                                        $content = get_the_content('подробнее');
                                                        $postOutput = wp_trim_words( preg_replace('/<img[^>]+./','', $content), 15, ' ...' );
                                                    ?>
                                                    <p><?php echo $postOutput ?></p>
                                                </div>
                                            </div>
                                        <?
                                    endif;
                                    $post_num++;
                                    endwhile;
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Latest Blog Area =================-->
        
<?php get_footer(); ?>