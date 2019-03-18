$(function(){

  $(document).ready(function() {

    setTimeout(function() {
       $('body').removeClass('overflow-hidden');
       $('.box-loading').removeClass('loader');
       $('.box-loading img').addClass('d-none');
   }, 800);

    // $('body').removeClass('load');

    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 500) {
        $('header.main-header').addClass('darkHeader fadeInDown');
      } else {
        $('header.main-header').removeClass('darkHeader fadeInDown');
      }
    });

  });

});
