<?php
add_filter('pre_option_link_manager_enabled', '__return_true' );
if ( function_exists('register_sidebar') )
    register_sidebar();
?>
