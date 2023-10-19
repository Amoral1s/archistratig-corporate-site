<footer class="footer">
  <div class="container">
    <div class="footer-wrap">
      <div class="footer-wrap-left logo-item">
        <?php if (is_home()) : ?>
        <div  class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
        </div>
        <?php else : ?>
        <a href="/" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
        </a>
        <?php endif; ?>
        <div class="req">
          <b>Название организации:</b>
          <p><?php the_field('nazvanie_oragnizaczii', 'options'); ?></p>
          <b>Юридический адрес: </b>
          <p><?php the_field('yur_adres', 'options'); ?></p>
          <p><span>ИНН: </span><?php the_field('inn', 'options'); ?></p>
          <p><span>КПП: </span><?php the_field('kpp', 'options'); ?></p>
          <p><span>ОГРН: </span><?php the_field('ogrn', 'options'); ?></p>
        </div>
      </div>
      <div class="footer-wrap-right">
        <div class="footer-wrap-item min">
          <div class="title">
            Фонд
          </div>
          <ul>
            <li>
              <a href="<?php the_permalink(22) ?>">О фонде</a>
            </li>
            <li>
              <a href="<?php the_permalink(24) ?>">Храмы на попечительстве</a>
            </li>
            <li>
              <a href="<?php the_permalink(87) ?>">Контакты</a>
            </li>
          </ul>
			
        </div>
        <div class="footer-wrap-item soc">
          <div class="title">
            Социальные сети
          </div>
          <div class="social">
            <a href="<?php the_field('vk', 'options'); ?>" target="blank">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/vk.svg" alt="vk">
              </div>
              <p>ВКонтакте</p>
            </a>
            <a href="<?php the_field('telegram', 'options'); ?>" target="blank">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/tg.svg" alt="vk">
              </div>
              <p>Telegram</p>
            </a>
            <a href="<?php the_field('ok', 'options'); ?>" target="blank">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/ok.svg" alt="vk">
              </div>
              <p>ОК</p>
            </a>
          </div>
        </div>
        <div class="footer-wrap-item">
          <div class="title">
            Правовая информация
          </div>
          <ul>
            <li><a href="<?php the_permalink(3) ?>">Политика конфиденциальности</a></li>
            <li><a href="<?php the_permalink(161) ?>">Обработка персональных данных</a></li>
            <li><a href="<?php the_permalink(163) ?>">Авторское право</a></li>
            <li><a href="<?php the_permalink(165) ?>">Договор оферты</a></li>
          </ul>
        </div>
        <div class="footer-wrap-item">
          <div class="title">
            Контакты
          </div>
          <ul>
            <li><div class="phone"><?php the_field('telefon', 'options'); ?></div></li>
            <li><a href="mailto:<?php the_field('pochta', 'options'); ?>"><?php the_field('pochta', 'options'); ?></a></li>
          </ul>
			<a class="subs title" href="<?php the_permalink(156); ?>">Подписка</a>
			<a class="subs title" href="<?php the_permalink(313); ?>">Пожертвование</a>
			<a class="subs title" href="<?php the_permalink(315); ?>">Анкета участника</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="overlay"></div>

<div class="popup popup-video">
  <div class="close">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22707 6.22703C6.51996 5.93414 6.99484 5.93414 7.28773 6.22703L12 10.9393L16.7124 6.22703C17.0052 5.93414 17.4801 5.93414 17.773 6.22703C18.0659 6.51992 18.0659 6.9948 17.773 7.28769L13.0607 12L17.773 16.7123C18.0659 17.0052 18.0659 17.4801 17.773 17.773C17.4801 18.0659 17.0052 18.0659 16.7124 17.773L12 13.0607L7.28773 17.773C6.99484 18.0659 6.51996 18.0659 6.22707 17.773C5.93418 17.4801 5.93418 17.0052 6.22707 16.7123L10.9394 12L6.22707 7.28769C5.93418 6.9948 5.93418 6.51992 6.22707 6.22703Z" fill="#363636"/>
    </svg>
  </div>
  <iframe width="860" height="515" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<div class="popup thx" id="thx">
  <div class="close"></div>
  <img src="<?php echo get_template_directory_uri(); ?>/img/offer.png" alt="thx">
  <b>Ваша заявка принята!</b>
</div>

<div class="popup thx" id="thx-pay">
  <div class="close"></div>
  <img src="<?php echo get_template_directory_uri(); ?>/img/offer.png" alt="thx">
  <b>Спасибо за пожертвование!</b>
</div>
<div class="popup thx" id="thx-sub">
  <div class="close"></div>
  <img src="<?php echo get_template_directory_uri(); ?>/img/offer.png" alt="thx">
  <b>Спасибо! Вы подписались на рассылку.</b>
</div>
<div class="popup thx" id="thx-vol">
  <div class="close"></div>
  <img src="<?php echo get_template_directory_uri(); ?>/img/offer.png" alt="thx">
  <b>Ваша анкета принята. <br>
Благодарим вас за желание стать волонтером!</b>
</div>


<?php wp_footer(); ?>



<div class="popup pay-popup">
  <div class="wrap">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22707 6.22703C6.51996 5.93414 6.99484 5.93414 7.28773 6.22703L12 10.9393L16.7124 6.22703C17.0052 5.93414 17.4801 5.93414 17.773 6.22703C18.0659 6.51992 18.0659 6.9948 17.773 7.28769L13.0607 12L17.773 16.7123C18.0659 17.0052 18.0659 17.4801 17.773 17.773C17.4801 18.0659 17.0052 18.0659 16.7124 17.773L12 13.0607L7.28773 17.773C6.99484 18.0659 6.51996 18.0659 6.22707 17.773C5.93418 17.4801 5.93418 17.0052 6.22707 16.7123L10.9394 12L6.22707 7.28769C5.93418 6.9948 5.93418 6.51992 6.22707 6.22703Z" fill="#363636"/>
      </svg>
    </div>
    <b>Благотворительный взнос, сбор средств на восстановление Храма</b>
    <div class="summ"><span>400,00</span> ₽</div>
    <div id="element"></div>
  </div>
</div>

<div class="popup pay-form rem-pay">
  <div class="wrap">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22707 6.22703C6.51996 5.93414 6.99484 5.93414 7.28773 6.22703L12 10.9393L16.7124 6.22703C17.0052 5.93414 17.4801 5.93414 17.773 6.22703C18.0659 6.51992 18.0659 6.9948 17.773 7.28769L13.0607 12L17.773 16.7123C18.0659 17.0052 18.0659 17.4801 17.773 17.773C17.4801 18.0659 17.0052 18.0659 16.7124 17.773L12 13.0607L7.28773 17.773C6.99484 18.0659 6.51996 18.0659 6.22707 17.773C5.93418 17.4801 5.93418 17.0052 6.22707 16.7123L10.9394 12L6.22707 7.28769C5.93418 6.9948 5.93418 6.51992 6.22707 6.22703Z" fill="#363636"/>
      </svg>
    </div>
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
    <b>Данные</b>
    <div class="input-wrapper input">
      <input autocomplete="on" class="pay-name" type="text" name="name" placeholder="Имя и фамилия">
      <input autocomplete="on" class="pay-email" name="email" type="email" placeholder="E-mail">
      <input autocomplete="on" name="phone" class="pay-phone" type="tel" placeholder="Телефон">
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




<div class="hidden-form-pay" style="display: none">
	<?php echo do_shortcode('[contact-form-7 id="7d56bfe" title="Пожертвование"]'); ?>
</div>
<script>
 
	
</script>

</body>
</html>
