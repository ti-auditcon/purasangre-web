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
        <div class="heading-desc">Conoce como es una clase en el box</div>
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
          <div class="text-block-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, mi nec efficitur vulputate, augue leo molestie urna, quis aliquet leo magna eu nulla. Cras suscipit a quam quis mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br> Cras suscipit a quam quis mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada.</div>
        </div>
      </div>
      <div class="title-section-wrapper">
        <div class="title-section-wrapper-inner mg-top-special">
          <h1 class="heading title-section clipped">ASÍ ES UNA <br>CLASE EN EL BOX</h1>
        </div>
      </div>
      <div class="item-wrapper-inv">
        <div class="data-inv">
          <div class="data-inv-inner">
            <h3 class="subtitle">Warmup</h3>
            <div class="text-block-5">Calentamiento</div>
          </div>
        </div>
        <div class="img-inv img-warmup"></div>
      </div>
      <div class="item-wrapper">
        <div id="w-node-250d504b0522-0af2eacb" class="img img-skills"></div>
        <div id="w-node-250d504b0523-0af2eacb" class="data">
          <h3 class="subtitle">Skills</h3>
          <div class="text-block-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, mi nec efficitur vulputate, augue leo molestie urna, quis aliquet leo magna eu nulla. Cras suscipit a quam quis mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br> Cras suscipit a quam quis mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada.</div>
        </div>
      </div>
      <div class="item-wrapper-inv">
        <div class="data-inv">
          <div class="data-inv-inner">
            <h3 class="subtitle">Workout</h3>
            <div class="text-block-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, mi nec efficitur vulputate, augue leo molestie urna, quis aliquet leo magna eu nulla. Cras suscipit a quam quis mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br> Cras suscipit a quam quis mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada.</div>
          </div>
        </div>
        <div class="img-inv img-workout"></div>
      </div>
    </div>
    <div class="cta-options">
      <div class="cta-options-inner">
        <div id="w-node-6f19680799e3-0af2eacb" class="item-option bg-option-1">
          <h2 class="title-cta-option heading-2 white-cta-title">Reserva tus 3 clases <br>de Prueba gratis</h2>
          <div class="text-cta-option">Tenemos horarios especiales para quienes quieren vivir la experiencia Pura Sangre junto a la comunidad en una clase real.</div><a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20las%20clases%20gratis" target="_blank" class="green-button w-button"><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Solicita via WhatsApp</a>
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
