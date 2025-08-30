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
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div id="main-view">
                <div class="header-image">
                    <img src="<?php echo wp_get_attachment_image_url(20, 'full'); ?>" alt="Select a Category">
                </div>

                <div class="page-grid">
                    <?php
                    $pages = get_pages(array(
                        'sort_column' => 'menu_order',
                        'sort_order' => 'ASC'
                    ));

                    foreach ($pages as $page) {
                        $featured_image_url = get_the_post_thumbnail_url($page->ID, 'full');
                        if ($featured_image_url) {
                            echo '<a href="#" class="page-link" data-page-id="' . $page->ID . '">';
                            echo '<img src="' . $featured_image_url . '" alt="' . $page->post_title . '">';
                            echo '</a>';
                        }
                    }
                    ?>
                </div>
            </div>

            <div id="sub-view" style="display: none;"></div>

            <div style="display: none;">
                <?php
                foreach ($pages as $page) {
                    echo '<div id="page-content-' . $page->ID . '">' . apply_filters('the_content', $page->post_content) . '</div>';
                }
                ?>
            </div>

        </main>
    </div>
</div>

<?php get_footer(); ?>
