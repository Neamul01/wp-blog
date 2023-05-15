<?php 
/*
*this template for displaying 404 page
*/
get_header();
?>

    <div id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 error_page">
                    <p>404 Error - Page not found</p>
                    <h1>Opps! Looks like something wrong</h1>
                    <div class="error_search">
                        <?php get_search_form() ?>
                    </div>
                    <a href="<?php echo home_url() ?>" class="Homepage">Home</a>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>