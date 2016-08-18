<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charshet="<?php bloginfo('charshet'); ?>">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link href="<?php bloginfo('stylesheet'); ?>" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/syftet.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/team.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/footer.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fonts_museo_slab_3.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fonts_aleijadinho.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fonts_conv_delicatesans_bold.css" rel="stylesheet"/>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <title>Syftet</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="fluid-container">
    <div class="header">
        <div class="header_logo">
            <a href="<?php bloginfo('home'); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo_syftet.png" alt="" title=""
                     id="wows_0"/>
            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a class="active" href="<?php bloginfo('home'); ?>">Home</a></li>
                <li><a href="#recent-work"> Recent Work </a></li>
                <li><a href="#our-service">Service</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#contact-us">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        <div class="content1">
            <div class="content1_header"></div>
        </div>

        <section id="recent-work">
            <div class="content2">
                <div class="content2_content container">
                    <div class="content2_header">
                        <h1>Recent Works</h1>

                        <p>Recently we are working on.</p>

                    </div>
                    <div class="separator"></div>
                    <div class="content2_image" ">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/recent-works.png"/>
                    </div>
                </div>
            </div>
        </section>

        <section id="client-feedback">
            <div class="content3">
                <div class="container">
                    <div class="content3_text">
                        <h2> Client feedback &amp; project success story.</h2>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-3">
                            <div class="counter text-center">
                                <span class="counter_no">96%</span>

                                <p class="">Project Success Rate</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter text-center">
                                <span class="counter_no">98%</span>

                                <p class="counter_txt"> Client Positive Feedback </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter text-center">
                                <span class="counter_no">92%</span>

                                <p class="counter_txt">Test Code Coverage</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter text-center">
                                <span class="counter_no">12</span>

                                <p class="counter_txt">Project Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-service">
            <div class="content4">
                <div class="content4_contentx container">
                    <div class="content4_text">
                        <h1>Our Services</h1>

                        <p>Syftet’s powerful theme and meta options along with its unique structure lets you create any
                            design style with just one theme. These simple yet powerful options allow you to create any
                            type
                            of website. No two versions of Syftet will ever look the same.</p>
                    </div>
                    <div class="separator"></div>
                </div>
            </div>

            <div class="syftet-row clearfix">
                <div class="syftet-one-third syftet-layout-column">
                    <div class="syftet-person">
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
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/php.png">
                                    PHP
                                </h2>

                                <p>Syftet is 100% responsive, each and every element you see is fully responsive. And
                                    the
                                    responsive mode can easily be turned on or off in the theme options panel! </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="syftet-one-third syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/dot-net.png">
                                    .Net
                                </h2>

                                <p>Syftet is 100% responsive, each and every element you see is fully responsive. And
                                    the
                                    responsive mode can easily be turned on or off in the theme options panel! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-row clearfix">
                <div class="syftet-one-third syftet-layout-column">
                    <div class="syftet-person">
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
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/android.png">
                                    Android
                                </h2>

                                <p>Syftet is 100% responsive, each and every element you see is fully responsive. And
                                    the
                                    responsive mode can easily be turned on or off in the theme options panel! </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="syftet-one-third syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/nodejs.png">
                                    Node JS
                                </h2>

                                <p>Syftet is 100% responsive, each and every element you see is fully responsive. And
                                    the
                                    responsive mode can easily be turned on or off in the theme options panel! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-row clearfix">
                <div class="syftet-one-third syftet-layout-column">
                    <div class="syftet-person">
                        <div class="service-title person-desc">
                            <h2>
                                <img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/angular-js.png"
                                    alt="Angular JS">
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
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/ux-ui.png"
                                        alt="UX-UI Design">
                                    UX-UI Design
                                </h2>

                                <p>Syftet is 100% responsive, each and every element you see is fully responsive. And
                                    the
                                    responsive mode can easily be turned on or off in the theme options panel! </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="syftet-one-third syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/testing.png">
                                    Testing
                                </h2>

                                <p>Syftet is 100% responsive, each and every element you see is fully responsive. And
                                    the
                                    responsive mode can easily be turned on or off in the theme options panel! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-row clearfix">
                <div class="syftet-one-third syftet-layout-column">
                    <div class="syftet-person">
                        <div class="service-title person-desc">
                            <h2>
                                <img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/deployment.png"
                                    alt="Deployment">
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
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/maintenance.png"
                                        alt="Maintenance">
                                    Maintenance
                                </h2>

                                <p>Syftet is 100% responsive, each and every element you see is fully responsive. And
                                    the
                                    responsive mode can easily be turned on or off in the theme options panel! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content10">
                <div class="container">
                    <div class="content10_text">
                        <h2>About Syftet</h2>

                        <p>
                            Many themes claim to have a quick setup, but leave you dealing with several XML files to
                            manually
                            import. Who wants to do that? We sure don’t. Syftet truly offers a quick, easy setup.
                            Install the
                            theme, click the demo content button and you receive a demo setup of pages, post, sliders,
                            sidebars, widgets, theme options and more. It doesn’t get any easier, our demo content
                            importer
                            is a beautiful thing.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio">
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
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/nar.jpg">
                            <!--                        <img class="" style="" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team1.jpg">-->
                        </div>
                        <div class="person-desc">
                            <h2>New Artist Release</h2>

                            <p>
                                Since 2000, musical artists, models, and book authors worldwide have relied on New
                                Artist Release to promote their talent to the world.
                            </p>

                            <p>
                                <b>Technology:</b> Rubu on Rails, Mysql, HTML5, Ajax, Stripe Payment Gateway
                            </p>

                            <p>
                                <b>URL:</b> <a href="http://newartistrealese.herokuapp.com" target="_blank">
                                    http://newartistrealese.herokuapp.com </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="syftet-one-third syftet-layout-column">
                    <div class="syftet-person">
                        <div class="person-image-container">
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/shyftn.jpg">
                            <!--                        <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team2.jpg">-->
                        </div>
                        <div class="person-desc">
                            <div class="person-authorxx">
                                <h2>Shyftn</h2>

                                <p>
                                    Shyftn is a marketplace for listing and renting off road vehicles (ORV) with your
                                    friends and peers alike. Our main focus and goal is to provide everyone with an easy
                                    and affordable way to experience the thrill of off road riding
                                </p>
                                <p>
                                    <b>Technology:</b> Rubu on Rails, Sharetribe, Mysql, HTML5, Ajax, Braintree Payment Gateway
                                </p>

                                <p>
                                    <b>URL:</b> <a href="https://www.shyftn.com" target="_blank">
                                        https://www.shyftn.com </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="syftet-one-third syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <div class="person-image-container">
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/srcl.jpg">
                            <!--                        <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team3.jpg">-->
                        </div>
                        <div class="person-desc">
                            <div class="person-author">
                                <h2>SRCL Group</h2>

                                <p>
                                    Syftet is 100% responsive, each and every element you see is fully responsive. And
                                    the
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
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/esales.jpg">
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
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/tangail.jpg">
                        </div>
                        <div class="person-desc">
                            <div class="person-author">
                                <h2>Tangail Enterprise</h2>

                                <p>
                                    Syftet is 100% responsive, each and every element you see is fully responsive. And
                                    the
                                    responsive mode can easily be turned on or off in the theme options panel!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="syftet-one-third syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <div class="person-image-container">
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/heroku.jpg">
                        </div>
                        <div class="person-desc">
                            <div class="person-author">
                                <h2>Processflow</h2>

                                <p>
                                    Syftet is 100% responsive, each and every element you see is fully responsive. And
                                    the
                                    responsive mode can easily be turned on or off in the theme options panel!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="team">
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
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/ziko.png"
                             class="person-img img-responsive">

                        <div class="team-person-desc">
                            <div class="person-author">
                                <div class="person-author-wrapper">
                                    <span class="person-name">Md. Mahabubul Alam</span><br>
                                    <span class="person-title">Coo & Co-founder</span>
                                </div>
                                <div class="syftet-social-networks boxed-icons">
                                    <div class="syftet-social-networks-wrapper">
                                        <a class="btn btn-default" href="https://www.facebook.com/mahabub.ziko">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a class="btn btn-default" href="https://twitter.com/zikoku07">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="https://plus.google.com/100425517053881281580/posts">
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
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/nazrul.png"
                             class="person-img img-responsive">

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
                                        <a class="btn btn-default"
                                           href="https://plus.google.com/u/0/106988509265910539148/posts">
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
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/rubel.png"
                             class="person-img img-responsive">

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
                                        <a class="btn btn-default"
                                           href="https://plus.google.com/u/0/118308593010279249355/posts">
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="https://www.linkedin.com/in/abu-raihan-mohammad-rubel-7a4359105">
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
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/asad.png"
                             class="person-img img-responsive">

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
                                        <a class="btn btn-default"
                                           href="https://plus.google.com/u/0/103764686291338308269/posts">
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
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/pias.png"
                             class="person-img img-responsive">

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
                                        <a class="btn btn-default"
                                           href="https://plus.google.com/u/0/108851144385462334066/posts">
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="https://www.linkedin.com/in/tanvir-hasan-b2135482">
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
            </div>
        </section>

        <div class="location-section">
            <div class="location-title container">
                <h1>Location</h1>
            </div>
        </div>
        <div class="fluid-container location-map">
            <div class="overlay" onClick="style.pointerEvents='none'"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.5493680369705!2d90.36640315048066!3d23.834618291395113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c149ddd3e7d9%3A0xcd5e915ea87ad810!2sSyftet+IT!5e0!3m2!1sen!2sbd!4v1471338574462"
                width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="footer-warraper">
            <div class="container footer-section">
                <div class="row">
                    <div class="col-md-4 footer-section-col-left">
                        <img width="113" height="25" alt="logo_white_big"
                             src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo_syftet_white.png">
                        <ul class="tweet company-address">
                            <li>
                                <span class="font_awesome3 jtwt_tweet fa fa-map-marker"></span>
                                <span class="tweet_text">
                                    Flat No: 601, House No: 262, Road No: 3, Mirpur DOHS, Dhaka 1216
                                </span>
                            </li>
                            <li>
                                <span class="font_awesome3 jtwt_tweet fa fa-phone"></span>
                                <span class="tweet_text">+8801722647240</span>
                            </li>
                            <li>
                                <span class="font_awesome3 jtwt_tweet fa fa-envelope"></span>
                                <span class="tweet_text">
                                    <a href="mail_to:info@syftet.com"> info@syftet.com </a>
                                </span>
                            </li>
                        </ul>

                    </div>


                    <div class="col-md-4 footer-section-col-mid footer-title tweet-section">
                        <h3>Tweets</h3>
                    </div>
                    <div class="col-md-4 footer-section-col-right footer-title">
                        <div class="">
                            <h3>Follow Us On</h3>

                            <div class="footer-follow-us clearfix">
                                <ul>
                                    <a class="btn btn-default social-icon" href="https://www.facebook.com/syftetit">
                                        <li><i class="fa fa-facebook fa-3x facebook-icon"></i></li>
                                    </a>
                                    <a class="btn btn-default social-icon" href="#">
                                        <li><i class="fa fa-twitter fa-3x linkedin-icon"></i></li>
                                    </a>
                                    <a class="btn btn-default social-icon" href="#">
                                        <li><i class="fa fa-linkedin fa-3x linkedin-icon"></i></li>
                                    </a>
                                </ul>
                            </div>


<!--                            <div class="recent_work">-->
<!--                                <div class="recent_image">-->
<!--                                    <a href="#"><img width="60" height="60"-->
<!--                                                     src="http://127.0.0.1/wp-content/themes/syftet/images/port21-66x66.jpg"></a>-->
<!--                                </div>-->
<!--                                <div class="recent_image">-->
<!--                                    <a href="#"><img width="60" height="60"-->
<!--                                                     src="http://127.0.0.1/wp-content/themes/syftet/images/port12-66x66.jpg"></a>-->
<!--                                </div>-->
<!--                                <div class="recent_image">-->
<!--                                    <a href="#"><img width="60" height="60"-->
<!--                                                     src="http://127.0.0.1/wp-content/themes/syftet/images/port18-66x66.jpg"></a>-->
<!--                                </div>-->
<!--                                <div class="recent_image">-->
<!--                                    <a href="#"><img width="60" height="60"-->
<!--                                                     src="http://127.0.0.1/wp-content/themes/syftet/images/port19-66x66.jpg"></a>-->
<!--                                </div>-->
<!--                                <div class="recent_image">-->
<!--                                    <a href="#"><img width="60" height="60"-->
<!--                                                     src="http://127.0.0.1/wp-content/themes/syftet/images/port15-66x66.jpg"></a>-->
<!--                                </div>-->
<!--                                <div class="recent_image">-->
<!--                                    <a href="#"><img width="60" height="60"-->
<!--                                                     src="http://127.0.0.1/wp-content/themes/syftet/images/port11-66x66.jpg"></a>-->
<!--                                </div>-->
<!--                                <div class="recent_image">-->
<!--                                    <a href="#"><img width="60" height="60"-->
<!--                                                     src="http://127.0.0.1/wp-content/themes/syftet/images/port10-66x66.jpg"></a>-->
<!--                                </div>-->
<!--                                <div class="recent_image">-->
<!--                                    <a href="#"><img width="60" height="60"-->
<!--                                                     src="http://127.0.0.1/wp-content/themes/syftet/images/port17-66x66.jpg"></a>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="content19">
            <div class="content19_content">
                <div class="content_content19">
                    <div class="copy_right">
                        Copyright &copy; 2016 Syftet Theme by Syftet | All Rights Reserved
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>

<script type="text/javascript">
    $(function () {

        var header = $('.header');
        $(window).scroll(function () {
            var scroll = $(this).scrollTop();
            var div_top = $(".content2_image").offset().top - $(".header").offset().top
            if (scroll >= 100) {
                $(".header").stop().animate({
                    top: "-6px"
                }, 100, function () {
                });
            }
            else {
                $(".header").stop().animate({
                    top: "0px"
                }, 100, function () {

                    // Animation complete.
                });
            }
            //console.log($(".content2_image").offset().top - $(".header").offset().top);
            if (div_top <= 300) {
                //$(".content2_image").removeClass("hide").fadeIn();
                //$(".content-2").removeClass('hide');
//                var contents = $(".content2_image").stop().animate({
//                    opacity: 1,
//                    top: "+=50"
//                });
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
