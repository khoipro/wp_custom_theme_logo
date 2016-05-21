<?php
    if ( ! function_exists( 'mytheme_custom_logo' ) ) {
        function mytheme_custom_logo() {
            $output = '';
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            // Display logo in full size
            if (function_exists('get_custom_logo'))
                // You can add class or id to <a href=""> as well.
                $output = wp_get_attachment_image($custom_logo_id, 'full', false, array('class' => 'navbar-brand'));
            // Display site title if no logo exists
            if (empty($output))
                $output = '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
            echo $output;
        }
    }
?>