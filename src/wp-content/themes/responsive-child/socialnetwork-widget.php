<?php
global $responsive_options;
$responsive_options = responsive_get_options();
?>

<div id="socialnetwork-widget" class="grid col-290 fit no-radius">
	<?php responsive_widgets(); ?>

    <?php if (!dynamic_sidebar('home-widget-5')) : ?>
    <div class="widget-wrapper no-radius">
    	<div class="paper-lines no-radius text-left">
    		<h2 class="color1">Redes Sociais</h2>
    		<p class="no-margin color3">Curta nossa página no 
    			<a href="<?php echo $responsive_options['facebook_uid'] ?>">
    				<span class="color1">Facebook</span>
					<img src="<?php echo get_stylesheet_directory_uri() ?>/icons/facebook.svg" width="20" height="20" alt="Facebook">
				</a>
    		</p>
    		<p class="no-margin color3">Siga-nos no 
    			<a href="<?php echo $responsive_options['twitter_uid'] ?>">
    				<span class="color1">Twitter</span>
					<img src="<?php echo get_stylesheet_directory_uri() ?>/icons/twitter.svg" width="20" height="20" alt="Twitter">
				</a>
    		</p>
    	</div>        
    </div><!-- end of .widget-wrapper -->
    <?php endif; //end of home-widget-1 ?>

    <span class="arrow handwrite">siga-nos!</span>
                	

	<?php responsive_widgets_end(); ?>
</div><!-- end of .col-300 -->