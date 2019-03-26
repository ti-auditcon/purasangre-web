@extends('layouts.app')
@section('page-title')
  <title>Conócenos - Pura Sangre CrossFit</title>
  <meta content="conocenos meta" name="description">
  <meta content="Conócenos - Pura Sangre CrossFit" property="og:title">
  <meta content="conocenos meta" property="og:description">
  <meta content="summary" name="twitter:card">
@endsection

@section('content')

  <div class="heading-page heading-conocenos">
        <div class="heading-page-inner">
          <h2 class="heading-title">Conoce el único box certificado de la región</h2>
          <div class="heading-desc">Entrena en instalaciones ideadas para el CrossFit, únicas a nivel nacional con un equipo de Profesionales Certificados y motivados por lo que hacen</div>
        </div>
      </div>
      <div class="air-grid air-grid-special">
        <div class="item-wrapper">
          <div id="w-node-265797c8f437-cf5d8cad" class="img img-equipo"></div>
          <div id="w-node-265797c8f438-cf5d8cad" class="data">
            <h1 class="heading title-section clipped">NUESTRO <br>EQUIPO</h1>
            <div class="text-block-5">
              Somos un grupo de personas especializadas, apasionadas por el deporte y la <strong>vida sana</strong>. Nuestro compromiso con ayudarte a lograr tus metas,
              es lo que nos separa de otros gimnasios. Motivados por enseñar y ofrecer salud a las personas. Buscamos encontrar el equilibrio en cada uno
              de nuestros alumnos de forma efectiva y entretenida.
            </div>
              <a href="{{url('/equipo')}}" class="green-button w-button">Conoce al Equipo</a>
            </div>
        </div>
        <div class="title-section-wrapper mg-top pd-1">
          <div class="title-section-wrapper-inner">
            <h1 class="heading title-section clipped">LA<br>COMUNIDAD</h1>
          </div>
        </div>
        <div class="item-wrapper-inv">
          <div class="data-inv">
            <div class="data-inv-inner">
              <h3 class="subtitle">Sin Egos</h3>
              <div class="text-block-5">CrossFit te pone a prueba cada día. Compite contigo, potencia tus capacidades y los resultados llegaran. En Pura Sangre fomentamos la humildad en los entrenamientos, dejando el ego afuera.</div>
            </div>
          </div>
          <div class="img-inv img-sin-egos"></div>
        </div>
        <div class="item-wrapper">
          <div id="w-node-c50777a8f605-cf5d8cad" class="img img-companerismo"></div>
          <div id="w-node-c50777a8f606-cf5d8cad" class="data">
            <h3 class="subtitle">Compañerismo</h3>
            <div class="text-block-5">En Pura Sangre fomentamos el compañerismo, alentándote al desafío mientras nos divertimos.</div>
          </div>
        </div>
        <div class="item-wrapper-inv">
          <div class="data-inv">
            <div class="data-inv-inner">
              <h3 class="subtitle">Pasarlo Bien</h3>
              <div class="text-block-5">No creemos que hacer ejercicio deba ser algo tedioso y aburrido, con el pasar del tiempo eso agota. <br><br>Distintos ejercicios, <br><br>Además cada cierto tiempo realizamos actividades extra para compartir, comer y tomar algo rico. </div>
            </div>
          </div>
          <div class="img-inv img-pasarlo-bien"></div>
        </div>
        <div class="galeria-slider">
          <div data-animation="slide" data-easing="ease-in-out-expo" data-nav-spacing="7" data-duration="250" data-infinite="1" class="slider-3 w-slider">
            <div class="w-slider-mask">
              <div class="slide-item-gallery slide-1 w-slide"></div>
              <div class="slide-item-gallery slide-2 w-slide"></div>
              <div class="slide-item-gallery slide-3 w-slide"></div>
              <div class="slide-item-gallery slide-4 w-slide"></div>
              <div class="slide-item-gallery slide-5 w-slide"></div>
              <div class="slide-item-gallery slide-6 w-slide"></div>
              <div class="slide-item-gallery slide-7 w-slide"></div>
              <div class="slide-item-gallery slide-8 w-slide"></div>
              <div class="slide-item-gallery slide-9 w-slide"></div>
              <div class="slide-item-gallery slide-10 w-slide"></div>
              <div class="slide-item-gallery slide-11 w-slide"></div>
              <div class="slide-item-gallery slide-12 w-slide"></div>
              <div class="slide-item-gallery slide-13 w-slide"></div>
              <div class="slide-item-gallery slide-14 w-slide"></div>
              <div class="slide-item-gallery slide-15 w-slide"></div>
              <div class="slide-item-gallery slide-16 w-slide"></div>
              <div class="slide-item-gallery slide-17 w-slide"></div>
              <div class="slide-item-gallery slide-18 w-slide"></div>
              <div class="slide-item-gallery slide-19 w-slide"></div>
              <div class="slide-item-gallery slide-20 w-slide"></div>
            </div>
            <div class="w-slider-arrow-left">
              <div class="icon-3 w-icon-slider-left"></div>
            </div>
            <div class="w-slider-arrow-right">
              <div class="icon-4 w-icon-slider-right"></div>
            </div>
            <div class="slide-nav-2 w-slider-nav w-round"></div>
          </div>
        </div>
        <div class="item-wrapper">
          <div id="w-node-250d504b0522-cf5d8cad" class="img img-nutricionista"></div>
          <div id="w-node-250d504b0523-cf5d8cad" class="data">
            <h1 class="heading title-section clipped special-margin">NUTRICIONISTA <br>QUE POTENCIA <br>TUS OBJETIVOS</h1>
            <div class="text-block-5">Con nuestra asesoría nutricional llevamos tu entrenamiento al siguiente nivel. Medimos, evaluamos y planificamos según tu estado nutricional. <br>Te ayudamos a comprender cómo funciona tu metabolismo para que puedas tomar control de tu alimentación y lograr tus objetivos a corto plazo. </div>
            <a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20reservar%20una%20hora%20con%20la%20Nutricionista" class="green-button w-button"><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Reserva una hora via WhatsApp</a>
          </div>
        </div>
        <div class="item-wrapper-inv">
          <div class="data-inv">
            <h1 class="heading title-section clipped special-margin">SOMOS<br>PARTNERS</h1>
            <div class="data-inv-inner">
              <div class="text-block-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, mi nec efficitur vulputate, augue leo molestie urna, quis aliquet leo magna eu nulla. Cras suscipit a quam quis mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </div>
            </div>
          </div>
          <div class="img-inv img-partners"></div>
        </div>
      </div>
      <div class="banner-promo bg-section">
        <div class="banner-promo-inner">
          <h1 class="heading-2 white-cta-title">3 Clases de prueba<br>GRATIS</h1>
          <div class="text-block-2">Si quieres transformar tu vida, Pura Sangre CrossFit es para tí, No importa en que condición fisica te encuentres, unete ahora y no te daras cuenta como los resultados llegan por si solos.</div>
          <div class="cta-buttons">
            <a href="{{url('/prueba')}}" class="green-button mg-button w-button">Conoce como funciona</a>
            <a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20las%20clases%20gratis" target="_blank" class="green-button mg-button w-button" id="boton-whatsapp-cta">
              <img class="img-whatsapp" src="../images/whatsapp_icon.svg">
              Solicita via WhatsApp
            </a>
          </div>
        </div>
      </div>

@endsection
