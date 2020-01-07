$(function(){

  $(document).ready(function() {

    setTimeout(function() {
       $('body').removeClass('overflow-hidden');
       $('.box-loading').removeClass('loader');
       $('.box-loading img').addClass('d-none');
   }, 800);


  //  Funcion Scroll Promo
   $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 500) {

        if (sessionStorage.getItem('wasVisited') !== "yes") {
            $('.promo').css({
              'display': 'block'
            });
            $('.promo').addClass('fadeInUp');
        } else {
        }

      } else {
      }
    });

    $('.button-promo-no-gracias').click(function(){
      sessionStorage.setItem("wasVisited", "yes");
      $('.promo').removeClass('fadeInUp');
      $('.promo').addClass('fadeOutDown');
      setTimeout(function(){
        $('.promo').css({
          'display': 'none'
        });
      }, 300);
    });
  
    $('.button-promo').click(function(){
      sessionStorage.setItem("wasVisited", "yes");
      $('.promo').removeClass('fadeInUp');
      $('.promo').addClass('fadeOutDown');
      setTimeout(function(){
        $('.promo').css({
          'display': 'none'
        });
      }, 1000);
    });



    // Funcion Scroll Header
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('.main-header').outerHeight();

    $(window).scroll(function(event){
      didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        
        if (st > 500) {
          if(Math.abs(lastScrollTop - st) <= delta)
              return;
            
            if (st > lastScrollTop && st > navbarHeight){
              $('header.main-header').removeClass('fadeInDown inDown');
              $('.darkHeader').addClass('outUp');
            } else {
              $('header.main-header').addClass('darkHeader');
              $('.darkHeader').addClass('inDown');
              $('.darkHeader').removeClass('outUp');
              if(st + $(window).height() < $(document).height()) {
              }
          }

        } else {
          $('header.main-header').removeClass('darkHeader outUp inDown');
        }
        
        lastScrollTop = st;
    }

});



  // :::: Validaciones Correo ::::
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  var correo = $(".input-mail").val();

  $('.input-nombre').focusout(function(){
    if($('.input-nombre').val() == "") {
      $('.alert-nombre').css({
        'display': 'block'
      });
    } else if ($('.input-nombre').val() != "") {
      $('.alert-nombre').css({
        'display': 'none'
      });
    }
  });
  $('.input-email').focusout(function(){
    if($('.input-email').val() == "" || !testEmail.test($('.input-email').val())) {
      $('.alert-correo').css({
        'display': 'block'
      });
    } else if ($('.input-email').val() != "") {
      $('.alert-correo').css({
        'display': 'none'
      });
    }
  });
  $('.text-mensaje').focusout(function(){
    if($('.text-mensaje').val() == "") {
      $('.alert-mensaje').css({
        'display': 'block'
      });
    } else if ($('.text-mensaje').val() != "") {
      $('.alert-mensaje').css({
        'display': 'none'
      });
    }
  });

  // Validacion de Envio
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $("#enviarContacto").click(function(e) {
      var form_action = $('#formulario').attr('action');
      var nombre = $(".input-nombre").val();
      var correo = $(".input-email").val();
      var mensaje = $(".text-mensaje").val();
      var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

      if (nombre.length > 0 && correo.length > 0 && testEmail.test(correo) && mensaje.length > 0){

        $('.w-form-loading').css({ 'display': 'block' });

        $.post( form_action, { name: nombre, email: correo, mensaje: mensaje } )
          .done(function(data) {

            if (data['errors']) {
              $.each(data['errors'], function( index, value ){});
            } else {
              $('.w-form-loading').css({ 'display': 'none' });
              $('.w-form-done').css({
                'display': 'block'
              })
              .delay(4000).queue(function(){
                $('.w-form-done').css({
                  'display': 'none'
                }).dequeue();
              });
            }

          }
        ).fail(function(data){
          $('.w-form-loading').css({ 'display': 'none' });
          $('.w-form-fail').css({
            'display': 'block'
          })
          .delay(4000).queue(function(){
            $('.w-form-fail').css({
              'display': 'none'
            }).dequeue();
          });
        });

    } else {

    }
  });

});
