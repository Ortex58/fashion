<?php
/**
 * Fashionbuzz functions and definitions
 *
 * @package Fashionbuzz Pro
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
function content($limit) {
$content = explode(' ', get_the_excerpt(), $limit);
if (count($content)>=$limit) {
array_pop($content);
$content = implode(" ",$content).'...';
} else {
$content = implode(" ",$content);
}	
$content = preg_replace('/\[.+\]/','', $content);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}
//Excerpt limit function
function custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

if ( ! function_exists( 'fashionbuzz_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function fashionbuzz_setup() {

	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'fashionbuzz', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_image_size('homepage-thumb',240,145,true);	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'fashionbuzz' ),	
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( 'editor-style.css' );
}
endif; // fashionbuzz_setup
add_action( 'after_setup_theme', 'fashionbuzz_setup' );

function fashionbuzz_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'fashionbuzz' ),
		'description'   => __( 'Appears on blog page sidebar', 'fashionbuzz' ),
		'id'            => 'sidebar-1',
		'before_widget' => '',		
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '<div class="clear"></div></aside>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar Main', 'fashionbuzz' ),
		'description'   => __( 'Appears on page sidebar', 'fashionbuzz' ),
		'id'            => 'sidebar-main',
		'before_widget' => '',		
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) );	
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'fashionbuzz' ),
		'description'   => __( 'Appears on footer', 'fashionbuzz' ),
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s" class="cols-3 widget-column-1">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'fashionbuzz' ),
		'description'   => __( 'Appears on footer', 'fashionbuzz' ),
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s" class="cols-3 widget-column-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'fashionbuzz' ),
		'description'   => __( 'Appears on footer', 'fashionbuzz' ),
		'id'            => 'footer-3',
		'before_widget' => '<div id="%1$s" class="cols-3 widget-column-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar Contact Page', 'fashionbuzz' ),
		'description'   => __( 'Appears on contact page', 'fashionbuzz' ),
		'id'            => 'sidebar-contact',
		'before_widget' => '<aside class="widget-contact %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Header Widget', 'fashionbuzz' ),
		'description'   => __( 'Appears on top of the header', 'fashionbuzz' ),
		'id'            => 'header-widget',
		'before_widget' => '<div class="headerinfo">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 style="display:none">',
		'after_title'   => '</h6>',
	) );
		

}
add_action( 'widgets_init', 'fashionbuzz_widgets_init' );

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once get_template_directory() . '/inc/options-framework.php';

function fashionbuzz_scripts() {	
	wp_enqueue_style( 'fashionbuzz-gfonts-Montserrat', '//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700' );
	wp_enqueue_style( 'fashionbuzz-gfonts-Karla', '//fonts.googleapis.com/css?family=Karla:400,400i,700' );
	wp_enqueue_style( 'fashionbuzz-gfonts-Roboto', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' );
	wp_enqueue_style( 'fashionbuzz-gfonts-Poppoins', '//fonts.googleapis.com/css?family=Poppins:400,600,700' );
	wp_enqueue_style( 'fashionbuzz-gfonts-Lobster', '//fonts.googleapis.com/css?family=Lobster' );
	
	wp_enqueue_style( 'fashionbuzz-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'fashionbuzz-editor-style', get_template_directory_uri().'/editor-style.css' );
	wp_enqueue_style( 'fashionbuzz-base-style', get_template_directory_uri().'/css/default.css' );	
	if ( is_home() || is_front_page() ) { 
	wp_enqueue_style( 'fashionbuzz-nivo-style', get_template_directory_uri().'/css/nivo-slider.css' );
	wp_enqueue_script( 'fashionbuzz-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	}	

	wp_enqueue_script( 'fashionbuzz-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );	
	wp_enqueue_style( 'fashionbuzz-font-awesome-style', get_template_directory_uri().'/css/font-awesome.css' );	
	wp_enqueue_script( 'fashionbuzz-testimonialsminjs', get_template_directory_uri().'/testimonialsrotator/js/jquery.quovolver.min.js', array('jquery') );
	wp_enqueue_script( 'fashionbuzz-testimonials-bootstrap', get_template_directory_uri().'/testimonialsrotator/js/bootstrap.js', array('jquery') );
	wp_enqueue_style( 'fashionbuzz-testimonialslider-style', get_template_directory_uri().'/testimonialsrotator/js/tm-rotator.css' );	
	wp_enqueue_style( 'fashionbuzz-responsive-style', get_template_directory_uri().'/css/responsive.css' );		
	wp_enqueue_style( 'fashionbuzz-owl-style', get_template_directory_uri().'/testimonialsrotator/js/owl.carousel.css' );
	wp_enqueue_script( 'fashionbuzz-owljs', get_template_directory_uri().'/testimonialsrotator/js/owl.carousel.js', array('jquery') );	
	
	// counter script
	wp_enqueue_script( 'fashionbuzz-counting-scripts', get_template_directory_uri().'/js/jquery.counterup.min.js', array('jquery') );
	wp_enqueue_script( 'fashionbuzz-counter-scripts', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js' );
	
	// mixitup script
	wp_enqueue_style( 'fashionbuzz-mixitup-style', get_template_directory_uri().'/mixitup/style-mixitup.css' );
	wp_enqueue_script( 'fashionbuzz-jquery_mixitup', get_template_directory_uri() . '/mixitup/jquery.mixitup.min.js', array('jquery') );
	//wp_enqueue_script( 'fashionbuzz-jquery_003-script', get_template_directory_uri() . '/mixitup/jquery_003.js', array('jquery') );
	//wp_enqueue_script( 'fashionbuzz-screen-script', get_template_directory_uri() . '/mixitup/screen.js', array('jquery') );
	// prettyPhoto script
	wp_enqueue_style( 'fashionbuzz-prettyphoto-style', get_template_directory_uri().'/mixitup/prettyPhotoe735.css' );
	wp_enqueue_script( 'fashionbuzz-prettyphoto-script', get_template_directory_uri() . '/mixitup/jquery.prettyPhoto5152.js', array('jquery') );
	
	//Client Logo Rotator
	wp_enqueue_style( 'fashionbuzz-flexiselcss', get_template_directory_uri().'/css/flexiselcss.css' );	
	wp_enqueue_script( 'fashionbuzz-flexisel', get_template_directory_uri() . '/js/jquery.flexisel.js', array('jquery') );
	
	//Animation
	wp_enqueue_style( 'fashionbuzz-animate-style', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_script( 'fashionbuzz-animate-script', get_template_directory_uri() . '/js/wow.min.js', array('jquery') );
	
	//Instagram
	wp_enqueue_script( 'fashionbuzz-insta-script', get_template_directory_uri() . '/js/instafeed.min.js', array('jquery') );		
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fashionbuzz_scripts' );

function media_css_hook(){
	
	?>
    	
    	<script>			
		jQuery(window).load(function() {
        jQuery('#slider').nivoSlider({
        	effect:'<?php echo of_get_option('slideefect',true); ?>', //sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft, fold, fade, random, slideInRight, slideInLeft, boxRandom, boxRain, boxRainReverse, boxRainGrow, boxRainGrowReverse
		  	animSpeed: <?php echo of_get_option('slideanim',true); ?>,
			pauseTime: <?php echo of_get_option('slidepause',true); ?>,
			directionNav: <?php echo of_get_option('slidenav',true); ?>,
			controlNav: <?php echo of_get_option('slidepage',true); ?>,
			pauseOnHover: <?php echo of_get_option('slidepausehover',true); ?>,
    });
});

// INSTAGRAM
var userFeed = new Instafeed({
	  get: 'user',
	  userId: '<?php echo of_get_option('instauserid',true); ?>',
	  accessToken: '<?php echo of_get_option('instaaccesstoken',true); ?>',
	  resolution: 'standard_resolution',
	  template: '<div class="item"><div class="instafeed"><a href="{{link}}" target="_blank"><img src="{{image}}" /></a><span class="insta_follow"><a href="<?php echo of_get_option('instaidurl',true);?>" target="_blank"><?php echo of_get_option('instafollowtxt',true);?></a></span></div></div>',
	  limit: '20',
	  target: 'instafeed',
		 after: function() {
		 jQuery('.insta').owlCarousel({
		 loop:true,
		 margin:0,
		 nav: false,
		 dots: false,
		 responsive: {
				0: {
					items: 2
				},
				600: {
					items: 4
				},
				1000: {
					items: 6
				}
			}
		 });
		
		 }
	});
userFeed.run();

jQuery(document).ready(function() {
  
  jQuery('.link').on('click', function(event){
    var $this = jQuery(this);
    if($this.hasClass('clicked')){
      $this.removeAttr('style').removeClass('clicked');
    } else{
      $this.css('background','#7fc242').addClass('clicked');
    }
  });
 
});
		</script>
<?php  
}
add_action('wp_head','media_css_hook'); 


function fashionbuzz_custom_head_codes() { 
	if ( function_exists('of_get_option') ){
		
		$typebody 		  		  = of_get_option('bodyfontface');
		$typeh1 				  = of_get_option('h1fontface');
		$typeh2 				  = of_get_option('h2fontface');
		$typeh3 				  = of_get_option('h3fontface');
		$typeh4 				  = of_get_option('h4fontface');
		$typeh5 				  = of_get_option('h5fontface');
		$typeh6 				  = of_get_option('h6fontface');
		$typelogo 				  = of_get_option('logofontface');
		$typetag 				  = of_get_option('tagfontface');
		$typenav 				  = of_get_option('navfontface');
		$typeslidesmtitle  	  	  = of_get_option('slidesmtitlefontface');
		$typeslidetitle			  = of_get_option('slidetitlefontface');
		$typeslidedesc			  = of_get_option('slidedescfontface');
		$typesectitle			  = of_get_option('sectitlefontface');
		$typeintrobox			  = of_get_option('introboxfontface');
		$typeservicebox 		  = of_get_option('serviceboxfontface');
		$typeteamtitle			  = of_get_option('teamtitlefontface');
		$typetestname			  = of_get_option('testnamefontface');
		$typeposttitle			  = of_get_option('posttitlefontface');
		$typefoottitle			  = of_get_option('foottitlefontface');
		$typeblogtitle			  = of_get_option('blogtitlefontface');
		$typewidgettitle		  = of_get_option('widgettitlefontface');
		$typepagetitle			  = of_get_option('pagetitlefontface');
		
		
		
	wp_enqueue_style( 'fashionbuzz-gfonts', '//fonts.googleapis.com/css?family='.rawurlencode($typebody['face'].'|'.$typeh1['face'].'|'.$typeh2['face'].'|'.$typeh3['face'].'|'.$typeh4['face'].'|'.$typeh5['face'].'|'.$typeh6['face'].'|'.$typelogo['face'].'|'.$typetag['face'].'|'.$typenav['face'].'|'.$typeslidesmtitle['face'].'|'.$typeslidetitle['face'].'|'.$typeslidedesc['face'].'|'.$typesectitle['face'].'|'.$typeintrobox['face'].'|'.$typeservicebox['face'].'|'.$typeteamtitle['face'].'|'.$typetestname['face'].'|'.$typeposttitle['face'].'|'.$typefoottitle['face'].'|'.$typeblogtitle['face'].'|'.$typewidgettitle['face'].'|'.$typepagetitle['face']) );
		
		
		if ( of_get_option('style2', true) != '' ) {
			echo "<style>". esc_html( of_get_option('style2', true) ) ."</style>";
		}
		echo "<style>";
		
		if ( of_get_option('bodybgcolor', true) != '' ) {
			echo "body{background-color:".of_get_option('bodybgcolor',true)."}";
		}
		//Font Face/Font Color/Font Size/Font Weight
		if( of_get_option('bodyfontface',true) != ''){
			echo "body{font-family:".$typebody['face'].";font-size:".$typebody['size'].";color:".$typebody['color'].";font-weight:".$typebody['style'].";}";
			echo ".contact-form-section .address{color:".$typebody['color'].";}";
		}
		if ( of_get_option('h1fontface', true) != '') {
			echo "h1{font-family:".$typeh1['face'].";font-size:".$typeh1['size'].";color:".$typeh1['color'].";font-weight:".$typeh1['style'].";}";
		}
		if ( of_get_option('h2fontface', true) != '') {
			echo "h2{font-family:".$typeh2['face'].";font-size:".$typeh2['size'].";color:".$typeh2['color'].";font-weight:".$typeh2['style'].";}";
		}
		if ( of_get_option('h3fontface', true) != '') {
			echo "h3{font-family:".$typeh3['face'].";font-size:".$typeh3['size'].";color:".$typeh3['color'].";font-weight:".$typeh3['style'].";}";
		}
		if ( of_get_option('h4fontface', true) != '') {
			echo "h4{font-family:".$typeh4['face'].";font-size:".$typeh4['size'].";color:".$typeh4['color'].";font-weight:".$typeh4['style'].";}";
		}
		if ( of_get_option('h5fontface', true) != '') {
			echo "h5{font-family:".$typeh5['face'].";font-size:".$typeh5['size'].";color:".$typeh5['color'].";font-weight:".$typeh5['style'].";}";
		}
		if ( of_get_option('h6fontface', true) != '') {
			echo "h6{font-family:".$typeh6['face'].";font-size:".$typeh6['size'].";color:".$typeh6['color'].";font-weight:".$typeh6['style'].";}";
		}
		if( of_get_option('logofontface',true) != ''){
			echo ".logo h1{font-family:".$typelogo['face'].";font-size:".$typelogo['size'].";color:".$typelogo['color'].";font-weight:".$typelogo['style'].";}";
			echo ".logo a{color:".$typelogo['color'].";}";
			echo ".logo:before, .logo:after, .logo h1::before{ border-color:".$typelogo['color'].";}";
		}
		if ( of_get_option('tagfontface', true) != '') {
			echo ".tagline, .logo p{font-family:".$typetag['face'].";font-size:".$typetag['size'].";color:".$typetag['color'].";font-weight:".$typetag['style'].";}";
		}
		if ( of_get_option('navfontface', true) != '') {
			echo ".sitenav ul{font-family:".$typenav['face'].";font-size:".$typenav['size'].";color:".$typenav['color'].";font-weight:".$typenav['style'].";}";
			echo ".sitenav ul li a{color:".$typenav['color'].";}";
		}
		if ( of_get_option('slidesmtitlefontface', true) != '') {
			echo ".nivo-caption h6{font-family:".$typeslidesmtitle['face'].";font-size:".$typeslidesmtitle['size'].";color:".$typeslidesmtitle['color'].";font-weight:".$typeslidesmtitle['style'].";}";
		}
		if ( of_get_option('slidetitlefontface', true) != '') {
			echo ".nivo-caption h2{font-family:".$typeslidetitle['face'].";font-size:".$typeslidetitle['size'].";color:".$typeslidetitle['color'].";font-weight:".$typeslidetitle['style'].";}";
		}
		if ( of_get_option('slidedescfontface', true) != '') {
			echo ".nivo-caption p{font-family:".$typeslidedesc['face'].";font-size:".$typeslidedesc['size'].";color:".$typeslidedesc['color'].";font-weight:".$typeslidedesc['style'].";}";
		}
		if ( of_get_option('sectitlefontface', true) != '') {
			echo "h2.section_title{font-family:".$typesectitle['face'].";font-size:".$typesectitle['size'].";color:".$typesectitle['color'].";font-weight:".$typesectitle['style'].";}";
		}
		if ( of_get_option('introboxfontface', true) != '') {
			echo ".introbox-desc h2{font-family:".$typeintrobox['face'].";font-size:".$typeintrobox['size'].";color:".$typeintrobox['color'].";font-weight:".$typeintrobox['style'].";}";
			echo ".introbox-desc a.readmore{color:".$typeintrobox['color']."}";
		}
		if ( of_get_option('serviceboxfontface', true) != '') {
			echo ".services-desc h2{font-family:".$typeservicebox['face'].";font-size:".$typeservicebox['size'].";color:".$typeservicebox['color'].";font-weight:".$typeservicebox['style'].";}";
		}
		if ( of_get_option('teamtitlefontface', true) != '') {
			echo ".teammember-list h3{font-family:".$typeteamtitle['face'].";font-size:".$typeteamtitle['size'].";font-weight:".$typeteamtitle['style']."; color:".$typeteamtitle['color']."; }";
		}
		if ( of_get_option('testnamefontface', true) != '') {
			echo "#clienttestiminials h6{font-family:".$typetestname['face'].";font-size:".$typetestname['size'].";font-weight:".$typetestname['style'].";}";
			echo "#clienttestiminials h6 a{ color:".$typetestname['color']."; }";
		}
		if ( of_get_option('posttitlefontface', true) != '') {
			echo ".news-box h3{font-family:".$typeposttitle['face'].";font-size:".$typeposttitle['size'].";font-weight:".$typeposttitle['style'].";}";
			echo ".news-box h3 a{ color:".$typeposttitle['color']."; }";
		}
		if ( of_get_option('foottitlefontface', true) != '') {
			echo ".cols-3 h5{font-family:".$typefoottitle['face'].";font-size:".$typefoottitle['size'].";color:".$typefoottitle['color'].";font-weight:".$typefoottitle['style'].";}";
		}
		if ( of_get_option('blogtitlefontface', true) != '' || of_get_option('blogposthoverclr', true) != '' ) {
			echo "h3.post-title a{font-family:".$typeblogtitle['face'].";font-size:".$typeblogtitle['size'].";font-weight:".$typeblogtitle['style'].";color:".$typeblogtitle['color'].";}";
			echo "h3.post-title a:hover{ color:".of_get_option('blogposthoverclr', true)."; }";
		}
		if ( of_get_option('widgettitlefontface', true) != '') {
			echo "h3.widget-title{font-family:".$typewidgettitle['face'].";font-size:".$typewidgettitle['size'].";color:".$typewidgettitle['color'].";font-weight:".$typewidgettitle['style'].";}";
		}
		if ( of_get_option('pagetitlefontface', true) != '') {
			echo "header.entry-header h1.entry-title{font-family:".$typepagetitle['face'].";font-size:".$typepagetitle['size'].";color:".$typepagetitle['color'].";font-weight:".$typepagetitle['style'].";}";
			echo "header.entry-header h1.entry-title{ border-color:".$typepagetitle['color'].";}";
		}
		
		
		//Other Colors
		
		// Link Anchor Tag CSS			
		if ( of_get_option('linkcolor', true) != '' ) {
			echo 'a, .slide_toggle a, .postby a{color:'. esc_html( of_get_option('linkcolor', true) ) .';}';
		}
		if ( of_get_option('linkhovercolor', true) != '' ) {
			echo 'a:hover, .slide_toggle a:hover, .news-box h6 a:hover, .postby a:hover, .news-box .PostMeta a:hover{color:'. esc_html( of_get_option('linkhovercolor', true) ) .';}';
		}

		// Navigation CSS					
		if ( of_get_option('navhovercolor', true) != '') {
			echo '.sitenav ul li a:hover, .sitenav ul li.current_page_item a, .sitenav ul li:hover a.parent{ color:'. esc_html( of_get_option('navhovercolor', true) ) .';}';
		}					
		if ( of_get_option('navddmenuborder', true) != '' ) {
			echo ".sitenav ul li ul li{ border-color:".of_get_option('navddmenuborder',true).";}";
		}	
		$submenubg = of_get_option('navdpbgcolor',true); 
		list($r,$g,$b) = sscanf($submenubg,'#%02x%02x%02x');
		if ( of_get_option('navdpbgcolor', true) != '' ) {
			echo ".sitenav ul li:hover > ul{background-color:rgba(".$r.",".$g.",".$b.",0.8);}";
		}	
		
		// Header CSS
		if( of_get_option('logoheight',true) != '' ){
			echo ".logo img{height:".of_get_option('logoheight',true)."px;}";
		}

		
		// HEADER SOCIAL 
		if( of_get_option('socialfontcolor',true) != ''){
			echo ".social-icons a{ color:".of_get_option('socialfontcolor',true).";}";
		}			
		if( of_get_option('socialfonthvcolor',true) != '' || of_get_option('socialbghvcolor',true) != ''){
			echo ".social-icons a:hover{ color:".of_get_option('socialfonthvcolor',true)."; }";
			echo ".social-icons a::before{background-color:".of_get_option('socialbghvcolor',true).";}";
		}
		
		
		// Slider Nivo Control CSS
		if( of_get_option('sldpagebg',true) != ''){
			echo ".nivo-controlNav a{background-color:".of_get_option('sldpagebg',true)."}";
		}
		if( of_get_option('sldpagehvbg',true) != ''){
			echo ".nivo-controlNav a.active, .nivo-controlNav a:hover{background-color:".of_get_option('sldpagehvbg',true)."}";
		}	
		if( of_get_option('sldpagehvbd',true) != ''){
			echo ".nivo-controlNav a{border-color:".of_get_option('sldpagehvbd',true)."}";
		}
		if( of_get_option('sldarrowbg',true) != '' || of_get_option('sldarrowclr',true) != ''){
			echo ".nivo-directionNav a{background-color:".of_get_option('sldarrowbg',true)."}";
			echo "a.nivo-prevNav::before, a.nivo-nextNav::before{color:".of_get_option('sldarrowclr',true)."}";
		}
		if( of_get_option('sldarrowhvbg',true) != '' || of_get_option('sldarrowhvclr',true) != ''){
			echo ".nivo-directionNav a:hover{background-color:".of_get_option('sldarrowhvbg',true)."}";
			echo "a.nivo-prevNav:hover::before, a.nivo-nextNav:hover::before{color:".of_get_option('sldarrowhvclr',true)."}";
		}	

		//Section Title
		if( of_get_option('sectitlebdr',true) != '' || of_get_option('sechlfontclr',true) != '' ){
			echo"h2.section_title::before{ background-color:".of_get_option('sectitlebdr',true).";}";
			echo"span.heighlighted{ color:".of_get_option('sechlfontclr',true).";}";
		}
		
		//Intro boxes
		if( of_get_option('introhvbg',true) != '' || of_get_option('introbxttlbdr',true) != '' || of_get_option('introbxsidebdr',true) != ''){			
			echo ".introbox-desc h2::after{ background-color:".of_get_option('introbxttlbdr',true).";}";
			echo ".intro-box:hover{ background-color:".of_get_option('introhvbg',true).";}";
			echo ".intro-box::before, .intro-box::after{border-color:".of_get_option('introbxsidebdr',true).";}";
		}
		
		//Icontitle box
		if( of_get_option('icnttlttlclr',true) != '' || of_get_option('icnttlicnclr',true) != '' || of_get_option('icnttlbg',true) != '' || of_get_option('icnttlhvbg',true) != '' ){			
			echo ".icontitle h3{ color:".of_get_option('icnttlttlclr',true).";}";
			echo ".iconbox i{ color:".of_get_option('icnttlicnclr',true)."; }";
			echo ".iconbox{ background-color:".of_get_option('icnttlbg',true)."; } .icontext:hover .iconbox{ background-color:".of_get_option('icnttlhvbg',true)."; }";
		}
		if( of_get_option('featimgbdr',true) != '' ){			
			echo "figure.feature-pic::before, figure.feature-pic::before{ border-color:".of_get_option('featimgbdr',true).";}";
		}
		
		//Work Gallery
		if( of_get_option('galfiltrtext',true) != '' || of_get_option('galfiltracttext',true) != '' || of_get_option('galtitleclr',true) != '' || of_get_option('galtitlebgclr',true) != '' ){			
			echo "ul.portfoliofilter li, ul.portfoliofilter{ color:".of_get_option('galfiltrtext',true).";}";
			echo "ul.portfoliofilter li:hover, ul.portfoliofilter li.active{ color:".of_get_option('galfiltracttext',true)."; }";
			echo "figure.work-gallery h2{ color:".of_get_option('galtitleclr',true).";}";
			echo "figure.work-gallery{ background:".of_get_option('galtitlebgclr',true)."; }";
		}
		
		//Service Boxes
		if( of_get_option('serhvttlclr',true) != '' || of_get_option('serbxicnclr',true) != '' || of_get_option('serbxicnbdr',true) != '' || of_get_option('serbxbdrclr',true) != ''|| of_get_option('serttlbdrclr',true) != '' ){			
			echo ".services-box:hover .services-desc h2{ color:".of_get_option('serhvttlclr',true).";}";
			echo ".services-icon{ color:".of_get_option('serbxicnclr',true)."; }";
			echo ".services-icon::after, .services-box:hover .services-icon{ color:".of_get_option('serbxicnbdr',true)."; }";
			echo ".services-box::before, .services-box::after{ border-color:".of_get_option('serbxbdrclr',true)."; }";
			echo ".services-desc h2::after{ color:".of_get_option('serttlbdrclr',true)."; }";
		}
				
		
		// Counter
		if ( of_get_option('counterclr', true) != '' || of_get_option('counterhvclr', true) != '' || of_get_option('counterbdr', true) != '' || of_get_option('counterbghv', true)!= '' ) {
			echo ".counter-box h5, .counter-box > span, .counter-box h3.counter{ color:".of_get_option('counterclr', true)."; }";
			echo ".counter-box:hover h3.counter, .counter-box:hover h5, .counter-box:hover span{ color:".of_get_option('counterhvclr', true)."; }";
			echo ".counter-box{ border-color:".of_get_option('counterbdr', true)."; }";	
			echo ".counter-box:hover{ background-color:".of_get_option('counterbghv', true)."; border-color:".of_get_option('counterbghv', true)."; }";						
		}		
		
		//OUR TEAM		
		if ( of_get_option('teattitlehvclr', true) != '' ) {
			echo ".teammember-list:hover h3{ color:".of_get_option('teattitlehvclr', true)."; }";			
		}
		if ( of_get_option('teambdrclr', true) != '' ) {
			echo ".teammember-list .thumnailbx::before, .teammember-list .thumnailbx::after{ border-color:".of_get_option('teambdrclr', true)."; }";			
		} 
		
		
		// Testimonials								
		if ( of_get_option('testimonialsectitlecolor', true) != '' ) {
			echo "#testimonials h2.section_title{ color:".of_get_option('testimonialsectitlecolor', true)."; }";			
		}
		if ( of_get_option('testimonialdesccolor', true ) != '' ) {			
			echo "#clienttestiminials p{ color:".of_get_option('testimonialdesccolor', true)."; }";		
		}
		if ( of_get_option('testiquoteclr', true ) != '' ) {			
			echo ".quote-icon{ color:".of_get_option('testiquoteclr', true)."; }";	
		}
		if ( of_get_option('testibdrimg', true ) != '' ) {			
			echo "#clienttestiminials .tmthumb{ border-color:".of_get_option('testibdrimg', true)."; }";	
		}	
		
		
		//LATEST NEWS
		if ( of_get_option('latestpoststtlhvcolor', true) != '' ) {
			echo ".news-box h3:hover, .news-box h3 a:hover{ color:".of_get_option('latestpoststtlhvcolor', true)."; }";
		}
		if ( of_get_option('latestpostsdesccolor', true) != '' ) {
			echo ".news-box .newsdesc p{ color:".of_get_option('latestpostsdesccolor', true)."; }";
		}
		if ( of_get_option('postmeta', true) != '' ) {
			echo ".news-box .PostMeta{ color:".of_get_option('postmeta', true)."; }";
		}
		if ( of_get_option('postmetalink', true) != '' ) {
			echo ".news-box .PostMeta a{ color:".of_get_option('postmetalink', true)."; }";
		}
		
		//INSTAGRAM SECTION
		if ( of_get_option('followbtnclr', true) != '' || of_get_option('followbtnhvclr', true) ) {
			echo ".insta_follow a{ color:".of_get_option('followbtnclr', true)."; }";
			echo ".insta_follow a:hover{ color:".of_get_option('followbtnhvclr', true)."; }";
		}
		$flwoverlay = of_get_option('flwbtnbg',true); 
		list($r,$g,$b) = sscanf($flwoverlay,'#%02x%02x%02x');		
		if ( of_get_option('flwbtnbg', true) != '' ) {
			echo ".insta_follow a{background-color:rgba(".$r.",".$g.",".$b.",0.7);}";
		}
		$flwohvverlay = of_get_option('flwbtnhvbg',true); 
		list($r,$g,$b) = sscanf($flwohvverlay,'#%02x%02x%02x');		
		if ( of_get_option('flwbtnhvbg', true) != '' ) {
			echo ".insta_follow a:hover{background-color:rgba(".$r.",".$g.",".$b.",0.7);}";
		}
		

		//FOOTER SECTION
		if ( of_get_option('footdesccolor', true) != '' || of_get_option('footerbgcolor', true) != '' ) {
			echo "#footer-wrapper{ background-color:".of_get_option('footerbgcolor', true)."; color:".of_get_option('footdesccolor', true).";}";
			echo ".contactdetail .fa{color:".of_get_option('footdesccolor', true).";}";
		}					
		if ( of_get_option('foowidgetbdbgclr', true) != '' ) {
			echo ".cols-3 h5:before{background-color:".of_get_option('foowidgetbdbgclr', true)."; }";
		}	
		if ( of_get_option('footsocialfontcolor', true) != '' || of_get_option('fooscicons', true) != '' ) {
			echo ".cols-3 .social-icons a{color:".of_get_option('footsocialfontcolor', true)."; border-color:".of_get_option('footsocialfontcolor', true)."; }";
		}
		if ( of_get_option('footsocialfontcolorhv', true) != '' ) {
			echo ".cols-3 .social-icons a:hover{ color:".of_get_option('footsocialfontcolorhv', true).";}";
		}	
		if ( of_get_option('footerposttitlecolor', true) != '' || of_get_option('footerposttitlehvcolor', true) != '') {
			echo ".cols-3 ul li a{color:".of_get_option('footerposttitlecolor', true)."; }";
			echo ".contactdetail a:hover, .contact_right .contactdetail a:hover, .cols-3 ul li a:hover{color:".of_get_option('footerposttitlehvcolor', true)."; }";
		}
		if ( of_get_option('footdesccolor', true) != '' ) {
			echo ".contactdetail a{color:".of_get_option('footdesccolor', true)."; }";
		}
		if ( of_get_option('fooinstabdrclr', true) != '' ) {
			echo '.instafeed{border-color:'. esc_html( of_get_option('fooinstabdrclr', true) ) .';}';
		}
		if ( of_get_option('copybgcolor', true) != '' ) {
			echo '.copyright-wrapper{background-color:'. esc_html( of_get_option('copybgcolor', true) ) .';}';
		}
		if( of_get_option('copycolor', true) != ''){
			echo ".copyright-txt, .designby{color:".of_get_option('copycolor',true)."}";
		}
		if ( of_get_option('copylinks', true) != '' ) {
			echo ".copyright-wrapper a{ color: ".of_get_option('copylinks', true)."; }";
		}
		if ( of_get_option('copylinkshov', true) != '' ) {
			echo ".copyright-wrapper a:hover{ color: ".of_get_option('copylinkshov', true)."; }";
		}
		
		
		//OVERLAY
		$teamoverlay = of_get_option('teamoverlay',true); 
		list($r,$g,$b) = sscanf($teamoverlay,'#%02x%02x%02x');		
		if ( of_get_option('teamoverlay', true) != '' ) {
			echo ".member-social-icon{background-color:rgba(".$r.",".$g.",".$b.",".of_get_option('overlaycoloropacity',true).");}";
		}
		
		$testioverlay = of_get_option('testioverlaycolor',true); 
		list($r,$g,$b) = sscanf($testioverlay,'#%02x%02x%02x');		
		if ( of_get_option('testioverlaycolor', true) != '' ) {
			echo "#testimonials::before{background:rgba(".$r.",".$g.",".$b.",".of_get_option('overlaycoloropacity',true).");}";
		}
		
		$instaoverlay = of_get_option('instaoverlaycolor',true); 
		list($r,$g,$b) = sscanf($instaoverlay,'#%02x%02x%02x');		
		if ( of_get_option('instaoverlaycolor', true) != '' ) {
			echo ".insta_follow{background:rgba(".$r.",".$g.",".$b.",0.4);}";
		}
		$cinfooverlay = of_get_option('cinfobgclr',true); 
		list($r,$g,$b) = sscanf($cinfooverlay,'#%02x%02x%02x');		
		if ( of_get_option('cinfobgclr', true) != '' ) {
			echo ".contact_info{background:rgba(".$r.",".$g.",".$b.",".of_get_option('overlaycoloropacity',true).");}";
		}			

		// Button CSS				
		if( of_get_option('btnbgcolor',true) != ''){
			echo "a.morebutton, a.button, #commentform input#submit, input.search-submit, .post-password-form input[type=submit], p.read-more a, .headertop .right a, .wpcf7 form input[type='submit'], .pagination ul li .current, .pagination ul li a:hover {background-color:".of_get_option('btnbgcolor',true).";}";
		}
		if( of_get_option('btntxtcolor', true) != ''){
			echo "a.button, a.morebutton, #commentform input#submit, input.search-submit, .post-password-form input[type=submit], p.read-more a, .pagination ul li span, .pagination ul li a, .headertop .right a, .wpcf7 form input[type='submit'], .contact_right .contactdetail a{color:". of_get_option('btntxtcolor', true) ."; }";
		}
		if( of_get_option('btnbghvcolor',true) != '' || of_get_option('btntxthvcolor', true) != '' ){
			echo "a.morebutton:hover, a.button:hover, #commentform input#submit:hover, input.search-submit:hover, .post-password-form input[type=submit]:hover, p.read-more a:hover, .headertop .right a:hover, .wpcf7 form input[type='submit']:hover, #sidebar .search-form input.search-field, .pagination ul li span, .pagination ul li a{background-color:".of_get_option('btnbghvcolor',true)."; color:". esc_html( of_get_option('btntxthvcolor', true) ) .";}";			
		}
		if( of_get_option('btntwobgcolor',true) != '' || of_get_option('btntwotxtcolor',true) != '' ){ 
			echo "a.button2{color:".of_get_option('btntwotxtcolor',true)."; background-color:".of_get_option('btntwobgcolor',true)."; }";
		}
		if( of_get_option('btntwotxthvcolor',true) != '' || of_get_option('btntwobghvcolor',true) != '' ){  
			echo "a.button2:hover{color:".of_get_option('btntwotxthvcolor',true)."; background-color:".of_get_option('btntwobghvcolor',true)."; }";
		}
		if( of_get_option('postreadmorecolor',true) != '' ){
			echo "a.ReadMore{color:".of_get_option('postreadmorecolor',true)."; }";
		}
		if( of_get_option('postreadmorehvcolor',true) != ''){
			echo "a.ReadMore:hover{color:".of_get_option('postreadmorehvcolor',true).";}";
			echo "a.ReadMore::before, a.ReadMore::after, a.ReadMore span::before, a.ReadMore span::after{ background-color:".of_get_option('postreadmorehvcolor',true).";}";
		}
		if( of_get_option('getinfontclr',true) != ''){
			echo ".btn-hov{color:".of_get_option('getinfontclr',true).";}";
		}
		if( of_get_option('getinfontclr',true) != ''){
			echo ".btn-hov{color:".of_get_option('getinfontclr',true).";}";
		}
		if( of_get_option('getinfonthvclr',true) != ''){
			echo ".btn-hov:hover{color:".of_get_option('getinfonthvclr',true).";}";
		}
		if( of_get_option('getintchhvbg',true) != ''){
			echo ".btn-hov::before{border-color:transparent transparent transparent ".of_get_option('getintchhvbg',true).";}";
		}
				
		// Widget Box CSS
		if ( of_get_option('widgetboxbgcolor', true) != '' || of_get_option('widgetboxfontcolor', true) != '' ) {
		echo "aside.widget, .contact_right #testimonials, .contact_right .contactdetail, .accordion-box .acc-content{ background-color:".of_get_option('widgetboxbgcolor', true)."; color:".of_get_option('widgetboxfontcolor', true).";  }";
		}
		if ( of_get_option('widgettitlebgcolor', true) != '' || of_get_option('wdgttitleccolor', true) != '' ) {
			echo "h3.widget-title, .accordion-box h2{ background-color:".of_get_option('widgettitlebgcolor', true)."; color:".of_get_option('wdgttitleccolor', true).";}";
		}
		
		// Sidebar Widget CSS
		if( of_get_option('sidebarliaborder', true) != '' ){
			echo "#sidebar ul li{border-color:".of_get_option('sidebarliaborder',true)."}";
		}	
		if( of_get_option('sidebarfontcolor',true) != '' ){
			echo "#sidebar ul li a{color:".of_get_option('sidebarfontcolor',true)."; }";
		}		
		if( of_get_option('sidebarfonthvcolor',true) != '' ){
			echo "#sidebar ul li a:hover{color:".of_get_option('sidebarfonthvcolor',true)."; }";
		}			
			
		// Toggle Menu CSS		
		if ( of_get_option('togglemenu', true) != '' || of_get_option('togglemenucolor', true) != '' ) {
			echo ".toggle a{ background-color:".of_get_option('togglemenu', true)."; color:".of_get_option('togglemenucolor', true)."; }";
		}														
		
		// Tab and Accourdian CSS 
		if ( of_get_option('tabbgcolor', true) != '' || of_get_option('tabfontcolor', true) != '' ) {
			echo ".tabs-wrapper ul.tabs li a{ background-color:".of_get_option('tabbgcolor', true)."; color:".of_get_option('tabfontcolor', true)." !important; }";
		}		
		if ( of_get_option('tabbgcolorhv', true) != '' || of_get_option('tabfontcolorhv', true) != '' ) {
			echo ".tabs-wrapper ul.tabs li a.selected{ background-color:".of_get_option('tabbgcolorhv', true)."; color:".of_get_option('tabfontcolorhv', true)." !important; }";
		}		
		if ( of_get_option('tabcontentborder', true) != '' || of_get_option('tabcontentfontcolor', true) != '' ) {
			echo ".tabs-wrapper .tab-content{ border-color:".of_get_option('tabcontentborder', true)."; color:".of_get_option('tabcontentfontcolor', true)."; }";
		}
		if ( of_get_option('acctitlebordercolor', true) != '' || of_get_option('acctitlecolor', true) != '' ) {
			echo ".accordion-box h2{ border-color:".of_get_option('acctitlebordercolor', true)." !important; color:".of_get_option('acctitlecolor', true)." !important; }";
		}		
		if ( of_get_option('acctitlecolorhv', true) != '' || of_get_option('activetitlebg', true) != '' ) {
			echo ".accordion-box h2.active{ color:".of_get_option('acctitlecolorhv', true)."; background-color:".of_get_option('activetitlebg', true).";}";
		}
		if ( of_get_option('accdescfontcolor', true) != '' ) {
			echo ".acc-content{ color:".of_get_option('accdescfontcolor', true)."; }";
		}				
		
		//Skill Bar CSS
		if ( of_get_option('skillbarbgcolor', true) != '' ) {
			echo ".skill-bg{ background-color:".of_get_option('skillbarbgcolor', true)."; }";
		}
		if ( of_get_option('skillbarbgcoloractive', true) != '' ) {
			echo ".skillbar-bar{ background-color:".of_get_option('skillbarbgcoloractive', true)." !important; }";
		}
				
		echo "</style>";
	}
}
add_action('wp_head', 'fashionbuzz_custom_head_codes');


function fashionbuzz_pagination() {
	global $wp_query;
	$big = 12345678;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $page_format as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	}
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Load custom functions file.
 */
require get_template_directory() . '/inc/custom-functions.php';

function fashionbuzz_custom_blogpost_pagination( $wp_query ){
	$big = 999999999; // need an unlikely integer
	if ( get_query_var('paged') ) { $pageVar = 'paged'; }
	elseif ( get_query_var('page') ) { $pageVar = 'page'; }
	else { $pageVar = 'paged'; }
	$pagin = paginate_links( array(
		'base' 			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' 		=> '?'.$pageVar.'=%#%',
		'current' 		=> max( 1, get_query_var($pageVar) ),
		'total' 		=> $wp_query->max_num_pages,
		'prev_text'		=> '&laquo; Prev',
		'next_text' 	=> 'Next &raquo;',
		'type'  => 'array'
	) ); 
	if( is_array($pagin) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $pagin as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	} 
}
// get slug by id
function fashionbuzz_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}