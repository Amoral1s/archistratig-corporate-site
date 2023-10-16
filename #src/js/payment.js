document.addEventListener('DOMContentLoaded', () => {

  const anonPage = document.querySelector('.anon-form');

  if (anonPage) {
    const popForm = document.querySelector('.rem-pay');
    const btns = document.querySelectorAll('.button.donate');
    btns.forEach(e => e.classList.add('disabled'));
    popForm.remove();
  }

  const summVals = document.querySelectorAll('.pay-form .item');
  const summValsValue = document.querySelectorAll('.pay-form .item span');
  const summInput = document.querySelector('.summ-input');
  const payFormToggles = document.querySelectorAll('.pay-form-toggle .button');

  const nameInput = document.querySelector('.pay-name');
  const emailInput = document.querySelector('.pay-email');
  const phoneInput = document.querySelector('.pay-phone');

  let setToggles = 1;

  payFormToggles.forEach((e, i) => {
    e.addEventListener('click', () => {
      payFormToggles.forEach(e => e.classList.remove('active'));
      e.classList.add('active');

      if (i == 0) {
        setToggles = 1;
      }
      if (i == 1) {
        setToggles = 2;
      }
    });
  });

  summVals.forEach((e, i) => {
   e.addEventListener('click', () => {
    summVals.forEach(e => e.classList.remove('active'))
    e.classList.add('active');

    if (summVals.length == i + 1) {
      summInput.parentElement.style.display = 'block';
      summInput.value = '0';

    } else {
      summInput.parentElement.style.display = 'none';
      summInput.value = +summValsValue[i].textContent.trim();
    }
   })
  });

  const singlePayment = (amount, email, name, phone) => {
    var payments = new cp.CloudPayments();

    payments.oncomplete = (result) => {
        console.log('result', result);
    }

    payments.pay("charge", 
      { // options
        publicId: 'pk_2a9a662b86b90b4501d13446a3f5d',
        description: 'Благотворительный взнос, сбор средств на восстановление Храма',
        amount: amount,
        accountId: email,
        currency: 'RUB',
        payer: { 
          firstName: name,
          phone: phone
        }
      },
      {
          onSuccess: function (options) { // success
            jQuery('#thx-pay').fadeIn(200);
            $('.popup').addClass('popup-thx');
            $('#thx-pay').removeClass('popup-thx');
            //Скрытие поп окна автоматически, через 5,5 секнд
            jQuery('.overlay').fadeIn(300);
        
            setTimeout(function(){
              jQuery('.overlay').fadeOut(300);
              jQuery('.popup').fadeOut(300);
              jQuery('#thx-pay').fadeOut(200);
            },2500);   //3500 = 3,5 секунды
          },
          onFail: function (reason, options) { // fail
              alert('Ошибка! Платеж не прошел!')
          }
      }
      ).then((result) => {
        // Объект типа WidgetResult
        console.log('result', result);
    });
  }

  const subscribePayment = (amount, email, name, phone) => {
    var payments = new cp.CloudPayments(
      {
        yandexPaySupport: false,
        applePaySupport: false,
        googlePaySupport: false,
        masterPassSupport: false,
        tinkoffInstallmentSupport: false
      }
    );

    payments.oncomplete = (result) => {
        console.log('result', result);
    }

    var receipt = {
      Items: [//товарные позиции
           {
              label: 'Ежемесячное пожертвование', //наименование товара
              price: amount, //цена
              quantity: 1, //количество
              amount: amount, //сумма
              vat: 20, //ставка НДС
              method: 0, // тег-1214 признак способа расчета - признак способа расчета
              object: 0, // тег-1212 признак предмета расчета - признак предмета товара, работы, услуги, платежа, выплаты, иного предмета расчета
          }
      ],
      taxationSystem: 0, //система налогообложения; необязательный, если у вас одна система налогообложения
      email: email, //e-mail покупателя, если нужно отправить письмо с чеком
      phone: phone, //телефон покупателя в любом формате, если нужно отправить сообщение со ссылкой на чек
      isBso: false, //чек является бланком строгой отчетности
      amounts: {
          electronic: amount, // Сумма оплаты электронными деньгами
          advancePayment: 0.00, // Сумма из предоплаты (зачетом аванса) (2 знака после запятой)
          credit: 0.00, // Сумма постоплатой(в кредит) (2 знака после запятой)
          provision: 0.00 // Сумма оплаты встречным предоставлением (сертификаты, др. мат.ценности) (2 знака после запятой)
      }
};

    var data = { //содержимое элемента data
      CloudPayments: {
          CustomerReceipt: receipt, //чек для первого платежа
          recurrent: {
                      interval: 'Month',
                      period: 1,
                      customerReceipt: receipt //чек для регулярных платежей
          }
      }
    };

    payments.pay("charge", 
      { // options
        publicId: 'pk_2a9a662b86b90b4501d13446a3f5d',
        description: 'Ежемесячный благотворительный взнос, сбор средств на восстановление Храма',
        amount: amount,
        accountId: email,
        currency: 'RUB',
        payer: { 
          firstName: name,
          phone: phone
        },
        data: data
      },
      {
          onSuccess: function (options) { // success
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
          },
          onFail: function (reason, options) { // fail
              alert('Ошибка! Платеж не прошел!')
          }
      }
      ).then((result) => {
        // Объект типа WidgetResult
        console.log('result', result);
    });
  }

  const formSubmit = () => {
    let amount = +summInput.value,
        name = nameInput.value,
        email = emailInput.value,
        phone = phoneInput.value;


    if (amount == '' || name == '' || email == '' || phone == '' || amount === 0) {
      alert('Заполните все поля!');
      return
    }
    if (setToggles === 1) {
      singlePayment(amount, email, name, phone);
    }
    if (setToggles === 2) {
      subscribePayment(amount, email, name, phone);
    }
    
  }

  const submitBtn = document.querySelector('.go-pay');

  submitBtn.addEventListener('click', () => {
    
    formSubmit();
  });


})