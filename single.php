<?php 
/*
*this template for displaying single post
*/
get_header();
?>

    <div id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                <?php get_template_part( 'template_part/post_setup' ) ?>

                <div id="comments_area">
                    <?php comments_template(); ?>
                </div>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>