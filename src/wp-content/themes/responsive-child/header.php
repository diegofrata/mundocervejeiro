<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<!--[if !IE]>      <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" /> 
<meta charset="<?php bloginfo('charset'); ?>" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<title>
<?php
if ( defined( 'WPSEO_VERSION' ) ) {
    // WordPress SEO is activated
        wp_title();

} else {
	
    // WordPress SEO is not activated
	wp_title( '&#124;', true, 'right' );
}
?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_enqueue_style('responsive-style', get_stylesheet_uri(), false, '1.9.3');?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 9]>
	<div class="chromeframe">
    	<p>Seu navegador está <strong>desatualizado</strong>! <a href="http://browsehappy.com/?locale=pt-BR">Atualize seu navegador</a> gratuitamente ou <a href="http://www.google.com/chromeframe/?redirect=true">ative o Google Chrome Frame</a> para visualizar esse site corretamente.</p>
    </div>
    <style>
    	body { background-position: 0px 116px;}
    </style>
<![endif]-->                 
<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">
         
    <?php responsive_header(); // before header hook ?>
    <div id="header">

		<?php responsive_header_top(); // before header content hook ?>
        
    <?php responsive_in_header(); // header hook ?>
  	           
    <div id="logo">
        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo@2X.png" alt="<?php bloginfo('name'); ?>" /></a>
    </div><!-- end of #logo -->
     
    
    <?php get_sidebar('top'); ?>


    
	        <?php if (has_nav_menu('top-menu', 'responsive')) { ?>
		        <?php wp_nav_menu(array(
					    'container'       => 'div',
					    'container_class' => 'main-nav',
						'fallback_cb'	  => 'responsive_fallback_menu',
						'theme_location'  => 'top-menu')
						); 
					?>
	        <?php } ?>
                
            <?php if (has_nav_menu('sub-header-menu', 'responsive')) { ?>
	            <?php wp_nav_menu(array(
				    'container'       => '',
					'menu_class'      => 'sub-header-menu',
					'theme_location'  => 'sub-header-menu')
					); 
				?>
            <?php } ?>

			<?php responsive_header_bottom(); // after header content hook ?>
 
    </div><!-- end of #header -->
    <?php responsive_header_end(); // after header container hook ?>
    
	<?php responsive_wrapper(); // before wrapper container hook ?>
    <div id="wrapper" class="clearfix">
		<?php responsive_wrapper_top(); // before wrapper content hook ?>
		<?php responsive_in_wrapper(); // wrapper hook ?>