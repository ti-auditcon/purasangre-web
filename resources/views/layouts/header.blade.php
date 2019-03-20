<header class="main-header animated @if(\Route::currentRouteName() == 'home')header-home @endif">
  <div class="main-header-inner"><a href="/" class="link-block w-inline-block w--current"><img src="images/icon_white.png" alt="" class="logo"></a>
    <div class="menu-container">
      <div data-w-id="c811e09c-3a6d-0615-7033-53ec6b10f184" class="menu">
        <div class="menu-item first-link">
          <a href="/" class="link-menu w-inline-block w--current">
            <div class="text-menu">Inicio</div>

          </a>
        </div>
        <div data-w-id="0380b759-73f0-6903-6b0a-78083510070a" class="menu-item trigger-dropdown">
          <a href="#" class="link-menu link-info w-inline-block">
            <div class="text-menu">Info</div>

          </a>
          <div data-w-id="0380b759-73f0-6903-6b0a-78083510070c" class="dropdown-content">
            <a href="{{url('/conocenos')}}" class="link-menu dropdown-link-menu w-inline-block">
              <div class="text-menu">Conócenos</div>
            </a>
            <a href="{{url('/crossfit')}}" class="link-menu dropdown-link-menu w-inline-block">
              <div class="text-menu">¿Qué es el CrossFit?</div>
            </a>
            <a href="{{url('/planes')}}" class="link-menu dropdown-link-menu w-inline-block">
              <div class="text-menu">Planes</div>
            </a>
            <a href="{{url('/horarios')}}" class="link-menu dropdown-link-menu w-inline-block">
              <div class="text-menu">Horarios</div>
            </a>
          </div>
        </div>
        <div class="menu-item fix-item-space">
          <a href="{{url('/contacto')}}" class="link-menu w-inline-block">
            <div class="text-menu">Contacto</div>
          </a>
        </div>
        <div class="cta-header"><a href="{{url('/clases-de-prueba')}}" class="green-button w-button" id="boton-whatsapp-cabecera">3 Clases gratis</a></div>
      </div>
    </div>
    <div data-w-id="702cdd04-7f6a-85e1-8296-a87f85ac7f47" class="hamburger-container"><img src="images/hamburger.svg" alt="" class="hamburger"></div>
  </div>
</header>
