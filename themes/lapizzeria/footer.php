    
    
    <footer>
        <?php
            $args = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'after' => '<span class="separator"> | </span>'
            );
            wp_nav_menu($args);
        ?>

        <div class="location">
            <p>8179 Bay Avenue, Mountain View, CA 97043</p>
            <p>Phone Number: +1-92-456-7890</p>

            <p class="copyright">All rights reserved <?php echo date('Y'); ?></p>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
    </body>
</html>