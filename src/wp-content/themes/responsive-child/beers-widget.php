<div id="beers-widget" class="grid col-290">
	<h2><br class="hide-small">* Só as melhores</h2>
	<?php responsive_widgets(); ?>

    <?php if (!dynamic_sidebar('home-widget-2')) : ?>
    <div class="widget-wrapper radius">
		<div class="beer-logo heineken radius-top"></div>
		<div class="beer-logo tria"></div>
		<div class="beer-invite radius-bottom">
			<h3 class="no-margin"><a class="color1" href="/cervejas">Confira nossa carta de cervejas!</a></h3>
		</div>
    </div><!-- end of .widget-wrapper -->
    <?php endif; //end of home-widget-1 ?>

	<?php responsive_widgets_end(); ?>
</div><!-- end of .col-300 -->