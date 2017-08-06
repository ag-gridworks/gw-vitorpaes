<div id="toggle" class="go-navbar-toggle">
	<i class="fa fa-navicon fa-2x" aria-hidden="true"></i>
</div>

<a href="<?php echo site_url() ?>" class="go-navbar-logo animation">
	VITOR<span class="light">PAES</span>
</a>

<div class="go-menu">
	<div id="menu-content" class="item-content">
		<div class="item-menu">
			Serviços
		</div>
		<div class="item-menu">
			Sobre Mim
		</div>
		<div class="item-menu">
			Portfolio
		</div>
		<div class="item-menu toggle-contact">
			Contato
		</div>
	</div>
</div>

<?php get_template_part( 'partials/part', 'contact' ); ?>