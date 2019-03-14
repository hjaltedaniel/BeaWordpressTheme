<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">
	<meta name="google-site-verification" content="Ywg_Qi-VMyb8bXG3mooyyidaJ3JYw-a5EmMsJWCuzWc" />
    <title>
        <?php wp_title('|',1,'right'); ?>
            <?php bloginfo('name'); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.10&appId=171878166190644";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand d-lg-none d-sm-block" href="<?php echo site_url(); ?>">
                    BEA
                </a>
                <a href="<?php echo site_url(); ?>"><img class="navbar-brand d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" width="5%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'navbar-nav ml-auto', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'navbarResponsive', 'walker' => new wp_bootstrap_navwalker) ); ?>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </header>

    <div class="container main-container">
