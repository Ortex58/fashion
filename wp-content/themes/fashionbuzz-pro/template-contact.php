<?php
/**
Template name: Contact Us

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Fashionbuzz Pro
 */

get_header(); ?>

<div class="container content-area">
    <div class="middle-align">
        <div class="site-main sitefull">
     
           		
            <div class="contact_main">
			  <?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>				
			  <?php endwhile; // end of the loop. ?>
            </div><!-- .contact_left -->
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="gmap">
<div class="container">
<div class="contact_info">
	<?php if ( !dynamic_sidebar('sidebar-contact')) : ?>
       <?php if( of_get_option('contacttitle',true) != ''){ ?>
                <h2 class="section_title"><?php echo of_get_option('contacttitle'); ?></h2>
       <?php } ?>               
      
            <div class="contactpage">
            	<?php if( of_get_option('contactdescription',true) != ''){ ?>
                    <p><?php echo of_get_option('contactdescription'); ?></p>
                <?php } ?>
                <?php if( of_get_option('address',true) != ''){ ?>
                  <p><i class="fa fa-map-marker"></i> <?php echo of_get_option('address'); ?></p>
                <?php } ?>	
           
                <?php if( of_get_option('phone',true) != ''){ ?>
                    <p><i class="fa fa-phone"></i><?php echo of_get_option('phone'); ?></p>
                 <?php } ?>
                 
                 <?php if( of_get_option('fax',true) != ''){ ?>
                    <p><i class="fa fa-fax"></i><?php echo of_get_option('fax'); ?></p>
                 <?php } ?>
                
                <?php if( of_get_option('email',true) != '' ) { ?>
                  <p><i class="fa fa-envelope"></i><a href="mailto:<?php echo of_get_option('email',true); ?>"><?php echo of_get_option('email',true) ; ?></a></p>
               <?php } ?>                    
            </div>
        
        <?php endif; ?>
    </div><!-- .contact_right -->
 </div>
<iframe src="<?php echo of_get_option('googlemap', true); ?>" width=98% height=700 frameborder=0></iframe></div>
<?php get_footer(); ?>