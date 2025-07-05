</main>
        
        <footer class="site-footer">
            <div class="container">
                <div class="footer-widgets">
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <div class="footer-widget-area">
                            <?php dynamic_sidebar('footer-1'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- Repeat for other widget areas -->
                </div>
                
                <div class="site-info">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                </div>
            </div>
        </footer>
        
        <?php wp_footer(); ?>
    </body>
</html>
