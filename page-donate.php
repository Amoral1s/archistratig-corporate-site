<?php 
/**
 Template Name: Пожертвование
 */

get_header(); ?>



<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

<main class="page form-bg anon-form">
	<div class="single container" style="padding-bottom: 100px">
		<h1 class="page-title">
			<?php the_title() ?>
		</h1>
		<div class="page-form" >
			<div class="popup pay-form" style="display: block!important">
				<div class="wrap">
					<b>Сумма пожертвования</b>
					<div class="row">
						<div class="item active">
							<span>400</span> р.
						</div>
						<div class="item">
							<span>800</span> р.
						</div>
						<div class="item">
							<span>1500</span> р.
						</div>
					<div class="item">
							<span>3000</span> р.
						</div>
					<div class="item">
							<span>5000</span> р.
						</div>
					<div class="item">
							<span>10000</span> р.
						</div>
						<div class="item">
							<span>Другая сумма</span>
						</div>
					</div>
					<div class="input input-hidden">
						<input type="text" class="summ-input" value="400">
					</div>
					<div class="pay-form-toggle">
						<div class="button once active">Разовый платеж</div>
						<div class="button many">Ежемесячный платеж</div>
					</div>
					<div class="input-wrapper input" style="display: none">
						<input autocomplete="on" value="Аноним" class="pay-name" type="text" name="name" placeholder="Имя и фамилия">
						<input autocomplete="on" value="Аноним" class="pay-email" name="email" type="email" placeholder="E-mail">
						<input autocomplete="on" value="Аноним" name="phone" class="pay-phone" type="tel" placeholder="Телефон">
					</div>
					<div class="button go-pay">
						Пожертвовать
					</div>
					<small>
						<input type="checkbox" checked="checked" id="check" style="display: none" checked>
						<label for="check">Принимаю <a href="<?php the_permalink(165); ?>" target="blank">оферту сервиса</a> и условия <a href="<?php the_permalink(161); ?>" target="blank">обработки персональных данных</a></label>
					</small>
				</div>
			</div>
		</div>
	</div>
	<!-- /.single container -->
</main>

<?php endwhile; endif; ?>

<?php get_footer();