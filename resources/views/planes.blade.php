@extends('layouts.app')
@section('page-title')
<title>Planes - Pura Sangre CrossFit</title>
<meta content="Nuestros planes de CrossFit se adecuan a cada persona, con horarios flexibles y variados. El CrossFit es para ti." name="description">
<meta content="Planes - Pura Sangre CrossFit" property="og:title">
<meta content="Nuestros planes de CrossFit se adecuan a cada persona, con horarios flexibles y variados. El CrossFit es para ti." property="og:description">
<meta content="summary" name="twitter:card">
@endsection

@section('content')

    <div class="heading-page heading-planes">
      <div class="heading-page-inner">
        <h2 class="heading-title">Nuestros Planes</h2>
        <div class="heading-desc">En Pura Sangre tenemos los planes y precios perfectos para ti, según tu presupuesto, objetivos y necesidades.</div>
      </div>
    </div>
    <div class="page-planes-wrapper">
      <div class="page-planes-inner">
        <div class="plan-card plan-card-special">
          <div class="plan-card-data">
            <div class="card-heading">
              <div class="title">
                <h1 class="title-card clipped special-title-card">Plan Full Fit</h1>
                <h5 class="title-card-type">Mensual</h5>
              </div>
              <div class="featured-promo">
                <div class="text-block-10">Mejor<br>Opción</div><img src="images/best.svg" alt="" class="image-9"></div>
            </div>
            <div class="plan-text">Atrévete a cambiar tu vida con un plan diseñado para quienes buscan los mejores resultados. Puedes reservar una clase al día, en cualquier horario, todos los días de la semana. Sin dudas, el plan más conveniente.</div>
            <div class="content content-page">
              <div class="horario">
                <div class="content-hd">Lunes a Viernes</div>
                <h4 class="content-content">Horario Liberado</h4>
              </div>
              <div class="valor">
                <div class="content-hd">Valor</div>
                <h4 class="content-content">$45.000</h4>
                <div class="content-span">/ mes</div>
              </div>
            </div>
            <div class="plan-button-container"><a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20el%20plan%20Full%20Fit" target="_blank" class="plan-page-cta-button special-button w-button" id="boton-whatsapp-plan-full"><img class="img-whatsapp" src="../images/whatspp_icon_gold.svg">Contratar via Whatsapp</a></div>
          </div>
          <div class="plan-card-img plan-img-fullfit"></div>
        </div>
        <div class="plan-card">
          <div class="plan-card-img"></div>
          <div class="plan-card-data">
            <div class="card-heading">
              <div class="title">
                <h1 class="title-card clipped">Plan 12 Sesiones</h1>
                <h5 class="title-card-type">Mensual</h5>
              </div>
              <div class="featured"></div>
            </div>
            <div class="plan-text">Un plan especial para quienes no pueden asistir todos los días. Permite compatibilizar tu familia, trabajo y el entrenamiento en el box.</div>
            <div class="content content-page">
              <div class="horario">
                <div class="content-hd">Lunes a Viernes</div>
                <h4 class="content-content">12 Clases / mes</h4>
              </div>
              <div class="valor">
                <div class="content-hd">Valor</div>
                <h4 class="content-content">$40.000</h4>
                <div class="content-span">/ mes</div>
              </div>
            </div>
            <div class="plan-button-container">
              <a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20el%20plan%2012%20Sesiones" target="_blank" class="plan-page-cta-button w-button" id="boton-whatsapp-plan-12"><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Contratar via Whatsapp</a></div>
          </div>
        </div>
        <div class="plan-card-mini-wrapper">
          <div id="w-node-cd0ce9e33f58-43a9f64e" class="plan-card-mini">
            <div class="mini-img img-plan-am"></div>
            <div class="mini-data">
              <div class="card-heading">
                <div class="title">
                  <h1 class="title-card clipped">Plan Full AM</h1>
                  <h5 class="title-card-type">Mensual</h5>
                </div>
              </div>
              <div class="plan-text">Especial para quienes entrenan de mañana pero no necesariamente madrugan. Puedes reservar una hora dentro de la mañana.</div>
              <div class="content content-page">
                <div class="horario">
                  <div class="content-hd">Lunes a Viernes</div>
                  <h4 class="content-content">09:00 - 12:00 hrs</h4>
                </div>
                <div class="valor">
                  <div class="content-hd">Valor</div>
                  <h4 class="content-content">$30.000</h4>
                  <div class="content-span">/ mes</div>
                </div>
              </div>
              <div class="plan-button-container"><a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20el%20plan%20Full%20AM" target="_blank" class="plan-page-cta-button w-button" id="boton-whatsapp-plan-am"><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Contratar via Whatsapp</a></div>
            </div>
          </div>
          <div id="w-node-4d1281a24382-43a9f64e" class="plan-card-mini">
            <div class="mini-img img-plan-estudiantes"></div>
            <div class="mini-data">
              <div class="card-heading">
                <div class="title">
                  <h1 class="title-card clipped">Plan Estudiantes</h1>
                  <h5 class="title-card-type">Mensual</h5>
                </div>
              </div>
              <div class="plan-text">
                Potencia tus estudios de la mejor forma, un cuerpo sano es una mente sana, rinde al 100%. Puedes reservar todos los días en los horarios indicados.
              </div>
              <div class="content content-page">
                <div class="horario">
                  <div class="content-hd">Lunes a Viernes</div>
                  <h4 class="content-content">07:00 a 12:00 hrs o<br>17:00 a 18:00 hrs</h4>
                </div>
                <div class="valor">
                  <div class="content-hd">Valor</div>
                  <h4 class="content-content">$25.990</h4>
                  <div class="content-span">/ mes</div>
                </div>
              </div>
              <div class="plan-button-container"><a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20el%20plan%20Estudiantes" target="_blank" class="plan-page-cta-button w-button" id="boton-whatsapp-plan-estudiantes"><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Contratar via Whatsapp</a></div>
            </div>
          </div>
        </div>

        <div class="plan-card">
          <div class="plan-card-data">
            <div class="card-heading">
              <div class="title">
                <h1 class="title-card clipped">Pase Diario</h1>
                <h5 class="title-card-type">Válido por una clase</h5>
              </div>
              <div class="featured">
              </div>
            </div>
            <div class="plan-text">
              Si estás por la ciudad y quieres practicar CrossFit este pase es para ti. Recuerda consultar disponibilidad de clases.
            </div>
            <div class="content content-page">
              <div class="horario">
                <div class="content-hd">Lunes a Viernes</div>
                <h4 class="content-content">Horario Liberado</h4>
              </div>
              <div class="valor">
                <div class="content-hd">Valor</div>
                <h4 class="content-content">$5.000</h4>
                <div class="content-span">/ clase</div>
              </div>
            </div>
            <div class="plan-button-container">
              <a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20consultar%20por%20un%20Pase%20Diario" target="_blank" class="plan-page-cta-button w-button" id=""><img class="img-whatsapp" src="../images/whatsapp_icon.svg">Contratar via Whatsapp</a></div>
          </div>
          <div class="plan-card-img plan-img-diario"></div>
        </div>

      </div>
    </div>
    <div class="cta-big cta-crossfit cta-plan-personalizado">
      <div class="cta-big-inner">
        <h1 class="title-big-cta">Plan<br>Personalizado</h1>
        <div class="checklist">
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" alt="" class="check-icon">
            <div class="checklist-item">Clases particulares de CrossFit en el box</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" alt="" class="check-icon">
            <div class="checklist-item">Horario variable y personalizable</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" alt="" class="check-icon">
            <div class="checklist-item">Coach siempre a tu lado en los ejercicios</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" alt="" class="check-icon">
            <div class="checklist-item">Incluye un mes de Consulta Nutricional</div>
          </div>
        </div>
        <div class="cta-big-precio-wrapper">
          <div class="text-block-8">Valor</div>
          <div class="cta-big-precio-contenido">
            <h4 class="heading-4">$130.000</h4>
            <div class="text-block-9">/mes</div>
          </div>
        </div><a href="{{url('/contacto')}}" class="green-button w-button">Contacta con nosotros</a></div>
    </div>
    <div class="banner-promo bg-section">
      <div class="banner-promo-inner">
        <h1 class="heading-2 white-cta-title">3 Clases de prueba<br>GRATIS</h1>
        <div class="text-block-2"><strong>Si quieres transformar tu vida, Pura Sangre CrossFit es para ti.</strong><br> No importa en que condición física te encuentres o si nunca has ido al gimnasio, únete ahora y no te darás cuenta como los resultados llegan por si solos.</div>
        <div class="cta-buttons">
          <a href="{{url('/prueba')}}" class="green-button mg-button w-button">Conoce como funciona</a>
          <a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20pedir%20las%20clases%20gratis" target="_blank" class="green-button mg-button w-button" id="boton-whatsapp-cta">
            <img class="img-whatsapp" src="../images/whatsapp_icon.svg">Solicita via WhatsApp</a>
          </div>
      </div>
    </div>

@endsection
