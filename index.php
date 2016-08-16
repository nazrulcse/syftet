<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<!--    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->

    <meta charshet="<?php bloginfo('charshet'); ?>">
    <meta name="viewport" content="width=device-width, intial-scale=1">

    <link href="<?php bloginfo('stylesheet'); ?>" rel="stylesheet"/><!---wordpress stylesheet--->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/syftet.css" rel="stylesheet"/><!---main stylesheet--->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/team.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fonts_museo_slab_3.css" rel="stylesheet"/><!---fonts one--->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fonts_aleijadinho.css" rel="stylesheet"/><!---fonts tow--->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fonts_conv_delicatesans_bold.css" rel="stylesheet"/><!---fonts three--->

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <title>Syftet</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div class="fluid-container">
    <div class="header">
        <div class="header_logo">
            <a href="<?php bloginfo('home'); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo_syftet.png" alt="" title="" id="wows_0"/></a>
        </div>
        <div class="menu">
            <ul>
                <li><a class="active" href="<?php bloginfo('home'); ?>">Home</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#"><span class=" font_awesome bucket"></span></a></li>
                <li><a href="#"><span class=" font_awesome search_link"></span></a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        <div class="content1">
            <div class="content1_header"></div>
        </div>
        <div class="content2">
            <div class="content2_content container">
                <div class="content2_header">
                    <h1>Recent Works</h1>
                    <p>Making It The Most Trusted &amp; Complete WordPress Theme On The Market.</p>
                    <div class="clear">
                    </div>
                </div>
                <div class="separator"></div>
                <div class="content2_image" style="opacity: 0;">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/recent-works2.png"/>
                </div>
            </div>
        </div>
        <div class="content3">
            <div class="container">
                <div class="col-md-12 row">
                    <div class="col-md-6 content3_text row">
                        <h2>Free Updates &amp; Support: You Need It, We Provide It.</h2>
                        <p>Our #1 priority is you, the user. We believe in our product and hold ourselves to the highest
                            standards. We truly care about your site as much as you do, which is why we offer amazing&nbsp;support
                            at our dedicated support center. In addition, we&nbsp;offer free updates with new features
                            requested by our users. You can count on us.</p>
                    </div>
                    <div class="col-md-6 content3_image ">
                        <img style="width: 100%;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/macbook.png">
                    </div>
                </div>
                <div class="col-md-12 row">
                    <div class="col-md-3">
                        <div class="counter">
                            <span class="counter_no">9000</span>
                            <p class="">Wonderful Users &amp; Counting</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter">
                            <span class="counter_no">9000</span>
                            <p class="counter_txt">Wonderful Users &amp; Counting</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter">
                            <span class="counter_no">9000</span>
                            <p class="counter_txt">Wonderful Users &amp; Counting</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter">
                            <span class="counter_no">9000</span>
                            <p class="counter_txt">Wonderful Users &amp; Counting</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content4">
            <div class="content4_contentx container">
                <div class="content4_text">
                    <h1>Our Services</h1>
                    <p>Syftet’s powerful theme and meta options along with its unique structure lets you create any
                        design style with just one theme. These simple yet powerful options allow you to create any type
                        of website. No two versions of Syftet will ever look the same.</p>
                </div>
                <div class="separator"></div>
                <div class="content4_image row">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/combo_text.jpg"/>
                </div>
            </div>

        </div>
        <div class="content5">
            <div class="content5_content">
                <div class="content5_text">
                    <div class="clear"></div>
                    <h2>Some information about our services</h2>
                    <p>
                        Syftet is loaded with useful features, each one with its own meaningful purpose. We listen to our
                        users and integrate their feature requests on a regular basis. Syftet is not only built by us,
                        but also by our users.
                    </p>
                </div>
            </div>
        </div>
        <div class="content6_image"></div>
        <div class="syftet-row clearfix">
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
<!--                    <div class="person-image-container">-->
<!--                        <img class="person-img img-responsive" src="images/feature_responsive.jpg">-->
<!--                                                <img class="" style="" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team1.jpg">-->
<!--                    </div>-->
                    <div class="service-title person-desc">
                        <h2>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/ror.png">
                            Ruby On Rails
                        </h2>
                        <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                            responsive mode can easily be turned on or off in the theme options panel!
                        </p>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
<!--                    <div>-->
<!--                        <img class="person-img img-responsive" src="images/feature_responsive.jpg">-->
<!--                                                <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team2.jpg">-->
<!--                    </div>-->
                    <div class="person-desc">
                        <div class="service-title">
                            <h2>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/php.png">
                                PHP
                            </h2>
                            <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                                responsive mode can easily be turned on or off in the theme options panel! </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column syftet-column-last">
                <div class="syftet-person">
<!--                    <div>-->
<!--                        <img class="person-img img-responsive" src="images/feature_responsive.jpg">-->
<!--                                                <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team3.jpg">-->
<!--                    </div>-->
                    <div class="person-desc">
                        <div class="service-title">
                            <h2>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/dot-net.png">
                                .Net
                            </h2>
                            <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                                responsive mode can easily be turned on or off in the theme options panel! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="syftet-row clearfix">
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <!--                    <div class="person-image-container">-->
                    <!--                        <img class="person-img img-responsive" src="images/feature_responsive.jpg">-->
                    <!--                                                <img class="" style="" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team1.jpg">-->
                    <!--                    </div>-->
                    <div class="service-title person-desc">
                        <h2>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/ios.png">
                            IOS
                        </h2>
                        <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                            responsive mode can easily be turned on or off in the theme options panel!
                        </p>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <!--                    <div>-->
                    <!--                        <img class="person-img img-responsive" src="images/feature_responsive.jpg">-->
                    <!--                                                <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team2.jpg">-->
                    <!--                    </div>-->
                    <div class="person-desc">
                        <div class="service-title">
                            <h2>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/android.png">
                                Android
                            </h2>
                            <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                                responsive mode can easily be turned on or off in the theme options panel! </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column syftet-column-last">
                <div class="syftet-person">
                    <!--                    <div>-->
                    <!--                        <img class="person-img img-responsive" src="images/feature_responsive.jpg">-->
                    <!--                                                <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team3.jpg">-->
                    <!--                    </div>-->
                    <div class="person-desc">
                        <div class="service-title">
                            <h2>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/nodejs.png">
                                Node JS
                            </h2>
                            <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                                responsive mode can easily be turned on or off in the theme options panel! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="syftet-row clearfix">
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <!--                    <div class="person-image-container">-->
                    <!--                        <img class="person-img img-responsive" src="images/feature_responsive.jpg">-->
                    <!--                                                <img class="" style="" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team1.jpg">-->
                    <!--                    </div>-->
                    <div class="service-title person-desc">
                        <h2>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/angular-js.png" alt="Angular JS">
                            Angular JS
                        </h2>
                        <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                            responsive mode can easily be turned on or off in the theme options panel!
                        </p>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <!--                    <div>-->
                    <!--                        <img class="person-img img-responsive" src="images/feature_responsive.jpg">-->
                    <!--                                                <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team2.jpg">-->
                    <!--                    </div>-->
                    <div class="person-desc">
                        <div class="service-title">
                            <h2>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/ui-ux.png" alt="UI/UX Design">
                                UI/UX Design
                            </h2>
                            <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                                responsive mode can easily be turned on or off in the theme options panel! </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column syftet-column-last">
                <div class="syftet-person">
                    <!--                    <div>-->
                    <!--                        <img class="person-img img-responsive" src="images/feature_responsive.jpg">-->
                    <!--                                                <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team3.jpg">-->
                    <!--                    </div>-->
                    <div class="person-desc">
                        <div class="service-title">
                            <h2>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/testing.png">
                                Testing
                            </h2>
                            <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                                responsive mode can easily be turned on or off in the theme options panel! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="syftet-row clearfix">
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <!--                    <div class="person-image-container">-->
                    <!--                        <img class="person-img img-responsive" src="images/feature_responsive.jpg">-->
                    <!--                                                <img class="" style="" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team1.jpg">-->
                    <!--                    </div>-->
                    <div class="service-title person-desc">
                        <h2>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/deployment.png" alt="Deployment">
                            Deployment
                        </h2>
                        <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                            responsive mode can easily be turned on or off in the theme options panel!
                        </p>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <!--                    <div>-->
                    <!--                        <img class="person-img img-responsive" src="images/feature_responsive.jpg">-->
                    <!--                                                <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team2.jpg">-->
                    <!--                    </div>-->
                    <div class="person-desc">
                        <div class="service-title">
                            <h2>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/maintenance.png" alt="Maintenance">
                                Maintenance
                            </h2>
                            <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                                responsive mode can easily be turned on or off in the theme options panel! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content10">
            <div class="container">
                <div class="content10_text">
                    <h2>Aim of Company</h2>
                    <p>Many themes claim to have a quick setup, but leave you dealing with several XML files to manually
                        import. Who wants to do that? We sure don’t. Syftet truly offers a quick, easy setup. Install the
                        theme, click the demo content button and you receive a demo setup of pages, post, sliders,
                        sidebars, widgets, theme options and more. It doesn’t get any easier, our demo content importer
                        is a beautiful thing.</p>
                    <div class="content10_box"><span>WHAT ELSE YOU GOT?</span></div>
                </div>

                <div class="content10_image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/pc-syftet1.png">
                </div>

            </div>
        </div>
        <div class="content4_content">
            <div class="content2_header">
                <h1>Portfolio</h1>
                <p>Making It The Most Trusted &amp; Complete WordPress Theme On The Market.</p>
            </div>
            <div class="separator"></div>
        </div>

        <div class="syftet-row clearfix">
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <div class="person-image-container">
                        <img class="person-img img-responsive img-thumbnail" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/nar.jpg">
                        <!--                        <img class="" style="" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team1.jpg">-->
                    </div>
                    <div class="person-desc">
                        <h2>New Artist Release</h2>
                        <p>
                            Since 2000, musical artists, models, and book authors worldwide have relied on New Artist
                            Release to promote their talent to the world. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <div class="person-image-container">
                        <img class="person-img img-responsive img-thumbnail" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/shyftn.jpg">
                        <!--                        <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team2.jpg">-->
                    </div>
                    <div class="person-desc">
                        <div class="person-author">
                            <h2>Shyftn</h2>
                            <p>
                                Syftet is 100% responsive, each and every element you see is fully responsive. And the
                                responsive mode can easily be turned on or off in the theme options panel!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column syftet-column-last">
                <div class="syftet-person">
                    <div class="person-image-container">
                        <img class="person-img img-responsive img-thumbnail" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/srcl.jpg">
                        <!--                        <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team3.jpg">-->
                    </div>
                    <div class="person-desc">
                        <div class="person-author">
                            <h2>SRCL Group</h2>
                            <p>
                                Syftet is 100% responsive, each and every element you see is fully responsive. And the
                                responsive mode can easily be turned on or off in the theme options panel!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="syftet-row clearfix">
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <div class="person-image-container">
                        <img class="person-img img-responsive img-thumbnail" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/esales.jpg">
                        <!--                        <img class="" style="" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team1.jpg">-->
                    </div>
                    <div class="person-desc">
                        <h2>My Sales My Job</h2>
                        <p>Syftet is 100% responsive, each and every element you see is fully responsive. And the
                            responsive mode can easily be turned on or off in the theme options panel! </p>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <div class="person-image-container">
                        <img class="person-img img-responsive img-thumbnail" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/tangail.jpg">
                        <!--                        <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team2.jpg">-->
                    </div>
                    <div class="person-desc">
                        <div class="person-author">
                            <h2>Tangail Enterprise</h2>
                            <p>
                                Syftet is 100% responsive, each and every element you see is fully responsive. And the
                                responsive mode can easily be turned on or off in the theme options panel!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column syftet-column-last">
                <div class="syftet-person">
                    <div class="person-image-container">
                        <img class="person-img img-responsive img-thumbnail" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/heroku.jpg">
                        <!--                        <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team3.jpg">-->
                    </div>
                    <div class="person-desc">
                        <div class="person-author">
                            <h2>Processflow</h2>
                            <p>
                                Syftet is 100% responsive, each and every element you see is fully responsive. And the
                                responsive mode can easily be turned on or off in the theme options panel!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="content17">
            <div class="content17_content">
                <div class="content17_text">
                    <h1>Some information about our Portfolio</h1>
                </div>
                <div class="content17_box"><span>BUY Syftet NOW</span></div>
            </div>
        </div>
        <div class="content4_content">
            <div class="content2_header">
                <h1>Our Valueable Team</h1>
                <p>Making It The Most Trusted &amp; Complete WordPress Theme On The Market.</p>
            </div>
            <div class="separator"></div>
        </div>

        <div class="syftet-row clearfix">
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/ziko.png" class="person-img img-responsive">
                    <div class="team-person-desc">
                        <div class="person-author">
                            <div class="person-author-wrapper">
                                <span class="person-name">Md. Mahabubul Alam</span><br>
                                <span class="person-title">Developer</span>
                            </div>
                            <div class="syftet-social-networks boxed-icons">
                                <div class="syftet-social-networks-wrapper">
                                    <a class="btn btn-default" href="https://www.facebook.com/mahabub.ziko">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://twitter.com/zikoku07">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://plus.google.com/100425517053881281580/posts">
                                        <i class="fa fa-google"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://www.linkedin.com/in/mahabubziko07">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="person-content">
                            Mahabubul alam has completed his BSC in computer science and engineering
                            from khulna university, Bangladesh on 2011.
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/nazrul.png" class="person-img img-responsive">
                    <div class="team-person-desc">
                        <div class="person-author">
                            <div class="person-author-wrapper">
                                <span class="person-name">Md Nazrul Islam</span><br>
                                <span class="person-title">Developer</span>
                            </div>
                            <div class="syftet-social-networks boxed-icons">
                                <div class="syftet-social-networks-wrapper">
                                    <a class="btn btn-default" href="https://www.facebook.com/mdnazrulislam.cse">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-default" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://plus.google.com/u/0/106988509265910539148/posts">
                                        <i class="fa fa-google"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://www.linkedin.com/in/nazrulcse07">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="person-content ">
                            Md. Nazrul Islam has completed his BSC in computer science and engineering
                            from khulna university, Bangladesh on 2011.
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column syftet-column-last">
                <div class="syftet-person">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/rubel.png" class="person-img img-responsive">
                    <div class="team-person-desc">
                        <div class="person-author">
                            <div class="person-author-wrapper">
                                <span class="person-name">Abu Raihan Rubel</span><br>
                                <span class="person-title">Developer</span>
                            </div>
                            <div class="syftet-social-networks boxed-icons">
                                <div class="syftet-social-networks-wrapper">
                                    <a class="btn btn-default" href="https://www.facebook.com/aburaihan.rubel.cse">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://twitter.com/AbuRaihanRubel">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://plus.google.com/u/0/118308593010279249355/posts">
                                        <i class="fa fa-google"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://www.linkedin.com/in/abu-raihan-mohammad-rubel-7a4359105">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="person-content ">
                            Abu Raihan Rubel has completed his BSC in computer science and engineering
                            from Mawlana Bhashani Science and Technology University, Bangladesh on 2015.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="syftet-row clearfix">
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/asad.png" class="person-img img-responsive">
                    <div class="person-desc">
                        <div class="person-author team-person-desc">
                            <div class="person-author-wrapper">
                                <span class="person-name">Plabon Asad</span><br>
                                <span class="person-title">Developer</span>
                            </div>
                            <div class="syftet-social-networks boxed-icons">
                                <div class="syftet-social-networks-wrapper">
                                    <a class="btn btn-default" href="https://www.facebook.com/plabon.asad">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-default" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://plus.google.com/u/0/103764686291338308269/posts">
                                        <i class="fa fa-google"></i>
                                    </a>
                                    <a class="btn btn-default" href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="person-content">
                            Plabon Asad has completed his BSC in Mathematics
                            from khulna university, Bangladesh on 2015.
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-one-third syftet-layout-column">
                <div class="syftet-person">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/pias.png" class="person-img img-responsive">
                    <div class="person-desc">
                        <div class="person-author team-person-desc">
                            <div class="person-author-wrapper">
                                <span class="person-name">Tanvir Hasan Pias</span><br>
                                <span class="person-title">Developer</span>
                            </div>
                            <div class="syftet-social-networks boxed-icons">
                                <div class="syftet-social-networks-wrapper">
                                    <a class="btn btn-default" href="https://www.facebook.com/tanvir.pias">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://twitter.com/pias221191">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://plus.google.com/u/0/108851144385462334066/posts">
                                        <i class="fa fa-google"></i>
                                    </a>
                                    <a class="btn btn-default" href="https://www.linkedin.com/in/tanvir-hasan-b2135482">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="person-content ">
                            Tanvir Hassan Pias has completed his BSC in computer science and engineering
                            from Mawlana Bhashani Science and Technology University, Bangladesh on 2015.
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="syftet-one-third syftet-layout-column syftet-column-last">-->
<!--                <div class="syftet-person">-->
<!--                    <img src="--><?php //echo esc_url(get_template_directory_uri()); ?><!--/images/team/ziko.png" class="person-img img-responsive">-->
<!--                    <div class="person-desc">-->
<!--                        <div class="person-author team-person-desc">-->
<!--                            <div class="person-author-wrapper">-->
<!--                                <span class="person-name">John Doe</span><br>-->
<!--                                <span class="person-title">Developer</span>-->
<!--                            </div>-->
<!--                            <div class="syftet-social-networks boxed-icons">-->
<!--                                <div class="syftet-social-networks-wrapper">-->
<!--                                    <a class="btn btn-default">-->
<!--                                        <i class="fa fa-facebook"></i>-->
<!--                                    </a>-->
<!--                                    <a class="btn btn-default">-->
<!--                                        <i class="fa fa-twitter"></i>-->
<!--                                    </a>-->
<!--                                    <a class="btn btn-default">-->
<!--                                        <i class="fa fa-google"></i>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="person-content">-->
<!--                            Redantium, totam rem aperiam, eaque ipsa qu ab-->
<!--                            illo inventore veritatis et quasi architectos beatae vitae dicta sunt explicabo nemo-->
<!--                            emis.-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>

        <div class="meet-member meet-member-title-bar-left">
            <div class="meet-member-title-row">
                <div class="syftet-page-title-wrapper" style="opacity: 0.847059;">
                    <div class="syftet-page-title-captions">
                        <h1 class="entry-title">Meet The Member</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--        <div class="reset-margin"></div>-->
        <div class="content18">
            <div class="content18_content">
                <div class="content_content18">
                    <img width="113" height="25" alt="logo_white_big" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo_syftet_white.png">
                    <p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scriptaset patrioque scribentur, at
                        pro fugit erts verterem molestiae, sed et vivendo ali Lorem ipsum ex vix illud nonummy, novum
                        tation et his. At vix scripta patrioque scribentur...
                    </p>
                </div>

                <div class="content_content18">
                    <h3>Recent Posts</h3>
                    <ul class="content_link">
                        <li><a href="#"><span>Recent Post one</span></a></li>
                        <li><a href="#"><span>Recent Post tow</span></a></li>
                        <li><a href="#"><span>Recent Post three</span></a></li>
                        <li><a href="#"><span>Recent Post four</span></a></li>
                        <li><a href="#"><span>Recent Post five</span></a></li>
                    </ul>
                </div>

                <div class="content_content18">
                    <h3>Recent Tweets</h3>
                    <ul class="tweet">
                        <li>
                            <span class="font_awesome3 jtwt_tweet"></span>
                            <span
                                class="tweet_text"> @AspectEleven  Thank you Andrew, we appreciate hearing that!</span>
                        </li>
                        <li>
                            <span class="font_awesome3 jtwt_tweet"></span>
                            <span
                                class="tweet_text"> @AspectEleven  Thank you Andrew, we appreciate hearing that!</span>
                        </li>
                    </ul>
                </div>

                <div class="content_content18">
                    <h3>Recent Works</h3>
                    <div class="recent_work">
                        <div class="recent_image">
                            <a href="#"><img width="60" height="60" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/port21-66x66.jpg"></a>
                        </div>
                        <div class="recent_image">
                            <a href="#"><img width="60" height="60" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/port12-66x66.jpg"></a>
                        </div>
                        <div class="recent_image">
                            <a href="#"><img width="60" height="60" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/port18-66x66.jpg"></a>
                        </div>
                        <div class="recent_image">
                            <a href="#"><img width="60" height="60" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/port19-66x66.jpg"></a>
                        </div>
                        <div class="recent_image">
                            <a href="#"><img width="60" height="60" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/port15-66x66.jpg"></a>
                        </div>
                        <div class="recent_image">
                            <a href="#"><img width="60" height="60" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/port11-66x66.jpg"></a>
                        </div>
                        <div class="recent_image">
                            <a href="#"><img width="60" height="60" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/port10-66x66.jpg"></a>
                        </div>
                        <div class="recent_image">
                            <a href="#"><img width="60" height="60" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/port17-66x66.jpg"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content19">
            <div class="content19_content">
                <div class="content_content19">
                    <div class="copy_right">
                        Copyright 2016- Syftet Theme by Syftet | All Rights Reserved | Powered by WordPress
                    </div>
                    <div class="social">
                        <a class="font_awesome4 fb" href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>


<script language="javascript">
    $(function () {

        var header = $('.header');
        $(window).scroll(function () {
            var scroll = $(this).scrollTop();
            var div_top = $(".content2_image").offset().top - $(".header").offset().top
            if (scroll >= 50) {
                $(".header").stop().animate({
                    height: "65px"
                }, 100, function () {

                    // Animation complete.
                });
            }
            else {
                $(".header").stop().animate({
                    height: "85px"
                }, 100, function () {

                    // Animation complete.
                });
            }
            //console.log($(".content2_image").offset().top - $(".header").offset().top);
            if (div_top <= 300) {
                //$(".content2_image").removeClass("hide").fadeIn();
                //$(".content-2").removeClass('hide');
                var contents = $(".content2_image").animate({
                    opacity: 1,
                    top: "+=50"
                });
                //                      }).effect("slide", { direction: "down", mode : "show"}, 10000);
                //                      $.queue(contents[0], "fx", function() {
                //                        setTimeout(function()
                //                          {
                //                            $(".content2_image").effect("slide", { direction: "down", mode : "show"}, 10000);
                //                          }, 100);
                //                          $.dequeue(this);
                //                      });
                //                    setTimeout(function()
                //                    {
                //                        $(".content2_image").effect("slide", { direction: "down", mode : "show"}, 500);
                //                    }, 500);
                //                    $(".content2_image").fadeIn("slow");
                //                    setTimeout(function()
                //                    {
                //                        $(".content2_image").effect("blind", { direction: "vertical", mode : "show" }, 490);
                //                    }, 500);
                //$(".content2_image").effect('slide', {direction: 'top', mode: 'show'}, 10000);
            }
        });
    });
</script>
</html>
