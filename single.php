<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="container">
	<a class="news-title-link" href="<?php the_permalink(30) ?>">Новости</a>
</div>
<section class="single news-single container">
	<div class="news-single-top">
		<h1><?php the_title(); ?></h1>
		<div class="date"><?php echo get_the_date('d M Y') ?></div>
		<img src="<?php echo the_post_thumbnail_url(); ?>" alt="img" class="thumb">
	</div>
	<div class="news-content content">
		<?php the_content(); ?>
	</div>
</section>

<?php endwhile; ?>

<?php get_footer();