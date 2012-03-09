<?php get_header(); ?>

            <div id="content">
            	  <?php get_sidebar(); ?>
	            <div id="main">
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <div id="post-<?php the_ID(); ?>" class="post">
                        <h2 class="entry-title">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to '<?php the_title(); ?>'"><?php the_title(); ?></a>
                            <?php edit_post_link('edit', '<span class="editlink">', '</span>'); ?>
                        </h2>
                        
                        <?php the_content(); ?>
                        
                        <div class="entry-meta">
                            <span class="meta-start">Published</span> 
                               <div class="entry-author">
                                   <span class="meta-prep">by</span> <address class="vcard author"><a href="<?php bloginfo('url'); ?>/author/<?php the_author(); ?>" class="url fn" title="View all posts by <?php the_author(); ?>"><?php the_author(); ?></a></address>,
                               </div> 
                               <div class="entry-date">
                                   <span class="meta-prep">on</span> <abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></abbr>,
                               </div> 
                               <div class="entry-categories"><span class="meta-prep">in</span> <?php the_category(', '); ?></div><span class="meta-end">.</span>
                               <a class="commentslink" href="<?php comments_link(); ?>"><?php comments_number('0 comments', '1 comment', '% comments'); ?></a>
                               <span class="entry-tags"><?php the_tags('Tags: ', ', ', '.'); ?></span>
                        </div>
                        
                    </div>
                    
                    <?php if (is_single()) { ?>
                        
                        <div class="navigation">
                            <?php previous_post_link('<div class="left"><span>&laquo;</span> %link</div>') ?>
                            <?php next_post_link('<div class="right">%link <span>&raquo;</span></div>') ?>
                            <div class="clear"></div>
                        </div>
                        
                    <?php } ?>
                    
                    <?php comments_template(); // Get wp-comments.php template ?>
                    
                    <?php endwhile; else: ?>
                    
                    <h2>Woops...</h2>
                    
                    <p>Sorry, no posts were found.</p>
                    
                    </div>
                    
                    <?php endif; ?>  
                    
                    <p align="center"><?php posts_nav_link(); ?></p>
                    
                </div>
            </div>

<?php get_footer(); ?>