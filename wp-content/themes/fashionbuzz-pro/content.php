<?php
/**
 * @package Fashionbuzz
 */
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
            <div class="post-thumb">
            	<?php the_post_thumbnail('full'); ?>
                <div class="post-humb-hov"><a href="<?php the_permalink(); ?>"></a></div>
            </div><!-- post-thumb -->
        <?php else : ?>
            <div class="post-thumb"><?php the_post_thumbnail(); ?><div class="post-humb-hov"></div></div><!-- post-thumb -->
        <?php endif; ?>
        <header class="entry-header">
        	<?php if ( 'post' == get_post_type() ) : ?><div class="post-categories"> <?php echo getPostCategories();?></div><?php endif; ?> 
            <h3 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>           
        </header><!-- .entry-header -->
    
        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                <?php echo content( of_get_option('blogpostexcerptlength') ); ?>  
				<?php if ( 'post' == get_post_type() ) : ?>
                    <div class="postmeta">
                        <div class="post-date left"><?php echo get_the_date(); ?></div><!-- post-date -->
                        <div class="post-comment right"><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>                    
                        <div class="clear"></div>
                    </div><!-- postmeta -->
                <?php endif; ?>                 
                <p><a class="button" href="<?php the_permalink(); ?>"><?php echo of_get_option('blogpostreadmoretext'); ?></a></p>
            </div><!-- .entry-summary -->
        <?php else : ?>
            <div class="entry-content">
                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'fashionbuzz' ) ); ?>
                <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'fashionbuzz' ),
                        'after'  => '</div>',
                    ) );
                ?>
            </div><!-- .entry-content -->
        <?php endif; ?>        
    </article><!-- #post-## -->
    <div class="spacer20"></div>