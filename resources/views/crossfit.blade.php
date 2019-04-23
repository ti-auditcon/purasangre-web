@extends('layouts.app')
@section('page-title')
  <title>Qué es el CrossFit - Pura Sangre CrossFit</title>
  <meta content="CrossFit es un estilo de vida caracterizado por ejercicios seguros y eficaces combinados con una nutrición sana." name="description">
  <meta content="Qué es el CrossFit - Pura Sangre CrossFit" property="og:title">
  <meta content="CrossFit es un estilo de vida caracterizado por ejercicios seguros y eficaces combinados con una nutrición sana." property="og:description">
  <meta content="summary" name="twitter:card">
@endsection

@section('content')

  <div class="heading-page heading-crossfit">
      <div class="heading-page-inner">
        <h2 class="heading-title">¿Qué es el CrossFit?</h2>
        <div class="heading-desc">Aprende en pocas palabras qué es el CrossFit y porque es para ti</div>
      </div>
    </div>
    <div class="air-grid">
      <div class="title-section-wrapper first-title">
        <div class="title-section-wrapper-inner">
          <h1 class="heading title-section-quote">
            "Movimientos funcionales constantemente variados y ejecutados a alta intensidad"
          </h1>
        </div>
      </div>
      <div class="item-wrapper">
        <div id="w-node-bbe444900989-4eaaa2ee" class="img img-deporte-fitness"></div>
        <div id="w-node-bbe44490098a-4eaaa2ee" class="data">
          <h1 class="heading title-section clipped">EL DEPORTE <br>DEL FITNESS</h1>
          <div class="text-block-5">
            <strong>CrossFit</strong> es un estilo de vida caracterizado por ejercicios seguros y eficaces combinados con una nutrición sana.<br><br>
            Se puede utilizar para lograr cualquier objetivo, desde mejorar la salud hasta perder peso o aumentar el rendimiento en tu vida diaria o en otras disciplinas. Funciona para todo tipo de personas: personas que recién están comenzando y deportistas.
          </div>
        </div>
      </div>
      <div class="item-wrapper-inv">
        <div class="data-inv">
          <div class="data-inv-inner">
            <h3 class="subtitle">Ejercicios de la vida diaria</h3>
            <div class="text-block-5">La magia está en los movimientos. Los entrenamientos son diferentes cada día y se modifican para ayudar a cada persona a lograr sus objetivos. <strong>CrossFit</strong> usa movimientos funcionales y efectivos similares a los que usas en tu día a día.</div>
            <div class="disciplinas-wrapper">
              <div class="item-disciplina"><img src="images/ico-haltero.svg" alt="" class="img-disciplina">
                <h5 class="title-disciplina">Halterofilia</h5>
              </div>
              <div class="item-disciplina"><img src="images/ico-gimnasia.svg" alt="" class="img-disciplina">
                <h5 class="title-disciplina">Gimnasia</h5>
              </div>
              <div class="item-disciplina"><img src="images/ico-cardio.svg" alt="" class="img-disciplina">
                <h5 class="title-disciplina">Cardio</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="img-inv img-disciplinas"></div>
      </div>
    </div>

    <div class="cta-big cta-crossfit cta-habilidades">
      <div class="cta-big-inner">
        <h1 class="title-big-cta">10 Habilidades <br>que Desarrollaras <br>con CrossFit</h1>
        <div class="checklist">
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" alt="" class="check-icon">
            <div class="checklist-item">Resistencia cardiovalcular y respiratoria</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" alt="" class="check-icon">
            <div class="checklist-item">Fuerza</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" alt="" class="check-icon">
            <div class="checklist-item">Flexibilidad</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" id="w-node-5d72265f089b-4eaaa2ee" alt="" class="check-icon">
            <div class="checklist-item">Potencia</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" id="w-node-5d72265f089f-4eaaa2ee" alt="" class="check-icon">
            <div class="checklist-item">Velocidad</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" id="w-node-d363095ca7aa-4eaaa2ee" alt="" class="check-icon">
            <div class="checklist-item">Coordinación</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" id="w-node-d363095ca7aa-4eaaa2ee" alt="" class="check-icon">
            <div class="checklist-item">Agilidad</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" id="w-node-d363095ca7aa-4eaaa2ee" alt="" class="check-icon">
            <div class="checklist-item">Equilibrio</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" id="w-node-d363095ca7aa-4eaaa2ee" alt="" class="check-icon">
            <div class="checklist-item">Precisión</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" id="w-node-d363095ca7aa-4eaaa2ee" alt="" class="check-icon">
            <div class="checklist-item">Estamina</div>
          </div>
        </div>
      </div>
    </div>


    <div class="air-grid">
      {{-- <div class="habilidades-wrapper">
        <div class="habilidades">
          <div class="habilidades-title">
            <h1>10 Habilidades <br>que Desarrollaras <br>con el CrossFit</h1>
          </div>
          <div class="habilidades-data">
            <h3 class="habilidades-text">
              <img src="images/check-icon.svg" class="check-icon">Resistencia<br>
              <img src="images/check-icon.svg" class="check-icon">Fuerza<br>
              <img src="images/check-icon.svg" class="check-icon">Flexibilidad<br>
              <img src="images/check-icon.svg" class="check-icon">Potencia<br>
              <img src="images/check-icon.svg" class="check-icon">Velocidad<br>
              <img src="images/check-icon.svg" class="check-icon">Coordinación<br>
              <img src="images/check-icon.svg" class="check-icon">Agilidad<br>
              <img src="images/check-icon.svg" class="check-icon">Equilibrio<br>
              <img src="images/check-icon.svg" class="check-icon">Precisión<br>
              <img src="images/check-icon.svg" class="check-icon">Estamina
            </h3>
          </div>
        </div>
      </div> --}}
      <div class="item-wrapper">
        <div id="w-node-bbe4449009a2-4eaaa2ee" class="img img-entrenamiento-diferente"></div>
        <div id="w-node-bbe4449009a3-4eaaa2ee" class="data">
          <h3 class="subtitle">Adaptable y Desafiante</h3>
          <div class="text-block-5">
            Los entrenamientos de CrossFit se pueden adaptar para personas de cualquier edad
            y nivel de condición física. Los niveles de intensidad se ajustan para desafiar a la persona y mejorar
            el estado físico de forma segura.
          </div>
        </div>
      </div>
      <div class="item-wrapper-inv">
        <div class="data-inv">
          <div class="data-inv-inner">
            <h3 class="subtitle">Salud y estilo de vida</h3>
            <div class="text-block-5">

              El estilo de vida del <strong>CrossFit</strong> es una combinación de alimentación saludable y ejercicio.
              Esta es la clave para combatir la obesidad, el sobrepeso y enfermedades como:
              la diabetes, la hipertensión, cardiovasculares, entre otras, que actualmente van en aumento y que se relacionan
              directamente con el estilo de vida actual, la mala alimentación y la baja actividad física.

            </div>
          </div>
        </div>
        <div class="img-inv img-salud"></div>
      </div>
      <div class="item-wrapper">
        <div id="w-node-bbe4449009c6-4eaaa2ee" class="img img-comunidad"></div>
        <div id="w-node-bbe4449009c7-4eaaa2ee" class="data">
          <h3 class="subtitle">Comunidad</h3>
          <div class="text-block-5">
            Si existe algún gran punto diferenciador entre CrossFit y otras disciplinas de entrenamiento, es el hecho de
            que en la base de todo lo que hacemos, está <strong>la Comunidad</strong>.
            <br><br>
            La comunidad de Pura Sangre esta formada por personas que se animan y se motivan entre sí en cada clase, a medida
            que trabajan juntos para alcanzar sus objetivos. Entrena con amigos.
          </div>
          <a href="{{url('/conocenos')}}" class="green-button w-button guereber">Conoce sobre nosotros</a>
        </div>
      </div>
    </div>
    <div class="cta-big cta-crossfit cta-benefcios">
      <div class="cta-big-inner">
        <h1 class="title-big-cta">Beneficios del<br>CrossFit</h1>
        <div class="checklist">
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" alt="" class="check-icon">
            <div class="checklist-item">Incrementa tu autoestima y seguridad manteniéndote alegre y positivo</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" alt="" class="check-icon">
            <div class="checklist-item">Gana masa muscular con ejercicios efectivos y entretenidos</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" id="w-node-5d72265f089b-4eaaa2ee" alt="" class="check-icon">
            <div id="w-node-5d72265f089c-4eaaa2ee" class="checklist-item">Conoce gente perseverante y motivada por el deporte y la vida sana</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" id="w-node-5d72265f089f-4eaaa2ee" alt="" class="check-icon">
            <div id="w-node-5d72265f08a0-4eaaa2ee" class="checklist-item">Disminuye los porcentajes de grasa y activa tu metabolismo</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" id="w-node-d363095ca7aa-4eaaa2ee" alt="" class="check-icon">
            <div id="w-node-d363095ca7ab-4eaaa2ee" class="checklist-item">Baja el stress del día a día y libera endorfinas</div>
          </div>
          <div class="checklist-item-wrapper"><img src="images/check-icon.svg" id="w-node-d363095ca7aa-4eaaa2ee" alt="" class="check-icon">
            <div id="w-node-d363095ca7ab-4eaaa2ee" class="checklist-item">Aumenta tu energía y agilidad</div>
          </div>
        </div>
      </div>
    </div>
    <div class="banner-promo bg-section">
      <div class="banner-promo-inner">
        <h1 class="heading-2 white-cta-title">3 Clases de prueba<br>GRATIS</h1>
        <div class="text-block-2"><strong>Si quieres transformar tu vida, Pura Sangre CrossFit es para ti.</strong><br> No importa en que condición fisica te encuentres o si nunca has ido al gimnasio, unete ahora y no te daras cuenta como los resultados llegan por si solos.</div>
        <div class="cta-buttons">
          <a href="{{url('/prueba')}}" class="green-button mg-button w-button">Conoce como funciona</a>
          <a href="https://api.whatsapp.com/send?phone=+56940207699&amp;text=Hola,%20quiero%20pedir%20las%20clases%20gratis" target="_blank" class="green-button mg-button w-button" id="boton-whatsapp-cta">
            <img class="img-whatsapp" src="../images/whatsapp_icon.svg">
            Solicita via WhatsApp
          </a>
        </div>
      </div>
    </div>

@endsection
