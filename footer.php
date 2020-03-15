    <footer>
        <nav>
            <?php wp_nav_menu( array('theme_location' => 'footer_nav')); ?>
        </nav>
    </footer>
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"><\/script>')</script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

    <!-- WordPress Footer -->
    <?php wp_footer(); ?>
</body>
</html>