<?php 
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */ 

function optionsframework_option_name() {
	// Change this to use your theme slug
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	return $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'fashionbuzz'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
*/

function optionsframework_options() {
	
	$options = array();
	$imagepath =  get_template_directory_uri() . '/images/';
	
	// Pull all the pages into an array
	 $options_pages = array();
	 $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	 $options_pages[''] = 'Select a page:';
	 foreach ($options_pages_obj as $page) {
	  $options_pages[$page->ID] = $page->post_title;
	 }

	// array of section content.
	$section_text = array(					 
 
		1 => array(		 	
			'section_title'	=> '',
			'menutitle'		=> '',
			'bgcolor' 		=> '',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[intro_box icon="'.get_template_directory_uri().'/images/photography.png" title="Photoshoot" link="#" readmoretext="Read More"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium dui eu mi pellentesque sagittis. Mauris non varius massa, id luctus risus.[/intro_box][intro_box icon="'.get_template_directory_uri().'/images/wedding.png" title="Wedding Photoshoot" link="#" readmoretext="Read More"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium dui eu mi pellentesque sagittis. Mauris non varius massa, id luctus risus.[/intro_box][intro_box icon="'.get_template_directory_uri().'/images/videography.png" title="Videography" link="#" readmoretext="Read More" last="yes"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium dui eu mi pellentesque sagittis. Mauris non varius massa, id luctus risus.[/intro_box][clear]',
		 ),
		 
		 			
						 
		 2 => array(		 	
			'section_title'	=> '',
			'menutitle'		=> '',
			'bgcolor' 		=> '#000000',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[column_content type="one_half"]<div class="welcome-text"><h2 class="section_title">It all started with a <span class="heighlighted">Picture</span></h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum ante ipsum, id egestas tellus pellentesque vitae. Praesent sed metus ut odio posuere sollicitudin sit amet a orci. Nam scelerisque nulla vel libero iaculis, in sodales lorem iaculis. Donec mattis risus at arcu condimentum euismod.
			
			Aenean molestie, nibh vel semper congue, erat nunc cursus est, eget bibendum leo enim a turpis. Etiam posuere mi eget mauris euismod mattis. Pellentesque vel vulputate felis. Donec aliquam nisl sit amet lacus pharetra posuere. Duis lacinia volutpat malesuada. Phasellus molestie odio nibh, dictum laoreet urna venenatis sed. Aenean a viverra dolor. Integer vel pellentesque ex. Suspendisse dictum nunc a velit placerat porttitor. Praesent sem diam[text_with_icon icon="camera-retro" title="Creativity"][text_with_icon icon="eye" title="Insight"][text_with_icon icon="heart" title="Quality" last="yes"]</div>[/column_content][column_content type="one_half_last"][feature_pic image="'.get_template_directory_uri().'/images/feature-img.jpg"][/column_content][clear]'
		),	
						 		 							
		
		3 => array(		
			'section_title'	=> 'Our Works',			
			'menutitle'		=> 'our-works',
			'bgcolor' 		=> '',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[photogallery]'
		),
			
		 4 => array(		 	
			'section_title'	=> 'Reasons to Choose Our Services',		
			'menutitle'		=> '',
			'bgcolor' 		=> '',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[service icon="heart-o" title="Passion" link="#"]Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.[/service][service icon="diamond" title="Philisophy" link="#"]Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.[/service][service icon="lightbulb-o" title="Insight" link="#" last="yes"]Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.[/service][service icon="comment-o" title="Ideas" link="#"]Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.[/service][service icon="star-o" title="Creativity" link="#"]Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.[/service][service icon="thumbs-o-up" title="Quality" link="#" last="yes"]Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.[/service][clear][button title="Get in Touch" link="#"]',
		 ),
		 	
		
		5 => array(		 	
			'section_title'	=> '',			
			'menutitle'		=> 'video',
			'bgcolor' 		=> '',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[video link="https://player.vimeo.com/video/193033138"]',
		 ),			 
		
		
		6 => array(
			'section_title'	=> 'Our Team',			
			'menutitle'		=> '',
			'bgcolor' 		=> '',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[our-team show="4"]'
		),
				
				
		7 => array(		
			'section_title'	=> 'What Clients Say About Us',			
			'menutitle'		=> 'testimonials',
			'bgcolor' 		=> '',
			'bgimage'		=> get_template_directory_uri().'/images/testimonial-bg.jpg',
			'class'			=> '',
			'content'		=> '[testimonials show="3"]'
		),
										
		
		8 => array(
			'section_title'	=> 'Latest News',			
			'menutitle'		=> '',
			'bgcolor' 		=> '',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[latest-news showposts="3" comment="show" date="show" author="show"]'
		),
		
		9 => array(
			'section_title'	=> '',			
			'menutitle'		=> 'insta_sec',
			'bgcolor' 		=> '',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[instagram]'
		),
		
	);

	$options = array();

	//Basic Settings
	$options[] = array(
		'name' => __('Basic Settings', 'fashionbuzz'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Logo', 'fashionbuzz'),
		'desc' => __('Upload your main logo here', 'fashionbuzz'),
		'id' => 'logo',
		'class' => '',
		'std'	=> get_template_directory_uri().'/images/logo.png',
		'type' => 'upload');
		
	$options[] = array(		
		'desc' => __('Change your custom logo height', 'fashionbuzz'),
		'id' => 'logoheight',
		'std' => '58',
		'type' => 'text');
		
	$options[] = array(			
		'desc'	=> __('Check To View Box Layout ', 'fashionbuzz'),
		'id'	=> 'boxlayout',
		'type'	=> 'checkbox',
		'std'	=> '');			
		
	$options[] = array(
		'name' => __('Custom CSS', 'fashionbuzz'),
		'desc' => __('Some Custom Styling for your site. Place any css codes here instead of the style.css file.', 'fashionbuzz'),
		'id' => 'style2',
		'std' => '',
		'type' => 'textarea');																				
		
	
	// Typography Body
	$typography_body = array(
		'size' => '14px',
		'face' => 'Karla',
		'style' => 'normal',
		'color' => '#ffffff');
		
	$typography_h1 = array(
		'size' => '35px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');
		
	$typography_h2 = array(
		'size' => '25px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');
		
	$typography_h3 = array(
		'size' => '20px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');
		
	$typography_h4 = array(
		'size' => '17px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');
		
	$typography_h5 = array(
		'size' => '15px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');
		
	$typography_h6 = array(
		'size' => '14px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');
		
	// Typography Logo
	$typography_logo = array(
		'size' => '21px',
		'face' => 'Montserrat',
		'style' => 'bold',
		'color' => '#ffffff');
		
	// Typography Tagline
	$typography_tag = array(
		'size' => '14px',
		'face' => 'Karla',
		'style' => 'normal',
		'color' => '#e5e4e3');
		
	// Typography Nav
	$typography_nav = array(
		'size' => '14px',
		'face' => 'Montserrat',
		'style' => 'bold',
		'color' => '#ffffff');
		
	// Typography Slider Small Title
	$typography_slidesmtitle = array(
		'size' => '13px',
		'face' => 'Karla',
		'style' => 'normal',
		'color' => '#ffffff');
			
	// Typography Slider Title
	$typography_slidetitle = array(
		'size' => '40px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');
		
	// Typography Slider Description
	$typography_slidedesc = array(
		'size' => '14px',
		'face' => 'Karla',
		'style' => 'normal',
		'color' => '#ffffff');
		
	// Typography Section Title
	$typography_sectitle = array(
		'size' => '35px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');
		
	// Typography Intro box Title
	$typography_introbox = array(
		'size' => '25px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');
		
	// Typography Service box Title
	$typography_servicebox = array(
		'size' => '30px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');	
		
	// Typography Our Team Title
	$typography_teamtitle = array(
		'size' => '20px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');			
		
	// Typography Testimonial Name
	$typography_testname = array(
		'size' => '20px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#fb9504');	
		
	// Typography Latest Post Title
	$typography_posttitle = array(
		'size' => '17px',
		'face' => 'Montserrat',
		'style' => 'bold',
		'color' => '#ffffff');
	
	// Typography Footer Title
	$typography_foottitle = array(
		'size' => '20px',
		'face' => 'Montserrat',
		'style' => 'bold',
		'color' => '#ffffff');	
		
	// Typography Blog Page Post Title
	$typography_blogtitle = array(
		'size' => '24px',
		'face' => 'Lobster',
		'style' => 'normal',
		'color' => '#ffffff');
			
	// Typography Widget Title
	$typography_widgettitle = array(
		'size' => '17px',
		'face' => 'Montserrat',
		'style' => 'bold',
		'color' => '#ffffff');			

	// Typography Page Title
	$typography_pagetitle = array(
		'size' => '35px',
		'face' => 'Roboto Condensed',
		'style' => 'bold',
		'color' => '#ffffff');	
		
																						
	// font family start 
	$options[] = array(
		'name' => __('Font Typogarphy', 'fashionbuzz'),
		'desc' => __('Select font family/size/color/style for the body text.', 'fashionbuzz'),
		'id' => 'bodyfontface',
		'type' => 'typography',
		'std' => $typography_body );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for heading tag h1', 'fashionbuzz'),
		'id' => 'h1fontface',
		'type' => 'typography',
		'std' => $typography_h1 );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for heading tag h2', 'fashionbuzz'),
		'id' => 'h2fontface',
		'type' => 'typography',
		'std' => $typography_h2 );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for heading tag h3', 'fashionbuzz'),
		'id' => 'h3fontface',
		'type' => 'typography',
		'std' => $typography_h3 );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for heading tag h4', 'fashionbuzz'),
		'id' => 'h4fontface',
		'type' => 'typography',
		'std' => $typography_h4 );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for heading tag h5', 'fashionbuzz'),
		'id' => 'h5fontface',
		'type' => 'typography',
		'std' => $typography_h5 );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for heading tag h6', 'fashionbuzz'),
		'id' => 'h6fontface',
		'type' => 'typography',
		'std' => $typography_h6 );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the textual logo', 'fashionbuzz'),
		'id' => 'logofontface',
		'type' => 'typography',
		'std' => $typography_logo );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the logo tagline', 'fashionbuzz'),
		'id' => 'tagfontface',
		'type' => 'typography',
		'std' => $typography_tag );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for navigation menu', 'fashionbuzz'),
		'id' => 'navfontface',
		'type' => 'typography',
		'std' => $typography_nav );
	
	$options[] = array(
		'desc' => __('Select font family/size/color/style for slider small title', 'fashionbuzz'),
		'id' => 'slidesmtitlefontface',
		'type' => 'typography',
		'std' => $typography_slidesmtitle );
			
	$options[] = array(
		'desc' => __('Select font family/size/color/style for slider title', 'fashionbuzz'),
		'id' => 'slidetitlefontface',
		'type' => 'typography',
		'std' => $typography_slidetitle );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for slider Description', 'fashionbuzz'),
		'id' => 'slidedescfontface',
		'type' => 'typography',
		'std' => $typography_slidedesc );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the section title', 'fashionbuzz'),
		'id' => 'sectitlefontface',
		'type' => 'typography',
		'std' => $typography_sectitle );	
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for Intro boxes', 'fashionbuzz'),
		'id' => 'introboxfontface',
		'type' => 'typography',
		'std' => $typography_introbox );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for Services boxes', 'fashionbuzz'),
		'id' => 'serviceboxfontface',
		'type' => 'typography',
		'std' => $typography_servicebox );				
	
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the Our Team title', 'fashionbuzz'),
		'id' => 'teamtitlefontface',
		'type' => 'typography',
		'std' => $typography_teamtitle );	
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the testimonial name', 'fashionbuzz'),
		'id' => 'testnamefontface',
		'type' => 'typography',
		'std' => $typography_testname );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the latest News title', 'fashionbuzz'),
		'id' => 'posttitlefontface',
		'type' => 'typography',
		'std' => $typography_posttitle );			
							
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the footer title', 'fashionbuzz'),
		'id' => 'foottitlefontface',
		'type' => 'typography',
		'std' => $typography_foottitle );		
			
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the blog page post title', 'fashionbuzz'),
		'id' => 'blogtitlefontface',
		'type' => 'typography',
		'std' => $typography_blogtitle );
			
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the widget title', 'fashionbuzz'),
		'id' => 'widgettitlefontface',
		'type' => 'typography',
		'std' => $typography_widgettitle );	
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the page title', 'fashionbuzz'),
		'id' => 'pagetitlefontface',
		'type' => 'typography',
		'std' => $typography_pagetitle );																
				
			
	//Social Icons	
	$options[] = array(
		'name' => __('Social icons colors', 'fashionbuzz'),	
		'desc' => __('Select font color for social icons', 'fashionbuzz'),
		'id' => 'socialfontcolor',
		'std' => '#929292',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover color for social icons', 'fashionbuzz'),
		'id' => 'socialfonthvcolor',
		'std' => '#ffffff',
		'type' => 'color');
	
	$options[] = array(
		'desc' => __('Select background hover color for social icons', 'fashionbuzz'),
		'id' => 'socialbghvcolor',
		'std' => '#fb9504',
		'type' => 'color');		
		
		
	//Font color start
	$options[] = array(
		'name' => __('Font Colors', 'fashionbuzz'),	
		'desc' => __('Select font color for links / anchor tags', 'fashionbuzz'),
		'id' => 'linkcolor',
		'std' => '#fb9504',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font hover color for links / anchor tags', 'fashionbuzz'),
		'id' => 'linkhovercolor',
		'std' => '#ffffff',
		'type' => 'color');		
	
	$options[] = array(
		'desc' => __('Select Navigation font hover color', 'fashionbuzz'),
		'id' => 'navhovercolor',
		'std' => '#fb9504',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select highlighted font color for section title', 'fashionbuzz'),
		'id' => 'sechlfontclr',
		'std' => '#fb9504',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select icon color for icontitle shortcode', 'fashionbuzz'),
		'id' => 'icnttlicnclr',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select title color for icontitle shortcode', 'fashionbuzz'),
		'id' => 'icnttlttlclr',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select service box icon color', 'fashionbuzz'),
		'id' => 'serbxicnclr',
		'std' => '#ffffff',
		'type' => 'color');
				
	$options[] = array(
		'desc' => __('Select title hover color for service box', 'fashionbuzz'),
		'id' => 'serhvttlclr',
		'std' => '#fb9504',
		'type' => 'color');											
						
	$options[] = array(
		'desc' => __('Select font hover color for team member title', 'fashionbuzz'),
		'id' => 'teattitlehvclr',
		'std' => '#fb9504',
		'type' => 'color');				
		
	$options[] = array(
		'desc' => __('Select font color for client testimonilas Section title', 'fashionbuzz'),
		'id' => 'testimonialsectitlecolor',
		'std' => '#ffffff',
		'type' => 'color');		
		
	$options[] = array(
		'desc' => __('Select font color for client testimonilas description', 'fashionbuzz'),
		'id' => 'testimonialdesccolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select quote icon color for client testimonilas', 'fashionbuzz'),
		'id' => 'testiquoteclr',
		'std' => '#fb9504',
		'type' => 'color');				
		
	$options[] = array(
		'desc' => __('Select font hover color for latest news title', 'fashionbuzz'),
		'id' => 'latestpoststtlhvcolor',
		'std' => '#fb9504',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for latest news description', 'fashionbuzz'),
		'id' => 'latestpostsdesccolor',
		'std' => '#c0c0c0',
		'type' => 'color');			
			
	$options[] = array(
		'desc' => __('Select font color for latest news meta', 'fashionbuzz'),
		'id' => 'postmeta',
		'std' => '#c0c0c0',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for latest news meta anchor link', 'fashionbuzz'),
		'id' => 'postmetalink',
		'std' => '#fb9504',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover color for blog page post title', 'fashionbuzz'),
		'id' => 'blogposthoverclr',
		'std' => '#fb9504',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for follow us instagram button', 'fashionbuzz'),
		'id' => 'followbtnclr',
		'std' => '#444444',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover color for follow us instagram button', 'fashionbuzz'),
		'id' => 'followbtnhvclr',
		'std' => '#ffffff',
		'type' => 'color');		
				
	$options[] = array(
		'desc' => __('Select font color for Counter section', 'fashionbuzz'),
		'id' => 'counterclr',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover color for Counter section', 'fashionbuzz'),
		'id' => 'counterhvclr',
		'std' => '#444444',
		'type' => 'color');						
		
		
	//Work Gallery		
	$options[] = array(
		'name' => __('Work Gallery section colors', 'fashionbuzz'),
		'desc' => __('Select font color for gallery filter', 'fashionbuzz'),
		'id' => 'galfiltrtext',
		'std' => '#ffffff',
		'type' => 'color');				
		
	$options[] = array(
		'desc' => __('Select font hover / active color for gallery filter', 'fashionbuzz'),
		'id' => 'galfiltracttext',
		'std' => '#fb9504',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for gallery image title', 'fashionbuzz'),
		'id' => 'galtitleclr',
		'std' => '#ffffff',
		'type' => 'color');
	
	$options[] = array(
		'desc' => __('Select backgraound color for gallery image title', 'fashionbuzz'),
		'id' => 'galtitlebgclr',
		'std' => '#fb9504',
		'type' => 'color');		
				

	//Footer		
	$options[] = array(
		'name' => __('Footer section colors', 'fashionbuzz'),
		'desc' => __('Select background color for Footer section', 'fashionbuzz'),
		'id' => 'footerbgcolor',
		'std' => '#000000',
		'type' => 'color');				
		
	$options[] = array(
		'desc' => __('Select font color for footer description', 'fashionbuzz'),
		'id' => 'footdesccolor',
		'std' => '#8c8c8c',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer links', 'fashionbuzz'),
		'id' => 'footerposttitlecolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font hover color for footer links', 'fashionbuzz'),
		'id' => 'footerposttitlehvcolor',
		'std' => '#fb9504',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer social icon', 'fashionbuzz'),
		'id' => 'footsocialfontcolor',
		'std' => '#89898b',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font hover color for footer social icon', 'fashionbuzz'),
		'id' => 'footsocialfontcolorhv',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background color for copyright section', 'fashionbuzz'),
		'id' => 'copybgcolor',
		'std' => '#0d0d0d',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer left text (copyright)', 'fashionbuzz'),
		'id' => 'copycolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer copyright links', 'fashionbuzz'),
		'id' => 'copylinks',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover color for footer copyright links', 'fashionbuzz'),
		'id' => 'copylinkshov',
		'std' => '#fb9504',
		'type' => 'color');
		
	//OVERLAY
	$options[] = array(	
		'name' =>__('Background Overlay Color and opacity'),			
		'desc' => __('Select overlay color for Our Team section', 'fashionbuzz'),
		'id' => 'teamoverlay',
		'std' => '#fb9504',
		'type' => 'color');
		
	$options[] = array(		
		'desc' => __('Select overlay color for Client Testimonials section', 'fashionbuzz'),
		'id' => 'testioverlaycolor',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(		
		'desc' => __('Select overlay color for Instagram images', 'fashionbuzz'),
		'id' => 'instaoverlaycolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select overlay color for Contact page info widget', 'fashionbuzz'),
		'id' => 'cinfobgclr',
		'std' => '#000000',
		'type' => 'color');						
		
	$options[] = array(		
		'desc' => __('Select opacity for overlay color ', 'fashionbuzz'),
		'id' => 'overlaycoloropacity',
		'std' => '0.9',
		'type' => 'select',
		'options'	=> array('1'=>1, '0.9'=>0.9,'0.8'=>0.8,'0.7'=>0.7,'0.6'=>0.6,'0.5'=>0.5,'0.4'=>0.4,'0.3'=>0.3,'0.2'=>0.2,));	
			
			
	// Background start			
	$options[] = array(
		'name' => __('Background Colors', 'fashionbuzz'),				
		'desc' => __('Select background color for body', 'fashionbuzz'),
		'id' => 'bodybgcolor',
		'std' => '#0d0d0d',
		'type' => 'color');		
		
	$options[] = array(
		'desc' => __('Select background color for header nav dropdown', 'fashionbuzz'),
		'id' => 'navdpbgcolor',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background hover color for Intro box', 'fashionbuzz'),
		'id' => 'introhvbg',
		'std' => '#fb9504',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background color for icontitle box', 'fashionbuzz'),
		'id' => 'icnttlbg',
		'std' => '#303342',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background hover color for icontitle box', 'fashionbuzz'),
		'id' => 'icnttlhvbg',
		'std' => '#fb9504',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for Follow us instagram button', 'fashionbuzz'),
		'id' => 'flwbtnbg',
		'std' => '#ffffff',
		'type' => 'color');
	
	$options[] = array(
		'desc' => __('Select background hover color for Follow us instagram button', 'fashionbuzz'),
		'id' => 'flwbtnhvbg',
		'std' => '#fb9504',
		'type' => 'color');									
			
	$options[] = array(
		'desc' => __('Select background hover color for counter section', 'fashionbuzz'),
		'id' => 'counterbghv',
		'std' => '#ffffff',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select background color for our skill bar', 'fashionbuzz'),
		'id' => 'skillbarbgcolor',
		'std' => '#444444',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background active color for our skill bar', 'fashionbuzz'),
		'id' => 'skillbarbgcoloractive',
		'std' => '#fb9504',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for toggle menu', 'fashionbuzz'),
		'id' => 'togglemenu',
		'std' => '#000000',
		'type' => 'color');
	
	// Default Buttons		
	$options[] = array(
		'name' => __('Button Colors', 'fashionbuzz'),		
		'desc' => __('Select background color for default button', 'fashionbuzz'),
		'id' => 'btnbgcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background hover color for default button', 'fashionbuzz'),
		'id' => 'btnbghvcolor',
		'std' => '#010101',
		'type' => 'color');		

	$options[] = array(
		'desc' => __('Select font color default button', 'fashionbuzz'),
		'id' => 'btntxtcolor',
		'std' => '#010101',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font hover color for default button', 'fashionbuzz'),
		'id' => 'btntxthvcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(		
		'desc' => __('Select background color for second button', 'fashionbuzz'),
		'id' => 'btntwobgcolor',
		'std' => '#fb9504',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background hover color for second button', 'fashionbuzz'),
		'id' => 'btntwobghvcolor',
		'std' => '#010101',
		'type' => 'color');		

	$options[] = array(
		'desc' => __('Select font color for second button', 'fashionbuzz'),
		'id' => 'btntwotxtcolor',
		'std' => '#ffffff',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font hover color for second button', 'fashionbuzz'),
		'id' => 'btntwotxthvcolor',
		'std' => '#ffffff',
		'type' => 'color');	
			
	$options[] = array(
		'desc' => __('Select font color for latest posts read more', 'fashionbuzz'),
		'id' => 'postreadmorecolor',
		'std' => '#fb9504',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font hover color for latest posts read more', 'fashionbuzz'),
		'id' => 'postreadmorehvcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for get in touch button', 'fashionbuzz'),
		'id' => 'getinfontclr',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover color for get in touch button', 'fashionbuzz'),
		'id' => 'getinfonthvclr',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select hover background color for get in touch button', 'fashionbuzz'),
		'id' => 'getintchhvbg',
		'std' => '#fb9504',
		'type' => 'color');			
				
	// Border colors
	$options[] = array(	
		'name' => __('Border Colors', 'fashionbuzz'),				
		'desc' => __('Select border color for navigation dropdown menu ul li', 'fashionbuzz'),
		'id' => 'navddmenuborder',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(			
		'desc' => __('Select title border color for sections title', 'fashionbuzz'),
		'id' => 'sectitlebdr',
		'std' => '#ffffff',
		'type' => 'color');
			
	$options[] = array(			
		'desc' => __('Select border color for intro box title', 'fashionbuzz'),
		'id' => 'introbxttlbdr',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(			
		'desc' => __('Select side border color for intro box', 'fashionbuzz'),
		'id' => 'introbxsidebdr',
		'std' => '#ffffff',
		'type' => 'color');		
		
	$options[] = array(			
		'desc' => __('Select border color for featured image', 'fashionbuzz'),
		'id' => 'featimgbdr',
		'std' => '#fb9504',
		'type' => 'color');	
		
	$options[] = array(			
		'desc' => __('Select border color for service box icon', 'fashionbuzz'),
		'id' => 'serbxicnbdr',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(			
		'desc' => __('Select border color for service box title', 'fashionbuzz'),
		'id' => 'serttlbdrclr',
		'std' => '#ffffff',
		'type' => 'color');			
			
	$options[] = array(			
		'desc' => __('Select side border color for service box on hover', 'fashionbuzz'),
		'id' => 'serbxbdrclr',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(			
		'desc' => __('Select side border color for our team', 'fashionbuzz'),
		'id' => 'teambdrclr',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(			
		'desc' => __('Select side border color for testimonials images', 'fashionbuzz'),
		'id' => 'testibdrimg',
		'std' => '#ffffff',
		'type' => 'color');						
	
	$options[] = array(			
		'desc' => __('Select border color for Counter section', 'fashionbuzz'),
		'id' => 'counterbdr',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(			
		'desc' => __('Select border background color for footer widget title', 'fashionbuzz'),
		'id' => 'foowidgetbdbgclr',
		'std' => '#fb9504',
		'type' => 'color');
		
	//SIDEBAR	
	$options[] = array(
		'name' => __('Sidebar/Widget Colors'),
		'desc' => __('Select font color for sidebar li a', 'fashionbuzz'),
		'id' => 'sidebarfontcolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font hover color for sidebar li a', 'fashionbuzz'),
		'id' => 'sidebarfonthvcolor',
		'std' => '#fb9504',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select border color for sidebar li a', 'fashionbuzz'),
		'id' => 'sidebarliaborder',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background color for sidebar widget box', 'fashionbuzz'),
		'id' => 'widgetboxbgcolor',
		'std' => '#171717',
		'type' => 'color');	
	
	$options[] = array(
		'desc' => __('Select background color for sidebar widget title', 'fashionbuzz'),
		'id' => 'widgettitlebgcolor',
		'std' => '#090909',
		'type' => 'color');
			
	$options[] = array(
		'desc' => __('Select font color for widget title', 'fashionbuzz'),
		'id' => 'wdgttitleccolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for sidebar widget box', 'fashionbuzz'),
		'id' => 'widgetboxfontcolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for toggle menu on responsive', 'fashionbuzz'),
		'id' => 'togglemenucolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	// Tab and Accordian colors
	$options[] = array(	
		'name' => __('Tab And Toggle Colors', 'fashionbuzz'),				
		'desc' => __('Select background color for tab button', 'fashionbuzz'),
		'id' => 'tabbgcolor',
		'std' => '#171717',
		'type' => 'color');	
		
	$options[] = array(					
		'desc' => __('Select background hover/active color for tab button', 'fashionbuzz'),
		'id' => 'tabbgcolorhv',
		'std' => '#090909',
		'type' => 'color');	
		
	$options[] = array(					
		'desc' => __('Select font color for tab button', 'fashionbuzz'),
		'id' => 'tabfontcolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(					
		'desc' => __('Select font hover/active color for tab button', 'fashionbuzz'),
		'id' => 'tabfontcolorhv',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(					
		'desc' => __('Select border color for tab content', 'fashionbuzz'),
		'id' => 'tabcontentborder',
		'std' => '#444444',
		'type' => 'color');	
		
	$options[] = array(					
		'desc' => __('Select font color for tab description', 'fashionbuzz'),
		'id' => 'tabcontentfontcolor',
		'std' => '#444444',
		'type' => 'color');	
			
	$options[] = array(					
		'desc' => __('Select font color for accordion title', 'fashionbuzz'),
		'id' => 'acctitlecolor',
		'std' => '#444444',
		'type' => 'color');	
		
	$options[] = array(					
		'desc' => __('Select border color for accordion title', 'fashionbuzz'),
		'id' => 'acctitlebordercolor',
		'std' => '#c2c2c2',
		'type' => 'color');	
				
	$options[] = array(					
		'desc' => __('Select background color for active accordion title', 'fashionbuzz'),
		'id' => 'activetitlebg',
		'std' => '#fb9504',
		'type' => 'color');	
		
	$options[] = array(					
		'desc' => __('Select font active color for accordion title', 'fashionbuzz'),
		'id' => 'acctitlecolorhv',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(					
		'desc' => __('Select font color for accordion description box', 'fashionbuzz'),
		'id' => 'accdescfontcolor',
		'std' => '#ffffff',
		'type' => 'color');		
					
	// Slider controls colors		
	$options[] = array(
		'name' => __('Slider controls Colors', 'fashionbuzz'),
		'desc' => __('Select background color for slider pager', 'fashionbuzz'),
		'id' => 'sldpagebg',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background active color for slider pager', 'fashionbuzz'),
		'id' => 'sldpagehvbg',
		'std' => '#fb9504',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background color for slider navigation arrows', 'fashionbuzz'),
		'id' => 'sldarrowbg',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select color for slider navigation arrows', 'fashionbuzz'),
		'id' => 'sldarrowclr',
		'std' => '#000000',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background hover color for slider navigation arrows', 'fashionbuzz'),
		'id' => 'sldarrowhvbg',
		'std' => '#fb9504',
		'type' => 'color');		
	
	$options[] = array(
		'desc' => __('Select hover color for slider navigation arrows', 'fashionbuzz'),
		'id' => 'sldarrowhvclr',
		'std' => '#ffffff',
		'type' => 'color');				
		
	$options[] = array(
		'desc' => __('Select Border color for slider pager', 'fashionbuzz'),
		'id' => 'sldpagehvbd',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select excerpt length for Team section', 'fashionbuzz'),
		'id' => 'teamexcerptlength',
		'std' => '22',
		'type' => 'text');	
		
	$options[] = array(	
		'name' => __('Excerpt Lenth', 'fashionbuzz'),		
		'desc' => __('Select excerpt length for latest blog boxes section', 'fashionbuzz'),
		'id' => 'latestnewslength',
		'std' => '25',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Select excerpt length for testimonials section', 'fashionbuzz'),
		'id' => 'testimonialsexcerptlength',
		'std' => '75',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Select excerpt length for blog post', 'fashionbuzz'),
		'id' => 'blogpostexcerptlength',
		'std' => '30',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Select excerpt length for footer latest posts', 'fashionbuzz'),
		'id' => 'footerpostslength',
		'std' => '12',
		'type' => 'text');
		
	$options[] = array(	
		'name' => __('Read More Text', 'fashionbuzz'),		
		'desc' => __('Change read more button text for blog posts ', 'fashionbuzz'),
		'id' => 'blogpostreadmoretext',
		'std' => 'Read More',
		'type' => 'text');		
		
	$options[] = array(
		'name' => __('Responsive View Menu word Changeable', 'fashionbuzz'),
		'desc' => __('Change menu word on responsive view', 'fashionbuzz'),
		'id' => 'menuwordchange',
		'std' => 'Menu',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Blog Single Layout', 'fashionbuzz'),
		'desc' => __('Select layout. eg:Boxed, Wide', 'fashionbuzz'),
		'id' => 'singlelayout',
		'type' => 'select',
		'std' => 'singleright',
		'options' => array('singleright'=>'Blog Single Right Sidebar', 'singleleft'=>'Blog Single Left Sidebar', 'sitefull'=>'Blog Single Full Width', 'nosidebar'=>'Blog Single No Sidebar') );	
		
	$options[] = array(
		'name' => __('Woocommerce Page Layout', 'fashionbuzz'),
		'desc' => __('Select layout. eg:right-sidebar, left-sidebar, full-width', 'fashionbuzz'),
		'id' => 'woocommercelayout',
		'type' => 'select',
		'std' => 'woocommercesitefull',
		'options' => array('woocommerceright'=>'Woocommerce Right Sidebar', 'woocommerceleft'=>'Woocommerce Left Sidebar', 'woocommercesitefull'=>'Woocommerce Full Width') );		
		

	//Layout Settings
	$options[] = array(
		'name' => __('Sections', 'fashionbuzz'),
		'type' => 'heading');		
	  
	$options[] = array(
		'name' => __('Number of Sections', 'fashionbuzz'),
		'desc' => __('Select number of sections', 'fashionbuzz'),
		'id' => 'numsection',
		'type' => 'select',
		'std' => '9',
		'options' => array_combine(range(1,30), range(1,30)) );

	$numsecs = of_get_option( 'numsection', 9 );

	for( $n=1; $n<=$numsecs; $n++){
		$options[] = array(
			'desc' => __("<h3>Section ".$n."</h3>", 'fashionbuzz'),
			'class' => 'toggle_title',
			'type' => 'info');	
			
		$options[] = array(
			'name' => __('Animation Type', 'fashionbuzz'),
			'id' => 'sectionanimate'.$n,			
			'type' => 'select',	
			'std' => 'fadeInUp',	
			'options'	=> array('none'=>'None','fadeInUp'=>'Fade In Up','bounce'=>'Bounce', 'bounceIn'=>'Bounce In','bounceInDown'=>'Bounce In Down','bounceInLeft'=>'Bounce In Left', 'bounceInRight'=>'Bounce In Right', 'bounceInUp'=>'Bounce In Up','fadeIn'=>'Fade In','fadeInDown'=>'Fade In Down','fadeInDownBig'=>'Fade In Down Big','fadeInLeft'=>'Fade In Left','fadeInLeftBig'=>'Fade In Left Big','fadeInRight'=>'Fade In Right','fadeInRightBig'=>'Fade In Right Big','fadeInUp'=>'Fade In Up','fadeInUpBig'=>'Fade In Up Big','flipInX'=>'Flip In X','flipInY'=>'Flip In Y','lightSpeedIn'=>'Light Speed In','slideInUp'=>'Slide In Up','slideInDown'=>'Slide In Down','slideInLeft'=>'Slide In Left','slideInRight'=>'Slide In Right','zoomIn'=>'Zoom In','zoomInDown'=>'Zoom In Down','zoomInLeft'=>'Zoom In Left','zoomInRight'=>'Zoom In Right','zoomInUp'=>'Zoom In Up'));	
	
		$options[] = array(
			'name' => __('Section Title', 'fashionbuzz'),
			'id' => 'sectiontitle'.$n,
			'std' => ( ( isset($section_text[$n]['section_title']) ) ? $section_text[$n]['section_title'] : '' ),
			'type' => 'text');		

		$options[] = array(
			'name' => __('Section ID', 'fashionbuzz'),
			'desc'	=> __('Enter your section ID here. SECTION ID MUST BE IN SMALL LETTERS ONLY AND DO NOT ADD SPACE OR SYMBOL.', 'fashionbuzz'),
			'id' => 'menutitle'.$n,
			'std' => ( ( isset($section_text[$n]['menutitle']) ) ? $section_text[$n]['menutitle'] : '' ),
			'type' => 'text');

		$options[] = array(
			'name' => __('Section Background Color', 'fashionbuzz'),
			'desc' => __('Select background color for section', 'fashionbuzz'),
			'id' => 'sectionbgcolor'.$n,
			'std' => ( ( isset($section_text[$n]['bgcolor']) ) ? $section_text[$n]['bgcolor'] : '' ),
			'type' => 'color');
			
		$options[] = array(
			'name' => __('Background Image', 'fashionbuzz'),
			'id' => 'sectionbgimage'.$n,
			'class' => '',
			'std' => ( ( isset($section_text[$n]['bgimage']) ) ? $section_text[$n]['bgimage'] : '' ),
			'type' => 'upload');

		$options[] = array(
			'name' => __('Section CSS Class', 'fashionbuzz'),
			'desc' => __('Set class for this section.', 'fashionbuzz'),
			'id' => 'sectionclass'.$n,
			'std' => ( ( isset($section_text[$n]['class']) ) ? $section_text[$n]['class'] : '' ),
			'type' => 'text');
			
		$options[] = array(
			'name'	=> __('Hide Section', 'fashionbuzz'),
			'desc'	=> __('Check to hide this section', 'fashionbuzz'),
			'id'	=> 'hidesec'.$n,
			'type'	=> 'checkbox',
			'std'	=> '');

		$options[] = array(
			'name' => __('Section Content', 'fashionbuzz'),
			'id' => 'sectioncontent'.$n,
			'std' => ( ( isset($section_text[$n]['content']) ) ? $section_text[$n]['content'] : '' ),
			'type' => 'editor');
	}


	//SLIDER SETTINGS
	$options[] = array(
		'name' => __('Homepage Slider', 'fashionbuzz'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Inner Page Banner', 'fashionbuzz'),
		'desc' => __('Upload inner page banner for site', 'fashionbuzz'),
		'id' => 'innerpagebanner',
		'class' => '',
		'std'	=> get_template_directory_uri()."/images/inner-banner.jpg",
		'type' => 'upload');
		
		
	$options[] = array(
		'name' => __('Custom Slider Shortcode Area For Home Page', 'fashionbuzz'),
		'desc' => __('Enter here your slider shortcode without php tag', 'fashionbuzz'),
		'id' => 'customslider',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'name' => __('Slider Effects and Timing', 'fashionbuzz'),
		'desc' => __('Select slider effect.','fashionbuzz'),
		'id' => 'slideefect',
		'std' => 'random',
		'type' => 'select',
		'options' => array('random'=>'Random', 'fade'=>'Fade', 'fold'=>'Fold', 'sliceDown'=>'Slide Down', 'sliceDownLeft'=>'Slide Down Left', 'sliceUp'=>'Slice Up', 'sliceUpLeft'=>'Slice Up Left', 'sliceUpDown'=>'Slice Up Down', 'sliceUpDownLeft'=>'Slice Up Down Left', 'slideInRight'=>'SlideIn Right', 'slideInLeft'=>'SlideIn Left', 'boxRandom'=>'Box Random', 'boxRain'=>'Box Rain', 'boxRainReverse'=>'Box Rain Reverse', 'boxRainGrow'=>'Box Rain Grow', 'boxRainGrowReverse'=>'Box Rain Grow Reverse' ));
		
	$options[] = array(
		'desc' => __('Animation speed should be multiple of 100.', 'fashionbuzz'),
		'id' => 'slideanim',
		'std' => 500,
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add slide pause time.', 'fashionbuzz'),
		'id' => 'slidepause',
		'std' => 4000,
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slide Controllers', 'fashionbuzz'),
		'desc' => __('Hide/Show Direction Naviagtion of slider.','fashionbuzz'),
		'id' => 'slidenav',
		'std' => 'true',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'desc' => __('Hide/Show pager of slider.','fashionbuzz'),
		'id' => 'slidepage',
		'std' => 'false',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'desc' => __('Pause Slide on Hover.','fashionbuzz'),
		'id' => 'slidepausehover',
		'std' => 'false',
		'type' => 'select',
		'options' => array('true'=>'Yes', 'false'=>'No'));
		
	$options[] = array(
		'name' => __('Slider Image 1 (1420x649)', 'fashionbuzz'),
		'desc' => __('First Slide', 'fashionbuzz'),
		'id' => 'slide1',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slider1.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slide Small Title', 'fashionbuzz'),
		'id' => 'slidetitlesm1',
		'std' => 'Fashion',
		'type' => 'text');
			
	$options[] = array(
		'desc' => __('Slide Title', 'fashionbuzz'),
		'id' => 'slidetitle1',
		'std' => 'The world of Fashion',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'fashionbuzz'),
		'id' => 'slidedesc1',
		'std' => 'In id placerat orci. Nunc eleifend dignissim sapien id interdum. Praesent tempor justo nibh, et faucibus enim maximus volutpat. Vestibulum in urna dui. Nullam gravida felis nec lectus volutpat euismod. Morbi eget dolor aliquam, tincidunt risus in, vehicula erat. Integer malesuada felis quis tortor convallis vulputate.',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Enter text for button one', 'fashionbuzz'),
		'id' => 'slidebutton1',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button one', 'fashionbuzz'),
		'id' => 'slideurl1',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Enter text for button two', 'fashionbuzz'),
		'id' => 'slidesecbutton1',
		'std' => 'View our Portfolio',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button two', 'fashionbuzz'),
		'id' => 'slidesecurl1',
		'std' => '#',
		'type' => 'text');				
	
	$options[] = array(
		'name' => __('Slider Image 2 (1420x649)', 'fashionbuzz'),
		'desc' => __('Second Slide', 'fashionbuzz'),
		'class' => '',
		'id' => 'slide2',
		'std' => get_template_directory_uri()."/images/slides/slider2.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slide Small Title', 'fashionbuzz'),
		'id' => 'slidetitlesm2',
		'std' => 'Fashion',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Slide Title', 'fashionbuzz'),
		'id' => 'slidetitle2',
		'std' => 'Be your own label',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'fashionbuzz'),
		'id' => 'slidedesc2',
		'std' => 'In id placerat orci. Nunc eleifend dignissim sapien id interdum. Praesent tempor justo nibh, et faucibus enim maximus volutpat. Vestibulum in urna dui. Nullam gravida felis nec lectus volutpat euismod. Morbi eget dolor aliquam, tincidunt risus in, vehicula erat. Integer malesuada felis quis tortor convallis vulputate.',
		'type' => 'textarea');	
		
		
	$options[] = array(
		'desc' => __('Enter text for button one', 'fashionbuzz'),
		'id' => 'slidebutton2',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button one', 'fashionbuzz'),
		'id' => 'slideurl2',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Enter text for button two', 'fashionbuzz'),
		'id' => 'slidesecbutton2',
		'std' => 'View our Portfolio',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button two', 'fashionbuzz'),
		'id' => 'slidesecurl2',
		'std' => '#',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Slider Image 3 (1420x649)', 'fashionbuzz'),
		'desc' => __('Third Slide', 'fashionbuzz'),
		'id' => 'slide3',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slider3.jpg",
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Slide Small Title', 'fashionbuzz'),
		'id' => 'slidetitlesm3',
		'std' => 'Fashion',
		'type' => 'text');
			
	$options[] = array(
		'desc' => __('Slide Title', 'fashionbuzz'),
		'id' => 'slidetitle3',
		'std' => 'Designed for fit',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'fashionbuzz'),
		'id' => 'slidedesc3',
		'std' => 'In id placerat orci. Nunc eleifend dignissim sapien id interdum. Praesent tempor justo nibh, et faucibus enim maximus volutpat. Vestibulum in urna dui. Nullam gravida felis nec lectus volutpat euismod. Morbi eget dolor aliquam, tincidunt risus in, vehicula erat. Integer malesuada felis quis tortor convallis vulputate.',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Enter text for button one', 'fashionbuzz'),
		'id' => 'slidebutton3',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button one', 'fashionbuzz'),
		'id' => 'slideurl3',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Enter text for button two', 'fashionbuzz'),
		'id' => 'slidesecbutton3',
		'std' => 'View our Portfolio',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button two', 'fashionbuzz'),
		'id' => 'slidesecurl3',
		'std' => '#',
		'type' => 'text');	
	
	$options[] = array(
		'name' => __('Slider Image 4 (1420x649)', 'fashionbuzz'),
		'desc' => __('Third Slide', 'fashionbuzz'),
		'id' => 'slide4',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slide Small Title', 'fashionbuzz'),
		'id' => 'slidetitlesm4',
		'std' => '',
		'type' => 'text');
			
	$options[] = array(
		'desc' => __('Slide Title', 'fashionbuzz'),
		'id' => 'slidetitle4',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'desc' => __('Description or Tagline', 'fashionbuzz'),
		'id' => 'slidedesc4',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Enter text for button one', 'fashionbuzz'),
		'id' => 'slidebutton4',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button one', 'fashionbuzz'),
		'id' => 'slideurl4',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Enter text for button two', 'fashionbuzz'),
		'id' => 'slidesecbutton4',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button two', 'fashionbuzz'),
		'id' => 'slidesecurl4',
		'std' => '#',
		'type' => 'text');			
	
	$options[] = array(
		'name' => __('Slider Image 5 (1420x649)', 'fashionbuzz'),
		'desc' => __('Fifth Slide', 'fashionbuzz'),
		'id' => 'slide5',
		'class' => '',
		'std' => '',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Slide Small Title', 'fashionbuzz'),
		'id' => 'slidetitlesm5',
		'std' => '',
		'type' => 'text');
			
	$options[] = array(
		'desc' => __('Slide Title', 'fashionbuzz'),
		'id' => 'slidetitle5',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'fashionbuzz'),
		'id' => 'slidedesc5',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Enter text for button one', 'fashionbuzz'),
		'id' => 'slidebutton5',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button one', 'fashionbuzz'),
		'id' => 'slideurl5',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Enter text for button two', 'fashionbuzz'),
		'id' => 'slidesecbutton5',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button two', 'fashionbuzz'),
		'id' => 'slidesecurl5',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 6 (1420x649)', 'fashionbuzz'),
		'desc' => __('Sixth Slide', 'fashionbuzz'),
		'id' => 'slide6',
		'class' => '',
		'std' => '',
		'type' => 'upload');		
	
	$options[] = array(
		'desc' => __('Slide Small Title', 'fashionbuzz'),
		'id' => 'slidetitlesm6',
		'std' => '',
		'type' => 'text');
			
	$options[] = array(
		'desc' => __('Title 1', 'fashionbuzz'),
		'id' => 'slidetitle6',
		'std' => '',
		'type' => 'text');
				
	$options[] = array(
		'desc' => __('Description or Tagline', 'fashionbuzz'),
		'id' => 'slidedesc6',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Enter text for button one', 'fashionbuzz'),
		'id' => 'slidebutton6',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button one', 'fashionbuzz'),
		'id' => 'slideurl6',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Enter text for button two', 'fashionbuzz'),
		'id' => 'slidesecbutton6',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button two', 'fashionbuzz'),
		'id' => 'slidesecurl6',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 7 (1420x649)', 'fashionbuzz'),
		'desc' => __('Seventh Slide', 'fashionbuzz'),
		'id' => 'slide7',
		'class' => '',
		'std' => '',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Slide Small Title', 'fashionbuzz'),
		'id' => 'slidetitlesm7',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Slide Title', 'fashionbuzz'),
		'id' => 'slidetitle7',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'fashionbuzz'),
		'id' => 'slidedesc7',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Enter text for button one', 'fashionbuzz'),
		'id' => 'slidebutton7',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button one', 'fashionbuzz'),
		'id' => 'slideurl7',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Enter text for button two', 'fashionbuzz'),
		'id' => 'slidesecbutton7',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button two', 'fashionbuzz'),
		'id' => 'slidesecurl7',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 8 (1420x649)', 'fashionbuzz'),
		'desc' => __('Eighth Slide', 'fashionbuzz'),
		'id' => 'slide8',
		'class' => '',
		'std' => '',
		'type' => 'upload');		
		
	$options[] = array(
		'desc' => __('Slide Small Title', 'fashionbuzz'),
		'id' => 'slidetitlesm8',
		'std' => '',
		'type' => 'text');
			
	$options[] = array(
		'desc' => __('Slide Title', 'fashionbuzz'),
		'id' => 'slidetitle8',
		'std' => '',
		'type' => 'text');
				
	$options[] = array(
		'desc' => __('Description or Tagline', 'fashionbuzz'),
		'id' => 'slidedesc8',
		'std' => '',
		'type' => 'textarea');
				
	$options[] = array(
		'desc' => __('Enter text for button one', 'fashionbuzz'),
		'id' => 'slidebutton8',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button one', 'fashionbuzz'),
		'id' => 'slideurl8',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Enter text for button two', 'fashionbuzz'),
		'id' => 'slidesecbutton8',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button two', 'fashionbuzz'),
		'id' => 'slidesecurl8',
		'std' => '#',
		'type' => 'text');

	$options[] = array(
		'name' => __('Slider Image 9 (1420x649)', 'fashionbuzz'),
		'desc' => __('Ninth Slide', 'fashionbuzz'),
		'id' => 'slide9',
		'class' => '',
		'std' => '',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Slide Small Title', 'fashionbuzz'),
		'id' => 'slidetitlesm9',
		'std' => '',
		'type' => 'text');
			
	$options[] = array(
		'desc' => __('Slide Title', 'fashionbuzz'),
		'id' => 'slidetitle9',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'desc' => __('Description or Tagline', 'fashionbuzz'),
		'id' => 'slidedesc9',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Enter text for button one', 'fashionbuzz'),
		'id' => 'slidebutton9',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button one', 'fashionbuzz'),
		'id' => 'slideurl9',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Enter text for button two', 'fashionbuzz'),
		'id' => 'slidesecbutton9',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button two', 'fashionbuzz'),
		'id' => 'slidesecurl9',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 10 (1420x649)', 'fashionbuzz'),
		'desc' => __('Tenth Slide', 'fashionbuzz'),
		'id' => 'slide10',
		'class' => '',
		'std' => '',
		'type' => 'upload');		
	
	$options[] = array(
		'desc' => __('Slide Small Title', 'fashionbuzz'),
		'id' => 'slidetitlesm10',
		'std' => '',
		'type' => 'text');
			
	$options[] = array(
		'desc' => __('Slide Title', 'fashionbuzz'),
		'id' => 'slidetitle10',
		'std' => '',
		'type' => 'text');
				
	$options[] = array(
		'desc' => __('Description or Tagline', 'fashionbuzz'),
		'id' => 'slidedesc10',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Enter text for button one', 'fashionbuzz'),
		'id' => 'slidebutton10',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button one', 'fashionbuzz'),
		'id' => 'slideurl10',
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Enter text for button two', 'fashionbuzz'),
		'id' => 'slidesecbutton10',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Enter url for button two', 'fashionbuzz'),
		'id' => 'slidesecurl10',
		'std' => '#',
		'type' => 'text');
	

	//Footer SETTINGS
	$options[] = array(
		'name' => __('Footer', 'fashionbuzz'),
		'type' => 'heading');		
	
	$options[] = array(
		'name' => __('Footer About Us', 'fashionbuzz'),
		'desc' => __('Footer About us title here.', 'fashionbuzz'),
		'id' => 'abtustitle',
		'std' => 'About Us',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Footer About us Description here.', 'fashionbuzz'),
		'id' => 'abtusdesc',
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium dui eu mi pellentesque sagittis. Mauris non varius massa, id luctus risus. Donec vel nibh lacus. Quisque vel tempus erat. Aliquam quis egestas mi, sollicitudin accumsan sapien.<br><br>Morbi ac pretium eros. Morbi cursus mi eget pretium lacinia. Duis metus tellus, sodales eu est sit amet, tristique varius felis. Suspendisse sollicitudin fermentum massa et tempus. Quisque aliquam justo eu neque ullamcorper, a vestibulum mi maximus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
		'type' => 'textarea');	

		
	$options[] = array(
		'name' => __('Footer Latest News title', 'fashionbuzz'),
		'desc' => __('Footer latest news title here.', 'fashionbuzz'),
		'id' => 'lntitle',
		'std' => 'Latest News',
		'type' => 'text');	
				
	$options[] = array(
		'name' => __('Footer contact Us and Contact Us Page', 'fashionbuzz'),
		'desc' => __('Add footer contact us title here', 'fashionbuzz'),
		'id' => 'contacttitle',
		'std' => 'Contact Us',
		'type' => 'text');		
		
	$options[] = array(
		'name' => __('Contact Us Description', 'fashionbuzz'),
		'desc' => __('contact us text description for footer', 'fashionbuzz'),
		'id' => 'contactdescription',
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere nisi in pharetra auctor.',
		'type' => 'textarea');
		
	$options[] = array(	
		'desc' => __('Add company address here.', 'fashionbuzz'),
		'id' => 'address',
		'std' => '106, FashionBuzz Studio, United States',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Add phone number here.', 'fashionbuzz'),
		'id' => 'phone',
		'std' => ' +01 88 888 8888 /  +01 77 666 8888',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Add fax number here.', 'fashionbuzz'),
		'id' => 'fax',
		'std' => '+01 77 666 8888',
		'type' => 'text');		
		
	$options[] = array(
		'desc' => __('Add email address here.', 'fashionbuzz'),
		'id' => 'email',
		'std' => 'info@sitename.com',
		'type' => 'text');		
			
	$options[] = array(
		'name' => __('Footer Social Icons', 'fashionbuzz'),
		'desc' => __('social icons for footer', 'fashionbuzz'),
		'id' => 'footersocialicon',
		'std' => '[social_area][social icon="facebook" link="#"][social icon="google-plus" link="#"][social icon="twitter" link="#"][social icon="instagram" link="#"][social icon="pinterest" link="#"][/social_area]',
		'type' => 'textarea');	
		
	//Instagram
	$options[] = array(
		'name' => __('Instagram', 'fashionbuzz'),
		'desc' => __('Enter Instagram user ID here', 'fashionbuzz'),
		'id' => 'instauserid',
		'type' => 'text',
		'std' => '1518687454');
		
	$options[] = array(
		'desc' => __('Enter Instagram Access Token here', 'fashionbuzz'),
		'id' => 'instaaccesstoken',
		'type' => 'text',
		'std' => '1518687454.1677ed0.b38d06a0823b42899322b048ba463212');
		
	$options[] = array(
		'desc' => __('Enter Follow Us text here', 'fashionbuzz'),
		'id' => 'instafollowtxt',
		'type' => 'text',
		'std' => 'Follow US');
				
	$options[] = array(
		'desc' => __('Enter your Instagram ID url here', 'fashionbuzz'),
		'id' => 'instaidurl',
		'type' => 'text',
		'std' => 'https://www.instagram.com/');					
		
	$options[] = array(
		'name' => __('Google Map', 'fashionbuzz'),
		'desc' => __('Use iframe code url here. DO NOT APPLY IFRAME TAG', 'fashionbuzz'),
		'id' => 'googlemap',
		'std' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.5141831836513!2d-122.40384868474214!3d37.8014236183989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sin!4v1498563304728',
		'type' => 'textarea');
			
	$options[] = array(
		'name' => __('Footer Copyright', 'fashionbuzz'),
		'desc' => __('Copyright Text for your site.', 'fashionbuzz'),
		'id' => 'copytext',
		'std' => 'Copyright &copy; 2017 FashionBuzz. All Rights Reserved. Design by <a href="http://flythemes.net/" target="_blank">Fly Themes</a>',
		'type' => 'textarea');

		
	$options[] = array(
		'desc' => __('Footer Back to Top Button', 'fashionbuzz'),
		'id' => 'backtotop',
		'std' => '[back-to-top]',
		'type' => 'textarea',);

	//Short codes						
	$options[] = array(
		'name' => __('Short Codes', 'fashionbuzz'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Social Icons ( Note: More social icons can be found at: http://fortawesome.github.io/Font-Awesome/icons/)', 'fashionbuzz'),
		'desc' => __('[social_area]<br />
			[social icon="facebook" link="#"]<br />
			[social icon="google-plus" link="#"]<br />
			[social icon="twitter" link="#"]<br />
			[social icon="pinterest" link="#"]<br />
		[/social_area]', 'fashionbuzz'),
		'type' => 'info');
	
	$options[] = array(
		'name' => __('Intro Boxes', 'fashionbuzz'),
		'desc' => __('[intro_box icon="Icon image path here" title="Title here" link="Link here" readmoretext="Read more text here"] Your content goes here...[/intro_box]<br></br>[intro_box icon="Icon image path here" title="Title here" link="Link here" readmoretext="Read more text here"] Your content goes here...[/intro_box]<br></br>[intro_box icon="Icon image path here" title="Title here" link="Link here" readmoretext="Read more text here" last="yes"] Your content goes here...[/intro_box]<br></br>[clear]','fashionbuzz'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Featured Image', 'fashionbuzz'),
		'desc' => __('[feature_pic image="Image path here.."]','fashionbuzz'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Text With Icon', 'fashionbuzz'),
		'desc' => __('[text_with_icon icon="Icon name here" title="Title here"]<br></br>[text_with_icon icon="Icon name here" title="Title here"]<br></br>[text_with_icon icon="Icon name here" title="Title here" last="yes"]','fashionbuzz'),
		'type' => 'info');				
		
	$options[] = array(
		'name' => __('Our Works', 'fashionbuzz'),
		'desc' => __('[photogallery]','fashionbuzz'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Service Boxes', 'fashionbuzz'),
		'desc' => __('[service icon="Icone name here" title="Title here" link="Link here"]Your content goes here..[/service]<br></br>[service icon="Icone name here" title="Title here" link="Link here"]Your content goes here..[/service]<br></br>[service icon="Icone name here" title="Title here" link="Link here" last="yes"]Your content goes here..[/service]<br></br>[clear]','fashionbuzz'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Video', 'fashionbuzz'),
		'desc' => __('[video link="Add youtube / vimeo iframe src code only"]','fashionbuzz'),
		'type' => 'info');
			
	$options[] = array(
		'name' => __('Our Team', 'fashionbuzz'),
		'desc' => __('[our-team show="4"]', 'fashionbuzz'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Instagram', 'fashionbuzz'),
		'desc' => __('[instagram]', 'fashionbuzz'),
		'type' => 'info');								
	
	$options[] = array(
		'name' => __('Latest Posts', 'fashionbuzz'),
		'desc' => __('[latest-news showposts="3" date="show" author="show"]', 'fashionbuzz'),
		'type' => 'info');								
			
	$options[] = array(
		'name' => __('Testimonials Rotator', 'fashionbuzz'),
		'desc' => __('[testimonials show="3"]', 'fashionbuzz'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('All Testimonials Listing', 'fashionbuzz'),
		'desc' => __('[testimonials-listing show="10"]', 'fashionbuzz'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Sidebar Testimonials Rotator', 'fashionbuzz'),
		'desc' => __('[sidebar-testimonials]', 'fashionbuzz'),
		'type' => 'info');																												
	
	$options[] = array(
		'name' => __('Spacer', 'fashionbuzz'),
		'desc' => __('[spacer height="Enter Height here.."]','fashionbuzz'),
		'type' => 'info');
					
	$options[] = array(
		'name' => __('Counter', 'fashionbuzz'),
		'desc' => __('[counter count="Counter number here" title="sutext or title here" plus="plus sign Yes or No" last="last Yes or No"]','fashionbuzz'),
		'type' => 'info');
			
	$options[] = array(
		'name' => __('Our Skills', 'fashionbuzz'),
		'desc' => __('[skill title="Coding" percent="90" bgcolor="#65676a"][skill title="Design" percent="70" bgcolor="#65676a"][skill title="Building" percent="55" bgcolor="#65676a"][skill title="SEO" percent="100" bgcolor="#65676a"]', 'fashionbuzz'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Contact Form', 'fashionbuzz'),
		'desc' => __('[contactform to_email="test@example.com" title="Contact Form"] 
', 'fashionbuzz'),
		'type' => 'info');		
		
	$options[] = array(
		'name' => __('Custom Button', 'fashionbuzz'),
		'desc' => __('[button align="center" name="View Gallery" link="#" arrowname="fa-chevron-right"]', 'fashionbuzz'),
		'type' => 'info');			
			
		
	$options[] = array(
		'name' => __('Search Form', 'fashionbuzz'),
		'desc' => __('[searchform]', 'fashionbuzz'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('2 Column Content', 'fashionbuzz'),
		'desc' => __('<pre>
[column_content type="one_half"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_half_last"]
	Column 2 Content goes here...
[/column_content]
</pre>', 'fashionbuzz'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('3 Column Content', 'fashionbuzz'),
		'desc' => __('<pre>
[column_content type="one_third"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_third"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_third_last"]
	Column 3 Content goes here...
[/column_content]
</pre>', 'fashionbuzz'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('4 Column Content', 'fashionbuzz'),
		'desc' => __('<pre>
[column_content type="one_fourth"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fourth"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fourth"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fourth_last"]
	Column 4 Content goes here...
[/column_content]
</pre>', 'fashionbuzz'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('5 Column Content', 'fashionbuzz'),
		'desc' => __('<pre>
[column_content type="one_fifth"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 4 Content goes here...
[/column_content]

[column_content type="one_fifth_last"]
	Column 5 Content goes here...
[/column_content]
</pre>', 'fashionbuzz'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('Tabs', 'fashionbuzz'),
		'desc' => __('<pre>
[tabs]
	[tab title="TAB TITLE 1"]
		TAB CONTENT 1
	[/tab]
	[tab title="TAB TITLE 2"]
		TAB CONTENT 2
	[/tab]
	[tab title="TAB TITLE 3"]
		TAB CONTENT 3
	[/tab]
[/tabs]
</pre>', 'fashionbuzz'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Toggle Content', 'fashionbuzz'),
		'desc' => __('<pre>
[toggle_content title="Toggle Title 1"]
	Toggle content 1...
[/toggle_content]
[toggle_content title="Toggle Title 2"]
	Toggle content 2...
[/toggle_content]
[toggle_content title="Toggle Title 3"]
	Toggle content 3...
[/toggle_content]
</pre>', 'fashionbuzz'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Accordion Content', 'fashionbuzz'),
		'desc' => __('<pre>
[accordion]
	[accordion_content title="ACCORDION TITLE 1"]
		ACCORDION CONTENT 1
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 2"]
		ACCORDION CONTENT 2
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 3"]
		ACCORDION CONTENT 3
	[/accordion_content]
[/accordion]
</pre>', 'fashionbuzz'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Clear', 'fashionbuzz'),
		'desc' => __('<pre>
[clear]
</pre>', 'fashionbuzz'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('HR / Horizontal separation line', 'fashionbuzz'),
		'desc' => __('<pre>
[hr] or &lt;hr&gt;
</pre>', 'fashionbuzz'),
		'type' => 'info');
	
	$options[] = array(
		'name' => __('Scroll to Top', 'fashionbuzz'),
		'desc' => __('[back-to-top] 
', 'fashionbuzz'),
		'type' => 'info');

	return $options;
}