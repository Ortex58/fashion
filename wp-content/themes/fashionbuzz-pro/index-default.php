<style>
body{color:#ffffff;font-size:14px;font-family:'Karla';background-color:#0d0d0d;}
body, .contact-form-section .address{color:#ffffff;}

/* Heading tag */
h1,h2,h3,h4,h5,h6{font-family:'Lobster'; font-weight:400;}
h1{font-size:35px;color:#ffffff;}
h2{font-size:25px;color:#ffffff;}
h3{font-size:20px;color:#ffffff;}
h4{font-size:16px;color:#ffffff;}
h5{font-size:15px;color:#ffffff;}
h6{font-size:14px;color:#ffffff;}

/* Header */

.social-icons a{color:#969bae;}
.social-icons a:hover{color:#ffffff;}

/* Logo */
.logo h1 {font-family:'Montserrat';color:#46bac1;font-size:30px; font-weight:700; }
.tagline{font-family:'Karla';font-size:14px;color:#ffffff;}
.logo img{height:58px;}

/* NAvigation */
.sitenav ul li:hover > ul{background-color:#ffffff;}
.sitenav ul{font-family:'Karla';font-size:15px;font-weight:700;}
.sitenav ul li a{color:#ffffff;}
.sitenav ul li a:hover, .sitenav ul li.current_page_item a, .sitenav ul li.current_page_item ul li a:hover, .sitenav ul li.current-menu-ancestor a.parent{color:#fb9504;}

a, .slide_toggle a, .postby a, .news-box .PostMeta a, .post-title a{color:#fb9504;}
a:hover, .slide_toggle a:hover, .news-box h6 a:hover, .postby a:hover, .news-box .PostMeta a:hover, #sidebar .quotes h6 a, .whyus-box:hover h3 a{color:#ffffff;}

/*Nivo Caption */
.nivo-caption h6{ font-size:14px;}
.nivo-caption h2{font-family:'Lobster';color:#ffffff;font-size:40px;}
.nivo-caption p{font-family:'Karla';color:#ffffff;font-size:14px;}
.nivo-controlNav a{background-color:#ffffff; display:none;}
.nivo-controlNav a.active{background-color:#03a9f5;}
.toggle a{background-color:#000000;color:#ffffff;}

/* Buttons */
a.morebutton, a.button, #commentform input#submit, input.search-submit, .post-password-form input[type=submit], p.read-more a, .headertop .right a, .wpcf7 form input[type='submit'], .pagination ul li .current, .pagination ul li a:hover, #sidebar .search-form input.search-submit{background-color:#ffffff;}
a.button, a.morebutton, #commentform input#submit, input.search-submit, .post-password-form input[type=submit], p.read-more a, .pagination ul li span, .pagination ul li a, .headertop .right a, .wpcf7 form input[type='submit'], #sidebar .search-form input.search-submit, .contact_right .contactdetail a{color:#000000;}
a.morebutton:hover, a.button:hover, #commentform input#submit:hover, input.search-submit:hover, .post-password-form input[type=submit]:hover, p.read-more a:hover, .headertop .right a:hover, .wpcf7 form input[type='submit']:hover, #sidebar .search-form input.search-field, .pagination ul li span, .pagination ul li a{background-color:#000000;color:#ffffff;}

/* Section Title */
h2.section_title{ font-size:35px; color:#ffffff;font-family:'Lobster';}


/* Counter */

#clienttestiminials h6 a {
    font-family: Lobster;
    font-size: 20px;
    font-weight: normal;
	color:#fb9504;
}
#testimonials:before{ opacity:0.9;}

/* Footer */
#footer-wrapper{ background-color:#000000; color:#8c8c8c; position:relative; }
.cols-3 h5{color:#ffffff; font-size:20px; font-family:'Montserrat';}
.cols-3 h5::before{ color:#fb9504; }
.contactdetail a{ color:#ffffff; }
.contactdetail a:hover{ color:#fb9504; }
.cols-3 ul li a{ color: #ffffff; }
.cols-3 ul li a:hover{ color:#fb9504; }
.cols-3 .social-icons a { border-color: #929292; color: #929292; }
.cols-3 .social-icons a:hover{color:#ffffff; border-color:#fb9504; }
.copyright-wrapper{background-color:#0d0d0d;color:#ffffff;}
.copyright-wrapper a{color:#ffffff;}
</style>


<body id="top" class="home blog logged-in">
	<div id="pagewrap">        
        <div class="header">
            <div class="container">	
                <div class="logo">
                	<a href="<?php echo get_option('home');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" / ></a>
                </div><!-- .logo -->                 
                <div class="header_right">
                    <div class="toggle">
                        <a class="toggleMenu" href="#">
                        	Menu         
                        </a>
                    </div><!-- toggle -->    
                    <div class="sitenav">                   
                        <ul>
                            <li class="current_page_item"><a href="<?php echo get_option('home');?>">Home</a></li>
                            <li><a href="#">Sample Page</a></li>
                        </ul>   
                    </div><!--.sitenav -->              
                </div><!--header_right--><div class="clear"></div>
            </div><!-- container -->
        </div><!-- .header -->			
				
		<div class="slider-main">
			<div id="slider" class="nivoSlider">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slides/slider1.jpg" alt="" title="#slidecaption1"/>
			</div><!-- slider --> 
			<div id="slidecaption1" class="nivo-html-caption">	
            	<h6>Fashion</h6>                                                                  
                <a href="#"><h2>The world of Fashion</h2></a>						                                                                  						
				 <p>In id placerat orci. Nunc eleifend dignissim sapien id interdum. Praesent tempor justo nibh, et faucibus enim maximus volutpat. Vestibulum in urna dui. Nullam gravida felis nec lectus volutpat euismod. Morbi eget dolor aliquam, tincidunt risus in, vehicula erat. Integer malesuada felis quis tortor convallis vulputate.</p>
                <a class="button" href="#">	Read More </a> <a class="button2" href="#">	View our Portfolio </a>						
			</div><!-- slidecaption1 -->                 
		</div><!-- slider-main -->
        
        
        <section  id="" class="">
            <div class="container">
                <div class=" wow fadeInUp" data-wow-duration="1s">
                    <div class="intro-box" id="">	
                        <div class="inner-intro-box">
                            <div class="introbox-icon">
                            	<div class="helper"><img src="<?php echo get_template_directory_uri(); ?>/images/photography.png"></div>
                            </div>
                            <div class="introbox-desc">
                            	<a href="#"><h2>Photoshoot</h2></a>
                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium dui eu mi pellentesque sagittis. Mauris non varius massa, id luctus risus.</p>
                            	<a href="#" class="readmore">Read More</a>
                            </div>
                        </div>												
                    </div>
                    
                    <div class="intro-box" id="">	
                        <div class="inner-intro-box">
                        	<div class="introbox-icon">
                        		<div class="helper"><img src="<?php echo get_template_directory_uri(); ?>/images/wedding.png"></div>
                        	</div>
                        	<div class="introbox-desc">
                        		<a href="#"><h2>Wedding Photoshoot</h2></a>
                        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium dui eu mi pellentesque sagittis. Mauris non varius massa, id luctus risus.</p>
                        		<a href="#" class="readmore">Read More</a>
                        	</div>
                        </div>												
                    </div>
                    
                    <div class="intro-box" id="last">	
                    	<div class="inner-intro-box">
                    		<div class="introbox-icon">
                    			<div class="helper"><img src="<?php echo get_template_directory_uri(); ?>/images/videography.png"></div>
                    		</div>
                    		<div class="introbox-desc">
                    			<a href="#"><h2>Videography</h2></a>
                    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium dui eu mi pellentesque sagittis. Mauris non varius massa, id luctus risus.</p>
                    			<a href="#" class="readmore">Read More</a>
                    		</div>
                    	</div>												
                    </div><div class="clear"></div>
                </div><!-- .end section class --><div class="clear"></div>                 
            </div><!-- container -->
        </section>
        
        <section style="background-color:#000000; " id="" class="">
            <div class="container">
                <div class=" wow fadeInUp" data-wow-duration="1s">
                	<div class="one_half">
                        <div class="welcome-text">
                        	<h2 class="section_title">It all started with a <span class="heighlighted">Picture</span></h2>
                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum ante ipsum, id egestas tellus pellentesque vitae. Praesent sed metus ut odio posuere sollicitudin sit amet a orci. Nam scelerisque nulla vel libero iaculis, in sodales lorem iaculis. Donec mattis risus at arcu condimentum euismod.</p>
                        	<p>Aenean molestie, nibh vel semper congue, erat nunc cursus est, eget bibendum leo enim a turpis. Etiam posuere mi eget mauris euismod mattis. Pellentesque vel vulputate felis. Donec aliquam nisl sit amet lacus pharetra posuere. Duis lacinia volutpat malesuada. Phasellus molestie odio nibh, dictum laoreet urna venenatis sed. Aenean a viverra dolor. Integer vel pellentesque ex. Suspendisse dictum nunc a velit placerat porttitor. Praesent sem diam</p>
                            <div class="icontext" id="">
                        		<div class="iconbox"><i class="fa fa-camera-retro"></i></div>
                        		<div class="icontitle"><h3>Creativity</h3></div>
                        	</div>
                            <div class="icontext" id="">
                        		<div class="iconbox"><i class="fa fa-eye"></i></div>
                        		<div class="icontitle"><h3>Insight</h3></div>
                        	</div>
                            <div class="icontext" id="last">
                        		<div class="iconbox"><i class="fa fa-heart"></i></div>
                        		<div class="icontitle"><h3>Quality</h3></div>
                        	</div>
                         </div>                        
                	</div>
                	<div class="one_half last_column">
                		<figure class="feature-pic">
                			<img src="<?php echo get_template_directory_uri(); ?>/images/feature-img.jpg">
                		</figure>
                	</div><div class="clear"></div>
                </div><!-- .end section class --><div class="clear"></div>                 
            </div><!-- container -->
        </section>
        
        <section  id="our-works" class="menu_page">
            <div class="container">
                <div class=" wow fadeInUp" data-wow-duration="1s">
                    <h2 class="section_title">Our Works</h2>                                                
                    <div class="photobooth">
                        <ul class="portfoliofilter clearfix">
                            <li class="filter" data-filter="all">All</li>/
                            <li class="filter" data-filter=".branding">Branding</li>/
                            <li class="filter" data-filter=".photography">Photography</li>/
                            <li class="filter" data-filter=".videography">Videography</li>/
                            <li class="filter" data-filter=".wedding">Wedding</li>
                        </ul>
                        <div class="row fourcol portfoliowrap">
                            <div class="portfolio">
                                <div id="mixitup">
                                    <div class="mix branding">
                                        <div class="holderwrap">
                                        	<figure class="work-gallery">
                                        		<img src="<?php echo get_template_directory_uri(); ?>/images/gal1.jpg"/>
                                        		<figcaption>
                                        			<a href="<?php echo get_template_directory_uri(); ?>/images/gal1.jpg" data-rel="prettyPhoto[bkpGallery]">
                                        				<h2>Model</h2>
                                        			</a>
                                        		</figcaption>			
                                        	</figure><!-- figure -->
                                        </div><!-- holderwrap -->
                                    </div><!-- mix -->
                                    
                                    <div class="mix videography">
                                        <div class="holderwrap">
                                            <figure class="work-gallery">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/gal2.jpg"/>
                                                <figcaption>
                                                	<a href="<?php echo get_template_directory_uri(); ?>/images/gal2.jpg" data-rel="prettyPhoto[bkpGallery]">
                                                		<h2>Outdoor</h2>
                                                	</a>
                                                </figcaption>			
                                            </figure><!-- figure -->
                                        </div><!-- holderwrap -->
                                    </div><!-- mix -->
                                    
                                    <div class="mix photography">
                                        <div class="holderwrap">
                                            <figure class="work-gallery">
                                            	<img src="<?php echo get_template_directory_uri(); ?>/images/gal3.jpg"/>
                                                <figcaption>
                                                	<a href="<?php echo get_template_directory_uri(); ?>/images/gal3.jpg" data-rel="prettyPhoto[bkpGallery]">
                                                		<h2>Professional</h2>
                                                	</a>
                                                </figcaption>			
                                            </figure><!-- figure -->
                                        </div><!-- holderwrap -->
                                    </div><!-- mix -->
                                    
                                    <div class="mix wedding">
                                        <div class="holderwrap">
                                        	<figure class="work-gallery">
                                        		<img src="<?php echo get_template_directory_uri(); ?>/images/gal4.jpg"/>
                                        		<figcaption>
                                        			<a href="<?php echo get_template_directory_uri(); ?>/images/gal4.jpg" data-rel="prettyPhoto[bkpGallery]">
                                        				<h2>Wedding</h2>
                                        			</a>
                                        		</figcaption>			
                                        	</figure><!-- figure -->
                                        </div><!-- holderwrap -->
                                    </div><!-- mix -->
                                    
                                    <div class="mix branding">
                                        <div class="holderwrap">
                                            <figure class="work-gallery">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/gal5.jpg"/>
                                                <figcaption>
                                                    <a href="<?php echo get_template_directory_uri(); ?>/images/gal5.jpg" data-rel="prettyPhoto[bkpGallery]">
                                                    	<h2>Outdoor</h2>
                                                    </a>
                                                </figcaption>			
                                            </figure><!-- figure -->
                                        </div><!-- holderwrap -->
                                    </div><!-- mix -->
                                    
                                    <div class="mix videography">
                                        <div class="holderwrap">
                                            <figure class="work-gallery">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/gal6.jpg"/>
                                                <figcaption>
                                                    <a href="<?php echo get_template_directory_uri(); ?>/images/gal6.jpg" data-rel="prettyPhoto[bkpGallery]">
                                                    	<h2>Potrait Photography</h2>
                                                    </a>
                                                </figcaption>			
                                            </figure><!-- figure -->
                                        </div><!-- holderwrap -->
                                    </div><!-- mix -->
                                    
                                    <div class="mix branding">
                                        <div class="holderwrap">
                                            <figure class="work-gallery">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/gal7.jpg"/>
                                                <figcaption>
                                                    <a href="<?php echo get_template_directory_uri(); ?>/images/gal7.jpg" data-rel="prettyPhoto[bkpGallery]">
                                                    	<h2>Photoshoot</h2>
                                                    </a>
                                                </figcaption>			
                                            </figure><!-- figure -->
                                        </div><!-- holderwrap -->
                                    </div><!-- mix -->
                                    
                                    <div class="mix photography">
                                        <div class="holderwrap">
                                            <figure class="work-gallery">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/gal8.jpg"/>
                                                <figcaption>
                                                    <a href="<?php echo get_template_directory_uri(); ?>/images/gal8.jpg" data-rel="prettyPhoto[bkpGallery]">
                                                   		<h2>Night Shoot</h2>
                                                    </a>
                                                </figcaption>			
                                            </figure><!-- figure -->
                                        </div><!-- holderwrap -->
                                    </div><!-- mix -->
                                </div>
                            </div>
                        </div>
                    </div>
                 </div><!-- .end section class --><div class="clear"></div>                 
             </div><!-- container -->
        </section>
        
        
        <section  id="" class="">
            <div class="container">
                <div class=" wow fadeInUp" data-wow-duration="1s">
                	<h2 class="section_title">Reasons to Choose Our Services</h2>                                                
                    <div class="services-box" id="">	
                        <div class="inner-services-box">
                        	<div class="services-icon">
                        		<i class="fa fa-heart-o"></i>
                       		</div><!-- services-icon -->
                        	<div class="services-desc">
                        		<a href="#"><h2>Passion</h2></a>
                        		<p>Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.</p>
                        	</div><!-- services-desc -->
                    	</div><!-- inner-service-box -->                    												
                    </div><!-- service box -->
                    
                    <div class="services-box" id="">	
                        <div class="inner-services-box">
                            <div class="services-icon">
                            	<i class="fa fa-diamond"></i>
                            </div><!-- services-icon -->
                            <div class="services-desc">
                            	<a href="#"><h2>Philisophy</h2></a>
                            	<p>Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.</p>
                            </div><!-- services-desc -->
                        </div><!-- inner-service-box --> 											
                    </div><!-- service box -->
                    
                    <div class="services-box" id="last">	
                        <div class="inner-services-box">
                            <div class="services-icon">
                            	<i class="fa fa-lightbulb-o"></i>
                            </div><!-- services-icon -->
                            <div class="services-desc">
                            	<a href="#"><h2>Insight</h2></a>
                            	<p>Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.</p>
                            </div><!-- services-desc -->
                        </div><!-- inner-service-box -->												
                    </div><!-- service box -->
                    
                    <div class="services-box" id="">	
                        <div class="inner-services-box">
                            <div class="services-icon">
                            	<i class="fa fa-comment-o"></i>
                            </div><!-- services-icon -->
                            <div class="services-desc">
                            	<a href="#"><h2>Ideas</h2></a>
                            	<p>Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.</p>
                            </div><!-- services-desc -->
                        </div><!-- inner-service-box -->											
                    </div><!-- service box -->
                    
                    <div class="services-box" id="">	
                        <div class="inner-services-box">
                            <div class="services-icon">
                            	<i class="fa fa-star-o"></i>
                            </div><!-- services-icon -->
                            <div class="services-desc">
                            	<a href="#"><h2>Creativity</h2></a>
                            	<p>Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.</p>
                            </div><!-- services-desc -->
                        </div><!-- inner-service-box -->											
                    </div><!-- service box -->
                    
                    <div class="services-box" id="last">	
                        <div class="inner-services-box">
                            <div class="services-icon">
                            	<i class="fa fa-thumbs-o-up"></i>
                            </div><!-- services-icon -->
                            <div class="services-desc">
                            	<a href="#"><h2>Quality</h2></a>
                            	<p>Phasellus euismod aliquet condimentum. Curabitur vitae posuere nisl. Nunc in felis sagittis, venenatis sem sit amet, elementum urna. Morbi scelerisque.</p>
                            </div><!-- services-desc -->
                        </div><!-- inner-service-box -->										
                    </div><!-- service box --><div class="clear"></div>
                    <a href="#" class="btn-hov"><span>Get in Touch</span></a>
                </div><!-- .end section class --><div class="clear"></div>                 
            </div><!-- container -->
        </section>       
        
        
        <section  id="video" class="menu_page">
            <div class="container">
            	<div class=" wow fadeInUp" data-wow-duration="1s">
                     <div class="video-container"><iframe src="https://player.vimeo.com/video/193033138" frameborder="0" allowfullscreen></iframe></div>
             	</div><!-- .end section class --><div class="clear"></div>                 
            </div><!-- container -->
        </section>
        
        <section  id="" class="">
            <div class="container">
                <div class=" wow fadeInUp" data-wow-duration="1s">
                	<h2 class="section_title">Our Team</h2>
                                                                    
                    <div class="teammember-list">
                        <div class="thumnailbx">
                        	<a href="#" target="_blank">
                            	<img src="<?php echo get_template_directory_uri(); ?>/images/team1.jpg" />
                            </a>
                            <div class="member-social-icon">
                            	<a href="#" title="facebook" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#" title="twitter" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#" title="skype" target="_blank"><i class="fa fa-skype fa-lg"></i></a>
                                <a href="#" title="youtube" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
                            </div>
                        </div>
                        <div class="titledesbox">
                        	<a href="#" target="_blank"><h3>Trisha Donald</h3></a>                 
                        </div>
                    </div>
                    
                    <div class="teammember-list">
                    	<div class="thumnailbx">
                        	<a href="#" target="_blank">
                            	<img src="<?php echo get_template_directory_uri(); ?>/images/team2.jpg" />
                            </a>
                            <div class="member-social-icon">
                            	<a href="#" title="facebook" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#" title="twitter" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#" title="skype" target="_blank"><i class="fa fa-skype fa-lg"></i></a>
                                <a href="#" title="google-plus" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                            </div>
                        </div>
                        <div class="titledesbox">
                        	<a href="#" target="_blank"><h3>James Patrick</h3></a>                    
                    	</div>
                    </div>
                    
                    <div class="teammember-list">
                    	<div class="thumnailbx">
                        	<a href="#" target="_blank">
                            	<img src="<?php echo get_template_directory_uri(); ?>/images/team3.jpg" />
                            </a>
                            <div class="member-social-icon">
                            	<a href="#" title="facebook" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#" title="twitter" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#" title="skype" target="_blank"><i class="fa fa-skype fa-lg"></i></a>
                                <a href="#" title="google-plus" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                            </div>
                        </div>                        
                        <div class="titledesbox">
                        	<a href="#" target="_blank"><h3>Martina Doe</h3></a>
                    	</div>
                    </div>
                    
                    <div class="teammember-list lastcols">
                    	<div class="thumnailbx">
                        	<a href="#" target="_blank">
                            	<img src="<?php echo get_template_directory_uri(); ?>/images/team4.jpg" />
                            </a>
                            <div class="member-social-icon">
                            	<a href="#" title="facebook" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#" title="twitter" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#" title="skype" target="_blank"><i class="fa fa-skype fa-lg"></i></a>
                                <a href="#" title="google-plus" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                            </div>
                        </div>
                        <div class="titledesbox">
                        	<a href="#" target="_blank"><h3>John Doe</h3></a>
                    	</div>
                    </div><div class="clear"></div>
                </div><!-- .end section class --><div class="clear"></div>                 
            </div><!-- container -->
        </section>
 
        
                
        <section style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/testimonial-bg.jpg); background-repeat:no-repeat; background-position: center top; background-attachment:fixed; background-size:cover; " id="testimonials" class="menu_page">
            <div class="container">
                <div class=" wow fadeInUp" data-wow-duration="1s">
                	<h2 class="section_title">What Clients Say About Us</h2>                                                
                    <div id="clienttestiminials">
                        <div class="owl-carousel">                        
                            <div class="item">				 
                                <div class="tmdesc">
                                	<div class="quote-icon"><i class="fa fa-quote-left" aria-hidden="true"></i></div>				 		
                                	<blockquote><p>Curabitur commodo, metus non rhoncus suscipit, massa diam tristique odio, vitae sodales nunc sapien ac nisl. Mauris lacinia, tortor sed finibus mattis, sem eros pellentesque dui, id vehicula diam felis quis eros. Donec in pellentesque ante. In hac habitasse platea dictumst. Vivamus risus libero, ultricies non dolor a, ullamcorper congue massa.</p>
                                	</blockquote>						 			  				 						
                                	<div class="tmthumb"><img src="<?php echo get_template_directory_uri(); ?>/images/testi1.jpg" alt=" " /></div>
                                	<h6><a href="#">Martina Doe</a></h6>	
                                </div>					 
                            </div>	
                            
                            <div class="item">				 
                                <div class="tmdesc">
                                	<div class="quote-icon"><i class="fa fa-quote-left" aria-hidden="true"></i></div>				 		
                                	<blockquote><p>Curabitur commodo, metus non rhoncus suscipit, massa diam tristique odio, vitae sodales nunc sapien ac nisl. Mauris lacinia, tortor sed finibus mattis, sem eros pellentesque dui, id vehicula diam felis quis eros. Donec in pellentesque ante. In hac habitasse platea dictumst. Vivamus risus libero, ultricies non dolor a, ullamcorper congue massa.</p>
                                	</blockquote>						 			  				 						
                                	<div class="tmthumb"><img src="<?php echo get_template_directory_uri(); ?>/images/testi2.jpg" alt=" " /></div>
                                	<h6><a href="#">Sarah Brown</a></h6>	
                                </div>					 
                            </div>	
                            
                            <div class="item">				 
                                <div class="tmdesc">
                                    <div class="quote-icon"><i class="fa fa-quote-left" aria-hidden="true"></i></div>				 		
                                    <blockquote><p>Curabitur commodo, metus non rhoncus suscipit, massa diam tristique odio, vitae sodales nunc sapien ac nisl. Mauris lacinia, tortor sed finibus mattis, sem eros pellentesque dui, id vehicula diam felis quis eros. Donec in pellentesque ante. In hac habitasse platea dictumst. Vivamus risus libero, ultricies non dolor a, ullamcorper congue massa.</p>
                                    </blockquote>						 			  				 						
                                    <div class="tmthumb"><img src="<?php echo get_template_directory_uri(); ?>/images/testi3.jpg" alt=" " /></div>
                                    <h6><a href="#">Julia Doe</a></h6>	
                                </div>					 
                            </div>	
                        </div>
                    </div>
                </div><!-- .end section class --><div class="clear"></div>                 
            </div><!-- container -->
        </section>
                                                                                  		
                
        <section  id="" class="">
            <div class="container">
                <div class=" wow fadeInUp" data-wow-duration="1s">
                    <h2 class="section_title">Latest News</h2>                                                
                    <div class="fourcolumn-news">
                        <div class="news-box  ">
                            <div class="news-thumb">
                            	<a href="#">
                                	<img src="<?php echo get_template_directory_uri(); ?>/images/news1.jpg" alt=" " />
                                </a>																											
                            </div>
                            <div class="newsdesc">
                            	<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            	<div class="PostMeta">
                            		<span class="spantop">Posted On <a href="#">04-Aug-2017</a></span> | By <a href="#">admin</a>                                     
                            	</div>																						
                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at lacus quis mauris imperdiet convallis et quis ante. Pellentesque vestibulum nec elit a lobortis&#8230;.</p>                        
                                <a href="#" class="ReadMore"><span>Read More</span></a>						 							
                            </div><div class="clear"></div>
                        </div>
                        
                        <div class="news-box  ">
                            <div class="news-thumb">
                            	<a href="#">
                                	<img src="<?php echo get_template_directory_uri(); ?>/images/news2.jpg" alt=" " />
                                </a>																											
                            </div>
                            <div class="newsdesc">
                            	<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            	<div class="PostMeta">
                            		<span class="spantop">Posted On <a href="#">04-Aug-2017</a></span> | By <a href="#">admin</a>                                     
                            	</div>																						
                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at lacus quis mauris imperdiet convallis et quis ante. Pellentesque vestibulum nec elit a lobortis&#8230;.</p>                        
                                <a href="#" class="ReadMore"><span>Read More</span></a>						 							
                            </div><div class="clear"></div>
                        </div>
                        
                        <div class="news-box  ">
                            <div class="news-thumb">
                            	<a href="#">
                                	<img src="<?php echo get_template_directory_uri(); ?>/images/news3.jpg" alt=" " />
                                </a>																											
                            </div>
                            <div class="newsdesc">
                            	<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            	<div class="PostMeta">
                            		<span class="spantop">Posted On <a href="#">04-Aug-2017</a></span> | By <a href="#">admin</a>                                     
                            	</div>																						
                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at lacus quis mauris imperdiet convallis et quis ante. Pellentesque vestibulum nec elit a lobortis&#8230;.</p>                        
                                <a href="#" class="ReadMore"><span>Read More</span></a>						 							
                            </div><div class="clear"></div>
                        </div>
                    </div>
                </div><!-- .end section class --><div class="clear"></div>                 
            </div><!-- container -->
        </section>
        
        
        <section  id="insta_sec" class="menu_page">
            <div class="container">
            	<div class=" wow fadeInUp" data-wow-duration="1s">
           			<div id="instafeed" class="insta"></div>
            	</div><!-- .end section class --> <div class="clear"></div>                 
            </div><!-- container -->
        </section>
        
        <div id="footer-wrapper">           
            <div class="container">        	
            	<div class="cols-3 widget-column-1"> 
            		<h5>About Us</h5>
            		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium dui eu mi pellentesque sagittis. Mauris non varius massa, id luctus risus. Donec vel nibh lacus. Quisque vel tempus erat. Aliquam quis egestas mi, sollicitudin accumsan sapien.<br><br>Morbi ac pretium eros. Morbi cursus mi eget pretium lacinia. Duis metus tellus, sodales eu est sit amet, tristique varius felis. Suspendisse sollicitudin fermentum massa et tempus. Quisque aliquam justo eu neque ullamcorper, a vestibulum mi maximus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>                  
            	</div>
           
            	<div class="cols-3 widget-column-2">                           	
            		<h5>Latest News</h5>
            		<ul class="recent-post">             
            			<li>
            				<span class="lp-thumb"> 
            					<img src="<?php echo get_template_directory_uri(); ?>/images/news3.jpg" /> 
                            </span>             
            				<span class="lp-data">
            					<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>              
            					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at lacus&#8230;</p>
            				</span><div class="clear"></div>                    					
            			</li><div class="clear"></div>
            
            			<li>
            				<span class="lp-thumb"> 
            					<img src="<?php echo get_template_directory_uri(); ?>/images/news2.jpg" /> 
                            </span>             
            				<span class="lp-data">
            					<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>              
            					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at lacus&#8230;</p>
            				</span><div class="clear"></div>                    					
            			</li><div class="clear"></div>
            
           				<li>
            				<span class="lp-thumb"> 
            					<img src="<?php echo get_template_directory_uri(); ?>/images/news1.jpg" /> 
                            </span>             
            				<span class="lp-data">
            					<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>              
            					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at lacus&#8230;</p>
            				</span><div class="clear"></div>                    					
            			</li><div class="clear"></div>
            		</ul>               
            	</div>
            
            
                <div class="cols-3 widget-column-3">  
                	<h5>Contact Us</h5>
                    <div class="contactdetail">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere nisi in pharetra auctor.</p>                
                        <p><i class="fa fa-map-marker"></i> 106, FashionBuzz Studio, United States</p>                                
                        <p><i class="fa fa-phone"></i>+01 88 888 8888 / +01 77 666 8888</p>                
                        <p><i class="fa fa-fax"></i>+01 77 666 8888</p>                
                        <p><i class="fa fa-envelope"></i><a href="mailto:info@sitename.com">info@sitename.com</a></p>                
                    </div>
                    <div class="social-icons">
                        <a style="background-color:" href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>
                        <a style="background-color:" href="#" target="_blank" title="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a style="background-color:" href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a>
                        <a style="background-color:" href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a>
                        <a style="background-color:" href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>              	   
                </div><div class="clear"></div>
            </div><!--end .container-->
            
        
            <div class="copyright-wrapper">
                <div class="container">                
                	<div class="copyright-txt">Copyright &copy; 2017 FashionBuzz. All Rights Reserved. Design by <a href="http://flythemes.net/" target="_blank">Fly Themes</div>                
                </div><!-- container --> 
            </div><!-- copyright-wrapper --> 
                   
        </div><!-- footer-wrapper -->
       		
	<div id="back-top"><a title="Top of Page" href="#top"><span></span></a></div><!-- back-top -->        
</div><!-- pagewrap -->
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
// INSTAGRAM
var userFeed = new Instafeed({
	  get: 'user',
	  userId: '1518687454',
	  accessToken: '1518687454.1677ed0.b38d06a0823b42899322b048ba463212',
	  resolution: 'standard_resolution',
	  template: '<div class="item"><div class="instafeed"><a href="{{link}}" target="_blank"><img src="{{image}}" /></a><span class="insta_follow"><a href="https://www.instagram.com/" target="_blank">Follow Us</a></span></div></div>',
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
</script>
</body>
</html>