@extends('layouts.app')
@section('page-title')
  <title>Pura Sangre CrossFit</title>
@endsection

@section('content')

  <div data-delay="4000" data-animation="slide" data-autoplay="1" data-easing="ease-in-out" data-nav-spacing="7" data-duration="500" data-infinite="1" class="slider-2 main-slider w-slider">
    <div class="mask w-slider-mask">
      {{-- Estas son las diapos --}}
      <a href="{{url('/planes')}}" class="slide-1 w-slide"></a>
      <a href="{{url('/prueba')}}" class="slide-2 w-slide"></a>
      <a href="{{url('/app')}}" class="slide-3 w-slide" target="_blank"></a>
    </div>
    <div class="w-slider-arrow-left">
      <div class="icon-2 w-icon-slider-left"></div>
    </div>
    <div class="w-slider-arrow-right">
      <div class="icon w-icon-slider-right"></div>
    </div>
    <div class="slide-nav w-slider-nav w-round"></div>
  </div>

  <div class="banner-promo bg-light-image">
    <div class="banner-promo-inner">
      <h2 class="heading-2 cta-title clipped">3 Clases de Prueba<br>GRATIS</h2>

      <div class="text-block-2 only-cta-title">Si quieres transformar tu vida, Pura Sangre CrossFit es para tí, No importa en que condición fisica te encuentres, unete ahora  y no te daras cuenta como los resultados llegan por si solos.</div>
      <div class="cta-buttons">
        <a href="{{url('/prueba')}}" class="green-button mg-button w-button">Conoce como funciona</a>
        <a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20las%20clases%20gratis" id="boton-whatsapp-cta" target="_blank" class="green-button mg-button w-button"><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Solicitar via Whatsapp</a>
      </div>
    </div>
  </div>

  <div class="cta-big cta-crossfit">
    <div class="cta-big-inner">
      <h1 class="title-big-cta">¿Qué es el <br>CrossFit?</h1>
      <div class="text-block-3">CrossFit es un programa de acondicionamiento físico basado en movimientos funcionales constantemente variados y ejecutados a alta intensidad, es escalable para cualquier persona, nivel y estado de fisico.</div><a href="{{url('/crossfit')}}" class="green-button w-button">Conoce más</a></div>
  </div>

  <section class="planes">
    <div class="cards-inner">
      <div class="planes-heading">
        <h1 class="heading title-section clipped mg-bottom">PLANES A TU MEDIDA</h1>
        <div class="text-block disclaimer-heading">Ya no existen las excusas. <br>Tenemos planes que se adaptan a tu tiempo y a tu bolsillo.</div>
      </div>
      <div class="cards">
        <div id="w-node-0703020e6b19-b4aeb525" class="card-promo card-promo-bg1">
          <div id="w-node-964fde077025-b4aeb525" class="card-promo-heading">
            <div class="title-promo">
              <h1 class="title-card-promo clipped special-title-card">Plan Full Fit</h1>
              <h5 class="title-card-type-promo">Mensual</h5>
            </div>
            <div class="featured-promo">
              <div class="text-block-10">Mejor<br>Opción</div><img src="images/best.svg" alt="" class="image-9"></div>
          </div>
          <div id="w-node-f8768fa7bdd7-b4aeb525" class="content-promo">
            <div class="horario-promo">
              <div class="content-hd-promo">Lunes a Viernes</div>
              <h4 class="content-content-promo">Horario Liberado</h4>
            </div>
            <div class="valor">
              <div class="content-hd-promo">Valor</div>
              <h4 class="content-content-promo">$45.000</h4>
              <div class="content-span-promo">/ mes</div>
            </div>
          </div><a id="w-node-b9cf1bd2056a-b4aeb525" href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20el%20plan%20Full%20Fit" id="boton-whatsapp-plan-full" target="_blank" class="plan-page-cta-button special-button w-button"><img class="img-whatsapp" src="../images/whatspp_icon_gold.svg">Contratar via WhatsApp</a><a id="w-node-cf61a32bec36-b4aeb525" href="{{url('/planes')}}" class="plan-page-cta-button special-button w-button">Más info</a></div>
        <div id="w-node-92fdd296f840-b4aeb525" class="card-promo card-promo-bg-2">
          <div id="w-node-92fdd296f841-b4aeb525" class="card-promo-heading">
            <div class="title-promo">
              <h1 class="title-card-promo clipped">Plan 12 Sesiones</h1>
              <h5 class="title-card-type-promo">Mensual</h5>
            </div>
          </div>
          <div id="w-node-92fdd296f84a-b4aeb525" class="content-promo">
            <div class="horario-promo">
              <div class="content-hd-promo">Lunes a Viernes</div>
              <h4 class="content-content-promo">12 Clases / mes</h4>
            </div>
            <div class="valor">
              <div class="content-hd-promo">Valor</div>
              <h4 class="content-content-promo">$40.000</h4>
              <div class="content-span-promo">/ mes</div>
            </div>
          </div><a id="w-node-3e5d63bb545e-b4aeb525" href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20el%20plan%2012%20Sesiones" id="boton-whatsapp-plan-12" target="_blank" class="plan-page-cta-button w-button"><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Contratar via WhatsApp</a><a id="w-node-81adf3ba3d49-b4aeb525" href="{{url('/planes')}}" class="plan-page-cta-button w-button">Más Info</a></div>
        <div id="w-node-2b1b2970c38a-b4aeb525" class="card-promo card-promo-bg-3">
          <div id="w-node-2b1b2970c38b-b4aeb525" class="card-promo-heading">
            <div class="title-promo">
              <h1 class="title-card-promo clipped">Plan Full AM</h1>
              <h5 class="title-card-type-promo">Mensual</h5>
            </div>
          </div>
          <div id="w-node-2b1b2970c394-b4aeb525" class="content-promo">
            <div class="horario-promo">
              <div class="content-hd-promo">Lunes a Viernes</div>
              <h4 class="content-content-promo">09:00 - 12:00 hrs</h4>
            </div>
            <div class="valor">
              <div class="content-hd-promo">Valor</div>
              <h4 class="content-content-promo">$30.000</h4>
              <div class="content-span-promo">/ mes</div>
            </div>
          </div><a id="w-node-c15c2a838732-b4aeb525" href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20el%20plan%20Full%20AM" id="boton-whatsapp-plan-am" target="_blank" class="plan-page-cta-button w-button"><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Contratar via WhatsApp</a><a id="w-node-c9522a9962a4-b4aeb525" href="{{url('/planes')}}" class="plan-page-cta-button w-button">Más Info</a></div>
        <div id="w-node-1c4644ce1979-b4aeb525" class="card-promo card-promo-bg-4">
          <div id="w-node-1c4644ce197a-b4aeb525" class="card-promo-heading">
            <div class="title-promo">
              <h1 class="title-card-promo clipped">Plan Estudiantes</h1>
              <h5 class="title-card-type-promo">Mensual</h5>
            </div>
          </div>
          <div id="w-node-1c4644ce1983-b4aeb525" class="content-promo">
            <div class="horario-promo">
              <div class="content-hd-promo">Lunes a Viernes</div>
              <h4 class="content-content-promo">07:00 - 12:00 hrs<br>17:00 - 18:00 hrs</h4>
            </div>
            <div class="valor">
              <div class="content-hd-promo">Valor</div>
              <h4 class="content-content-promo">$25.000</h4>
              <div class="content-span-promo">/ mes</div>
            </div>
          </div><a id="w-node-48caaf867645-b4aeb525" href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20el%20plan%20Estudiantes" id="boton-whatsapp-plan-estudiantes" target="_blank" class="plan-page-cta-button w-button"><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Contratar via WhatsApp</a><a id="w-node-eb463b4ab61d-b4aeb525" href="{{url('/planes')}}" class="plan-page-cta-button w-button">Más Info</a></div>
      </div>
      <div class="div-block cta-planes-home"><a href="{{url('/planes')}}" class="button green-button w-button">Más info sobre planes</a></div>
    </div>
  </section>

  <div class="air-grid">
    <div class="item-wrapper">
      <div id="w-node-53a399b43162-b4aeb525" class="img air-img-app"></div>
      <div id="w-node-53a399b43163-b4aeb525" class="data">
        <h1 class="heading title-section clipped">NUESTRA <br>APP</h1>
        <div class="text-block-5">
          Con nuestra app puedes organizar tus tiempos y mantener la constancia de tu entrenamiento para lograr tus objetivos.
          Con ella podrás:
        </div>
        <div class="checklist checklist-app">
          <div class="checklist-item-wrapper"><img src="images/check-icon-inv.svg" alt="" class="check-icon">
            <div class="checklist-item">Reservar clases y conocer tu asistencia</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon-inv.svg" alt="" class="check-icon">
            <div class="checklist-item">Ver el workout del día y quienes asistirán</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon-inv.svg" id="w-node-5d72265f089b-4eaaa2ee" alt="" class="check-icon">
            <div id="w-node-5d72265f089c-4eaaa2ee" class="checklist-item">Revisar historial de pagos e información de tu plan</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon-inv.svg" id="w-node-5d72265f089f-4eaaa2ee" alt="" class="check-icon">
            <div id="w-node-5d72265f08a0-4eaaa2ee" class="checklist-item">Registrar tus tiempos, pesos y notas de cada clase</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon-inv.svg" id="w-node-d363095ca7aa-4eaaa2ee" alt="" class="check-icon">
            <div id="w-node-d363095ca7ab-4eaaa2ee" class="checklist-item">Recibir notificaciones de reservas y noticias del box</div>
          </div>
        </div>
        <a href="https://play.google.com/store/apps/details?id=purasangrecrossfit.app.com&amp;hl=es" class="w-inline-block" id="boton-app-android">
          <img src="images/google-play-badge-2.png" alt="" class="image-7 app-icon">
        </a>
        <a href="https://itunes.apple.com/us/app/pura-sangre-crossfit/id1447657358" class="w-inline-block" id="boton-app-ios">
          <img src="images/d_app.png" alt="" class="mg-button-2 app-icon">
        </a>
      </div>
    </div>
    <div class="item-wrapper-inv mg-3">
      <div class="data-inv">
        <h1 class="heading title-section clipped special-margin">NUTRICIONISTA <br>QUE POTENCIA <br>TUS OBJETIVOS</h1>
        <div id="w-node-250d504b0523-cf5d8cad" class="data-inv-inner">
          <div class="text-block-5">Con nuestra asesoría nutricional llevamos tu entrenamiento al siguiente nivel. Medimos, evaluamos y planificamos según tu estado nutricional. <br>Te ayudamos a comprender cómo funciona tu metabolismo para que puedas tomar control de tu alimentación y lograr tus objetivos a corto plazo. </div>
          <a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20reservar%20una%20hora%20con%20la%20Nutricionista" class="green-button w-button"><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Reserva una hora via WhatsApp</a>
        </div>
      </div>
      <div id="w-node-250d504b0522-cf5d8cad" class="img-inv img-nutricionista"></div>
    </div>
  </div>

  <div class="banner-promo bg-section">
    <div class="banner-promo-inner">
      <h1 class="heading-2 white-cta-title">Entrena con Nosotros</h1>
      <div class="text-block-2">En nuestras clases de prueba, podras experimentar un entrenamiento distinto, funcional y entretenido.</div>
      <div class="cta-buttons"><a href="{{url('/prueba')}}" class="green-button w-button">Conoce más Detalles</a></div>
    </div>
  </div>

@endsection
