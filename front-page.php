<?php
/**
 * Theme front page
 */
get_header();?>

<section id="service_area">
    <div class="container ">
        <div class="row">
            <?php 
            query_posts( 'post_type=service&post_status=publish&posts_per_page=6&orderASC&paged='. get_query_var('post')); 
            
            if(have_posts()) :
                while(have_posts()): the_post();
            ?>
            <div class="col-md-4 p-2">
                <div class="child-service border p-3">
                    <h2><?php the_title(); ?></h2>
                    <?php the_post_thumbnail('service'); ?>
                    <?php the_excerpt() ?>
                </div>
            </div>

            <?php
                endwhile;
            endif;
                ?>
        </div>
    </div>
</section>

<?php get_footer();?>