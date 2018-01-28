<?php if ( is_home() || is_front_page() ) { ?>

<section id="pagearea" <?php if( of_get_option('hidefourbxsec', true) != '' ) { ?>style="display:none"<?php } ?>>
<div class="container">
  <div class="pagearea-inner"> 
		<?php
			$boxArr = array();
			   if( of_get_option('box1',true) != '' ){
				$boxArr[] = of_get_option('box1',false);
			   }
			   if( of_get_option('box2',true) != '' ){
				$boxArr[] = of_get_option('box2',false);
			   }
			   if( of_get_option('box3',true) != '' ){
				$boxArr[] = of_get_option('box3',false);
			   }
			   if( of_get_option('box4',true) != '' ){
				$boxArr[] = of_get_option('box4',false);
			   }
			   if( of_get_option('box5',true) != '' ){
				$boxArr[] = of_get_option('box5',false);
			   }			  
			
			
			if (!array_filter($boxArr)) {
			for($fx=1; $fx<=4; $fx++) {
			?>
            <div class="fourbox <?php if($fx%4==0) { echo "last_column"; } ?>" style="background-color:<?php echo of_get_option('boxbg'.$fx,true); ?>;">
             
                <div class="thumbbx"><img src="<?php echo get_template_directory_uri(); ?>/images/feature<?php echo $fx; ?>.jpg" alt="" width="60" /></div>
                 <div class="fourbxcontent">
                 	<a href="<?php the_permalink(); ?>"><h3><?php _e('Fashionbuzz', 'fashionbuzz') ?> <?php echo $fx; ?></h3></a>
                 	<p><?php _e('Proin et augue nisl. Phasellus sed pharetra lorem, sed cursus libero. Maecenas sit amet dapibus turpis. Etiam fermentum pharetra nisl', 'fashionbuzz') ?></p> 
                     <?php if( of_get_option('readmorebutton',true) != '') { ?>
               			<a class="button" href="<?php the_permalink(); ?>"><?php echo of_get_option('readmorebutton'); ?></a>      
				  	 <?php } ?>
                                 
              	 </div><div class="clear"></div>
         	</div>
			<?php 
			} 
			} else {
				$box_column = array('no_column','one_column','two_column','three_column','four_column','five_column');
				$fx = 1;
				$queryvar = new wp_query(array('post_type' => 'page', 'post__in' => $boxArr, 'orderby' => 'post__in', 'posts_per_page' => 5 ));				
				while( $queryvar->have_posts() ) : $queryvar->the_post(); ?> 
        	    <div class="fourbox <?php echo $box_column[count($boxArr)]; ?> <?php if($fx%3==0) { echo "last_column"; } ?>" style="background-color:<?php echo of_get_option('boxbg'.$fx,true); ?>;">
				 				 
                <div class="thumbbx"><img alt="" src="<?php echo esc_url( of_get_option( 'boximg'.$fx, true )); ?>" / ></div>
                 <div class="fourbxcontent"><a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                  <?php echo content( of_get_option('pageboxlength') ); ?>
                   <?php if( of_get_option('readmorebutton',true) != '') { ?>
               	   		<a class="button" href="<?php the_permalink(); ?>"><?php echo of_get_option('readmorebutton'); ?></a>     
				   <?php } ?>                             
				 
                  </div><div class="clear"></div>                  
        	   </div>
             <?php 
			 $fx++; 
			 endwhile;
			 wp_reset_query();
			 }		
		 ?>  
         
        <div class="clear"></div>
    </div><!-- .pagearea-inner -->
    </div><!-- container-->
</section><!-- #pagearea -->
<?php } ?>