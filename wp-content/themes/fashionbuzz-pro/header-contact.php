<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Photolite Pro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="all" />
<![endif]-->
<?php 
	wp_head(); 
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	if( !get_option( $themename ) ) {
	require get_template_directory() . '/index-default.php';
	exit;
	}
?>
</head>

<body id="top" <?php body_class(); ?>>
<div id="pagewrap" <?php if( of_get_option('boxlayout', true) != '' ) { ?>class="boxlayout"<?php } ?>>
  

<div class="header">
    <div class="container">	
        <div class="logo">
            <?php if(of_get_option('logo',true) == 1) { ?>
             <a href="<?php echo home_url('/'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                  <p><?php bloginfo('description'); ?></p>
             <?php } elseif( of_get_option( 'logo', true ) != '' ) { ?>
             <a href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url( of_get_option( 'logo', true )); ?>" / ></a>
             <?php } else { ?>
             <a href="<?php echo home_url('/'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                  <p><?php bloginfo('description'); ?></p>
             <?php } ?>
        </div><!-- .logo -->                 
        <div class="header_right">
            <div class="toggle">
                <a class="toggleMenu" href="#">
                <?php if( of_get_option('menuwordchange',true) != '') { ?>
                    <?php echo of_get_option('menuwordchange'); ?>         
                <?php } else { ?>                 
                    <?php _e('Menu','fashionbuzz'); ?>                
                <?php } ?>
                </a>
            </div><!-- toggle -->    
            <div class="sitenav">                   
             <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>   
            </div><!--.sitenav -->              
        </div><!--header_right--><div class="clear"></div>
    </div><!-- container -->
</div><!-- .header -->
    