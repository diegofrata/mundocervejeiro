<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>  
	<?php responsive_widgets_before(); // above widgets container hook ?>
    <div id="widgets-first" class="widgets home-widgets">
        <?php include "calendar-widget.php" ?>

        <?php include "beers-widget.php" ?>

        <?php include "bar-widget.php" ?>
    </div><!-- end of #widgets -->

	<div id="widgets-second" class="widgets home-widgets">
        <?php include "newsletter-widget.php" ?>

        <?php include "socialnetwork-widget.php" ?>
    </div><!-- end of #widgets -->

	<?php responsive_widgets_after(); // after widgets container hook ?>