<?php
/**
 Template Name: Блог
 */

get_header();
?>

<main class="page page-news container">
  <h1 class="news-title-link">Новости</h1>
  <div class="page-news-wrap">
    <?php
      $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
      $args = array(
        'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
        'paged'          => $current_page, // текущая страница
        'post_type'      => 'post',
		'category__not_in' => 3
      );
      query_posts( $args );
      
      $wp_query->is_archive = true;
      $wp_query->is_home = false;
      
      while(have_posts()): the_post();
    ?>

    <div class="page-news-wrap-item">
      <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a> 
      <div class="left">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
      </div>
      <div class="right">
        <div class="excerpt">
          <p><?php the_excerpt(); ?></p>
        </div>
        <div class="row">
          <span><?php echo get_the_date('d M Y') ?></span>
          <a href="<?php the_permalink(); ?>">Подробнее</a>
        </div>
      </div>
    </div>
    <!-- /.page-wrap-item -->

    <?php endwhile; ?>
  </div>
  <?php if( function_exists('wp_pagenavi') ) wp_pagenavi();?>
  <div class="uni-banner">
    <p>Подписывайтесь на рассылку и мы будем рассказывать вам только самые важные и интересные новости!</p>
    <a href="<?php the_permalink(156) ?>" class="button">Подписаться</a>
  </div>
</main>

<?php
get_footer();
