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

<div class="popup" id="thx">
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

<div class="popup pay-form">
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
<style>
	.pay-form small label a{
		font-size: 20px;
		color: #c2c2c2;
	}
	.pay-form small label:hover {
		color: #c2c2c2
	}
	.phone.contacts-wrap-item div {
		font-size: 40px;
    font-weight: 400;
    color: #1f3040;
		display: block;
		margin: auto;
		text-align: center;
	}
	@media (max-width: 992px) {
		.contacts .adress {
			position: relative;
		}
		.contacts .adress .icon {
			position: absolute;
			left: -40px;
			top: 0px;
		}
		.contacts .adress p {
			text-align: center;
		}
	}
	@media (max-width: 767px) {
		.phone.contacts-wrap-item div {
			font-size: 22px;
		}
		.contacts .adress .icon {
    position: absolute;
    left: -10px;
    top: -5px;
}
		.contacts .adress .icon svg {
			height: 24px;
			width: 24px;
		}
	}
	@media (max-width: 578px) {
		.contacts .adress .icon {
    position: absolute;
    left: -7px;
    top: -0px;
}
		.contacts .adress .icon svg {
			height: 24px;
			width: 24px;
		}
		.contacts .adress p {
			padding-left: 10px;
		}
	}
	@media (max-width: 1420px) {
		
		.footer-wrap .req {
			max-width: 310px;
		}
		 .pay-form {
			 height: 670px;
    width: 100%;
		width: 970px;
    max-width: calc(100vw - 30px);
    max-height: calc(100vh - 30px);
  }

  .pay-form .wrap {
    position: relative;
  }

  .pay-form .close {
    top: 28px;
    right: 20px;
  }

  .pay-form .go-pay {
    margin-bottom: 20px;
    height: 60px;
    font-size: 20px;
  }

  .pay-form small label {
    font-size: 16px;
    padding-left: 30px;
  }

  .pay-form small label:after {
    height: 20px;
    width: 20px;
  }

  .pay-form .input-wrapper {
    margin-bottom: 30px;
  }

  .pay-form .input input {
    height: 45px;
    font-size: 18px;
  }

  .pay-form .input input:placeholder {
    font-size: 18px;
  }

  .pay-form .row {
    margin-bottom: 20px;
  }

  .pay-form .item {
    width: calc(25% - 10px);
    font-size: 16px;
    height: 40px;
	  margin-right: 10px;
  }

  .pay-form .pay-form-toggle {
    margin-bottom: 20px;
  }

  .pay-form .pay-form-toggle .button {
    font-size: 18px;
    height: 40px;
  }

  .pay-form b {
    font-size: 24px;
    margin-bottom: 20px;
  }
		
	}
	@media (min-width: 992px) and (max-width: 1420px) {
		.footer-wrap-right {
			width: calc(100% - 450px);
		}
	}
	@media (max-width: 992px) {
		.pay-form small label a{
		font-size: 16px;
		
	}
		.offer::after {
			width: 300px;
			height: 700px;
		}
	}
	.pay-form .row {
		justify-content: flex-start;
		
	}
	.pay-form .item {
		width: calc(25% - 20px);
		margin-right: 20px;
		margin-bottom: 20px;
	}
	@media (max-width: 767px) {
		.pay-form .item {
			width: calc(50% - 10px);
			margin-bottom: 10px;
			margin-right: 10px;
		}
	}
	@media (max-width: 578px) {
		.footer-wrap-item .subs {
			display: block!important;
			font-size: 22px;
			font-weight: 500;
			margin-top: 40px;
		}
		.pay-form {
			height: calc(100vh - 30px);
		}
		.footer-wrap-item.soc {
			order: 2;
		}
		.footer-wrap-item .title {
			
			font-size: 22px;
		}
		.footer-wrap-item.min .title {
			min-height: 53px;
		}
		.footer-wrap-right .footer-wrap-item {
			width: 50%;
		}
		.footer-wrap-right .phone {
			display: block;
			margin-bottom: 10px;
			
		}
		.footer-wrap-item ul li a {
			margin-bottom: 10px;
			font-size: 12px;
		}
	}
</style>
<div id="accelerator-delete"></div>
<script>
  const del = document.getElementById('accelerator-delete');
	if (del.nextElementSibling.href != '') {
		del.nextElementSibling.remove();
	}
</script>
<div class="hidden-form-pay" style="display: none">
	<?php echo do_shortcode('[contact-form-7 id="7d56bfe" title="Пожертвование"]'); ?>
</div>
<script>
	
		
		/*window.addEventListener('resize', function(event){location.reload();}*/
</script>

</body>
</html>
