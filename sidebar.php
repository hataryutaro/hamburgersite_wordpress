<!-- sidebar -->
<aside class="l-sidebar p-gmenu">
    <?php
        if ( is_active_sidebar( 'burger_widget' ) ) :
            dynamic_sidebar( 'burger_widget' );
        else:
    ?>
    <div class="widget">
        <h2>No Widget</h2>
        <p>ウィジットは設定されていません。</p>
    </div>
    <?php endif; ?>
</aside>
