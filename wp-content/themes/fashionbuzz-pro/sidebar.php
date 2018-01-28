<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Fashionbuzz
 */
?>
<div id="sidebar" <?php if( is_page_template('blog-post-left-sidebar.php')){?> style="float:left;"<?php } ?>>
    
    <?php if ( ! dynamic_sidebar( 'sidebar-main' ) ) : ?>
            
            <?php echo do_shortcode('[searchform]'); ?>
       
        
     <aside id="skills" class="widget">           
            <?php echo do_shortcode('[accordion][accordion_content title="Etiam dictum nibh non egestas porta?"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue luctus lacus, nec ultricies libero tristique id. Fusce tempor dapibus enim, ut aliquam tortor. Nullam massa purus, bibendum at purus vitae, varius tristique quam. Nam laoreet sem consequat magna posuere facilisis.[/accordion_content][accordion_content title="Donec sed ligula quam. Nunc ac dolor a arcu"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue luctus lacus, nec ultricies libero tristique id. Fusce tempor dapibus enim, ut aliquam tortor. Nullam massa purus, bibendum at purus vitae, varius tristique quam. Nam laoreet sem consequat magna posuere facilisis.[/accordion_content][accordion_content title="Etiam dictum nibh non egestas porta?"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue luctus lacus, nec ultricies libero tristique id. Fusce tempor dapibus enim, ut aliquam tortor. Nullam massa purus, bibendum at purus vitae, varius tristique quam. Nam laoreet sem consequat magna posuere facilisis.[/accordion_content][accordion_content title="Fusce rhoncus odio sit amet enim fringilla"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue luctus lacus, nec ultricies libero tristique id. Fusce tempor dapibus enim, ut aliquam tortor. Nullam massa purus, bibendum at purus vitae, varius tristique quam. Nam laoreet sem consequat magna posuere facilisis.[/accordion_content][/accordion]'); ?>
        </aside>    
               
         
        
       <h3 class="widget-title">Client Testimonials</h3>
        <aside id="testimonials-widget" class="widget">           
            <?php echo do_shortcode('[sidebar-testimonials]'); ?>
        </aside> 
    <?php endif; // end sidebar widget area ?>
	
</div><!-- sidebar -->