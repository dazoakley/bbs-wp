        </div><!-- End of the "container" div -->
        
        <div id="footer">
            <div class="right">
                <a class="feedlink" href="<?php bloginfo('rss2_url'); ?>">Blog Feed</a> 
                <a class="feedlink" href="<?php bloginfo('url'); ?>/forum/syndication.php">Forum Feed</a>
            </div>
            <div>
                &copy; <?php the_time('Y'); ?> <?php bloginfo('name'); ?><br />
                Powered by <a href="http://wordpress.org">Wordpress</a>.
            </div>
            <div class="clear"></div>
        </div>
        
        
        <?php wp_footer(); ?>
        
    </body>
</html>
