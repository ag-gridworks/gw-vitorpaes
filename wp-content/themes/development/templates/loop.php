<?php 
$args = array(
'post_type' => 'projetos',
'posts_per_page' => -1
);
?>

<?php $the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
	<div class="item">
		<div class="item-content">
			<div class="item-title">
				<?php the_title(); ?>
			</div>
			<div class="item-image" style="
			background: url('<?php get_the_post_thumbnail_url(); ?>') no-repeat center center;
			background-size: cover;
			"
			>
			</div>
		</div>
	</div>

	<?php endwhile; ?>

<?php endif; ?>


<div class="go-projects-home owl-carousel owl-projects">
	<div class="item">
		<div class="item-content">
			<div class="item-title">
				ISM Seguros
			</div>
			<div class="item-image">
				a
			</div>
		</div>
	</div>

	<div class="item">
		<div class="item-content">
			<div class="item-title">
				Projeto
			</div>
			<div class="item-image">
				a
			</div>
		</div>
	</div>
</div>