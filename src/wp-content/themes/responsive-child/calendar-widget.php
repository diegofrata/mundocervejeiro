<div id="calendar-widget" class="grid col-290">
	<div class="arrow"></div>
	<h2>Programação <span>da Semana</span></h2>
	<?php responsive_widgets(); ?>

    <?php if (!dynamic_sidebar('home-widget-1')) : ?>
    <div class="widget-wrapper paper radius">
    	<div class="paper-lines radius">
            <div class="overflow">
                <?php echo do_shortcode('[events_list_grouped scope="' . date('Y-m-d') . ',2200-01-01" date_format="l <\\\s\\\p\\\a\\\n>d/m</\\\s\\\p\\\a\\\n>" limit="15" pagination="0" category="5"]

                    <p><a class="color2" href="#_EVENTURL"><span class="hour">#_24HSTARTTIME:</span> #_EVENTNAME</a></p>

                [/events_list_grouped]'); ?>               
            </div>

            <p class="more"><a class="color1" href="/programacao">aqui tem mais</a></p>
	    </div>
    </div><!-- end of .widget-wrapper -->
    <?php endif; //end of home-widget-1 ?>

	<?php responsive_widgets_end(); ?>
</div><!-- end of .col-300 -->