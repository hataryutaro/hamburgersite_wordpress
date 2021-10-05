    <!-- footer -->
    <footer class="l-footer">
        <div class="p-footer__contener">
        <img class="p-footer__contener__image" src="<?php echo get_template_directory_uri(); ?>/image/pc_footer.png" alt="">
            <?php
                if ( is_active_sidebar( 'footer_widget' ) ) :
                    dynamic_sidebar( 'footer_widget' );
                else:
            ?>
            <div class="widget">
                <h2>No Widget</h2>
                <p>ウィジットは設定されていません。</p>
            </div>
            <?php endif; ?>
            <p class="p-footer__contener__copylight">copyright: RaiseTech</p>
        </div>
    </footer>
    <script src="/js/hamburger.js"></script>
    <?php wp_footer(); ?>
</body>
</html>