@extends('layouts.app')
@section('page-title')
<title>Contacto - Pura Sangre CrossFit</title>
<meta content="Instalaciones únicas a nivel nacional y un equipo siempre dispuesto y capacitado. Contacta con nosotros o visitanos en el box. Somos Pura Sangre CrossFit" name="description">
<meta content="Contacto - Pura Sangre CrossFit" property="og:title">
<meta content="Instalaciones únicas a nivel nacional y un equipo siempre dispuesto y capacitado. Contacta con nosotros o visitanos en el box. Somos Pura Sangre CrossFit" property="og:description">
<meta content="summary" name="twitter:card">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

  <div class="heading-page heading-contacto">
    <div class="heading-page-inner">
      <h2 class="heading-title">Contacto</h2>
      <div class="heading-desc">Aquí encontrarás nuestra información y medios de contacto.</div>
    </div>
  </div>
  <div class="air-grid">
    <div class="title-section-wrapper first-title">
      <div class="title-section-wrapper-inner">
        <h1 class="heading title-section clipped">VEN A <br>CONOCERNOS</h1>
      </div>
    </div>
    <div class="form-content">
      <div class="form-content-inner">
        <div class="form-data">
          <div class="form-data-text">En Pura Sangre CrossFit nos interesa saber de ti. ¿Tienes alguna duda o consulta? Escríbenos y te responderemos a la brevedad.</div>
          <div class="form-data-text">
            <strong>Pura Sangre CrossFit</strong><br>
            <a href="https://goo.gl/maps/6fcspf8UE7P2" class="link-5">Camino a Zapallar con ruta 5 sur</a><br>
            <a href="tel:+56940207699" class="link-5">+569 402 07 699</a><br>
            <a href="mailto:contacto@purasangrecrossfit.cl?subject=Mensaje%20desde%20purasangrecrossfit.cl" class="link-4">contacto@purasangrecrossfit.cl</a>
          </div>
          <div class="form-data-text">
            <strong>Horarios</strong><br>
            Lun a Vier de 07:00 a 14:15 hrs - 16:00 a 22:00 hrs<br>
            Sábados de 08:30 a 13:00 hrs
            {{-- <br>
            Domingos de 09:00 a 13:00 hrs --}}
          </div>
          <div class="form-data-text">
            <a href="https://facebook.com/purasangrecrossfit" target="_blank" class="link-00">
              {{-- <img class="icon-rrss-gray" src="images/face_icon_gray.svg"> --}}
              <svg class="icon-rrss-gray" width="26" height="26" viewBox="0 0 26 26" fill="auto" xmlns="http://www.w3.org/2000/svg">
                <path d="M26 4.33353C26 2.05666 23.9443 0 21.6667 0H4.33329C2.05571 0 0 2.05666 0 4.33353V21.6662C0 23.9433 2.05571 26 4.33353 26H12.9999V16.1777H9.82229V11.8444H12.9999V10.1563C12.9999 7.24455 15.1864 4.62234 17.8751 4.62234H21.3777V8.95563H17.8751C17.4917 8.95563 17.0444 9.42089 17.0444 10.118V11.8444H21.3777V16.1777H17.0444V26H21.6667C23.9443 26 26 23.9433 26 21.6662V4.33353V4.33353Z" />
              </svg>

            </a>
            <a href="https://instagram.com/purasangrecf" target="_blank">
              {{-- <img class="icon-rrss-gray" src="images/insta_icon_gray.svg"> --}}
              <svg class="icon-rrss-gray" width="26" height="26" viewBox="0 0 26 26" fill="auto" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.877 0H8.12577C3.63875 0 0 3.63875 0 8.12577V17.877C0 22.3641 3.63875 26.0028 8.12577 26.0028H17.877C22.3641 26.0028 26.0028 22.3641 26.0028 17.877V8.12577C26.0028 3.63875 22.3641 0 17.877 0V0ZM23.5652 17.877C23.5652 21.0135 21.0135 23.5652 17.877 23.5652H8.12577C4.98933 23.5652 2.43764 21.0135 2.43764 17.877V8.12577C2.43764 4.98933 4.98933 2.43764 8.12577 2.43764H17.877C21.0135 2.43764 23.5652 4.98933 23.5652 8.12577V17.877Z"/>
                <path d="M13.0015 6.49976C9.41146 6.49976 6.50098 9.41024 6.50098 13.0003C6.50098 16.5903 9.41146 19.501 13.0015 19.501C16.5915 19.501 19.5023 16.5903 19.5023 13.0003C19.5023 9.41024 16.5915 6.49976 13.0015 6.49976V6.49976ZM13.0015 17.0634C10.762 17.0634 8.93861 15.24 8.93861 13.0003C8.93861 10.7591 10.762 8.93739 13.0015 8.93739C15.2412 8.93739 17.0646 10.7591 17.0646 13.0003C17.0646 15.24 15.2412 17.0634 13.0015 17.0634V17.0634Z"/>
                <path d="M19.9903 6.88451C20.4688 6.88451 20.8567 6.49664 20.8567 6.01818C20.8567 5.53972 20.4688 5.15186 19.9903 5.15186C19.5119 5.15186 19.124 5.53972 19.124 6.01818C19.124 6.49664 19.5119 6.88451 19.9903 6.88451Z"/>
              </svg>

            </a>
          </div>
        </div>
        <div class="the-form">
          <div class="w-form">
            <form id="formulario" action="{{ route('ruta') }}">
              {{-- @csrf --}}
              <input type="text" class="text-field w-input input-nombre" maxlength="256" name="name" placeholder="Nombre" id="name" required="">
              <span class="form-alert alert-nombre">Necesitamos saber tu nombre</span>
              <input type="email" class="text-field-2 w-input input-email" maxlength="256" name="email" placeholder="Correo" id="email" required="">
              <span class="form-alert alert-correo">Necesitamos un correo válido para contactarte de vuelta</span>
              <textarea id="mensaje" name="mensaje" placeholder="Mensaje" maxlength="5000" required="" class="textarea w-input text-mensaje"></textarea>
              <span class="form-alert alert-mensaje">Por favor, indícanos el motivo de tu mensaje</span>
              {{-- <input type="button" value="Enviar mensaje" data-wait="Enviando..." class="green-button w-button" id="enviarContacto"> --}}
              <button type="button" id="enviarContacto" class="green-button w-button back-no-tan-big">  Enviar  </button>
            </form>
            <div class="w-form-loading">
              <div>Enviando Mensaje...</div>
            </div>
            <div class="w-form-done">
              <div>Gracias! Te responderemos a la brevedad</div>
            </div>
            <div class="error-message w-form-fail">
              <div>Ha ocurrido un error al enviar el mensaje. Por favor contáctanos a contacto@purasangrecrossfit.cl</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="html-embed map w-embed w-iframe">
    <div class="mapouter">
      <div class="gmap_canvas" style="height: 500px;">
        <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=pura%20sangre%20crossfit&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
  </div>

@endsection
