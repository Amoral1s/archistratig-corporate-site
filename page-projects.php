<?php 
/**
 Template Name: Проекты все
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="page-projects work">
	<div class="container">
		<h1 class="title">
			<?php the_title(); ?>
		</h1>
		<?php if (get_field('srochnyj_sbor')) : ?>
		<?php 
			$select_post = get_field('na_kakoj_hram_srochnyj_sbor');
			$select_post_id = $select_post->ID;

			global $post;
			$this_id = $post->ID;

			$my_posts = get_posts(array(
				'post_type'      => 'in_work',
				'numberposts' => 1,
				'include'     => $select_post_id
			));
			foreach ($my_posts as $post) :
			setup_postdata($post);			
		?>
		<div class="work-top">
			<div class="left">
				<div class="label">Срочный сбор</div>
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
				<?php if (get_field('video')) { ?> 
				<div class="play video-toggle" data-src="<?php the_field('video'); ?>"></div>
				<?php } ?>
			</div>
			<div class="right">
				<b class="title"><?php the_title(); ?></b>
				<div class="place-item">
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none">
							<path d="M25.5 28.6875C23.9239 28.6875 22.3833 28.2201 21.0728 27.3445C19.7623 26.4689 18.741 25.2244 18.1378 23.7683C17.5347 22.3122 17.3769 20.7099 17.6844 19.1641C17.9918 17.6183 18.7508 16.1984 19.8652 15.084C20.9797 13.9695 22.3996 13.2106 23.9454 12.9031C25.4912 12.5956 27.0934 12.7535 28.5495 13.3566C30.0056 13.9597 31.2502 14.9811 32.1258 16.2916C33.0014 17.602 33.4688 19.1427 33.4688 20.7188C33.4662 22.8314 32.6259 24.8568 31.132 26.3507C29.6381 27.8446 27.6127 28.685 25.5 28.6875ZM25.5 15.9375C24.5544 15.9375 23.63 16.2179 22.8437 16.7433C22.0574 17.2687 21.4446 18.0154 21.0827 18.889C20.7208 19.7627 20.6261 20.7241 20.8106 21.6515C20.9951 22.579 21.4505 23.4309 22.1191 24.0996C22.7878 24.7683 23.6398 25.2236 24.5672 25.4081C25.4947 25.5926 26.4561 25.4979 27.3297 25.1361C28.2034 24.7742 28.9501 24.1613 29.4755 23.3751C30.0008 22.5888 30.2813 21.6644 30.2813 20.7188C30.28 19.4511 29.7758 18.2357 28.8795 17.3393C27.9831 16.4429 26.7677 15.9388 25.5 15.9375Z" fill="#1F3040"/>
							<path d="M25.5 47.8125L12.0551 31.9563C11.8683 31.7182 11.6834 31.4786 11.5005 31.2375C9.20389 28.2122 7.9632 24.517 7.96877 20.7188C7.96877 16.0692 9.81581 11.61 13.1036 8.32228C16.3913 5.03454 20.8504 3.1875 25.5 3.1875C30.1496 3.1875 34.6087 5.03454 37.8965 8.32228C41.1842 11.61 43.0313 16.0692 43.0313 20.7188C43.0368 24.5153 41.7967 28.2088 39.5011 31.2327L39.4995 31.2375C39.4995 31.2375 39.0214 31.8654 38.9497 31.9499L25.5 47.8125ZM14.0441 29.317C14.0473 29.317 14.4171 29.8079 14.5016 29.9131L25.5 42.8846L36.5128 29.8956C36.583 29.8079 36.9559 29.3138 36.9575 29.3123C38.8336 26.8405 39.8475 23.8218 39.8438 20.7188C39.8438 16.9146 38.3326 13.2662 35.6426 10.5762C32.9526 7.88621 29.3042 6.375 25.5 6.375C21.6958 6.375 18.0474 7.88621 15.3575 10.5762C12.6675 13.2662 11.1563 16.9146 11.1563 20.7188C11.1529 23.8238 12.1664 26.8442 14.0441 29.317Z" fill="#1F3040"/>
						</svg>
					</div>
					<p><?php the_field('mestopolozhenie_hrama'); ?></p>
				</div>
				<div class="place-item">
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="51" height="59" viewBox="0 0 51 59" fill="none">
							<path d="M37.104 25.8405C36.5538 26.3857 35.8096 26.6918 35.034 26.6918C34.2584 26.6918 33.5142 26.3857 32.964 25.8405L30.533 23.416C29.9858 22.8673 29.6786 22.1249 29.6786 21.351C29.6786 20.5771 29.9858 19.8347 30.533 19.2861L36.0354 13.7956C36.0463 13.7851 36.0544 13.7722 36.059 13.7578C36.0637 13.7435 36.0647 13.7282 36.0619 13.7134C36.0592 13.6986 36.0529 13.6847 36.0435 13.6729C36.034 13.6611 36.0218 13.6519 36.0079 13.6459C32.4562 12.1275 27.8514 12.9013 24.9273 15.7967C22.1294 18.5661 21.9702 22.7316 22.9949 26.367C23.1405 26.8837 23.1402 27.4305 22.9939 27.9471C22.8476 28.4636 22.5611 28.9298 22.166 29.2943L6.92333 43.1779C6.47361 43.5755 6.1102 44.0608 5.85544 44.6037C5.60068 45.1466 5.45996 45.7357 5.44193 46.3349C5.42389 46.9341 5.52893 47.5306 5.75057 48.0877C5.97222 48.6449 6.30579 49.151 6.73078 49.5749C7.15577 49.9987 7.6632 50.3314 8.22186 50.5525C8.78053 50.7735 9.37863 50.8783 9.97939 50.8603C10.5801 50.8423 11.1709 50.702 11.7152 50.4479C12.2596 50.1938 12.7461 49.8313 13.1448 49.3828L27.2219 34.1442C27.5827 33.7568 28.0423 33.4745 28.5516 33.3278C29.061 33.181 29.6007 33.1752 30.1131 33.3111C33.7307 34.2774 37.8479 34.0958 40.6091 31.3775C43.5817 28.4575 44.2231 23.2965 42.7821 20.3427C42.7756 20.3298 42.7661 20.3186 42.7544 20.3101C42.7428 20.3015 42.7292 20.2959 42.7149 20.2935C42.7006 20.2912 42.686 20.2923 42.6722 20.2968C42.6584 20.3012 42.6459 20.3088 42.6357 20.319L37.104 25.8405Z" stroke="#1F3040" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
							<path d="M9.85998 48.8277C11.1744 48.8277 12.24 47.765 12.24 46.4541C12.24 45.1432 11.1744 44.0806 9.85998 44.0806C8.54554 44.0806 7.47998 45.1432 7.47998 46.4541C7.47998 47.765 8.54554 48.8277 9.85998 48.8277Z" fill="#1F3040"/>
						</svg>
					</div>
					<p><?php the_field('osnovanie_hrama'); ?></p>
				</div>
				<div class="why">
					<?php the_field('prichina', $this_id); ?>
				</div>
				<div class="why-link">
					<a href="<?php the_permalink(); ?>">Подробнее</a>
				</div>
				<div class="donate-wrap">
					<div class="button donate">
						Помочь храму
					</div>
					<div class="share">
						<span class="catalog-item__share dif aic transition link" href="#">
							<script src="https://yastatic.net/share2/share.js"></script>
							<div class="ya-share2" data-curtain 					
							data-shape="round" 	
							data-url="[(site_url)][~[+id+]~]"
							data-title="[+pagetitle+]"
							data-image="[(site_url)][+tv.image+]"								
							data-limit="0" 					
							data-more-button-type="short" data-services="telegram,twitter,viber,whatsapp"></div>						
							
						</span>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="page-project-toggles">
			<div>Храмы в работе</div>
			<a href="<?php the_permalink(151) ?>">Завершенные проекты</a>
		</div>
		<div class="page-projects-wrapper">
			<div class="projects-wrap">
        <?php
        $my_posts = get_posts('numberposts=-1&post_type=in_work');
        foreach ($my_posts as $post) :
        setup_postdata($post);
        ?>
        <div class="projects-wrap-item">
          <img src="<?php the_post_thumbnail_url('large') ?>" alt="thumb">
          <div class="projects-wrap-item-title">
            <a href="<?php the_permalink(); ?>"><h3><?php the_title() ?></h3></a>
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
		</div>
	</div>
</section>


<?php endwhile; ?>

<?php get_footer();