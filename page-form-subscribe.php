<?php 
/**
 Template Name: Форма подписки
 */

get_header(); ?>



<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

<main class="page form-bg sub-bg">
	<div class="single container">
		<h1 class="page-title" style="text-transform: none">
			<?php the_title() ?>
		</h1>
		<div class="page-form">
			<?php the_content() ?>
		</div>
	</div>
	<!-- /.single container -->
</main>

<?php endwhile; endif; ?>

<?php get_footer();