<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

function test_function() {
    include 'before-header.php';
}

add_action( 'responsive_header', 'test_function' );

register_new_royalslider_files(1);