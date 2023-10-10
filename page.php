<?php get_header(); ?>

<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

<main class="page">
	<div class="single container">
		<h1 class="page-title">
			<?php the_title() ?>
		</h1>
		<div class="single-content content">
			<?php the_content() ?>
		</div>
	</div>
	<!-- /.single container -->
</main>

<?php endwhile; endif; ?>

<?php get_footer();