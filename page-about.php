<?php
/**
 Template Name: О нас
*/

get_header();
?>
<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

<section class="page about-offer">
  <div class="container">
    <h1 class="page-title">
      <?php the_title(); ?>
    </h1>
    <div class="about-offer-img">
      <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
    </div>
    <div class="content about-offer-content">
      <?php the_content(); ?>
    </div>
  </div>
  
</section>
<?php endwhile; endif; ?>



<?php
get_footer();
