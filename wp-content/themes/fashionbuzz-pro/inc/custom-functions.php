<?php
/**
 * @package Fashionbuzz Pro
 * Setup the WordPress core custom functions feature.
 *
*/

add_action('fashionbuzz_optionsframework_custom_scripts', 'fashionbuzz_optionsframework_custom_scripts');
function fashionbuzz_optionsframework_custom_scripts() { ?>
	<script type="text/javascript">
    jQuery(document).ready(function() {
    
        jQuery('#example_showhidden').click(function() {
            jQuery('#section-example_text_hidden').fadeToggle(400);
        });
        
        if (jQuery('#example_showhidden:checked').val() !== undefined) {
            jQuery('#section-example_text_hidden').show();
        }
        
    });
    </script><?php
}

// get_the_content format text
function get_the_content_format( $str ){
	$raw_content = apply_filters( 'the_content', $str );
	$content = str_replace( ']]>', ']]&gt;', $raw_content );
	return $content;
}
// the_content format text
function the_content_format( $str ){
	echo get_the_content_format( $str );
}

function is_google_font( $font ){
	$notGoogleFont = array( 'Arial', 'Comic Sans MS', 'FreeSans', 'Georgia', 'Lucida Sans Unicode', 'Palatino Linotype', 'Symbol', 'Tahoma', 'Trebuchet MS', 'Verdana' );
	if( in_array($font, $notGoogleFont) ){
		return false;
	}else{
		return true;
	}
}

// subhead section function
function sub_head_section( $more ) {
	$pgs = 0;
	do {
		$pgs++;
	} while ($more > $pgs);
	return $pgs;
}

//[clear]
function clear_func() {
	$clr = '<div class="clear"></div>';
	return $clr;
}
add_shortcode( 'clear', 'clear_func' );


//[column_content]Your content here...[/column_content]
function column_content_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => '',	
	), $atts ) );
	$colPos = strpos($type, '_last');
	if($colPos === false){
		$cnt = '<div class="'.$type.'">'.do_shortcode($content).'</div>';
	}else{
		$type = substr($type,0,$colPos);
		$cnt = '<div class="'.$type.' last_column">'.do_shortcode($content).'</div>';
	}
	return $cnt;
}
add_shortcode( 'column_content', 'column_content_func' );


//[hr]
function hrule_func() {
	$hrule = '<div class="hr"></div>';
	return $hrule;
}
add_shortcode( 'hr', 'hrule_func' );


//[hr_top]
function back_to_top_func() {
	$back_top = '<div id="back-top">
		<a title="Top of Page" href="#top"><span></span></a>
	</div>';
	return $back_top;
}
add_shortcode( 'back-to-top', 'back_to_top_func' );


// [searchform]
function searchform_shortcode_func( $atts ){
	return get_search_form( false );
}
add_shortcode( 'searchform', 'searchform_shortcode_func' );

// accordion
function accordion_func( $atts, $content = null ) {
	$acc = '<div class="customtab">'.get_the_content_format( do_shortcode($content) ).'<div class="clear"></div></div>';
	return $acc;
}
add_shortcode( 'accordion', 'accordion_func' );
function accordion_content_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Accordion Title',
	), $atts ) );
	$content = wpautop(trim($content));
	$acn = '<div class="accordion-box"><h2>'.$title.'</h2>
			<div class="acc-content">'.$content.'</div><div class="clear"></div></div>';
	return $acn;
}
add_shortcode( 'accordion_content', 'accordion_content_func' );


// remove excerpt more
function new_excerpt_more( $more ) {
	return '... ';
}
add_filter('excerpt_more', 'new_excerpt_more');

// get post categories function
function getPostCategories(){
	$categories = get_the_category();
	$catOut = '';
	$separator = ', ';
	$catOutput = '';
	if($categories){
		foreach($categories as $category) {
			$catOutput .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'fashionbuzz' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
		$catOut = trim($catOutput, $separator);
	}
	return $catOut;
}

// get gallery categories function
function getgalCategories(){
	$categories = get_the_category();
	$catOut = '';
	$separator = ', ';
	$catOutput = '';
	if($categories){
		foreach($categories as $category) {
			$catOutput .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'fashionbuzz' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
		$catOut = 'Categories: '.trim($catOutput, $separator);
	}
	return $catOut;
}

// replace last occurance of a string.
function str_lreplace($search, $replace, $subject){
	$pos = strrpos($subject, $search);
	if($pos !== false){
		$subject = substr_replace($subject, $replace, $pos, strlen($search));
	}
	return $subject;
}


//custom post type for Our photogallery
function my_custom_post_photogallery() {
	$labels = array(
		'name'               => __( 'Photo Gallery','fashionbuzz' ),
		'singular_name'      => __( 'Photo Gallery','fashionbuzz' ),
		'add_new'            => __( 'Add New','fashionbuzz' ),
		'add_new_item'       => __( 'Add New Image ','fashionbuzz' ),
		'edit_item'          => __( 'Edit Image','fashionbuzz' ),
		'new_item'           => __( 'New Image','fashionbuzz' ),
		'all_items'          => __( 'All Images','fashionbuzz' ),
		'view_item'          => __( 'View Image','fashionbuzz' ),
		'search_items'       => __( 'Search Images','fashionbuzz' ),
		'not_found'          => __( 'No images found','fashionbuzz' ),
		'not_found_in_trash' => __( 'No images found in the Trash','fashionbuzz' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Photo Gallery'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Photo Gallery',
		'public'        => true,
		'menu_position' => 23,
		'supports'      => array( 'title', 'thumbnail' ),
		'has_archive'   => true,
	);
	register_post_type( 'photogallery', $args );
}
add_action( 'init', 'my_custom_post_photogallery' );


//  register gallery taxonomy
register_taxonomy( "gallerycategory", 
	array("photogallery"), 
	array(
		"hierarchical" => true, 
		"label" => "Gallery Category", 
		"singular_label" => "Photo Gallery", 
		"rewrite" => true
	)
);

add_action("manage_posts_custom_column",  "photogallery_custom_columns");
add_filter("manage_edit-photogallery_columns", "photogallery_edit_columns");
function photogallery_edit_columns($columns){
	$columns = array(
		"cb" => '<input type="checkbox" />',
		"title" => "Gallery Title",
		"pcategory" => "Gallery Category",
		"view" => "Image",
		"date" => "Date",
	);
	return $columns;
}
function photogallery_custom_columns($column){
	global $post;
	switch ($column) {
		case "pcategory":
			echo get_the_term_list($post->ID, 'gallerycategory', '', ', ','');
		break;
		case "view":
			the_post_thumbnail('thumbnail');
		break;
		case "date":

		break;
	}
}


//[photogallery filter="false"]
function photogallery_shortcode_func( $atts ) {
	extract( shortcode_atts( array(
		'show' => -1,
		'filter' => 'true'
	), $atts ) );
	$pfStr = '';

	$pfStr .= '<div class="photobooth">';
	if( $filter == 'true' ){
		$pfStr .= '<ul class="portfoliofilter clearfix"><li class="filter" data-filter="all">All</li>';
		$categories = get_categories( array('taxonomy' => 'gallerycategory') );
		foreach ($categories as $category) {
			$pfStr .= '/<li class="filter" data-filter=".'.$category->slug.'">'.$category->name.'</li>';
		}
		$pfStr .= '</ul>';
	}

	$pfStr .= '<div class="row fourcol portfoliowrap"><div class="portfolio">';
	$j=0;
	query_posts('post_type=photogallery&posts_per_page='.$show); 	
	if ( have_posts() ) : 
	$pfStr .= '<div id="mixitup">';
	while ( have_posts() ) : the_post(); 
	$j++;
		$title = get_the_title();
		$videoUrl = get_post_meta( get_the_ID(), 'video_file_url', true);
		$imgSrc = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		$terms = wp_get_post_terms( get_the_ID(), 'gallerycategory', array("fields" => "all"));
		$categories = get_the_category();
		$slugAr = array();
		foreach( $terms as $tv ){
			$slugAr[] = $tv->slug;
		}
		if ( $imgSrc[0]!='' ) {
			$imgUrl = $imgSrc[0];
		}else{
			$imgUrl = get_template_directory_uri().'/images/img_404.png';
		}
		$pfStr .= '<div class="mix '.implode(' ', $slugAr).'">
						<div class="holderwrap">
							<figure class="work-gallery">
								<img src="'.$imgSrc[0].'"/>
								<figcaption>
									<a href="'.( ($videoUrl) ? $videoUrl : $imgSrc[0] ).'" data-rel="prettyPhoto[bkpGallery]">
										<h2>'.$title.'</h2>
									</a>
								</figcaption>			
							</figure>';
			 				 
			 $pfStr .= '</div>
					</div>';
		unset( $slugAr );
	endwhile; $pfStr .= '</div>';  else: 
		$pfStr .= '<p>Sorry, photo gallery is empty.</p>';
	endif; 
	wp_reset_query();
	$pfStr .= '</div></div>';
	$pfStr .= '</div>';
	return $pfStr;
}
add_shortcode( 'photogallery', 'photogallery_shortcode_func' );

//custom post type for Our Team
function my_custom_post_team() {
	$labels = array(
		'name'               => __( 'Our Team', 'fashionbuzz' ),
		'singular_name'      => __( 'Our Team', 'fashionbuzz' ),
		'add_new'            => __( 'Add New', 'fashionbuzz' ),
		'add_new_item'       => __( 'Add New Team Member', 'fashionbuzz' ),
		'edit_item'          => __( 'Edit Team Member', 'fashionbuzz' ),
		'new_item'           => __( 'New Member', 'fashionbuzz' ),
		'all_items'          => __( 'All Members', 'fashionbuzz' ),
		'view_item'          => __( 'View Members', 'fashionbuzz' ),
		'search_items'       => __( 'Search Team Members', 'fashionbuzz' ),
		'not_found'          => __( 'No Team members found', 'fashionbuzz' ),
		'not_found_in_trash' => __( 'No Team members found in the Trash', 'fashionbuzz' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Our Team'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Team',
		'public'        => true,
		'menu_position' => null,
		'menu_icon'		=> 'dashicons-groups',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'rewrite' => array('slug' => 'our-team'),
		'has_archive'   => true,
	);
	register_post_type( 'team', $args );
}
add_action( 'init', 'my_custom_post_team' );


// add meta box to team
add_action( 'admin_init', 'my_team_admin_function' );
function my_team_admin_function() {
    add_meta_box( 'team_meta_box',
        'Member Info',
        'display_team_meta_box',
        'team', 'normal', 'high'
    );
}
// add meta box form to team
function display_team_meta_box( $team ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $facebook = get_post_meta( $team->ID, 'facebook', true );
	$facebooklink = esc_url( get_post_meta( $team->ID, 'facebooklink', true ) );
    $twitter = get_post_meta( $team->ID, 'twitter', true );
	$twitterlink = esc_url( get_post_meta( $team->ID, 'twitterlink', true ) );
    $linkedin = get_post_meta( $team->ID, 'linkedin', true );
	$linkedinlink = esc_url( get_post_meta( $team->ID, 'linkedinlink', true ) );
	$pint = get_post_meta( $team->ID, 'google', true );
	$googlelink = esc_url( get_post_meta( $team->ID, 'googlelink', true ) );
    $dribbble = get_post_meta( $team->ID, 'dribbble', true );
	$dribbblelink = get_post_meta( $team->ID, 'dribbblelink', true );
    ?>
    <table width="100%">
        <tr>
            <td width="20%">Social link 1</td>
            <td width="40%"><input type="text" name="facebook" value="<?php echo $facebook; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="facebooklink" value="<?php echo $facebooklink; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social Link 2</td>
            <td width="40%"><input type="text" name="twitter" value="<?php echo $twitter; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="twitterlink" value="<?php echo $twitterlink; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social Link 3</td>
            <td width="40%"><input type="text" name="linkedin" value="<?php echo $linkedin; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="linkedinlink" value="<?php echo $linkedinlink; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social Link 4</td>
            <td width="40%"><input type="text" name="dribbble" value="<?php echo $dribbble; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="dribbblelink" value="<?php echo $dribbblelink; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social Link 5</td>
            <td width="40%"><input type="text" name="google" value="<?php echo $pint; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="googlelink" value="<?php echo $googlelink; ?>" /></td>
        </tr>
        <tr>
        	<td width="100%" colspan="3"><label style="font-size:12px;"><strong>Note:</strong> Icon name should be in lowercase without space. More social icons can be found at: http://fortawesome.github.io/Font-Awesome/icons/</label> </td>
        </tr>
    </table>
    <?php              
}
// save team meta box form data
add_action( 'save_post', 'add_team_fields_function', 10, 2 );
function add_team_fields_function( $team_id, $team ) {
    // Check post type for team
    if ( $team->post_type == 'team' ) {
        // Store data in post meta table if present in post data
        if ( isset($_POST['facebook']) ) {
            update_post_meta( $team_id, 'facebook', $_POST['facebook'] );
        }
		if ( isset($_POST['facebooklink']) ) {
            update_post_meta( $team_id, 'facebooklink', $_POST['facebooklink'] );
        }
        if ( isset($_POST['twitter']) ) {
            update_post_meta( $team_id, 'twitter', $_POST['twitter'] );
        }
		if ( isset($_POST['twitterlink']) ) {
            update_post_meta( $team_id, 'twitterlink', $_POST['twitterlink'] );
        }
        if ( isset($_POST['linkedin']) ) {
            update_post_meta( $team_id, 'linkedin', $_POST['linkedin'] );
        }
		if ( isset($_POST['linkedinlink']) ) {
            update_post_meta( $team_id, 'linkedinlink', $_POST['linkedinlink'] );
        }
        if ( isset($_POST['dribbble']) ) {
            update_post_meta( $team_id, 'dribbble', $_POST['dribbble'] );
        }
		if ( isset($_POST['dribbblelink']) ) {
            update_post_meta( $team_id, 'dribbblelink', $_POST['dribbblelink'] );
        }
		if ( isset($_POST['google']) ) {
            update_post_meta( $team_id, 'google', $_POST['google'] );
        }
		if ( isset($_POST['googlelink']) ) {
            update_post_meta( $team_id, 'googlelink', $_POST['googlelink'] );
        }
    }
}

function our_teamposts_func( $atts ) {
   extract( shortcode_atts( array(
		'show' => '',
	), $atts ) );
	  extract( shortcode_atts( array( 'show' => '',), $atts ) ); 
	$bposts = '';
	$args = array( 'post_type' => 'team', 'posts_per_page' => $show, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	$n = 0;
	if ( have_posts() ) {
		while ( have_posts() ) { 
			the_post();
			$n++; if( $n%4 == 0 ) $nomargn = ' lastcols'; else $nomargn = '';
			$facebook = get_post_meta( get_the_ID(), 'facebook', true );
			$facebooklink = get_post_meta( get_the_ID(), 'facebooklink', true );
			$twitter = get_post_meta( get_the_ID(), 'twitter', true );
			$twitterlink = get_post_meta( get_the_ID(), 'twitterlink', true );
			$linkedin = get_post_meta( get_the_ID(), 'linkedin', true );
			$linkedinlink = get_post_meta( get_the_ID(), 'linkedinlink', true );
			$dribbble = get_post_meta( get_the_ID(), 'dribbble', true );
			$dribbblelink = get_post_meta( get_the_ID(), 'dribbblelink', true );
			$pint = get_post_meta( get_the_ID(), 'google', true );
			$googlelink = get_post_meta( get_the_ID(), 'googlelink', true );				
			
			$bposts .= '<div class="teammember-list'.$nomargn.'">';	
			$bposts .= '<div class="thumnailbx"><a href="'.get_the_permalink().'" target="_blank">'. get_the_post_thumbnail().'</a>';
			$bposts .= '<div class="member-social-icon">';
								if( $facebook != '' ){
									$bposts .= '<a href="'.$facebooklink.'" title="'.$facebook.'" target="_blank"><i class="fa fa-'.$facebook.' fa-lg"></i></a>';
								}
								if( $twitter != '' ){
									$bposts .= '<a href="'.$twitterlink.'" title="'.$twitter.'" target="_blank"><i class="fa fa-'.$twitter.' fa-lg"></i></a>';
								}
								if( $linkedin != '' ){
									$bposts .= '<a href="'.$linkedinlink.'" title="'.$linkedin.'" target="_blank"><i class="fa fa-'.$linkedin.' fa-lg"></i></a>';
								}
								if( $dribbble != '' ){
									$bposts .= '<a href="'.$dribbblelink.'" title="'.$dribbble.'" target="_blank"><i class="fa fa-'.$dribbble.' fa-lg"></i></a>';
								}
								if( $pint != '' ){
									$bposts .= '<a href="'.$googlelink.'" title="'.$pint.'" target="_blank"><i class="fa fa-'.$pint.' fa-lg"></i></a><div class="clear"></div>';
								}
				$bposts .= '</div>';				
				$bposts .= '</div>';
				$bposts .= '<div class="titledesbox"><a href="'.get_the_permalink().'" target="_blank"><h3>'.get_the_title().'</h3></a>
							</div>';												
				$bposts .= '</div>';
		}
	}else{
		$bposts .= 'There are not found our team members';
	}
	wp_reset_query();
	$bposts .= '<div class="clear"></div>';
    return $bposts;
}
add_shortcode( 'our-team', 'our_teamposts_func' );


// custom post type for Testimonials
function my_custom_post_testimonials() {
	$labels = array(
		'name'               => __( 'Testimonial','fashionbuzz'),
		'singular_name'      => __( 'Testimonial','fashionbuzz'),
		'add_new'            => __( 'Add Testimonial','fashionbuzz'),
		'add_new_item'       => __( 'Add New Testimonial','fashionbuzz'),
		'edit_item'          => __( 'Edit Testimonial','fashionbuzz'),
		'new_item'           => __( 'New Testimonial','fashionbuzz'),
		'all_items'          => __( 'All Testimonials','fashionbuzz'),
		'view_item'          => __( 'View Testimonial','fashionbuzz'),
		'search_items'       => __( 'Search Testimonials','fashionbuzz'),
		'not_found'          => __( 'No testimonials found','fashionbuzz'),
		'not_found_in_trash' => __( 'No testimonials found in the Trash','fashionbuzz'), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonials'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Testimonials',
		'public'        => true,
		'menu_icon'		=> 'dashicons-format-quote',
		'menu_position' => null,
		'supports'      => array( 'title', 'editor', 'thumbnail'),
		'has_archive'   => true,
	);
	register_post_type( 'testimonials', $args );	
}
add_action( 'init', 'my_custom_post_testimonials' );

//Testimonials function
function testimonials_output_func( $atts ){
	extract( shortcode_atts( array( 
	'show' => '',
	),
	$atts ) ); 		
	wp_reset_query();
 	query_posts('post_type=testimonials&posts_per_page='.$show);
	if ( have_posts() ) :
	 $testimonialoutput = '<div id="clienttestiminials"><div class="owl-carousel">';	
		while ( have_posts() ) : the_post();
		if ( has_post_thumbnail()) {
				$large_imgSrc = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
				$imgUrl = $large_imgSrc[0];
		}else{
				$imgUrl = get_template_directory_uri().'/images/img_404.png';
		}					   
			$testimonialoutput .= '
			     <div class="item">				 
				 	<div class="tmdesc">
						<div class="quote-icon"><i class="fa fa-quote-left" aria-hidden="true"></i></div>				 		
				 		<blockquote>'.content( of_get_option('testimonialsexcerptlength') ).'</blockquote>						 			  				 						
				 	<div class="tmthumb"><img src="'.$imgUrl.'" alt=" " /></div>
					<h6><a href="'.get_permalink().'">'.get_the_title().'</a></h6>	
					</div>					 
				</div>	';
		endwhile;
		 $testimonialoutput .= '</div></div>';
	else:
	  $testimonialoutput = '<div id="clienttestiminials"><div class="owl-carousel"> 
           
              <div class="item">			  	   
				   <div class="tmdesc">  
				   <div class="quote-icon"><i class="fa fa-quote-left" aria-hidden="true"></i></div>                              
				   <blockquote><p>Curabitur commodo, metus non rhoncus suscipit, massa diam tristique odio, vitae sodales nunc sapien ac nisl. Mauris lacinia, tortor sed finibus mattis, sem eros pellentesque dui, id vehicula diam felis quis eros. Donec in pellentesque ante. In hac habitasse platea dictumst. Vivamus risus libero, ultricies non dolor a, ullamcorper congue massa. </p></blockquote>				   				   				   
				   <div class="tmthumb">
				   	<img src="'.get_template_directory_uri()."/images/testi1.jpg".'" alt="" /></div>
					<h6><a href="#">Martina Doe</a></h6>									   
				   </div>
				</div>
			  
                <div class="item"> 
				<div class="quote-icon"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
					<div class="tmdesc">                  
				   <blockquote><p>Curabitur commodo, metus non rhoncus suscipit, massa diam tristique odio, vitae sodales nunc sapien ac nisl. Mauris lacinia, tortor sed finibus mattis, sem eros pellentesque dui, id vehicula diam felis quis eros. Donec in pellentesque ante. In hac habitasse platea dictumst. Vivamus risus libero, ultricies non dolor a, ullamcorper congue massa. </p></blockquote>					   			   
				   <div class="tmthumb"><img src="'.get_template_directory_uri()."/images/testi2.jpg".'" alt="" /></div>
				   <h6><a href="#">Sarah Brown</a></h6>
				   </div>
				</div>
			  
			    <div class="item">  
				<div class="quote-icon"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
					<div class="tmdesc">                                  				   
				   <blockquote><p>Curabitur commodo, metus non rhoncus suscipit, massa diam tristique odio, vitae sodales nunc sapien ac nisl. Mauris lacinia, tortor sed finibus mattis, sem eros pellentesque dui, id vehicula diam felis quis eros. Donec in pellentesque ante. In hac habitasse platea dictumst. Vivamus risus libero, ultricies non dolor a, ullamcorper congue massa. </p></blockquote>				   
				   <div class="tmthumb"><img src="'.get_template_directory_uri()."/images/testi3.jpg".'" alt="" /></div>
				   <h6><a href="#">Julia Doe</a></h6>
				   </div>				   
				</div>
                          
  </div></div>';			
	  endif;  
	wp_reset_query();	
	return $testimonialoutput;
}
add_shortcode( 'testimonials', 'testimonials_output_func' );



//Testimonials function
function testimonials_listing_output_func( $atts ){
	extract( shortcode_atts( array( 
	'show' => '',
	),
	$atts ) ); 		
	wp_reset_query();
 	query_posts('post_type=testimonials&posts_per_page='.$show);
	if ( have_posts() ) :
	 $testimonialoutput = '<div id="Tmnllist">';	
		while ( have_posts() ) : the_post();
		if ( has_post_thumbnail()) {
				$large_imgSrc = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
				$imgUrl = $large_imgSrc[0];
			}else{
				$imgUrl = get_template_directory_uri().'/images/img_404.png';
			}	
		$companyname = esc_html( get_post_meta( get_the_ID(), 'companyname', true ) );		   
			$testimonialoutput .= '
			    <div class="tmnllisting">
			 	<div class="tmnlthumb"><a href="'.get_permalink().'"><img src="'.$imgUrl.'" alt=" " /></a></div>				 
				  '.content( of_get_option('testimonialsexcerptlength') ).'
				  <h6><a href="'.get_permalink().'">'.get_the_title().'</a></h6>
				  <span>( '.$companyname.' )</span>	
				</div>	';
		endwhile;
		 $testimonialoutput .= '</div>';
	else:
	  $testimonialoutput = '<div id="Tmnllist"> 
           
              <div class="tmnllisting">
                <div class="tmnlthumb"><a href="#"><img src="'.get_template_directory_uri()."/images/client1.png".'" alt="" /></a></div>                  
				   <p>Sed tortor est, suscipit vel nulla ut, imperdiet pulvinar mauris. Phasellus varius ut lorem non maximus. Vestibulum lobortis augue et dictum malesuada. Cras molestie id felis id tincidunt. Vestibulum ut libero et turpis commodo euismod sed blandit sem. Donec egestas tempor arcu. Pellentesque sed justo condimentum, aliquam risus pulvinar, euismod lectus. Nam varius nibh eu sapien lobortis, at posuere eros varius.</p>
				    <h6><a href="#">Martina Doe</a></h6>
					<span>( Some Company Name )</span>
				</div>
			  
                <div class="tmnllisting">
                <div class="tmnlthumb"><a href="#"><img src="'.get_template_directory_uri()."/images/client2.png".'" alt="" /></a></div>                   
				  <p>Sed tortor est, suscipit vel nulla ut, imperdiet pulvinar mauris. Phasellus varius ut lorem non maximus. Vestibulum lobortis augue et dictum malesuada. Cras molestie id felis id tincidunt. Vestibulum ut libero et turpis commodo euismod sed blandit sem. Donec egestas tempor arcu. Pellentesque sed justo condimentum, aliquam risus pulvinar, euismod lectus. Nam varius nibh eu sapien lobortis, at posuere eros varius.</p>
				   <h6><a href="#">Sarah Brown</a></h6>
				   <span>( Some Company Name )</span>
				</div>
			  
			     <div class="tmnllisting">
                <div class="tmnlthumb"><a href="#"><img src="'.get_template_directory_uri()."/images/client3.png".'" alt="" /></a></div>                   
				   <p>Sed tortor est, suscipit vel nulla ut, imperdiet pulvinar mauris. Phasellus varius ut lorem non maximus. Vestibulum lobortis augue et dictum malesuada. Cras molestie id felis id tincidunt. Vestibulum ut libero et turpis commodo euismod sed blandit sem. Donec egestas tempor arcu. Pellentesque sed justo condimentum, aliquam risus pulvinar, euismod lectus. Nam varius nibh eu sapien lobortis, at posuere eros varius.</p>
				   <h6><a href="#">Julia Doe</a></h6>
				   <span>( Some Company Name )</span>
				</div>
			  
			    <div class="tmnllisting">
                <div class="tmnlthumb"><a href="#"><img src="'.get_template_directory_uri()."/images/client4.png".'" alt="" /></a></div>                   
				   <p>Sed tortor est, suscipit vel nulla ut, imperdiet pulvinar mauris. Phasellus varius ut lorem non maximus. Vestibulum lobortis augue et dictum malesuada. Cras molestie id felis id tincidunt. Vestibulum ut libero et turpis commodo euismod sed blandit sem. Donec egestas tempor arcu. Pellentesque sed justo condimentum, aliquam risus pulvinar, euismod lectus. Nam varius nibh eu sapien lobortis, at posuere eros varius.</p>
				   <h6><a href="#">Jenifer Doe</a></h6>
				   <span>( Some Company Name )</span>
				</div>
			               
           
  </div>';			
	  endif;  
	wp_reset_query();	
	return $testimonialoutput;
}
add_shortcode( 'testimonials-listing', 'testimonials_listing_output_func' );


//Testimonials function
function testimonials_rotator_output_func( $atts ){
	extract( shortcode_atts( array( 
	'show' => '',
	),
	$atts ) ); 		
	wp_reset_query();
 	query_posts('post_type=testimonials&posts_per_page='.$show);
	if ( have_posts() ) :
	 $testimonialoutput = '<div id="testimonials"><div class="quotes">';	
		while ( have_posts() ) : the_post();	
		//$companyname = esc_html( get_post_meta( get_the_ID(), 'companyname', true ) );		   
			$testimonialoutput .= '
			  <div> '.content( of_get_option('testimonialsexcerptlength') ).'
				  <h6><a href="'.get_permalink().'">'.get_the_title().'</a></h6>
			</div>
			';
		endwhile;
		 $testimonialoutput .= '</div></div>';
	else:
	  $testimonialoutput = '<div id="testimonials"><div class="quotes">
           
               <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget nibh sollicitudin, porttitor purus ut, tempus mauris. Sed eget nunc consequat ante convallis aliquet id iaculis neque. Quisque iaculis porttitor felis vel dictum. Nunc efficitur orci purus, eget elementum sem sodales ut. Curabitur vitae ipsum at ex interdum consectetur. Aliquam erat volutpat. Donec quam magna, accumsan sed dui sit amet, condimentum dapibus lorem. Aenean ac mi sed ante egestas ultricies dictum nec orci.</p>
				   <h6><a href="#">John Doe</a></h6>
				</div>
			  
                 <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget nibh sollicitudin, porttitor purus ut, tempus mauris. Sed eget nunc consequat ante convallis aliquet id iaculis neque. Quisque iaculis porttitor felis vel dictum. Nunc efficitur orci purus, eget elementum sem sodales ut. Curabitur vitae ipsum at ex interdum consectetur. Aliquam erat volutpat. Donec quam magna, accumsan sed dui sit amet, condimentum dapibus lorem. Aenean ac mi sed ante egestas ultricies dictum nec orci.</p>
				   <h6><a href="#">Sarah Brown</a></h6>
				</div>
           
  </div></div>';			
	  endif;  
	wp_reset_query();	
	return $testimonialoutput;
}
add_shortcode( 'sidebar-testimonials', 'testimonials_rotator_output_func' );


// Social Icon Shortcodes
function fashionbuzz_social_area($atts,$content = null){
  return '<div class="social-icons">'.do_shortcode($content).'</div>';
 }
add_shortcode('social_area','fashionbuzz_social_area');

function fashionbuzz_social($atts){
 extract(shortcode_atts(array(
  'icon' => '',
  'link' => '',
  'bgcolor' => ''
 ),$atts));
  return '<a style="background-color:'.$bgcolor.'" href="'.$link.'" target="_blank" title="'.$icon.'"><i class="fa fa-'.$icon.'"></i></a>';
 }
add_shortcode('social','fashionbuzz_social');

// Contact Form in Contact Page
function contactform_func( $atts ) {
    $atts = shortcode_atts( array(
        'to_email' => get_bloginfo('admin_email'),
		'title' => 'Contact enquiry - '.home_url( '/' ),
    ), $atts );

	$cform = "<div class=\"main-form-area\" id=\"contactform_main\">";

	$cerr = array();
	if( isset($_POST['c_submit']) && $_POST['c_submit']=='Submit' ){
		$name 			= trim( $_POST['c_name'] );
		$email 			= trim( $_POST['c_email'] );
		$phone 			= trim( $_POST['c_phone'] );
		$website		= trim( $_POST['c_website'] );
		$comments 		= trim( $_POST['c_comments'] );
		$captcha 		= trim( $_POST['c_captcha'] );
		$captcha_cnf	= trim( $_POST['c_captcha_confirm'] );

		if( !$name )
			$cerr['name'] = 'Please enter your name.';
		if( ! filter_var($email, FILTER_VALIDATE_EMAIL) ) 
			$cerr['email'] = 'Please enter a valid email.';
		if( !$phone )
			$cerr['phone'] = 'Please enter your phone number.';
		if( !$comments )
			$cerr['comments'] = 'Please enter your message.';
		if( !$captcha || (md5($captcha) != $captcha_cnf) )
			$cerr['captcha'] = 'Please enter the correct answer.';

		if( count($cerr) == 0 ){
			$subject = $atts['title'];
			$headers = "From: ".$name." <" . strip_tags($email) . ">\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

			$message = '<html><body>
							<table>
								<tr><td>Name: </td><td>'.$name.'</td></tr>
								<tr><td>Email: </td><td>'.$email.'</td></tr>
								<tr><td>Phone: </td><td>'.$phone.'</td></tr>
								<tr><td>Website: </td><td>'.$website.'</td></tr>
								<tr><td>Message: </td><td>'.$comments.'</td></tr>
							</table>
						</body>
					</html>';
			mail( $atts['to_email'], $subject, $message, $headers);
			$cform .= '<div class="success_msg">Thank you! A representative will get back to you very shortly.</div>';
			unset( $name, $email, $phone, $website, $comments, $captcha );
		}else{
			$cform .= '<div class="error_msg">';
			$cform .= implode('<br />',$cerr);
			$cform .= '</div>';
		}
	}

	$capNum1 	= rand(1,4);
	$capNum2 	= rand(1,5);
	$capSum		= $capNum1 + $capNum2;
	$sumStr		= $capNum1." + ".$capNum2 ." = ";

	$cform .= "<form name=\"contactform\" action=\"#contactform_main\" method=\"post\">
			<p><input type=\"text\" name=\"c_name\" value=\"". ( ( empty($name) == false ) ? $name : "" ) ."\" placeholder=\"Name\" /></p>
			<p><input type=\"email\" name=\"c_email\" value=\"". ( ( empty($email) == false ) ? $email : "" ) ."\" placeholder=\"Email\" /></p><div class=\"clear\"></div>
			<p><input type=\"tel\" name=\"c_phone\" value=\"". ( ( empty($phone) == false ) ? $phone : "" ) ."\" placeholder=\"Phone\" /></p>
			<p><input type=\"url\" name=\"c_website\" value=\"". ( ( empty($website) == false ) ? $website : "" ) ."\" placeholder=\"Website with prefix http://\" /></p><div class=\"clear\"></div>
			<p><textarea name=\"c_comments\" placeholder=\"Message\">". ( ( empty($comments) == false ) ? $comments : "" ) ."</textarea></p><div class=\"clear\"></div>";
	$cform .= "<p><span class=\"capcode\">$sumStr</span><input type=\"text\" placeholder=\"Captcha\" value=\"". ( ( empty($captcha) == false ) ? $captcha : "" ) ."\" name=\"c_captcha\" /><input type=\"hidden\" name=\"c_captcha_confirm\" value=\"". md5($capSum)."\"></p><div class=\"clear\"></div>";
	$cform .= "<p class=\"sub\"><input type=\"submit\" name=\"c_submit\" value=\"Submit\" class=\"search-submit\" /></p>
		</form>
	</div>";

    return $cform;
}
add_shortcode( 'contactform', 'contactform_func' );

// Request A Call Back form Enquiry Form
function enquiryform_func( $atts ) {
    $atts = shortcode_atts( array(
        'to_email' => get_bloginfo('admin_email'),
		'title' => 'Enquiry Form - '.home_url( '/' ),
    ), $atts );

	$eform = "<div class=\"request-form\" id=\"enquiryform_main\">";

	$cerr = array();
	if( isset($_POST['c_submit']) && $_POST['c_submit']=='Send Message' ){
		$name 			= trim( $_POST['c_name'] );
		$email 			= trim( $_POST['c_email'] );
		$message 		= trim( $_POST['c_message'] );
		
		
		
		if( !$name )
			$cerr['name'] = 'Please enter your name.';
		if( ! filter_var($email, FILTER_VALIDATE_EMAIL) ) 
			$cerr['email'] = 'Please enter a valid email.';
		if( !$message )
			$cerr['message'] = 'Please enter your message.';
		
		
		if( count($cerr) == 0 ){
			$subject = $atts['title'];
			$headers = "From: ".$name." <" . strip_tags($email) . ">\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

			$message = '<html><body>
							<table>
								<tr><td>Name: </td><td>'.$name.'</td></tr>
								<tr><td>Email: </td><td>'.$email.'</td></tr>
								<tr><td>Message: </td><td>'.$message.'</td></tr>							
							</table>
						</body>
					</html>';
			mail( $atts['to_email'], $subject, $message, $headers);
			$eform .= '<div class="success_msg">Thank you! A representative will get back to you very shortly.</div>';
			unset( $name, $email, $tel, $message );
		}else{
			$eform .= '<div class="error_msg">';
			$eform .= implode('<br />',$cerr);
			$eform .= '</div>';
		}
	}	

	$eform .= "<form name=\"contactform\" action=\"#contactform_main\" method=\"post\">
			<p><input type=\"text\" name=\"c_name\" value=\"". ( ( empty($name) == false ) ? $name : "" ) ."\" placeholder=\"Name\" /></p>			
			<p><input type=\"email\" name=\"c_email\" value=\"". ( ( empty($email) == false ) ? $email : "" ) ."\" placeholder=\"Email\" /></p>
			<p><textarea name=\"c_message\" placeholder=\"Message\">". ( ( empty($message) == false ) ? $message : "" ) ."</textarea></p>			
			<div class=\"clear\"></div>";
	$eform .= "<p class=\"sub\"><input type=\"submit\" name=\"c_submit\" value=\"Send Message\" class=\"search-submit\" /></p>
		</form>
	</div>";

    return $eform;
}
add_shortcode( 'enquiryform', 'enquiryform_func' );


/*toggle function*/
function toggle_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Click here to toggle content',
	), $atts ) );
	$tog_content = "<div class=\"toggle_holder\"><h3 class=\"slide_toggle\"><a href=\"#\">{$title}</a></h3>
					<div class=\"slide_toggle_content\">".get_the_content_format( $content )."</div></div>";

	return $tog_content;
}
add_shortcode( 'toggle_content', 'toggle_func' );

function tabs_func( $atts, $content = null ) {
	$tabs = '<div class="tabs-wrapper"><ul class="tabs">'.do_shortcode($content).'</ul></div>';
	return $tabs;
}
add_shortcode( 'tabs', 'tabs_func' );

function tab_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Tab Title',
	), $atts ) );
	$rand = rand(100,999);
	$tab = '<li><a rel="tab'.$rand.'" href="javascript:void(0)">'.$title.'</a><div id="tab'.$rand.'" class="tab-content">'.get_the_content_format($content).'</div></li>';
	return $tab;
}
add_shortcode( 'tab', 'tab_func' );

// Button Shortcode
function readmorebtn_fun($atts){
	extract(shortcode_atts(array(
	'name'	=> '',
	'align'	=> '',
	'link'	=> '#'	
	), $atts));
	return '<div class="custombtn" style="text-align:'.$align.'">	
	   <a class="morebutton" href="'.$link.'">'.$name.'</a>	   	   
	</div>';
	}
add_shortcode('button','readmorebtn_fun');

// Button Shortcode
function readmorebtn_style2_fun($atts){
	extract(shortcode_atts(array(
	'name'	=> '',
	'align'	=> '',
	'link'	=> '#'	
	), $atts));
	return '<div class="custombtn" style="text-align:'.$align.'">	
	   <a class="buttonstyle1" href="'.$link.'">'.$name.'</a>	   	   
	</div>';
	}
add_shortcode('buttonstyle2','readmorebtn_style2_fun');


// Latest News function 
function latestnewsoutput_func( $atts ){
   extract( shortcode_atts( array(
		'showposts' => 3,		
		'comment' => '',
		'date' => '',
		'author' => '',
		'category' => '',		
	), $atts ) );
	$postoutput = '<div class="fourcolumn-news">';
	wp_reset_query();
	$n = 0;
	query_posts(  array( 'posts_per_page'=>$showposts, 'post__not_in' => get_option('sticky_posts') )  );
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			$n++;
			if($comment=='show' || $comment==''){   
				$post_comment = ' <span>Comments ( <a href="'.get_the_permalink().'#comments">'.get_comments_number().' </a>)</span>';
			} else {
				$post_comment = '';
			}			
			if($date=='show'){   
				$post_date = '<span class="spantop">Posted On <a href="#">'.get_the_date('d-M-Y').'</a></span>';
			} else {
				$post_date = '';
			}	
			if($author=='show'){   
				$post_author = 'By <a href="#">'.get_the_author_link().'</a>';
			} else {
				$post_author = '';
			}
			
			if($category=='show'){   
				$post_category = '<span>| in '.getPostCategories().'</span>';
			} else {
				$post_category = '';
			}
			
			if( $n%4==0 )  $nomgn = 'last';	else $nomgn = ' ';
			if ( has_post_thumbnail()) {
				$large_imgSrc = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
				$imgUrl = $large_imgSrc[0];
			}else{
				$imgUrl = get_template_directory_uri().'/images/img_404.png';
			}
			$postoutput .= '<div class="news-box '.$nomgn.'">
								<div class="news-thumb">
									<a href="'.get_the_permalink().'"><img src="'.$imgUrl.'" alt=" " /></a>																											
								</div>
								<div class="newsdesc">
									<h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
									<div class="PostMeta">
										'.$post_date.' | '.$post_author.'                                     
									 </div>																						
									 '.content( of_get_option('latestnewslength') ).'
									 <a href="'.get_permalink().'" class="ReadMore"><span>Read More</span></a>										 							 
								</div>
								<div class="clear"></div>
                        </div>';	
						$postoutput .= ''.(($n%4==0) ? '<div class="clear"></div>' : '');	
		endwhile;
	endif;
	wp_reset_query();
	$postoutput .= '</div>';	
	return $postoutput;
}
add_shortcode( 'latest-news', 'latestnewsoutput_func' );


// add shortcode for skills
function fashionbuzz_skills($fashionbuzz_skill_var){
	extract( shortcode_atts(array(
		'title' 	=> 'title',
		'percent'	=> 'percent',
		'bgcolor'	=> 'bgcolor',
	), $fashionbuzz_skill_var));
	
	return '<div class="skillbar clearfix " data-percent="'.$percent.'%">
			<div class="skillbar-title"><span>'.$title.'</span></div>
			<div class="skill-bg"><div class="skillbar-bar" style="background:'.$bgcolor.'"></div></div>
			<div class="skill-bar-percent">'.$percent.'%</div>
			</div>';
}

add_shortcode('skill','fashionbuzz_skills');


// add shortcode for Services
function fashionbuzz_introbox($atts, $content = null){
	extract(shortcode_atts(array(
		'icon' => '',
		'title' => '',		
		'link' => '',
		'readmoretext' => '',
		'last' =>'',		
	),$atts));
	return '<div class="intro-box" id="'.(($last == 'yes') ? 'last' : '').'">	
				<div class="inner-intro-box">
					<div class="introbox-icon">
						<div class="helper"><img src="'.$icon.'"></div>
					</div>
					<div class="introbox-desc">
						<a href="'.$link.'"><h2>'.$title.'</h2></a>
						<p>'.$content.'</p>
						<a href="'.$link.'" class="readmore">'.$readmoretext.'</a>
					</div>
				</div>												
			</div>';
	}
add_shortcode('intro_box','fashionbuzz_introbox');

function fashionbuzz_feature_pic($atts){
	extract(shortcode_atts(array(
		'image' => '',
	),$atts));
	return '<figure class="feature-pic">
				<img src="'.$image.'">
			</figure>';
}
add_shortcode('feature_pic','fashionbuzz_feature_pic');

function fashionbuzz_incontext($atts){
	extract(shortcode_atts(array(
		'icon' => '',
		'title' => '',
		'last' => '',
	),$atts));
	return '<div class="icontext" id="'.(($last == 'yes') ? 'last' : '').'">
				<div class="iconbox"><i class="fa fa-'.$icon.'"></i></div>
				<div class="icontitle"><h3>'.$title.'</h3></div><div class="clear"></div>
	</div>';
}
add_shortcode('text_with_icon','fashionbuzz_incontext');

// add shortcode for Advantages / facility
function fashionbuzz_services($atts, $content = null){
	extract(shortcode_atts(array(
		'icon' => '',
		'title' => '',		
		'link' => '',
		'last' =>'',		
	),$atts));
	return '<div class="services-box" id="'.(($last == 'yes') ? 'last' : '').'">	
				<div class="inner-services-box">
					<div class="services-icon">
						<i class="fa fa-'.$icon.'"></i>
					</div>
					<div class="services-desc">
						<a href="'.$link.'"><h2>'.$title.'</h2></a>
						<p>'.$content.'</p>
					</div>
				</div>												
			</div>';
	}
add_shortcode('service','fashionbuzz_services');

function fashionbuzz_hover_button($atts){
	extract(shortcode_atts(array(
		'link' => '',
		'title' => '',
	),$atts));
	return '<a href="'.$link.'" class="btn-hov"><span>'.$title.'</span></a>';
}
add_shortcode('button','fashionbuzz_hover_button');

function fashionbuzz_video($atts){
	extract(shortcode_atts(array(
		'link' => '',
	),$atts));
	return '<div class="video-container"><iframe src="'.$link.'" frameborder="0" allowfullscreen></iframe></div>';
}
add_shortcode('video','fashionbuzz_video');

// add shortcode for Counter
function fashionbuzz_counter($atts){
	extract(shortcode_atts(array(
		'title'	=> '',
		'count'	=> '',
		'plus' => '',
		'last'  => ''
	), $atts));
	return '<div class="counter-box" id="'.(($last == 'yes') ? 'last' : '').'">			
			<h3 class="counter">'.$count.'</h3>'.(($plus == 'yes') ? '<span>&#x271A;</span>' : '').'
			<h5>'.$title.'</h5>			
			</div>';
}
add_shortcode('counter','fashionbuzz_counter');

//Instagram Shortcode
function fashionbuzz_instagram(){
	return '<div id="instafeed" class="insta"></div>';
	}
add_shortcode('instagram', 'fashionbuzz_instagram');

//Spacer Shortcode
function fashionbuzz_spacer($atts){
	extract(shortcode_atts(array(
		'space' => '',
	), $atts));
	return '<div style="height:'.$space.'px"></div>';
	}
add_shortcode('spacer', 'fashionbuzz_spacer');

// Breadcrumbs
function custom_breadcrumbs() {
       
    // Settings
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Home';
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
              
            }
              
            // Get post category info
            $category = get_the_category();
             
            if(!empty($category)) {
              
                // Get last category post is in
                $last_category = end(array_values($category));
                  
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                  
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                }
             
            }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                }
                   
                // Display parent pages
                echo $parents;
                   
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
               
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
               
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
               
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_year() ) {
               
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
               
        } else if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
       
        echo '</ul>';
           
    }
       
}

define('fly_THEME_DOC','flythemesdemo.net/documentation/fashionbuzz-doc/');