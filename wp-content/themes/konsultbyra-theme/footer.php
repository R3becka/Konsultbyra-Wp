<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <nav class="footer-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'footer-menu',
                    'fallback_cb' => false,
                ));
                ?>
            </nav>
        </div>
        
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> DataAI Konsult. Alla rättigheter förbehållna.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>