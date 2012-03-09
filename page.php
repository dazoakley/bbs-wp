<?php get_header(); ?>

            <div id="content">
            	  <?php get_sidebar(); ?>
	            <div id="main">
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <h2 class="entry-title">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to '<?php the_title(); ?>'"><?php the_title(); ?></a>
                        <?php edit_post_link('edit', '<span class="editlink">', '</span>'); ?>
                    </h2>
                    
                    <?php the_content(); ?>
                    
                    <?php endwhile; else: ?>
                    
                    <h2>Woops...</h2>
                    
                    <p>Sorry, no posts we're found.</p>  
                    
                    <?php endif; ?>  
                    
                    <p align="center"><?php posts_nav_link(); ?></p>
                    
                </div>
            </div>

<?php get_footer(); ?>