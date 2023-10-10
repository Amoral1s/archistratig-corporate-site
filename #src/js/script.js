jQuery(document).ready(function ($) {

	$('.burger').on('click', function() {
    $('.menu-wrap').slideDown(300);
  });
	$('.menu-wrap .close').on('click', function() {
    $('.menu-wrap').slideUp(300);
  });

  $('.close').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('.popup.popup-video iframe').attr('src', '');
	});
  $('.video-toggle').on('click', function () { 
		$('.popup.popup-video').fadeIn(300);
		$('.popup.popup-video iframe').attr('src', $(this).attr('data-src'));
		$('.overlay').fadeIn(300);
	});
  $('.donate').on('click', function () { 
		$('.popup.pay-form').fadeIn(300);
		$('.overlay').fadeIn(300);
	});
  $('.overlay').on('click', function() {
		$('.popup').fadeOut(300);
		$(this).fadeOut(300);
		$('.popup').removeClass('popup-thx');
		$('.popup.popup-video iframe').attr('src', '');
	});
	
  //cf7
  jQuery(".wpcf7").on('wpcf7mailsent', function(event){
    //alert('GOOD');
    jQuery('#thx').fadeIn(200);
		$('.popup').addClass('popup-thx');
		$('#thx').removeClass('popup-thx');
    //Скрытие поп окна автоматически, через 5,5 секнд
    jQuery('.overlay').fadeIn(300);

    setTimeout(function(){
      jQuery('.overlay').fadeOut(300);
      jQuery('.popup').fadeOut(300);
      jQuery('#thx').fadeOut(200);
    },2500);   //3500 = 3,5 секунды
    
    /* setTimeout(function(){jQuery('.popup').fadeOut(300);},2700); 
    setTimeout(function(){jQuery('#calc').fadeOut(300);},2700);  */
    
    /* setTimeout(function(){jQuery('.overlay').fadeOut(300);},2700); */
  });

  jQuery(".wpcf7").on('wpcf7invalid', function(event){
    alert('Заполните все поля в форме правильно и повторите попытку!');
  });
  jQuery(".wpcf7").on('wpcf7mailfailed', function(event){
    alert('Ошибка при отправке! Попробуйте отправить заявку еще раз!');
  });

  if (window.screen.width < 768) {
    const projectSlider = document.querySelector('.project-slider');

    if (projectSlider) {
      new Swiper(".project-slider", {
        pagination: {
          el: '.project-pagination',
        },
        breakpoints: {
          300: {
            slidesPerView: 1,
            spaceBetween: 10,
          }
        },
      });
    }

    const newsSlider = document.querySelector('.news-slider');

    if (newsSlider) { 
      new Swiper(".news-slider", {
        pagination: {
          el: '.news-pagination',
        },
        breakpoints: {
          300: {
            slidesPerView: 1,
            spaceBetween: 10,
          }
        },
      });
    }
  }

    jQuery('input[name=y-photo-1]').on('change', function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                jQuery('#d1').html('<img src="'+e.target.result+'">');
            }
            console.log(this.files[0]);
            reader.readAsDataURL(this.files[0]);
        }
    });
    jQuery('input[name=y-photo-2]').on('change', function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                jQuery('#d2').html('<img src="'+e.target.result+'">');
            }
            console.log(this.files[0]);
            reader.readAsDataURL(this.files[0]);
        }
    });
    jQuery('input[name=y-photo-3]').on('change', function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                jQuery('#d3').html('<img src="'+e.target.result+'">');
            }
            console.log(this.files[0]);
            reader.readAsDataURL(this.files[0]);
        }
    });
    jQuery('input[name=y-photo-4]').on('change', function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                jQuery('#d4').html('<img src="'+e.target.result+'">');
            }
            console.log(this.files[0]);
            reader.readAsDataURL(this.files[0]);
        }
    });
    jQuery('input[name=y-photo-5]').on('change', function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                jQuery('#d5').html('<img src="'+e.target.result+'">');
            }
            console.log(this.files[0]);
            reader.readAsDataURL(this.files[0]);
        }
    });
    jQuery('input[name=y-photo-6]').on('change', function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                jQuery('#d6').html('<img src="'+e.target.result+'">');
            }
            console.log(this.files[0]);
            reader.readAsDataURL(this.files[0]);
        }
    });

  $('.form-photo-item span').on('click', function() {
    $(this).next().trigger('click');
  });


  //summ line

  const lineWrap = document.querySelector('.line-wrap .top');

  if (lineWrap) {
    const lineHTML = document.querySelector('.line-inline'),
          summAllHTML = document.querySelector('.all-summ'),
          summCurrentHTML = document.querySelector('.now-summ'),
          summNeedHTML = document.querySelector('.need-summ');

    let currSummVal = +summCurrentHTML.textContent.trim();
    let allSummVal = +summAllHTML.textContent.trim();

    let ostSumm = Math.round(allSummVal - currSummVal);
    summNeedHTML.textContent = ostSumm.toLocaleString('ru');

    let linePercent = Math.round(currSummVal / allSummVal * 100);
    lineHTML.style.width = linePercent + '%';
  }

  const gallerySlider = document.querySelector('.work-wrap-slider');

    if (gallerySlider) {
      new Swiper(".work-wrap-slider", {
        navigation: {
          nextEl: '.arr-next',
          prevEl: '.arr-prev',
        },
        breakpoints: {
          300: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          992: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          1420: {
            slidesPerView: 3,
            spaceBetween: 30,
          }
        },
      });
    }

  $('.work-slider').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
      enabled: true
    }
  });

  const workNavLinks = document.querySelectorAll('.work-nav-link');
  const workWrapItems = document.querySelectorAll('.work-wrap-item');

  if (workNavLinks.length > 0) {
    workNavLinks.forEach((e, i) => {
      e.addEventListener('click', () => {
        workNavLinks.forEach(e => e.classList.remove('active'));
        workWrapItems.forEach(e => e.classList.remove('active'));

        e.classList.add('active');
        workWrapItems[i].classList.add('active');


      });

      
    })
  }

  const moarBtn = document.querySelector('.page-projects-moar .button');

  if (moarBtn) {
    moarBtn.addEventListener('click', () => {
      const pageProjectsWrap = document.querySelector('.page-projects-wrap');
      pageProjectsWrap.classList.add('active');
      moarBtn.remove();
    })
  }

  //pay



  



}); //end