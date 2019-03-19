  @extends('layouts.app')
  @section('page-title')
    <title>Contacto - Pura Sangre CrossFit</title>
    <meta content="contacto meta" name="description">
    <meta content="Contacto - Pura Sangre CrossFit" property="og:title">
    <meta content="contacto meta" property="og:description">
    <meta content="summary" name="twitter:card">
  @endsection

  @section('content')

    <div class="heading-page heading-contacto">
      <div class="heading-page-inner">
        <h2 class="heading-title">Contacto</h2>
        <div class="heading-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, mi nec efficitur vulputate, augue leo molestie urna, quis aliquet leo magna eu nulla. Cras suscipit a quam quis mollis.</div>
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
            <div class="form-data-text">Cras suscipit a quam quis mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada.</div>
            <div class="form-data-text">
              <strong>Pura Sangre CrossFit</strong><br>
              <a href="https://goo.gl/maps/6fcspf8UE7P2" class="link-5">Camino a Zapallar con ruta 5 sur</a><br>
              <a href="tel:+56940207699" class="link-5">+569 402 07 699</a><br>
              <a href="mailto:contacto@purasangrecrossfit.cl?subject=Mensaje%20desde%20purasangrecrossfit.cl" class="link-4">contacto@purasangrecrossfit.cl</a>
            </div>
            <div class="form-data-text">
              <strong>Horarios<br>
              </strong>Lun a Vier de 07:00 a 22:00 hrs<br>Sábados de 10:00 a 14:00 hrs
            </div>
            <div class="form-data-text">
              <a href="https://facebook.com/purasangrecrossfit" target="_blank" class="link-00"><img src="images/face_icon_gray.svg"></a>
              <a href="https://instagram.com/purasangrecf" target="_blank"><img src="images/insta_icon_gray.svg"></a>
            </div>
          </div>
          <div class="the-form">
            <div class="w-form">
              <form name="wf-form-Formulario-de-Contacto" data-name="Formulario de Contacto" method="post"><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Nombre" id="name" required=""><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="Correo" id="email" required=""><textarea id="mensaje" name="mensaje" placeholder="Mensaje" maxlength="5000" data-name="mensaje" required="" class="textarea w-input"></textarea><input type="submit" value="Enviar mensaje" data-wait="Enviando..." class="green-button w-button"></form>
              <div class="w-form-done">
                <div>Gracias! Tu mensaje ha sido enviado exitosamente</div>
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
