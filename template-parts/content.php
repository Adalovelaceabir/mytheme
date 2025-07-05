<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
        
        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php yourtheme_posted_on(); ?>
            </div>
        <?php endif; ?>
    </header>
    
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium_large'); ?>
            </a>
        </div>
    <?php endif; ?>
    
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
    
    <footer class="entry-footer">
        <?php yourtheme_entry_footer(); ?>
    </footer>
</article>
