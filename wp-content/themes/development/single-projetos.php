<?php get_header(); ?>

<div class="go-wrapper">

<div class="go-project">

	<div class="item-content">
		<div class="go-divider animation"></div>
		<div class="item-title animation">
			<?php the_title(); ?>
		</div>

		<div class="item-job animation">
			<?php the_field('job') ?>
		</div>

		<div class="item-text animation">
			<?php the_field('description') ?>
		</div>

		<a href="<?php the_field('url') ?>" id="profile-button" class="go-button animation">
			<div class="item-icon"><i id="button-icon" class="fa fa-chevron-right" aria-hidden="true"></i></div>
			Ver Site
		</a>
	</div>
</div>

<?php $images = get_field('images') ?>

	<?php if($images): ?>
		<div id="fullpage">

			<?php foreach($images as $image): ?>
					
				<div class="section">
					
					<div class="go-project-slider" style="
					background: url('<?php echo $image['url'] ?>') no-repeat center center;
					background-size: cover;
					">
						
					</div>

				</div>

			<?php endforeach ?>

		</div>
	<?php endif ?>


</div>


<?php get_footer(); ?>