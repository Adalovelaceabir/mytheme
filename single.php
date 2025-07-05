<?php get_header(); ?>

<div class="content-area">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    
                    <div class="entry-meta">
                        <?php 
                        yourtheme_posted_on();
                        yourtheme_posted_by();
                        ?>
                    </div>
                </header>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                
                <footer class="entry-footer">
                    <?php yourtheme_entry_footer(); ?>
                    
                    <?php 
                    // If comments are open or we have at least one comment
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                </footer>
            </article>
            
            <?php 
            // Previous/next post navigation
            the_post_navigation(array(
                'next_text' => '<span class="meta-nav">Next</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav">Previous</span> ' .
                    '<span class="post-title">%title</span>',
            ));
            ?>
            
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
