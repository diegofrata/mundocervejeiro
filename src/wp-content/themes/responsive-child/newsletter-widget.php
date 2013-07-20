<div id="newsletter-widget" class="grid col-580 no-radius">
	<?php responsive_widgets(); ?>

    <?php if (!dynamic_sidebar('home-widget-4')) : ?>
    <div class="widget-wrapper no-radius">
    	<div>
	    	<h2>Cadastre-se!</h2>
	    	<p>Receba nossas promoções e novidades em seu e-mail.</p>
	    </div>
	    <div>
	    	<form action="http://mundocervejeiro.us7.list-manage.com/subscribe/post?u=b87d36809eefc412c18f90ba9&amp;id=e12e997709" 
	    		  method="post">
	    		<input name="EMAIL" type="email" placeholder="Endereço de e-mail"><br>
	    		<input type="submit" value="Cadastrar" class="clean-button">
	    	</form>
	    </div>
    </div><!-- end of .widget-wrapper -->
    <?php endif; //end of home-widget-1 ?>

	<?php responsive_widgets_end(); ?>
</div><!-- end of .col-300 -->