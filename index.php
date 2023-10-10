<?php get_header(); ?>


<section class="offer">
  <div class="container">
    <div class="offer-wrap">
      <h1>
        <?php the_field('offer_title', 'options'); ?>
      </h1>
      <div class="offer-img">
        <img src="<?php the_field('offer_img', 'options'); ?>" alt="<?php the_field('offer_title', 'options'); ?>">
      </div>
      <h2 class="title">
        <?php the_field('offer_title_2', 'options'); ?>
      </h2>
      <p>
        <?php the_field('offer_subtitle', 'options'); ?>
      </p>
      <div class="button donate">
        Пожертвовать
      </div>
    </div>
    <div class="info-wrap">

      <div class="info-wrap-item">
        <div class="left">
          <?php the_field('info_1', 'options'); ?>
        </div>
        <div class="right">
          <img src="<?php the_field('info_1_-_izobrazhenie
            ', 'options'); ?>" alt="info">
        </div>
      </div>

      <div class="info-wrap-item info-right">
        <div class="left">
          <?php the_field('info_2', 'options'); ?>
        </div>
        <div class="right">
          <img src="<?php the_field('info_2_-_izobrazhenie
          ', 'options'); ?>" alt="info">
        </div>
      </div>
      <div class="button donate">
        Поддержать проект
      </div>
    </div>
  </div>
</section>

<section class="projects">
  <div class="container">
    <div class="projects-title">
      <div class="projects-title-wrap">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86" fill="none">
            <path d="M21.5 28.6667V75.25H35.8334V57.3333C35.8334 53.3917 39.0584 50.1667 43 50.1667C46.9417 50.1667 50.1667 53.3917 50.1667 57.3333V75.25H64.5V28.6667L43 10.75L21.5 28.6667ZM48.375 35.8333C48.375 38.7 45.8667 41.2083 43 41.2083C40.1334 41.2083 37.625 38.7 37.625 35.8333C37.625 32.9667 40.1334 30.4583 43 30.4583C45.8667 30.4583 48.375 32.9667 48.375 35.8333ZM10.75 17.9167C6.80837 17.9167 3.58337 21.1417 3.58337 25.0833V28.6667H17.9167V25.0833C17.9167 21.1417 14.6917 17.9167 10.75 17.9167ZM3.58337 32.25H17.9167V75.25H3.58337V32.25ZM75.25 17.9167C71.3084 17.9167 68.0834 21.1417 68.0834 25.0833V28.6667H82.4167V25.0833C82.4167 21.1417 79.1917 17.9167 75.25 17.9167ZM68.0834 32.25H82.4167V75.25H68.0834V32.25Z" fill="#1F3040"/>
          </svg>
        </div>
        <h2 class="title">
          ПРОЕКТЫ В РАБОТЕ
        </h2>
      </div>
      <a href="<?php the_permalink(24) ?>" class="all-link">
        <p>Смотреть все проекты</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
          <path d="M45 24.9999L46.18 26.1799L47.3567 24.9999L46.18 23.8199L45 24.9999ZM43.82 23.8199L30.4867 37.1532L32.8467 39.5132L46.18 26.1799L43.82 23.8199ZM46.18 23.8199L32.8467 10.4866L30.4867 12.8466L43.82 26.1799L46.18 23.8199ZM45 23.3332L3.33333 23.3332V26.6666L45 26.6666V23.3332Z" fill="#7289A0"/>
        </svg>
      </a>
    </div>
    <div class="project-slider swiper">
      <div class="projects-wrap swiper-wrapper">
        <?php
          $my_posts = get_posts('numberposts=3&post_type=in_work');
          foreach ($my_posts as $post) :
          setup_postdata($post);
        ?>
        <div class="projects-wrap-item swiper-slide">
          <img src="<?php the_post_thumbnail_url('large') ?>" alt="thumb">
          <div class="projects-wrap-item-title">
            <h3><?php the_title(); ?></h3>
            <span><?php the_field('mestopolozhenie_hrama') ?>, </span>
            <span><?php the_field('osnovanie_hrama') ?></span>
          </div>
          <?php if(!get_field('hide_line')) { ?>
          <div class="projects-wrap-item-price">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                <path d="M18.2234 5.15161H9.0151V17.9016H6.18176V20.7349H9.0151V23.5683H6.18176V26.4016H9.0151V30.6516H11.8484V26.4016H17.5151V23.5683H11.8484V20.7349H18.2234C22.5301 20.7349 26.0151 17.2499 26.0151 12.9433C26.0151 8.63661 22.5301 5.15161 18.2234 5.15161ZM18.2234 17.9016H11.8484V7.98494H18.2234C20.9576 7.98494 23.1818 10.2091 23.1818 12.9433C23.1818 15.6774 20.9576 17.9016 18.2234 17.9016Z" fill="#676766"/>
              </svg>
            </div>
            <div class="item">
              <p>Собрано:</p>
              <span><?php the_field('sobrano_deneg') ?></span>
            </div>
            <div class="item">
              <p>Необходимо:</p>
              <span><?php the_field('neobhodimo') ?></span>
            </div>
          </div>
          <?php } ?>
          <div class="projects-wrap-item-btns">
            <a href="<?php the_permalink(  ) ?>">
              Подробнее
            </a>
            <div class="button donate">
              Поддержать проект
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        
      </div>
      <div class="project-pagination swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"></div>
    </div>
  </div>
</section>

<section class="news">
  <div class="container">
    <div class="news-wrap  ">
      <div class="projects-title">
        <div class="projects-title-wrap">
          <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86" fill="none">
            <path d="M71.6666 60.9166C71.6666 61.8669 71.2891 62.7784 70.6171 63.4504C69.9451 64.1224 69.0336 64.4999 68.0833 64.4999C67.1329 64.4999 66.2215 64.1224 65.5495 63.4504C64.8775 62.7784 64.5 61.8669 64.5 60.9166V17.9166C64.5 16.9662 64.1224 16.0548 63.4504 15.3828C62.7784 14.7108 61.867 14.3333 60.9166 14.3333H10.75C9.7996 14.3333 8.88817 14.7108 8.21616 15.3828C7.54415 16.0548 7.16663 16.9662 7.16663 17.9166V64.4999C7.16663 66.4006 7.92168 68.2235 9.26569 69.5675C10.6097 70.9115 12.4326 71.6666 14.3333 71.6666H68.0833C74.0101 71.6666 78.8333 66.8434 78.8333 60.9166V25.0833H71.6666V60.9166ZM43 25.0833H53.75V32.2499H43V25.0833ZM43 39.4166H53.75V46.5833H43V39.4166ZM17.9166 25.0833H35.8333V46.5833H17.9166V25.0833ZM17.9166 60.9166V53.7499H53.75V60.9166H17.9166Z" fill="#1F3040"/>
          </svg>
          </div>
          <h2 class="title">
            НОВОСТИ
          </h2>
        </div>
        <a href="<?php the_permalink(30) ?>" class="all-link">
          <p>Читать все новости</p>
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
            <path d="M45 24.9999L46.18 26.1799L47.3567 24.9999L46.18 23.8199L45 24.9999ZM43.82 23.8199L30.4867 37.1532L32.8467 39.5132L46.18 26.1799L43.82 23.8199ZM46.18 23.8199L32.8467 10.4866L30.4867 12.8466L43.82 26.1799L46.18 23.8199ZM45 23.3332L3.33333 23.3332V26.6666L45 26.6666V23.3332Z" fill="#7289A0"/>
          </svg>
        </a>
      </div>
        <div class="news-wrap-items news-slider  swiper">
          <div class="swiper-wrapper news-wrap-items ">
            <?php
              $my_posts = get_posts('numberposts=3&post_type=post');
              foreach ($my_posts as $post) :
              setup_postdata($post);
            ?>
            <a href="<?php the_permalink(); ?>" class="news-wrap-item swiper-slide">
              <img src="<?php the_post_thumbnail_url('large'); ?>" alt="thumb">
              <h3><?php the_title(); ?></h3>
              <p><?php echo get_the_date('d M Y') ?></p>
            </a>
            <?php endforeach; ?>
          </div>
          <div class="news-pagination swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"></div>
        </div>
        
      
      
    </div>
  </div>
  <div class="uni">
    <div class="container">
      <p class="uni-title">
        Подписывайтесь на рассылку и мы будем рассказывать вам только самые важные и интересные новости!
      </p>
      <a href="<?php the_permalink(156) ?>" class="button uni-toggle">
        Подписаться
      </a>
    </div>
  </div>
</section>

<section class="intrest">
  <div class="container">
    <div class="projects-title">
      <div class="projects-title-wrap">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="65" height="72" viewBox="0 0 65 72" fill="none">
            <path d="M0 18.0832V10.9165H7.16667V7.33317C7.16667 5.43245 7.92172 3.60958 9.26573 2.26557C10.6097 0.921561 12.4326 0.166504 14.3333 0.166504H35.8333V25.2498L44.7917 19.8748L53.75 25.2498V0.166504H57.3333C61.0958 0.166504 64.5 3.57067 64.5 7.33317V64.6665C64.5 68.429 61.0958 71.8332 57.3333 71.8332H14.3333C10.5708 71.8332 7.16667 68.429 7.16667 64.6665V61.0832H0V53.9165H7.16667V39.5832H0V32.4165H7.16667V18.0832H0ZM14.3333 32.4165H7.16667V39.5832H14.3333V32.4165ZM14.3333 18.0832V10.9165H7.16667V18.0832H14.3333ZM14.3333 61.0832V53.9165H7.16667V61.0832H14.3333Z" fill="#1F3040"/>
          </svg>
        </div>
        <h2 class="title">
          ЭТО ИНТЕРЕСНО (СТАТЬИ)
        </h2>
      </div>
      
    </div>
    <div class="intrest-overflow">
      <div class="intrest-wrap">
        <?php
          $args = array(
            'category_name' => 'intresting_news'
          );
          $query = new WP_Query( $args );

          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
        ?>
          <a href="<?php the_permalink(); ?>" class="intrest-wrap-item">
            <img src="<?php the_post_thumbnail_url('large') ?>" alt="thumb">
            <p><?php the_title(); ?></p>
          </a>
          
        <?php } }  wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>

<section class="been">
  <div class="container">
    <h2 class="title">
      ВЫ МОЖЕТЕ СТАТЬ ВОЛОНТЕРОМ
    </h2>
    <p>
      Если вы хотите принять участие в восстановлении храма и можете потрудиться своими руками, мы будем рады видеть вас среди наших волонтеров.
    </p>
    <a class="button" href="<?php the_permalink(28) ?>">Хочу стать волонтером</a>
  </div>
</section>



<?php get_footer(); ?>
