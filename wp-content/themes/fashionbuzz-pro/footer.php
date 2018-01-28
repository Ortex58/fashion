<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Fashionbuzz Pro
 */
?>

<div id="footer-wrapper">   
        
    	<div class="container">        	
        	<?php if(!dynamic_sidebar('footer-1')) : ?>
              <div class="cols-3 widget-column-1"> 
              	<h5><?php if( of_get_option('abtustitle') != ''){ echo of_get_option('abtustitle');}; ?></h5>
                <p><?php if( of_get_option('abtusdesc') != ''){ echo of_get_option('abtusdesc');}; ?></p>                  
               </div>
            <?php endif; ?>           
            
          
           <?php if(!dynamic_sidebar('footer-2')) : ?>
              <div class="cols-3 widget-column-2">                           	
               	<h5><?php if( of_get_option('lntitle') != ''){ echo of_get_option('lntitle');}; ?></h5>
                <ul class="recent-post"> 
                	<?php query_posts('post_type=post&showposts=3'); ?>
                    <?php  while( have_posts() ) : the_post(); ?>                  	
                    <li>
                    	
                        	<?php if ( has_post_thumbnail() ) ;?>
                            	<span class="lp-thumb"> 
                                	<?php { the_post_thumbnail('thumbnail'); }?>
                                </span> 
                        
                        <span class="lp-data">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>              
                   			<?php echo content( of_get_option('footerpostslength') ); ?>
                        </span><div class="clear"></div>                    					
                    </li><div class="clear"></div>
                    <?php endwhile; ?>
                    </ul>               
               </div>
            <?php endif; ?>
            
            <?php if(!dynamic_sidebar('footer-3')) : ?> 
             <div class="cols-3 widget-column-3">  
             	<h5><?php if( of_get_option('contacttitle') != ''){ echo of_get_option('contacttitle');}; ?></h5>
                	<div class="contactdetail">
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
                  <?php if( of_get_option('footersocialicon') != '') { echo do_shortcode(of_get_option('footersocialicon')); } ; ?>              	   
             </div>             
            <?php endif; ?>             
            
            <div class="clear"></div>
        </div><!--end .container-->
     
        <div class="copyright-wrapper">
        	<div class="container">
            	
                    <div class="copyright-txt"><?php if( of_get_option('copytext',true) != ''){ echo of_get_option('copytext',true); }; ?></div>
                   <!-- <div class="designby"><?php //if( of_get_option('designbytext',true) != ''){ echo of_get_option('designbytext',true); }; ?></div> -->
                    <div class="clear"></div>
                
            </div><!-- container --> 
       </div><!-- copyright-wrapper -->
       
    </div><!-- footer-wrapper -->    
<?php if( of_get_option('backtotop') != '') { echo do_shortcode(of_get_option('backtotop')); } ; ?>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('#mixitup').mixitup({
		animation: {
			effects: 'fade rotateZ(-180deg)', /* fade scale */
			duration: 700 /* 600 */
		},
	});
});	
if(jQuery(window).width() >= 1170){
  new WOW().init();
}
</script>
<?php wp_footer(); ?>
</div>
</body>
</html>