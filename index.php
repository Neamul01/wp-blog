<?php 
/*
*this template for displaying the header
*/
get_header();
?>

    <div id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    
                    <?php 
                        if(have_posts()) :
                        while(have_posts()): the_post();
                    ?>

                    <div class="blog_area">
                        <div class="post_thumb">
                        <a href="<?php the_permalink(  ) ?>"><?php the_post_thumbnail( 'post-thumbnails' ); ?></a>
                            
                        </div>
                        <div class="post_details">
                            <h2><a href="<?php the_permalink(  ) ?>"><?php the_title()?></a></h2>
                            <?php the_excerpt(); ?>
                        </div>

                    </div>

                    <?php
                        endwhile;
                        else :
                            _e('No post found');
                        endif;
                    ?>
                    <div id="page_nav">
                        <?php if('noman_page_nav'){noman_page_nav();} else{ ?>
                            <?php next_posts_link() ?>
                            <?php previous_posts_link() ?>
                        <?php } ?>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <h2>The sidebar</h2>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>