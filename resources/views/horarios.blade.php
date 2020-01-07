@extends('layouts.app')

@section('html-data') data-wf-page="5c8138f2f2a0f7105b381181" data-wf-site="5c794f25eb8c47a447aeb524" @endsection

@section('page-title')
<title>Horarios - Pura Sangre CrossFit</title>
<meta content="Revisa nuestros horarios y las diferentes clases que encontrarás en ellos. El CrossFit es para ti." name="description">
<meta content="Horarios - Pura Sangre CrossFit" property="og:title">
<meta content="Revisa nuestros horarios y las diferentes clases que encontrarás en ellos. El CrossFit es para ti." property="og:description">
<meta content="summary" name="twitter:card">
@endsection

@section('content')

  <div class="heading-page heading-horarios">
    <div class="heading-page-inner">
      <h2 class="heading-title">Nuestros Horarios</h2>
      <div class="heading-desc">Conoce nuestros horarios disponibles en las distintas clases que tenemos para ti.</div>
    </div>
  </div>

  <div class="horarios-wrapper">

    <div class="cat-wrapper">
      <div class="cat crossfit">
        <div class="color"></div>
        <h4>CrossFit</h4>
      </div>
      <div class="cat frenetik">
        <div class="color"></div>
        <h4>Frenetik</h4>
      </div>
      <div class="cat kids">
        <div class="color"></div>
        <h4>Kids</h4>
      </div>
      <div class="cat barbell">
        <div class="color"></div>
        <h4>Barbell</h4>
      </div>
      <div class="cat obox">
        <div class="color"></div>
        <h4>Open Box</h4>
      </div>
    </div>

    <div class="horarios">
      {{-- Lunes A Viernes --}}
      <div class="day-wrapper lav">
        <div class="item day">
          <h4>Lunes a Viernes</h4>
          <img src="images/arrow-down.svg">
        </div>
        <div class="item crossfit">
          <p>07:00 - 08:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item crossfit">
          <p>08:00 - 09:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item crossfit">
          <p>09:00 - 10:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item-grid">
          <div class="item crossfit">
            <p>10:00 - 11:00 hrs</p>
            <h5>CrossFit</h5>
          </div>
          <div class="item frenetik">
            <p>10:00 - 11:00 hrs</p>
            <h5>Frenetik</h5>
          </div>
        </div>
        <div class="item kids">
          <p>11:00 - 12:00 hrs</p>
          <h5>Kids</h5>
        </div>
        <div class="item crossfit">
          <p>12:00 - 13:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item crossfit">
          <p>13:15 - 14:15 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item crossfit">
          <p>16:00 - 17:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item crossfit">
          <p>17:00 - 18:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item-grid">
          <div class="item crossfit">
            <p>18:00 - 19:00 hrs</p>
            <h5>CrossFit</h5>
          </div>
          <div class="item frenetik">
            <p>18:30 - 19:30 hrs</p>
            <h5>Frenetik</h5>
          </div>
        </div>
        <div class="item-grid">
          <div class="item crossfit">
            <p>19:00 - 20:00 hrs</p>
            <h5>CrossFit</h5>
          </div>
          <div class="item frenetik">
            <p>19:30 - 20:30 hrs</p>
            <h5>Frenetik</h5>
          </div>
        </div>
        <div class="item crossfit">
          <p>20:00 - 21:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item crossfit">
          <p>21:00 - 22:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
      </div>
      {{-- Sábados --}}
      <div class="day-wrapper sab">
        <div class="item day">
          <h4>Sábados</h4>
          <img src="images/arrow-down.svg">
        </div>
        <div class="item void"></div>
        <div class="item barbell">
          <p>08:30 - 10:00 hrs</p>
          <h5>Barbell</h5>
        </div>
        <div class="item crossfit">
          <p>10:00 - 11:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item crossfit">
          <p>11:00 - 12:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item crossfit">
          <p>12:00 - 13:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item void"></div>
      </div>
      {{-- Domingos --}}
      <div class="day-wrapper dom">
        <div class="item day">
          <h4>Domingos</h4>
          <img src="images/arrow-down.svg">
        </div>
        <div class="item void"></div>
        <div class="item crossfit">
          <p>09:00 - 10:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item crossfit">
          <p>10:00 - 11:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item crossfit">
          <p>11:00 - 12:00 hrs</p>
          <h5>CrossFit</h5>
        </div>
        <div class="item obox">
          <p>12:00 - 13:00 hrs</p>
          <h5>Open Box</h5>
        </div>
        <div class="item void"></div>
      </div>
    </div>

  </div>

  <div class="banner-promo bg-section">
    <div class="banner-promo-inner">
      <h1 class="heading-2 white-cta-title">3 Clases de prueba<br>GRATIS</h1>
      <div class="text-block-2"><strong>Si quieres transformar tu vida, Pura Sangre CrossFit es para ti.</strong><br> No importa en que condición física te encuentres o si nunca has ido al gimnasio, únete ahora y no te darás cuenta como los resultados llegan por si solos.</div>
      <div class="cta-buttons">
        <a href="{{url('/prueba')}}" class="green-button mg-button w-button">
          Conoce como funciona
        </a>
        <a href="https://wa.me/56940207699?text=Hola,%20quiero%20pedir%20las%20clases%20gratis" target="_blank" id="boton-whatsapp-cta-abajo" class="green-button mg-button w-button">
          <img class="img-whatsapp" src="../images/whatsapp_icon.svg">
            Solicita via WhatsApp
        </a>
    </div>
    </div>
  </div>

@endsection
