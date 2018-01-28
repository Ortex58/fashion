<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Fashionbuzz Pro
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
             <span class="logo-border"><a href="<?php echo home_url('/'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                  <p><?php bloginfo('description'); ?></p></span>
             <?php } elseif( of_get_option( 'logo', true ) != '' ) { ?>
             <a href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url( of_get_option( 'logo', true )); ?>" / ></a>
             <?php } else { ?>
             <span class="logo-border"><a href="<?php echo home_url('/'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                  <p><?php bloginfo('description'); ?></p></span>
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


<?php if ( is_home() || is_front_page() ) { ?>
<?php if( of_get_option('customslider',true) == ''){ ?>
    <div class="slider-main">
       <?php
			$slAr = array();
			$m = 0;
			for ($i=1; $i<11; $i++) {
				if ( of_get_option('slide'.$i, true) != "" ) {
					$imgSrc 	= of_get_option('slide'.$i, true);
					$imglink	= of_get_option('slidelink'.$i, true);
					$slidebutton	= of_get_option('slidebutton'.$i, true);
					$slideurl	= of_get_option('slideurl'.$i, true);
					$slidesecbutton	= of_get_option('slidesecbutton'.$i, true);
					$slidesecurl	= of_get_option('slidesecurl'.$i, true);
					if ( strlen($imgSrc) > 10 ) {
						$slAr[$m]['image_src'] = of_get_option('slide'.$i, true);
						$slAr[$m]['image_button'] = of_get_option('slidebutton'.$i, true);
						$slAr[$m]['image_url'] = of_get_option('slidelink'.$i, true);
						$m++;
					}
				}
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_button']);?>" class="nivo-overlay" title="<?php echo '#slidecaption'.$n ; ?>"/><?php
                    $slideno[] = $n;
                }
                ?>
                </div> 
                
                 <?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
                    	<?php if( of_get_option('slidetitlesm'.$sln, true) != '' ){ ?>                          
                        	<h6><?php echo of_get_option('slidetitlesm'.$sln, true); ?></h6>						
                        <?php } ?>
                    	<?php if( of_get_option('slidetitle'.$sln, true) != '' ){ ?>                          
                        <a href="<?php echo of_get_option('slideurl'.$sln, true); ?>"><h2><?php echo of_get_option('slidetitle'.$sln, true); ?></h2></a>						
                        <?php } ?>
                         <?php if( of_get_option('slidedesc'.$sln, true) != '' ){ ?>                         
                             <p><?php echo do_shortcode(of_get_option('slidedesc'.$sln, true)); ?></p>
                         <?php } ?>						                        
                        <?php if( of_get_option('slideurl'.$sln, true) != '' ){ ?>
                             <a class="button" href="<?php echo of_get_option('slideurl'.$sln, true); ?>">							
                               <?php echo of_get_option('slidebutton'.$sln, true); ?>
                             </a>
                         <?php } ?>
                         <?php if( of_get_option('slidesecurl'.$sln, true) != '' ){ ?>
                             <a class="button2" href="<?php echo of_get_option('slidesecurl'.$sln, true); ?>">							
                               <?php echo of_get_option('slidesecbutton'.$sln, true); ?>
                             </a>
                         <?php } ?>  
                   
                    </div><?php } } ?>            

    </div><!-- slider -->
    
<?php } else {
 $short_code = of_get_option('customslider');
 echo do_shortcode($short_code);
 } ?>
	<?php } else { ?>        
		<div class="innerbanner">                 
          <?php
			$header_image = get_header_image();
			
			if( is_single() || is_archive() || is_category() || is_author()|| is_search()) { 
				if(!empty($header_image)){
					echo '<img src="'.esc_url( $header_image ).'" width="'.get_custom_header()->width.'" height="'.get_custom_header()->height.'" alt="" />';
				} else {
        			echo '<img src="'.esc_url( of_get_option( 'innerpagebanner', true )).'" alt="">';
				}
			}
			elseif( has_post_thumbnail() ) {
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$thumbnailSrc = $src[0];
				echo '<img src="'.$thumbnailSrc.'" alt="">';
			} 
			elseif ( ! empty( $header_image ) ) {
				echo '<img src="'.esc_url( $header_image ).'" width="'.get_custom_header()->width.'" height="'.get_custom_header()->height.'" alt="" />';
            }	
			else { 
            	echo '<img src="'.esc_url( of_get_option( 'innerpagebanner', true )).'" alt="">';				
		    } ?>
            <header class="entry-header">
            	<div class="breadcrumb"><?php custom_breadcrumbs(); ?></div>
                <h1 class="entry-title">
                  <span><?php if(is_page()) { ?>
              		<?php the_title(); ?>
						<?php } elseif(is_category()) { ?>
                            <?php single_cat_title('Category: '); ?>
                        <?php } elseif(is_archive()) { ?>
                            <?php
                                if ( is_category() ) :
                                    single_cat_title();
                        
                                elseif ( is_tag() ) :
                                    single_tag_title('Tag: ');
                        
                                elseif ( is_author() ) :
                                    /* Queue the first post, that way we know
                                     * what author we're dealing with (if that is the case).
                                    */
                                    the_post();
                                    printf( __( 'Author: %s', 'fashionbuzz' ), '<span class="vcard">' . get_the_author() . '</span>' );
                                    /* Since we called the_post() above, we need to
                                     * rewind the loop back to the beginning that way
                                     * we can run the loop properly, in full.
                                     */
                                    rewind_posts();
                        
                                elseif ( is_day() ) :
                                    printf( __( 'Day: %s', 'fashionbuzz' ), '<span>' . get_the_date() . '</span>' );
                        
                                elseif ( is_month() ) :
                                    printf( __( 'Month: %s', 'fashionbuzz' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
                        
                                elseif ( is_year() ) :
                                    printf( __( 'Year: %s', 'fashionbuzz' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
                        
                                elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                                    _e( 'Asides', 'fashionbuzz' );
                        
                                elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                                    _e( 'Images', 'fashionbuzz');
                        
                                elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                                    _e( 'Videos', 'fashionbuzz' );
                        
                                elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                                    _e( 'Quotes', 'fashionbuzz' );
                        
                                elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                                    _e( 'Links', 'fashionbuzz' );
                        
                                else :
                                    _e( 'Archives', 'fashionbuzz' );
                        
                                endif;
                            ?>
                        <?php } elseif( is_search()) { ?>
                            <?php printf( __( 'Search Results for: %s', 'fashionbuzz' ), '<span>' . get_search_query() . '</span>' ); ?>
                        <?php } elseif(is_404()) { ?>
                            <?php _e( '<strong>404</strong> Not Found', 'fashionbuzz' ); ?>
                        <?php } elseif(is_single()) { ?>
                            <?php the_title();?>
                        <?php } ;?>
                    </span>
                </h1>
            </header><!-- .entry-header -->
        </div> 
	<?php }	?> 
      <?php //include ('page-boxes.php'); ?>    