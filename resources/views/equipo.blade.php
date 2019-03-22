  @extends('layouts.app')
  @section('page-title')
    <title>Nuestro Equipo - Pura Sangre CrossFit</title>
    <meta content="nuestro equipo meta" name="description">
    <meta content="Nuestro Equipo - Pura Sangre CrossFit" property="og:title">
    <meta content="nuestro equipo meta" property="og:description">
    <meta content="summary" name="twitter:card">
  @endsection

  @section('content')

    <div class="heading-page">
      <div class="heading-page-inner">
        <h2 class="heading-title">Nuestro Equipo</h2>
        <div class="heading-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, mi nec efficitur vulputate, augue leo molestie urna, quis aliquet leo magna eu nulla. Cras suscipit a quam quis mollis.</div>
      </div>
    </div>
    <div class="team-cards">
      <div class="team-cards-inner">
        <div class="team-card">
          <div id="w-node-18e63dd87af7-65cc393a" class="card-img card-coto"></div>
          <div id="w-node-200fdd9ca065-65cc393a" class="card-data">
            <h2 class="card-team-title clipped">Cristobal Gutierrez</h2>
            <h5 class="card-team-cargo">Head Coach</h5>
            <div class="info-data">
              <div id="w-node-12b5e0607b6a-65cc393a" class="card-team-text">Coto lleva más de 7 años inmerso en el mundo del CrossFit, comenzando como un atleta destacado es uno de los precursores de este deporte en Chile y en la Región.<br><br><strong>Grados</strong>: Nutricionista con mención en Gestión y Calidad. Universidad Andrés Bello</div>
              <div id="w-node-5e507b3b8e31-65cc393a" class="card-team-text"><strong>Certificaciones</strong><br>- CrossFit Level 1<br>- CrossFit Kettlebell Trainer<br>- CrossFit Weightlifting Trainer<br>- CrossFit Aerobic Capacity Trainer<br>- CrossFit Gymnastic Trainer</div>
            </div>
          </div>
        </div>
        <div class="team-card">
          <div id="w-node-02b4b975399e-65cc393a" class="card-img card-mike"></div>
          <div id="w-node-02b4b975399f-65cc393a" class="card-data">
            <h2 class="card-team-title clipped">Miguel Moreno</h2>
            <h5 class="card-team-cargo">Coach</h5>
            <div class="info-data">
              <div id="w-node-02b4b97539a5-65cc393a" class="card-team-text">Mike se formó como Coach el año 2014 en Venezuela a solo 8 meses de comenzar a practicar CrossFit. Y forma parte de nuestro box desde el año 2017.<br><br><strong>Grados</strong>: Ingeniero en Computación, Universidad Alonso de Ojeda.</div>
              <div id="w-node-02b4b97539ac-65cc393a" class="card-team-text"><strong>Certificaciones</strong><br>- CrossFit Level 1 Trainer<br>- CrossFit Judge<br>- Escuela de Coach DOSIS en CFS<br>- Coach Motivacional en Programación Neuro Lingüística y en CRP<br>- Juez Oficial de Campeonatos Nacionales<br>- Ex Coach Eternity CrossFit South<br>- Ex Coach CrossFit Santiago (CFS)</div>
            </div>
          </div>
        </div>
        <div class="team-card">
          <div id="w-node-024e7e3bec96-65cc393a" class="card-img card-vania"></div>
          <div id="w-node-024e7e3bec97-65cc393a" class="card-data">
            <h2 class="card-team-title clipped">Vania Pérez</h2>
            <h5 class="card-team-cargo">Nutricionista</h5>
            <div class="info-data">
              <div id="w-node-024e7e3bec9d-65cc393a" class="card-team-text">Vania, nuestra Nutricionista y apasionada por el deporte, lleva más de 4 años de experiencia en la práctica del CrossFit. Complementando esta disciplina con sus conocimientos en el área de la salud.<br><br><strong>Grados: </strong>Nutricionista con mención en Gestión y Calidad. Universidad Andres Bello.</div>
              <div id="w-node-024e7e3beca4-65cc393a" class="card-team-text"><strong>Certificaciones</strong><br>- Curso Antropometría ISAK 1<br>- Coordinadora Programa Vida Sana de la comuna de Rauco.<br>- Curso tratamiento de la Obesidad<br>- Curso de Nutrición aplicada al ejercicio físico y suplementación.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="banner-promo bg-section">
      <div class="banner-promo-inner">
        <h1 class="heading-2 white-cta-title">3 Clases de prueba<br>GRATIS</h1>
        <div class="text-block-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, mi nec efficitur vulputate, augue leo molestie urna, quis aliquet leo magna eu nulla.</div>
        <div class="cta-buttons">
          <a href="{{url('/clases-de-prueba')}}" class="green-button mg-button w-button">Conoce como funciona</a>
          <a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20contratar%20las%20clases%20gratis" target="_blank" class="green-button mg-button w-button" id="boton-whatsapp-cta">
            <img class="img-whatsapp" src="../images/whatsapp_icon.svg">
            Solicita via WhatsApp
          </a>
        </div>
      </div>
    </div>

  @endsection
