<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
	<?php if ( is_tag() ) {
			echo 'Tag Archive for &quot;'.$tag.'&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} else {
			echo wp_title( ' | ', false, right ); bloginfo( 'name' );
		} ?>
	</title>
	<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
  <link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="<?php echo get_option('mytheme_favicon'); ?>" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<!-- The HTML5 Shim is required for older browsers, mainly older versions IE -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
    	<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" &nbsp;alt="" /></a>
    </div>
  <![endif]-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
  <!--[if lt IE 9]>
  <style type="text/css">
    .border, .button, .post_cycle dt time, .post_cycle dt span.title, .wpcf7-form .submit-wrap input, .wpcf7-form input[type="text"], .wpcf7-form textarea {
      behavior:url(<?php bloginfo('stylesheet_directory'); ?>/PIE.php)
      }
  </style>
  <![endif]-->
  
  <script type="text/javascript">
  	// initialise plugins
		jQuery(function(){
			// main navigation init
			jQuery('ul.sf-menu').superfish({
				delay:       <?php echo get_option('theme1272_sf_delay'); ?>, 		// one second delay on mouseout 
				animation:   {opacity:'<?php echo get_option('theme1272_sf_fade_in'); ?>',height:'<?php echo get_option('theme1272_sf_slide_down'); ?>'}, // fade-in and slide-down animation 
				speed:       '<?php echo get_option('theme1272_sf_speed'); ?>',  // faster animation speed 
				autoArrows:  <?php echo get_option('theme1272_sf_arrows'); ?>,        // generation of arrow mark-up (for submenu) 
				dropShadows: <?php echo get_option('theme1272_sf_dropshadows'); ?>    // drop shadows (for submenu)
			});
			
		});
  </script>
  
  <!-- Custom CSS -->
  <?php $theme1272_custom_css = get_option('theme1272_custom_css'); ?>
	<?php if($theme1272_custom_css){?>
  <style type="text/css">
  	<?php echo get_option('theme1272_custom_css'); ?>
  </style>
  <?php }?>
</head>

<body <?php body_class(); ?>>

<div id="main"><!-- this encompasses the entire Web site -->
	<header id="header">
		<div class="container">
      <div class="logo">
        <?php $theme1272_logo = get_option('theme1272_logo'); ?>
        <?php if($theme1272_logo){?>
          <a href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_option('theme1272_logo'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
        <?php } else { ?>
          <?php if( is_front_page() || is_home() || is_404() ) { ?>
            <h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
          <?php } else { ?>
            <h2><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h2>
          <?php } ?>
        <?php }?>
        <p class="description"><?php bloginfo('description'); ?></p>
      </div>
      <nav class="primary">
        <?php wp_nav_menu( array(
          'container'       => 'ul', 
          'menu_class'      => 'sf-menu clearfix', 
          'menu_id'         => 'topnav',
          'depth'           => 0,
          'theme_location' => 'header_menu' 
          )); 
        ?>
      </nav><!--.primary-->
      <a href="<?php bloginfo('url'); ?>/wp-login.php" id="login-link">clients login</a>
      <?php if ( get_option('theme1272_searchbox') == 'true') { ?>  
        <div id="top-search">
          <form method="get" action="<?php echo get_option('home'); ?>/">
            <input type="text" name="s"  class="input-search" placeholder="Search" />
          </form>
        </div>  
      <?php } ?>
      <div id="widget-header">
        <?php if ( ! dynamic_sidebar( 'Header' ) ) : ?>
          <!-- Widgetized Header -->
        <?php endif ?>
      </div><!--#widget-header-->
		</div><!--.container-->
	</header>
  <div class="container">
  	<?php if ( ! dynamic_sidebar( 'Request' ) ) : ?>
      <!--Widgetized 'Request' for the home page-->
    <?php endif ?>
  </div>
	<div class="primary_content_wrap clearfix">