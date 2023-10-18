<?php

$docenteImagen1 = $GLOBALS['PATH_DOCENTE'] . 'blancaIrisZarateSantiago.jpg';
$type = pathinfo($docenteImagen1, PATHINFO_EXTENSION);
$docenteImagen1 = file_get_contents($docenteImagen1);
$docenteImagen1 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen1);

$docenteImagen2 = $GLOBALS['PATH_DOCENTE'] . 'joseAgustinColinaTorres.jpg';
$type = pathinfo($docenteImagen2, PATHINFO_EXTENSION);
$docenteImagen2 = file_get_contents($docenteImagen2);
$docenteImagen2 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen2);

$docenteImagen3 = $GLOBALS['PATH_DOCENTE'] . 'joseDeJesusRomeroCastro.jpg';
$type = pathinfo($docenteImagen3, PATHINFO_EXTENSION);
$docenteImagen3 = file_get_contents($docenteImagen3);
$docenteImagen3 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen3);

$docenteImagen4 = $GLOBALS['PATH_DOCENTE'] . 'joseLuisFernandoPalomequeLoyo.jpg';
$type = pathinfo($docenteImagen4, PATHINFO_EXTENSION);
$docenteImagen4 = file_get_contents($docenteImagen4);
$docenteImagen4 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen4);

$docenteImagen5 = $GLOBALS['PATH_DOCENTE'] . 'miguelAngelPerezSubeldia.jpg';
$type = pathinfo($docenteImagen5, PATHINFO_EXTENSION);
$docenteImagen5 = file_get_contents($docenteImagen5);
$docenteImagen5 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen5);

$docenteImagen6 = $GLOBALS['PATH_DOCENTE'] . 'luisEduardoRodriguezMota.jpg';
$type = pathinfo($docenteImagen6, PATHINFO_EXTENSION);
$docenteImagen6 = file_get_contents($docenteImagen6);
$docenteImagen6 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen6);

?>
<!-- Carrusel de portada -->
<section>
  <div id="myCarousel" class="carousel slide col-lg-12 col-sm-12" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/Electronica/img-Electronica1.png" class="d-block w-100 align-middle" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption d-flex flex-column">
            <h1 class="mainTitle text-center font-bold m-2 shadow-text">Ingeniería Electrónica</h1>
            <h2 class="mainSubtitle text-center font-bold shadow-text">Conoce nuevos horizontes</h1>
              <p><a class="mainButton btn font-bold d-none d-md-inline-flex" href="?option=3">Explorar</a>
              </p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/paloque.jpg" class="d-block w-100 align-middle" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="mainTitle text-center font-bold m-2 shadow-text">Ingeniería Electrónica</h1>
            <h2 class="mainSubtitle text-center font-bold shadow-text">Aprende nuevas tecnologías</h1>
              <p><a class="mainButton btn font-bold d-none d-md-inline-flex" href="?option=1">Explorar</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/galeria1.JPG" class="d-block w-100 align-middle" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="mainTitle text-center font-bold m-2 shadow-text">Ingeniería Electrónica</h1>
            <h2 class="mainSubtitle text-center font-bold d-none d-md-inline-flex shadow-text">Desarrolla proyectos</h1>
              <p><a class="mainButton btn font-bold d-none d-md-inline-flex" href="?option=5">Explorar</a></p>
          </div>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<!--Fin Carrusel de portada -->

<!-- Razones para estudiar la carrera -->
<section class="p-2">
  <div class="row px-2 g-0">
    <!-- Columna de la izquierda con una imagen -->
    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src="img/electronica.JPG" alt="">
      </div>
    </div>
    <!-- Columna de la derecha con texto explicativo -->
    <div class="lightSection col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <!-- Título de la sección -->
            <h2 class="sectionTitle text-center font-bold m-3">¿Por qué estudiar Ingeniería Electrónica?</h2>
            <div class="sectionSeparator"></div>
          </div>
          <div class="col-12" style="text-align: center;">
            <!-- Párrafo de texto justificado que explica las razones -->
            <p style="text-align: justify;">
              Estudiar Ingeniería Electrónica ofrece la oportunidad de sumergirse en el
              mundo de la tecnología, desarrollar habilidades en diseño, análisis y desarrollo
              de sistemas electrónicos. Además, brinda amplias perspectivas laborales en industrias
              como la automotriz, de telecomunicaciones, energética y de dispositivos médicos,
              entre otras.
            </p>
            <!-- Botón que enlaza a otra página para obtener más información -->
            <a class="btn btn-warning font-bold" href="?option=3" role="button">¡Saber más!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Fin Razones para estudiar la carrera -->

<!-- Areas de aprendizaje -->
<section class="lightSection bg-light p-2">
  <!-- Título de la sección -->
  <h2 class="sectionTitle text-center font-bold m-3">Áreas de aprendizaje</h2>
  <div class="sectionSeparator"></div> <!-- Línea separadora -->

  <!-- Contenedor de las áreas de aprendizaje -->
  <div class="row g-0">

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3.php">
          <img class="areaImage items-center" src="img/icoElectro/ico1-ElectroAnalogica.png" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Electrónica analógica</h3>
        <p class="areaText">Estudio de los circuitos y dispositivos electrónicos que operan con
          señales analógicas, como amplificadores, filtros y sensores</p>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3">
          <img class="areaImage items-center" src="img/icoElectro/ico2-circuitoElectrico.png" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Electrónica digital</h3>
        <p class="areaText">Diseño y análisis de sistemas digitales, incluyendo lógica digital,
          circuitos secuenciales y microprocesadores.</p>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3.php">
          <img class="areaImage items-center" src="img/icoElectro/ico3-comunicaciones.png" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Comunicaciones</h3>
        <p class="areaText">
          Estudio de transmisión, recepción y procesamiento de señales en telefonía,
          redes inalámbricas y transmisión de datos.</p>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3">
          <img class="areaImage items-center" src="img/icoElectro/ico4-micro.png" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Microelectrónica</h3>
        <p class="areaText">Estudio de los circuitos y dispositivos electrónicos a pequeña escala,
          incluyendo el diseño y fabricación de circuitos integrados y microchips.</p>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3">
          <img class="areaImage items-center" src="img/icoElectro/ico5-instrumentacion.png" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Instrumentación</h3>
        <p class="areaText">Diseño de instrumentos y sistemas de medición electrónica para investigación
          científica, control industrial y medicina.</p>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3">
          <img class="areaImage items-center" src="img/icoElectro/ico6-electromagnetismo.png" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Electromagnetismo</h3>
        <p class="areaText">
          Estudio de fenómenos electromagnéticos y su aplicación en la electrónica para diseñar
          y desarrollar dispositivos y sistemas.</p>
      </div>
    </div>

  </div>
</section>
<!-- Fin Áreas de aprendizaje-->


<!-- Instalaciones -->
<section class="darkSection bg-dark p-2 px-4">
  <!-- Contenedor principal de la sección -->
  <div class="row mb-4 px-2 g-0">

    <!-- Columna izquierda: Descripción de las instalaciones -->
    <div class="col-lg-6 col-12 py-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <!-- Título de la sección -->
            <h2 class="titleDarkSection text-center font-bold m-3">Instalaciones</h2>
            <div class="darkSectionSeparator"></div> <!-- Línea separadora -->
          </div>
          <div class="col-12 px-4" style="text-align: center;">
            <!-- Descripción de las instalaciones -->
            <p class="text-light" style="text-align: justify;">
              El Departamento de Ingeniería Electrica - Electronica cuenta con diversos laboratorios
              que son espacios esenciales para el aprendizaje práctico de los estudiantes, donde
              pueden aplicar sus conocimientos teóricos, desarrollar habilidades técnicas y experimentar
              con tecnologías avanzadas en las carreras de Ingeniería Electrica y Electronica. <br /><br />

              Los laboratorios brindan la oportunidad de aplicar sus conocimientos teóricos,
              desarrollar habilidades técnicas y experimentar con tecnologías avanzadas
              en el campo de la electrónica.
            </p>
            <!-- Botón para explorar más sobre las instalaciones -->
            <a class="btn btn-warning font-bold" href="?option=4" role="button">¡Explorar!</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Columna derecha: Imagen de las instalaciones -->
    <div class="col-lg-6 col-12 p-4 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src="img/Electronica/instalaciones2.jpg" alt="">
      </div>
    </div>

  </div>
</section>
<!--Fin Instalaciones-->

<!-- Comunidad docente  -->
<section class="p-2 bg-light">
  <div class="row px-2 g-0">
    <!-- Columna izquierda con imágenes de profesores -->
    <div class="col-lg-6 col-sm-12">
      <div class="galleryContainer bg-light">
        <div class="row g-0">
          <div class="col-4 px-2">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen1; ?>' alt="">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen2; ?>' alt="">
          </div>

          <div class="col-4 px-2">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen3; ?>' alt="">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen4; ?>' alt="">
          </div>

          <div class="col-4 px-2">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen5; ?>' alt="">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen6; ?>' alt="">
          </div>

        </div>
      </div>
    </div>
    <!-- Columna derecha con información sobre la comunidad docente -->
    <div class="lightSection col-lg-6 col-12 px-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">Comunidad docente</h2>
            <div class="sectionSeparator"></div>
          </div>
          <div class="col-12" style="text-align: center;">
            <p style="text-align: justify;"> Nuestros profesores son impulsores de cambio, son el elemento esencial de
              nuestra institución, contamos con profesores y profesoras de diversas disciplinas, quienes demuestran diariamente
              su compromiso más allá de las aulas. Son profesionales que tienen la facultad de transformar vidas, de impactar a
              las futuras generaciones de estudiantes.
            </p>
            <a class="btn btn-warning font-bold" href="?option=2" role="button">¡Conocer docentes!</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Fin Comunidad docente -->

<!-- Enlaces -->
<section class="lightSection bg-light p-2">
  <h2 class="sectionTitle text-center font-bold m-3">Enlaces</h2>
  <div class="sectionSeparator"></div>

  <!-- Row que contiene los enlaces -->
  <div class="row g-0 justify-content-center">

    <!-- Primer enlace -->
    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4 rounded-3">
        <a href="http://gestion.itver.edu.mx/servicio-social/" target="_blank">
          <img class="img-fluid w-100 shadow-1-strong rounded mb-4 p-1" src="img/gestionVinculacion.jpg" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Servicio social</h3>
      </div>
    </div>

    <!-- Segundo enlace -->
    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4 rounded-3">
        <a href="http://www.veracruz.tecnm.mx/" target="_blank">
          <img class="img-fluid w-100 shadow-1-strong rounded mb-4  p-1" src="img/ITVER-10.webp" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">TECNM Veracruz</h3>
      </div>
    </div>

    <!-- Tercer enlace -->
    <!-- <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4 rounded-3">
        <a href="?option=5">
          <img class="img-fluid w-90 shadow-1-strong rounded mb-4  p-1" src="img/comunidad.webp" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Comunidades</h3>
      </div>
    </div>-->



  </div>
</section>
<!-- Fin Enlaces -->

<!- Área de redes sociales -->
  <section class="lightSection p-2 g-0">
    <div class="row g-0">
      <div class="col">
        <h2 class="sectionTitle text-center font-bold m-3">Redes sociales</h2>
        <div class="sectionSeparator"></div>
      </div>
    </div>
  </section>
  <section class="p-2 g-0">
    <div class="row g-0">
      <div class="col-12 col-md-6">

        <h4 class="sectionTitle text-center font-bold">Tecnológico Nacional de México</h4>

        <div class="d-flex flex-row justify-content-center">
          <a class="mx-2" href="https://www.tecnm.mx/" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column justify-content-center">
              <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/tecnm-logo.PNG" alt="">
            </div>
          </a>
          <a class="mx-2" href="https://www.facebook.com/TecNMmx" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-row justify-content-center">
              <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/facebook.PNG" alt="">
            </div>
          </a>
          <a class="mx-2" href="https://twitter.com/TecNM_MX" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-row justify-content-center">
              <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/twitterX.png" alt="">
            </div>
          </a>
          <a class="mx-2" href="https://www.youtube.com/user/SNESTMX" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-row justify-content-center">
              <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/youtube.PNG" alt="">
            </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <h4 class="sectionTitle  text-center font-bold">Instituto Tecnológico de Veracruz</h4>
        <div class="d-flex flex-row justify-content-center">
          <a class="mx-2" href="https://www.veracruz.tecnm.mx/index.php" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-row justify-content-center">
              <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/itver-logo.PNG" alt="">
            </div>
          </a>
          <a class="mx-2" href="https://www.facebook.com/ITVeracruz" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-row justify-content-center">
              <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/facebook.PNG" alt="">
            </div>
          </a>
          <a class="mx-2" href="https://twitter.com/TecNM_Veracruz" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-row justify-content-center">
              <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/twitterX.png" alt="">
            </div>
          </a>
          <a class="mx-2" href="https://www.youtube.com/channel/UCVBkOP_rj5ulvlriG88jTzA" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-row justify-content-center">
              <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/youtube.PNG" alt="">
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- <div class="row g-0">
    <h4 class="sectionTitle  text-center font-bold">Departamento de Ingeniería Eléctrica - Electrónica</h4>
    <div class="d-flex flex-row justify-content-center">
      <a class="mx-2" href="https://www.facebook.com/profile.php?id=100065327956621" target="_blank"
        style="text-decoration: none;">
        <div class="d-flex flex-row justify-content-center">
          <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="width: 40px" src="img/iconos/facebook.PNG"
            alt="">
        </div> -->
    </a>
    <!--   <a class="mx-2" href="https://www.youtube.com/channel/UCYSUOZ6V9YRGviVvwaXOcjw" target="_blank"
          style="text-decoration: none;">
          <div class="d-flex flex-row justify-content-center">
            <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/youtube.PNG"
              alt="">
          </div>
        </a>-->
    </div>
    </div>
  </section>
  <!-- Fin Área de redes sociales -->