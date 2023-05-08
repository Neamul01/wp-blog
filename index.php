<?php 
/*
*this template for displaying the header
*/
?>



<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?> >
    <header id="header_area" class="<?php echo get_theme_mod('noman_menu_position') ?>" >
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo home_url() ?>" class="mw-50">
                        <img src="<?php echo get_theme_mod('noman_logo') ?>" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
                </div>
            </div>
        </div>
    </header>

    <div id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

    <div id="footer_area">
        <div id="copyright_area">
            <div class="container">
                <div class="row">
                    <div class="com-md-12">
                        <p><?php echo get_theme_mod('noman_compyright_section') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>
</html>