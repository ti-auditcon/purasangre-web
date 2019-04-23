@extends('layouts.app')
@section('page-title')
<title>Clases de Prueba - Pura Sangre CrossFit</title>
<meta content="¿Cómo es una clase de CrossFit? ¿Qué es una clase de prueba? averígualo y ven a entrenar con nosotros. El CrossFit es para ti." name="description">
<meta content="Clases de Prueba - Pura Sangre CrossFit" property="og:title">
<meta content="¿Cómo es una clase de CrossFit? ¿Qué es una clase de prueba? averígualo y ven a entrenar con nosotros. El CrossFit es para ti." property="og:description">
<meta content="summary" name="twitter:card">
@endsection

@section('content')

  <div class="heading-page heading-clase-prueba">
      <div class="heading-page-inner">
        <h2 class="heading-title">Clases de Prueba Gratis</h2>
        <div class="heading-desc">Conoce como es una clase en Pura Sangre CrossFit Curicó</div>
      </div>
    </div>
    <div class="air-grid">
      <div class="title-section-wrapper first-title">
        <div class="title-section-wrapper-inner">
          <h1 class="heading title-section clipped">3 CLASES <br>GRATIS</h1>
        </div>
      </div>
      <div class="item-wrapper">
        <div id="w-node-f51ca6b543ff-0af2eacb" class="img img-clases-gratis"></div>
        <div id="w-node-f51ca6b54400-0af2eacb" class="data">
          <h3 class="subtitle">¿De qué se tratan?</h3>
          <div class="text-block-5">
            Para que experimentes el CrossFit y tomes la desición de cambiar tu vida,
            te regalamos 3 Clases Gratis, estas pueden ser tomadas durante una semana en cualquier horario a convenir. <br>
            <br>
            A diferencia de los gimnasios, las clases serán asistidas y guiadas por nuestros Coach para introducirte en cada movimiento a trabajar.
            Solo debes comunicarte por cualquiera de nuestros canales solicitando tus 3 Clases Gratis. <br>No esperes más!
          </div>
          <a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20pedir%20las%20clases%20gratis" target="_blank" class="green-button w-button">
            <img class="img-whatsapp" src="../images/whatsapp_icon.svg">
            Solicita via WhatsApp
          </a>
        </div>
      </div>
      <div class="title-section-wrapper pd-1">
        <div class="title-section-wrapper-inner mg-top-special">
          <h1 class="heading title-section clipped">ASÍ ES UNA <br>CLASE EN EL BOX</h1>
          <p class="text-line-1"> <strong>Box</strong>: En la jerga CrossFitera es como llamamos al gimnasio de CrossFit.</p>
        </div>
      </div>
      <div class="item-wrapper-inv">
        <div class="data-inv">
          <div class="data-inv-inner">
            <h3 class="subtitle">Warm Up</h3>
            <div class="text-block-5">
              En español significa Calentamiento. Su principal objetivo es entregar una preparación general, suave y progresiva.
              Alistando nuestro cuerpo para el esfuerzo al que va a ser sometido, más adelante durante la clase, de la manera más eficiente y segura posible.
            </div>
          </div>
        </div>
        <div class="img-inv img-warmup"></div>
      </div>
      <div class="item-wrapper">
        <div id="w-node-250d504b0522-0af2eacb" class="img img-skills"></div>
        <div id="w-node-250d504b0523-0af2eacb" class="data">
          <h3 class="subtitle">Skills</h3>
          <div class="text-block-5">
            Es una parte fundamental de la clases, ya que se desarrollan habilidades, aprendemos teoría, trabajamos y mejoramos las técnicas de ejecución de los diferentes ejercicios.
          </div>
        </div>
      </div>
      <div class="item-wrapper-inv">
        <div class="data-inv">
          <div class="data-inv-inner">
            <h3 class="subtitle">W.O.D (Workout of the day)</h3>
            <div class="text-block-5">
              En español significa "entrenamiento del día", pensado día a día para que nunca se repita, es el peak de la clase.
              Es la parte más intensa del entrenamiento. Donde pondrás a prueba todas la habilidades trabajadas previamente, para darlo todo junto con tus compañeros.
            </div>
          </div>
        </div>
        <div class="img-inv img-workout"></div>
      </div>
    </div>
    <div class="cta-options">
      <div class="cta-options-inner">
        <div id="w-node-6f19680799e3-0af2eacb" class="item-option bg-option-1">
          <h2 class="title-cta-option heading-2 white-cta-title">Reserva tus 3 clases <br>de Prueba gratis</h2>
          <div class="text-cta-option">Tenemos horarios especiales para quienes quieren vivir la experiencia Pura Sangre junto a la comunidad en una clase real.</div><a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20pedir%20las%20clases%20gratis" target="_blank" class="green-button w-button"><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Solicita via WhatsApp</a>
          <div class="cta-option-text-2">o llamanos al <a href="tel:+56940207699">+569 402 07 699</a></div>
        </div>
        <div id="w-node-91bdddb7b430-0af2eacb" class="item-option bg-option-2">
          <h2 class="title-cta-option heading-2 white-cta-title">Revisa nuestros <br>horarios</h2>
          <div class="text-cta-option">Nuestros horarios estan diseñados para que convalides tu día a día con el entrenamiento efectivo del CrossFit.</div><a href="{{url('/horarios')}}" class="green-button w-button">Ver horarios</a>
          <div class="cta-option-text-2">o llamanos al <a href="tel:+56940207699">+569 402 07 699</a></div>
        </div>
      </div>
    </div>

@endsection
