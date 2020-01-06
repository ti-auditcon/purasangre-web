<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Pura Sangre CrossFit App - Vive la experiencia completa Pura Sangre</title>

    <meta content="Vive la experiencia completa de Pura Sangre CrossFit. Con la app podrás controlar tus tiempos, asistencia, pagos y reservas en el box." name="description">
    <meta content="Pura Sangre CrossFit App" property="og:title">
    <meta content="Vive la experiencia completa de Pura Sangre CrossFit. Con la app podrás controlar tus tiempos, asistencia, pagos y reservas en el box." property="og:description">
    <meta content="summary" name="twitter:card">

    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/pura-sangre-crossfit.webflow.css?v=040" rel="stylesheet" type="text/css">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="fav/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="fav/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="fav/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="fav/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="fav/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="fav/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="fav/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="fav/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="fav/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="fav/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="fav/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="fav/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="fav/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="Pura Sangre CrossFit"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="fav/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="fav/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="fav/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="fav/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="fav/mstile-310x310.png" />

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic"]  }});</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

  </head>
  <body class="body overflow-hidden">

    <div class="box-loading loader animate fadeIn">
      {{-- <img src="../images/puff.svg"> --}}
      <img src="../images/logo_loading.svg">
    </div>

    <main class="page page-app">
      <div class="app-inner">
        <div class="app-img"></div>
        <div class="app-data">
          <h6><span class="highlight">Descarga la app</span></h6>
          <h1>Pura Sangre <br>CrossFit</h1>
          {{-- <p>Vive la experiencia completa de Pura Sangre CrossFit. Con la app podrás controlar tus tiempos, asistencia, pagos y reservas en el box.</p> --}}
          <p>
            Con nuestra app puedes organizar tus tiempos y mantener la constancia de tu entrenamiento para lograr tus objetivos.
            Con ella podrás:
          </p>
          <div class="checklist">
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
          <div class="buttons">
            <a href="https://play.google.com/store/apps/details?id=purasangrecrossfit.app.com&amp;hl=es">
              <img src="images/google-play-badge-2.png" alt="Descárgala en Play Store">
            </a>
            <a href="https://itunes.apple.com/us/app/pura-sangre-crossfit/id1447657358">
              <img src="images/d_app.png" alt="Descárgala en App Store">
            </a>
          </div>
        </div>
      </div>
    </main>

    {{-- scripts --}}
    <script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  </body>
</html>
