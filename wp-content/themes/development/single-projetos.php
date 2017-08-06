<?php get_header(); ?>



<div class="go-wrapper">

<?php if(isMobile()): ?>
<div id="fullpage">
	<div class="section">
<?php endif; ?>

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

<?php if(isMobile()): ?>
	</div>
<?php endif; ?>

<?php $images = get_field('images') ?>

	<?php if($images): ?>
		<?php if(!isMobile()): ?>
			<div id="fullpage">
		<?php endif ?>

			<?php foreach($images as $image): ?>
					
				<div class="section go-project-gallery">
					
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