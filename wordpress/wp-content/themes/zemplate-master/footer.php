<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the wrap div and all content
 *
 * @package WordPress
 * @subpackage Zemplate
 * @since Zemplate 1.0
 */
?>

        <footer class="main-foot">

            <div class="text-overlay" id="footer-overlay">
                <p>crwgregory@gmail.com</p>
            </div>
        
            <!-- <div class="main-foot__nav">
                <div class="nav__inner text-overlay">
                    <?php
                        $attr = array(
                            'theme_location'  => 'foot-menu',
                            'container'       => 'nav',
                            'container_class' => 'foot-nav',
                            'menu_class'      => 'menu'
                        );
                        wp_nav_menu($attr);
                    ?>
                </div>
            </div> -->
            
        </footer><!-- // main-foot -->
    <!-- sticky footer will fail if anything goes between the closing footer and .wrap -->
    </div>
</div><!-- // wrap-all-the-things -->

<?php wp_footer(); //mandatory ?>

</body>
</html>