$(function(){

  // var prom = true;
  // localStorage.setItem("promo", prom);
  // localStorage.getItem("promo");

  $(document).ready(function() {

    setTimeout(function() {
       $('body').removeClass('overflow-hidden');
       $('.box-loading').removeClass('loader');
       $('.box-loading img').addClass('d-none');
   }, 800);

    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 500) {
        $('header.main-header').addClass('darkHeader fadeInDown');

        if (localStorage.getItem('wasVisited') !== "yes") {
            //
            // localStorage.setItem('wasVisited', 1);
            $('.promo').css({
              'display': 'block'
            });
            $('.promo').addClass('fadeInUp');
        } else {
            //
        }
      } else {
        $('header.main-header').removeClass('darkHeader fadeInDown');
      }
    });

    $('.button-promo-no-gracias').click(function(){
      localStorage.setItem("wasVisited", "yes");
      $('.promo').removeClass('fadeInUp');
      $('.promo').addClass('fadeOutDown');
    });

  });

// Validaciones
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
