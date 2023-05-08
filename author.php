<?php 
/*
*this template for displaying the header
*/
get_header();
?>
<h1>this is author page</h1>
<div id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>


<?php get_footer() ?>