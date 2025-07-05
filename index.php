<?php get_header(); ?>

<div class="content-area">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="blog-posts">
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
                            <div class="entry-meta">
                                <?php 
                                yourtheme_posted_on();
                                yourtheme_posted_by();
                                ?>
                            </div>
                        </header>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <footer class="entry-footer">
                            <?php yourtheme_entry_footer(); ?>
                        </footer>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <?php the_posts_navigation(); ?>
            
        <?php else : ?>
            <p><?php esc_html_e('No posts found', 'yourtheme'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
