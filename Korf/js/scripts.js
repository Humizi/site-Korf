(function($){
  $(document).ready(function () {
    
    'use strict';

    const phone = document.getElementById('edit-submitted-phone');
    const phone2 = document.getElementById('edit-phone');

    if(phone || phone2){
      const im = new Inputmask("+9 999 999-99-99");
      im.mask(phone || phone2);
    };

    const swiperElement = document.querySelector('.swiper-container');

    if(swiperElement){
      const swiper = new Swiper('.swiper-container', {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    };

    const scrollBar = document.querySelector('#inner-content-div');

    if(scrollBar){
      $('#inner-content-div').slimScroll({
        height: '415px'
      });
    };

  });
})(jQuery);