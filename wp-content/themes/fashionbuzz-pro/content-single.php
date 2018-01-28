<?php
/**
 * @package Fashionbuzz
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
 <div class="blog-post-single"> 
 	<?php if (has_post_thumbnail() ){ echo '<div class="post-thumb">'; the_post_thumbnail(); echo '<div class="post-humb-hov"></div></div>'; } ?> 
    <header class="entry-header">
		<?php if ( 'post' == get_post_type() ) : ?><div class="post-categories"> <?php echo getPostCategories();?></div><?php endif; ?> 
        <h3 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>           
    </header><!-- .entry-header -->    
    <div class="entry-content">
		
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'fashionbuzz' ),
            'after'  => '</div>',
        ) );
        ?>
        <div class="postmeta">
        	<div class="post-date left"><?php echo get_the_date(); ?></div><!-- post-date -->
        	<div class="post-comment right"><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
        	<div class="clear"></div>
            <div class="post-tags"><?php the_tags(' | Tags: ', ', ', '<br />'); ?> </div>
        </div><!-- postmeta -->
    </div><!-- .entry-content -->
   
    <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'fashionbuzz' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
  </div>
</article>