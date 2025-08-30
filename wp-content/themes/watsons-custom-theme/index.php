<?php get_header(); ?>

<div class="container">
    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            if ( has_custom_header() ) {
                the_custom_header_markup();
            }
            ?>
        </div>
    </header>
    
</div>

<?php get_footer(); ?>
