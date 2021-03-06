<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?></title>

    <!-- CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo get_template_directory_uri(); ?>/css/color-orange.css" rel="stylesheet" media="screen" title="default">
    <link href="<?php echo get_template_directory_uri(); ?>/css/width-boxed.css" rel="stylesheet" media="screen" title="default">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <![endif]-->

    <?php
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
    ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=154107831273305";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php if(of_get_option('om_show_options_panel','')) : ?>
    <!-- Setting Options -->
    <div id="color-switcher" class="animated fadeIn animation-dalay-10">
        <div id="color-switcher-tab">
            <i class="fa fa-gear fa fa-2x"></i>
        </div>
        <div id="color-switcher-content">
            <h3>Color Selector</h3>
            <a href="#" rel="color-default.css" class="color default">default</a>
            <a href="#" rel="color-niceblue.css" class="color niceblue">niceblue</a>
            <a href="#" rel="color-intenseblue.css" class="color intenseblue">intenseblue</a>
            <a href="#" rel="color-otherblue.css" class="color otherblue">otherblue</a>
            <a href="#" rel="color-blue.css" class="color blue">blue</a>
            <a href="#" rel="color-puregreen.css" class="color puregreen">puregreen</a>
            <a href="#" rel="color-grassgreen.css" class="color grassgreen">grassgreen</a>
            <a href="#" rel="color-green.css" class="color green">green</a>        
            <a href="#" rel="color-olive.css" class="color olive">olive</a>
            <a href="#" rel="color-gold.css" class="color gold">gold</a>
            <a href="#" rel="color-orange.css" class="color orange">orange</a>
            <a href="#" rel="color-pink.css" class="color pink">pink</a>
            <a href="#" rel="color-fuchsia.css" class="color fuchsia">fuchsia</a>
            <a href="#" rel="color-violet.css" class="color violet">violet</a>
            <a href="#" rel="color-red.css" class="color red">red</a>

            <h3>Container Selector</h3>
            <div class="btn-group">
                <button href="#" class="option btn btn-sm btn-primary" rel="width-boxed.css">Boxed</button>
                <button href="#" class="option btn btn-sm btn-primary" rel="width-full.css">Full Width</button>
            </div>
        </div>
    </div> <!-- color-switcher -->
<?php endif; ?>

<div class="boxed">
<?php
				$logo_postion = 'float-right';
				$header_box_right = of_get_option('header_box_right');
				$header_box_left = of_get_option('header_box_left');
				$logo = of_get_option('logo_upload');
				include('location_variables.php');
?>

<header id="header" class="hidden-xs">
    <div class="container">
		<?php if(isset($header_box_left) && $header_box_left != ''){ ?>
		<div class="header-text-left pull-left">
		<?php echo $header_box_left; ?>
		</div>
		<?php } ?>
        <div id="header-title" class="row">
            <div id="main_logo_container" class="col-sm-4">
                <h1 class="animated fadeInDown" id="main_logo"><a href="<?php bloginfo('home'); ?>" style="background-image: url('<?=$logo?>');"><?php bloginfo('name'); ?></a></h1>
            </div>
            <div class="col-sm-4" id="header-tagline">
                <p class="animated fadeInDown animation-delay-1"><?php bloginfo('description'); ?></p>
            </div>
            <div class="col-sm-4">
                <div id="header-locations">
                    <h3 class="animated fadeInDown animation-delay-3">3 Locations To Serve You</h2>
                    <ul>
                        <?php // Location HREF Links
                            $location_url_prefix = "/our-location/hearing-aids-";
                            $main_location_url = $location_url_prefix . $main_city . '-' . $main_state . '-' . $main_zip . '/';
                            $main_location_url = strtolower($main_location_url);
                            $second_location_url = $location_url_prefix . $second_city . '-' . $second_state . '-' . $second_zip . '/';
                            $second_location_url = strtolower($second_location_url);
                            $third_location_url = $location_url_prefix . $third_city . '-' . $third_state . '-' . $third_zip . '/';
                            $third_location_url = strtolower($third_location_url);
                        ?>
                        <li class="animated fadeInRight animation-delay-1"><a href="<?php echo $main_location_url ?>"><?php echo $main_street . ", " . $main_city; ?></a><a href="<?php echo $main_g; ?>" rel="publisher" class="social-icon soc-google-plus"><span class="description">Google+ Main Location</span><span class="fa fa-google-plus"></span></a></li>
                        <li class="animated fadeInRight animation-delay-2"><a href="<?php echo $second_location_url; ?>"><?php echo $second_street . ", " . $second_city; ?></a><a href="<?php echo $second_g; ?>" rel="publisher" class="social-icon soc-google-plus"><span class="description">Google+ Second Location</span><span class="fa fa-google-plus"></span></a></li>
                        <li class="animated fadeInRight animation-delay-3"><a href="<?php echo $third_location_url; ?>"><?php echo $third_street . ", " . $third_city; ?></a><a href="<?php echo $third_g; ?>" rel="publisher" class="social-icon soc-google-plus"><span class="description">Google+ Third Location</span><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                    <a href="/walk-hearing-aid-hours/" id="header-walkin" class="animated fadeInRight animation-delay-4">For Walk-In Hours Click Here</a>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</header> <!-- header -->



<nav class="navbar navbar-static-top navbar-mind" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand visible-xs" href="index.html">ENT & Allergy of Delaware | <span>Hearing Services</span></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mind-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-inverse"></i>
            </button>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-mind-collapse">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => '',
                    'container_class'   => '',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>

          <?php /* 
          //// nav bar right
           <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                <?php if ( is_user_logged_in() ) : ?>
                    <?php global $current_user;
                        get_currentuserinfo();
                    ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $current_user->user_login; ?></a>
                    <div class="dropdown-menu dropdown-profile animated fadeInUp">
                        <?php echo get_avatar( $current_user->user_email, 100); ?> 
                        <h4><?php echo $current_user->user_login; ?></h4>
                        <?php echo $current_user->user_email; ?><br>
                        <a href="<?php echo get_page_link(get_page_by_title('Profile')->ID); ?>">Profile</a> | <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
                    </div>
                <?php else : ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login</a>
                    <div class="dropdown-menu dropdown-login animated fadeInUp">
                        <form role="form" name="loginform" id="loginform" action="<?php echo wp_login_url(); ?>" method="post">
                            <h4 class="section-title">Login Form</h4>
                    
                            <div class="form-group">
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" name="log" id="user_login">
                                </div>
                                <br>
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" name="pwd" id="user_pass">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  name="rememberme" id="rememberme" value="forever" tabindex="90"> Remember me
                                    </label>
                                </div>
                                <input type="hidden" name="redirect_to" value="<?php bloginfo('home'); ?>" />
                                <input type="hidden" name="testcookie" value="1" />
                                <button type="submit" class="btn btn-primary pull-right" name="wp-submit" id="wp-submit">Login</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>      
                    </div>
                <?php endif; ?>
                </li> <!-- dropdown -->
            </ul> <!-- nav nabvar-nav --> */ ?>
        </div><!-- navbar-collapse -->
        <div id="social-header" class="hidden-xs">
            <a href="https://twitter.com/ENTAllergyOfDE" class="social-icon soc-twitter animated fadeInDown animation-delay-1" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/pages/ENT-Allergy-of-Delaware/400863850015950" class="social-icon soc-facebook animated fadeInDown animation-delay-3" target="_blank"><i class="fa fa-facebook"></i></a>
        </div>
    </div> <!-- container -->
</nav> <!-- navbar navbar-default -->