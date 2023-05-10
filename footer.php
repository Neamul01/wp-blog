<?php
/**
 * Theme footer section
 * It will visible in every page
 * need to require style in custom.css file
 */
?>
<div id="footer_area">

        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php dynamic_sidebar( 'Footer 1' ) ?>
                    </div>
                    <div class="col-md-4">
                        <?php dynamic_sidebar( 'Footer 2' ) ?>
                    </div>
                    <div class="col-md-4">
                        <?php dynamic_sidebar( 'Footer 3' ) ?>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="copyright_area">
            <div class="container">
                <div class="row">
                    <div class="com-md-12">
                        <p><?php echo get_theme_mod('noman_compyright_section') ?></p>
                    </div>
                </div>
            </div>
        </section>      
</div>

<?php wp_footer(); ?>
</body>
</html>