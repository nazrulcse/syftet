<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charshet="<?php bloginfo('charshet'); ?>">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <meta name="description" content="Syftet is a fast growing software product and services company in Bangladesh.
We have a team of talented engineer expertise on Ruby on Rails, .Net, PHP, Java, Android."/>
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/syftet.ico" type="image/x-icon">
    <link href="<?php bloginfo('stylesheet'); ?>" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/syftet.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/team.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/footer.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!------------fonts stylesheet-------->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fonts_museo_slab_3.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fonts_aleijadinho.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fonts_conv_delicatesans_bold.css"
          rel="stylesheet"/>
    <!------------Ends of fonts stylesheet-------->
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
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo_syftet.png" id="wows_0"/>
            </a>
        </div>
        <div class="responsive-menu-logo">
            <a href="javascript:void(0);">
                <i class="fa fa-bars fa-2x"> </i>
            </a>
        </div>
        <div class="menu hidden-mobile">
            <ul>
                <li><a href="<?php bloginfo('home'); ?>">Home</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#our-service">Service</a></li>
                <li><a href="#recent-work"> Recent Work </a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact-us">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        <div class="content1">
            <div class="overlay"></div>
            <div class="content1_header top-header-text">
                <div>
                    Web and Mobile Development.
                </div>
                Based on your requirements.
            </div>
        </div>
        <section id="about-us">
            <div class="content10x content-about-syftet">
                <div class="container">
                    <div class="content10_text">
                        <h2>About Syftet</h2>

                        <p>
                            Syftet is a fast growing software product and services company in Bangladesh.
                            Our journey started at 2016, But in the short time Syftet successfully track record of
                            delivering innovative and cost-effective technical services to customers in both Corporate
                            and public sectors. We follow agile methodologies for developing software.
                            We have a team of talented engineer. We are expertise on <b> Ruby on Rails, .Net, PHP, Java,
                                Android </b>.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="makes-us-unique">
            <div class="content10">
                <div class="container">
                    <div class="make-us-unique-container content10_text">
                        <h2>What Makes us UNIQUE?</h2>
                        <div class="syftet-row clearfix">
                            <div class="col-sm-4 syftet-layout-column">
                                <div class="syftet-person">
                                    <div class="service-title person-desc">
                                        <h2>
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/images/make_us_unique/reliable.png">
                                            Reliable
                                        </h2>
                                        <p>
                                            Syftet is a renowned offshore company. We believe in building and maintaining long term relationships with all our clients.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 syftet-layout-column">
                                <div class="syftet-person">
                                    <div class="person-desc">
                                        <div class="service-title">
                                            <h2>
                                                <img src="<?php echo esc_url(get_template_directory_uri());?>/images/make_us_unique/solutions.png">
                                                Solutions
                                            </h2>
                                            <p>
                                                We endeavor to offer you best solutions in order to acquire your maximum
                                                satisfaction. We are the masters in offering effective software
                                                development solutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 syftet-layout-column syftet-column-last">
                                <div class="syftet-person">
                                    <div class="person-desc">
                                        <div class="service-title">
                                            <h2>
                                                <img src="<?php echo esc_url(get_template_directory_uri());?>/images/make_us_unique/experience.png">
                                                Experience
                                            </h2>

                                            <p>
                                                We are pioneer in lambasting problems like web or software development
                                                etc. Our experts handle your assigned projects prudently.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="syftet-row clearfix">
                            <div class="col-sm-4 syftet-layout-column">
                                <div class="syftet-person">
                                    <div class="service-title person-desc">
                                        <h2>
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/images/make_us_unique/affordable1.png">
                                            Affordable
                                        </h2>

                                        <p>
                                            We have provided best plus affordable web development services to numerous
                                            large as well as medium entrepreneurs. We provides comprehensive support for
                                            software requirements and validation; process and workflow; change,
                                            configuration and release management.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

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
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="counter text-center">
                                <span class="counter_no">96%</span>

                                <p class="">Project Success Rate</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="counter text-center">
                                <span class="counter_no">98%</span>

                                <p class="counter_txt"> Client Positive Feedback </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="counter text-center">
                                <span class="counter_no">92%</span>

                                <p class="counter_txt">Test Code Coverage</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="counter text-center">
                                <span class="counter_no">12</span>

                                <p class="counter_txt">Project Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--        <section id="client-feedback">-->
<!--            <div class="content3">-->
<!--                <div class="container">-->
<!--                    <div class="content3_text">-->
<!--                        <h2> Client feedback &amp; project success story.</h2>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 col-sm-6 col-xs-6">-->
<!--                            <div class="counter text-center">-->
<!--                                <span class="counter_no">96%</span>-->
<!---->
<!--                                <p class="">Project Success Rate</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 col-sm-6 col-xs-6">-->
<!--                            <div class="counter text-center">-->
<!--                                <span class="counter_no">98%</span>-->
<!---->
<!--                                <p class="counter_txt"> Client Positive Feedback </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 col-sm-6 col-xs-6">-->
<!--                            <div class="counter text-center">-->
<!--                                <span class="counter_no">92%</span>-->
<!---->
<!--                                <p class="counter_txt">Test Code Coverage</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 col-sm-6 col-xs-6">-->
<!--                            <div class="counter text-center">-->
<!--                                <span class="counter_no">12</span>-->
<!---->
<!--                                <p class="counter_txt">Project Completed</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

        <section id="our-service">
            <div class="content4">
                <div class="content4_contentx container">
                    <div class="content4_text">
                        <h1>Our Services</h1>

                        <p>
                            We provide valuable services to make your life comfortable.
                        </p>
                    </div>
                    <div class="separator"></div>
                </div>
            </div>
            
            <div class="syftet-row clearfix">
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="service-title person-desc">
                            <h2>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/ror.png">
                                Ruby On Rails
                            </h2>
                            <p>
                                To build a modern web application is daunting task. Ruby on Rails makes it much easier
                                and more fun. It includes everything you need to build fantastic applications, and we have a gratest
                                Ruby on Rails team with friendly community.
                            </p>
<!--                            <p>-->
<!--                                To build a modern web application is daunting task. Ruby on Rails makes it much easier-->
<!--                                and more fun. <a class="read-more url-link-responsive"><b>Read More...</b></a>-->
<!--                                <span class="read-more-hide">-->
<!--                                    It includes everything you need to build fantastic applications, and we have a gratest-->
<!--                                    Ruby on Rails team with friendly community.-->
<!--                                </span>-->
<!--                            </p>-->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/php.png">
                                    PHP
                                </h2>
                                <p>
                                    Server scripting language PHP have more powerful tools that is especially suited for
                                    web development. It is a widely-used, free, and efficient alternative to competitors such as
                                    Microsoft's ASP.
                                    We have an experienced team of PHP developers who have been working with different
                                    PHP frameworks
                                    (Laravel, Codeigniter) and CMS (WordPress, Magento).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/dot-net.png">
                                    .Net
                                </h2>

                                <p>
                                    ".NET" can be used for any kind of app type or workload where It has several
                                    key features that are attractive to many
                                    developers, including automatic memory management and modern programming languages.
                                    Our team provide great experience for you in ASP.net applications from WebForms to
                                    different versions of MVC, WCF, WPF (web and mobile), EF, Web API.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-row clearfix">
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="service-title person-desc">
                            <h2>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/ios.png">
                                iOS
                            </h2>

                            <p>
                                iOS is the world’s most advanced mobile operating system, and it’s the foundation of
                                iPhone, iPad, and iPod touch with an easy-to-use interface, amazing features, and
                                security at its core. We will help you to give the freedom of mobility by developing
                                mobile applications using iOS.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/android.png">
                                    Android
                                </h2>

                                <p>
                                    Android is a mobile operating system developed by Google, based on
                                    the Linux kernel and designed primarily for touchscreen mobile devices such as smartphones and
                                    tablets. For developing Android application based on your requirements Our team here
                                    now to give you a best support.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/nodejs.png">
                                    Node JS
                                </h2>

                                <p>
                                    "Node.js" a framework that’s been around since 2009, is making a big impact in web
                                    programming circles with disciples in Microsoft, Yahoo, LinkedIn and PayPal,
                                    developers have not only heard of the merits of "Node.js" but they’re either using
                                    or learning it now. There are many great reasons to use "Node.js", regardless of
                                    experience level thats why our Syftet team are waiting for developed your
                                    requirements as
                                    soon as possible with the proper way.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-row clearfix">
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="service-title person-desc">
                            <h2>
                                <img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/angular-js.png"
                                    alt="Angular JS">
                                Angular JS
                            </h2>

                            <p>
                                For declaring static documents, HTML is great, but it falters when we try to use it for
                                declaring dynamic views in web-applications. AngularJS lets you extend HTML vocabulary
                                for your application. The resulting environment is extraordinarily expressive, readable,
                                and quick to develop.
                                Every feature can be modified or replaced by our valuable Syftet team to suit your
                                unique
                                development workflow and feature needs.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/ux-ui.png"
                                        alt="UX-UI Design">
                                    UX-UI Design
                                </h2>

                                <p>
                                    A Good UI and UX Design experienced has highly conversion rates and more power to
                                    enrich their product. In other words, it's nice to both the business side as well as
                                    the people using it. In the Syftet we have some running idea list which we're
                                    actively testing and writing exclusive stories about it.
                                    In the long run, our goal is to build out a repository of evidence showing clearly
                                    which ideas work better and which ones less so. We hope this will make life easier
                                    for others.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/testing.png">
                                    Testing
                                </h2>

                                <p>
                                    Software testing can provide objective, independent information about the quality of
                                    software and risk of its failure to users or sponsors. In the real world there no
                                    product is 100% bug free. Syftet team of Test techniques include the process of
                                    executing a program or application with the intent of finding software bugs.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-row clearfix">
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="service-title person-desc">
                            <h2>
                                <img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/deployment.png"
                                    alt="Deployment">
                                Deployment
                            </h2>

                            <p>
                                Software deployment is all of the activities that make a software system available for
                                use. We have vast experience of preparing server and deploy applications in the cloud.
                                We worked different distributions of Linux in Amazon EC2, Linode, Rackspace, Heroku,
                                GoDaddy, Brightbox and Site5.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="person-desc">
                            <div class="service-title">
                                <h2>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/maintenance.png"
                                        alt="Maintenance">
                                    Maintenance
                                </h2>

                                <p>
                                    Software maintenance is widely accepted part now a days, it stands for all the
                                    modifications and updations done after the delivery of software product. We will be
                                    there for you to maintain it – fixing the issues, implement new features, version
                                    up-gradation and other necessary stuffs.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            <section id="about-us">-->
<!--                <div class="content10">-->
<!--                    <div class="container">-->
<!--                        <div class="content10_text">-->
<!--                            <h2>About Syftet</h2>-->
<!---->
<!--                            <p>-->
<!--                                Syftet is a fast growing software product and services company in Bangladesh.-->
<!--                                Our journey started at 2016, But in the short time Syftet successfully track record of-->
<!--                                delivering innovative and cost-effective technical services to customers in both Corporate-->
<!--                                and public sectors. We follow agile methodologies for developing software.-->
<!--                                We have a team of talented engineer. We are expertise on <b> Ruby on Rails, .Net, PHP, Java,-->
<!--                                    Android </b>.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->

        </section>
        <section id="recent-work">
            <div class="content2">
                <div class="content2_content container">
                    <div class="content2_header">
                        <h1>Recent Works</h1>

                        <p>Recently we are working on.</p>

                    </div>
                    <div class="separator"></div>
                    <div class="content2_image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/recent-works.png">
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio">
            <div class="content4_content container">
                <div class="content2_header">
                    <h1>Portfolio</h1>
                    <p>
                        These are the provided solutions for our respected clients. Our clients are happy
                        so we are. Do you want some?
                    </p>
                </div>
                <div class="separator"></div>
            </div>

            <div class="syftet-row clearfix">
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="person-image-container">
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/nar.jpg">
                            <!--                        <img class="" style="" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team1.jpg">-->
                        </div>
                        <div class="person-desc">
                            <div class="person-author">
                                <h2>New Artist Release</h2>

                                <p>
                                    Since 2000, musical artists, models, and book authors worldwide have relied on New
                                    Artist Release to promote their talent to the world.
                                </p>
                                <p>
                                    <b>Technology:</b>
                                    Rubu on Rails, Mysql, HTML5, Ajax, Stripe Payment Gateway
                                </p>

                                <p>
                                    <b>
                                        <a href="http://192.81.216.169/" target="_blank"
                                           class="url-link-responsive">
                                            Visit New Artist Release.
                                        </a>
                                    </b>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="person-image-container">
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/shyftn.jpg">
                            <!--                        <img class="person-img img-responsive" src="http://Syftet.theme-syftet.com/wp-content/uploads/2012/08/team2.jpg">-->
                        </div>
                        <div class="person-desc">
                            <div class="person-author">
                                <h2>Shyftn</h2>

                                <p>
                                    Shyftn is a marketplace for listing and renting off road vehicles (ORV) with your
                                    friends and peers alike. Our main focus and goal is to provide everyone with an easy
                                    and affordable way to experience the thrill of off road riding
                                </p>

                                <p>
                                    <b>Technology:</b>
                                    Rubu on Rails, Sharetribe, Mysql, HTML5, Ajax, Braintree Payment Gateway
                                </p>

                                <p>
                                    <b>
                                        <a href="https://www.shyftn.com" target="_blank" class="url-link-responsive">
                                            Visit Shyftn.
                                        </a>
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column syftet-column-last">
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
                                    SRCL will be a leading provider of Environmental, Social and Economic consultancy
                                    services to businesses within a broad range of different manufacturing and
                                    commercial sectors.
                                </p>
                                <p>
                                    <b>Technology:</b> HTML5, CSS3, Bootstrap (responsive), Mysql, Java Script & JQuery,
                                    Wordpress (CMS)
                                </p>
                                <p>
                                    <b>
                                        <a href="http://srclgroup.com" target="_blank" class="url-link-responsive">
                                            Visit SRCL.
                                        </a>
                                    </b>

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-row clearfix">
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="person-image-container">
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/esales.jpg">
                        </div>
                        <div class="person-desc">
                            <h2>My Sales My Job</h2>

                            <p>
                                My Sales My Job is an Ecommerce site which carry on a good income way to subscriber.
                                It's as simple as that ....refferred lead buys a product and you get paid.
                            </p>
                            <p>
                                <b>Technology:</b>
                                Rubu on Rails, Mysql, HTML5, CSS3, Java Script & JQuery, Ajax
                            </p>
                            <p>
                                <b>
                                    <a href="http://mysalemyjob.com/" target="_blank" class="url-link-responsive">
                                        Visit My Sales My Job.
                                    </a>
                                </b>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <div class="person-image-container">
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/tangail.jpg">
                        </div>
                        <div class="person-desc">
                            <div class="person-author">
                                <h2>Tangail Enterprise</h2>
                                <p>
                                    Tangail Enterprise (ERP) is a category of business-management
                                    software—typically a suite of integrated applications—that an organization can use
                                    to collect, store, manage and interpret data from many business activities,
                                    including: product planning, purchase. manufacturing or service delivery.
                                </p>
                                <p>
                                    <b>Technology:</b>
                                    Rubu on Rails, Sharetribe, Mysql, HTML5, Ajax, Braintree Payment
                                    Gateway
                                </p>
                                <p>
                                    <b>
                                        <a href="http://188.166.172.38/employees/sign_in" target="_blank"
                                           class="url-link-responsive">
                                            Visit Tangail Enterprise.
                                        </a>
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <div class="person-image-container">
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/heroku.jpg">
                        </div>
                        <div class="person-desc">
                            <div class="person-author">
                                <h2>Processflow</h2>

                                <p>
                                    Processflow is a free open source project management tools HTML5 Layouts and more
                                    easy and powerfull feature to manage project
                                </p>
                                <p>
                                    <b>Technology:</b>
                                    Rubu on Rails, Sharetribe, Mysql, HTML5, Ajax, Braintree Payment
                                    Gateway
                                </p>
                                <p>
                                    <b>
                                        <a href="http://processflow.herokuapp.com/" target="_blank"
                                           class="url-link-responsive">
                                            Visit Processflow.
                                        </a>
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="syftet-row clearfix">
                <div class="col-sm-4 syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <div class="person-image-container">
                            <img class="person-img img-responsive img-thumbnail"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio/romotiq.jpg">
                        </div>
                        <div class="person-desc">
                            <div class="person-author">
                                <h2>Romotiq</h2>
                                <p>
                                    Romotiq Ltd. is a "true" business process outsourcing model whereby the sales team
                                    is
                                    exclusively recruited, trained, and managed for each client.
                                </p>
                                <p>
                                    <b>Technology:</b> Rubu on Rails, Sharetribe, Mysql, HTML5, Ajax, Braintree Payment
                                    Gateway
                                </p>
                                <p>
                                    <b>
                                        <a href="http://www.romotiq.com/" target="_blank" class="url-link-responsive">
                                            Visit Romotiq.
                                        </a>
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team">
            <div class="content4_content container">
                <div class="content2_header">
                    <h1>Our Valueable Team</h1>
                    <p>
                        So this is our team. Trust us, we can make you cry. And this is the tears of happiness not
                        sadness.
                    </p>
                </div>
                <div class="separator"></div>
            </div>

            <div class="syftet-row clearfix">
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/ziko.jpg"
                             class="person-img img-responsive">

                        <div class="team-person-desc">
                            <div class="person-author">
                                <div class="person-author-wrapper">
                                    <span class="person-name">Md. Mahabubul Alam</span><br>
                                    <span class="person-title">COO & Co-founder</span>
                                </div>
                                <div class="syftet-social-networks boxed-icons">
                                    <div class="syftet-social-networks-wrapper">
                                        <a class="btn btn-default" href="https://www.facebook.com/mahabub.ziko"
                                           target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a class="btn btn-default" href="https://twitter.com/zikoku07" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="https://plus.google.com/100425517053881281580/posts" target="_blank">
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a class="btn btn-default" href="https://www.linkedin.com/in/mahabubziko07"
                                           target="_blank">
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
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/nazrul.jpg"
                             class="person-img img-responsive">

                        <div class="team-person-desc">
                            <div class="person-author">
                                <div class="person-author-wrapper">
                                    <span class="person-name">Md Nazrul Islam</span><br>
                                    <span class="person-title">CEO & Co-founder</span>
                                </div>
                                <div class="syftet-social-networks boxed-icons">
                                    <div class="syftet-social-networks-wrapper">
                                        <a class="btn btn-default" href="https://www.facebook.com/mdnazrulislam.cse"
                                           target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a class="btn btn-default" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="https://plus.google.com/u/0/106988509265910539148/posts"
                                           target="_blank">
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a class="btn btn-default" href="https://www.linkedin.com/in/nazrulcse07"
                                           target="_blank">
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
                <div class="col-sm-4 syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/hr.jpg"
                             class="person-img img-responsive">

                        <div class="person-desc">
                            <div class="person-author team-person-desc">
                                <div class="person-author-wrapper">
                                    <span class="person-name">Mousumi Islam</span><br>
                                    <span class="person-title">HR & Accountant </span>
                                </div>
                                <div class="syftet-social-networks boxed-icons">
                                    <div class="syftet-social-networks-wrapper">
                                        <a class="btn btn-default" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a class="btn btn-default" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="#">
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="person-content ">
                                Mousumi Islam has completed her Honours in Accounting and Management
                                from B.L Collage Khulna, Bangladesh on 2016.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="syftet-row clearfix">
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/asad.png"
                             class="person-img img-responsive">

                        <div class="person-desc">
                            <div class="person-author team-person-desc">
                                <div class="person-author-wrapper">
                                    <span class="person-name">Md. Asaduzzaman</span><br>
                                    <span class="person-title">Developer</span>
                                </div>
                                <div class="syftet-social-networks boxed-icons">
                                    <div class="syftet-social-networks-wrapper">
                                        <a class="btn btn-default" href="https://www.facebook.com/plabon.asad"
                                           target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a class="btn btn-default" href="https://twitter.com/Plabon_asad"
                                           target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="https://plus.google.com/u/0/103764686291338308269/posts"
                                           target="_blank">
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="https://www.linkedin.com/in/asad-plabon-6880a7127" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="person-content">
                                Md. Asaduzzaman Skillings is Developer of Syftet.
                                As a software-developer, he has more than six months of training experience from
                                Bangladesh Computer Council (BCC) & completing BSC from Mathematics Discipline, Khulna
                                University of Bangladesh.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column">
                    <div class="syftet-person">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/pias.jpg"
                             class="person-img img-responsive">

                        <div class="person-desc">
                            <div class="person-author team-person-desc">
                                <div class="person-author-wrapper">
                                    <span class="person-name">Tanvir Hasan Pias</span><br>
                                    <span class="person-title">Developer</span>
                                </div>
                                <div class="syftet-social-networks boxed-icons">
                                    <div class="syftet-social-networks-wrapper">
                                        <a class="btn btn-default" href="https://www.facebook.com/tanvir.pias"
                                           target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a class="btn btn-default" href="https://twitter.com/pias221191"
                                           target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="https://plus.google.com/u/0/108851144385462334066/posts"
                                           target="_blank">
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="https://www.linkedin.com/in/tanvir-hasan-b2135482" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="person-content ">
                                Tanvir Hassan Pias has completed his BSC in computer science and engineering
                                from Mawlana Bhashani Science and Technology University, Bangladesh on 2014.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 syftet-layout-column syftet-column-last">
                    <div class="syftet-person">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/team/rubel.jpg"
                             class="person-img img-responsive">

                        <div class="team-person-desc">
                            <div class="person-author">
                                <div class="person-author-wrapper">
                                    <span class="person-name">Abu Raihan Rubel</span><br>
                                    <span class="person-title">Developer</span>
                                </div>
                                <div class="syftet-social-networks boxed-icons">
                                    <div class="syftet-social-networks-wrapper">
                                        <a class="btn btn-default" href="https://www.facebook.com/aburaihan.rubel.cse"
                                           target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a class="btn btn-default" href="https://twitter.com/AbuRaihanRubel"
                                           target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="https://plus.google.com/u/0/118308593010279249355/posts"
                                           target="_blank">
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a class="btn btn-default"
                                           href="https://www.linkedin.com/in/abu-raihan-mohammad-rubel-7a4359105"
                                           target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="person-content ">
                                Abu Raihan Rubel has completed his BSC in computer science and engineering
                                from Mawlana Bhashani Science and Technology University, Bangladesh on 2014.
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
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.5493680369705!2d90.36640315048066!3d23.834618291395113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c149ddd3e7d9%3A0xcd5e915ea87ad810!2sSyftet+IT!5e0!3m2!1sen!2sbd!4v1471338574462"
                width="100%" height="500" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
        </div>
        <div class="footer-warraper">
            <div class="container footer-section">
                <div class="row">
                    <div class="col-md-4 footer-section-col-left">
                        <a href="<?php bloginfo('home'); ?>">
                            <img alt="logo_white_big"
                                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/syftet-logo-white.png">
                        </a>
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
                                    <a href="mail_to:info@syftet.com" class="url-link-responsive"> info@syftet.com </a>
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
                                    <a class="btn btn-default social-icon" href="https://www.facebook.com/syftetit"
                                       target="_blank">
                                        <li><i class="fa fa-facebook facebook-icon fa-lg"></i></li>
                                    </a>
                                    <a class="btn btn-default social-icon" href="#" target="_blank">
                                        <li><i class="fa fa-twitter linkedin-icon fa-lg"></i></li>
                                    </a>
                                    <a class="btn btn-default social-icon" href="#" target="_blank">
                                        <li><i class="fa fa-linkedin linkedin-icon fa-lg"></i></li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="content19">
            <div class="content19_content">
                <div class="content_content19">
                    <div class="copy_right container text-center">
                        Copyright &copy; 2016 <a class="url-link-responsive" href="<?php bloginfo('home'); ?>">Syftet</a> | All Rights Reserved
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
                });
            }
        });

        $('.responsive-menu-logo a').click(function () {
            var menu = $('.menu');
            if (menu.is(":visible")) {
                menu.addClass('hidden-mobile');
                $(this).find('i').removeClass('fa-times').addClass('fa-bars');
            }
            else {
                menu.removeClass('hidden-mobile');
                $(this).find('i').addClass('fa-times').removeClass('fa-bars');
            }
        });

///////////////////Read more button expand//////////////////

//        $(".read-more").click(function () {
//            var paragraph = $(this).parent();
//            $(this).remove();
//            var element = paragraph.find("span");
//            element.before(element.html());
//            element.remove();
//        });

    });
</script>

</html>
