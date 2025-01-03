<!DOCTYPE html>
<html lang="en">

<head> <!-- Ultimos cambios realizados, todo el sistema esta completo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mockup Tinkuna Games</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css"> <!-- CSS personalizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap CSS -->
   <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">-->

   <style>
    .subscription-row {
      display: flex; /* Alinear los elementos en una fila */
      align-items: center; /* Centrar verticalmente */
      gap:150px; /* Espacio entre los elementos */
      background-color: #ff6600; /* Fondo naranja para la fila */
      padding: 50px;
    }

    .subscribe-text {
      color: white; /* Texto blanco */
      font-size: 1.3rem;
      font-weight: bold;
      flex-basis: 10%; /* Asegura que ocupe toda la línea */
    }

    .input-field {
      border: 2px solid white; /* Borde blanco */
      background-color: #ff6600; /* Fondo naranja */
      color: white; /* Texto blanco */
      padding: 10px;
      border-radius: 5px; /* Bordes redondeados */
      font-size: 1rem;
      outline: none; /* Quitar el borde azul al enfocar */
      width: 325px; /* Ancho predeterminado */
    }

    .input-field::placeholder {
      color: white; /* Color blanco para el placeholder */
      opacity: 0.7; /* Un poco más tenue */
    }

    .subscribe-button {
      background-color: white; /* Fondo blanco */
      color: orange; /* Texto naranja */
      padding: 10px;
      border: 2px solid orange; /* Borde naranja */
      border-radius: 5px; /* Bordes redondeados */
      font-size: 1rem;
      cursor: pointer; /* Cambiar a cursor de mano */
      font-weight: bold;
    }

    .subscribe-button:hover {
      background-color: #ff6600; /* Fondo naranja al pasar el mouse */
      color: white; /* Texto blanco */
      transition: 0.3s; /* Suavizar la transición */
    }
</style>






</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light logo-nav">
  <div class="container-fluid">
    <!-- Logo con fondo naranja -->
    <a href="index.php" class="navbar-brand logo">TINKUNAGAMES</a>
    <!-- Botón del menú responsive -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Contenido del navbar -->
    <div class="collapse navbar-collapse" id="navbarContent">
      <!-- Enlaces principales alineados a la izquierda -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="nosotros.php">Nosotros</a></li>
        <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Inicio Sesión</a></li>
      </ul>
      <!-- Carrito alineado a la derecha -->
      <div class="navbar-nav ms-auto">
        <a href="carrito.php" class="btn btn-outline-primary ms-2">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </div>
    </div>
  </div>
</nav>
</header>

    <!-- Banner -->
    <div class="banner">
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <p class="text-uppercase">Juego de Mesa, Estrategia</p>
            <h1>CATAN PARA INICIANTES</h1>
            <p>Una guía completa para nuevos jugadores de Catan. Aprende las reglas básicas, estrategias iniciales y consejos útiles para comenzar tu aventura en la isla de Catan.</p>
            <div class="banner-buttons">
                <a href="productos.php" class="btn btn-primary">Descubre Más</a>
                <a href="productos.php" class="btn btn-outline-light">Comprar Ahora</a>
            </div>
        </div>
    </div>

    <!-- Botones grandes -->
    <div class="large-buttons">
        <a href="productos.php" class="large-button btn-juegos">
            <span>Juegos de Mesa</span>
        </a>
        <a href="#" class="large-button btn-accesorios">
            <span>Accesorios</span>
        </a>
        <a href="#" class="large-button btn-eventos">
            <span>Eventos</span>
        </a>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <section id="productos" class="productos py-5">
    <div class="container">
        <div class="row">
            <!-- Botones de filtros -->
            <div class="text-center mb-4">
            <div class="btn-group" role="group" aria-label="Filtros de Productos">
               <button type="button" class="btn btn-outline-primary active">Todos</button>
               <button type="button" class="btn btn-outline-primary">Juegos de Mesa</button>
               <button type="button" class="btn btn-outline-primary">Juegos de Cartas</button>
               <button type="button" class="btn btn-outline-primary">Estrategia</button>
               <button type="button" class="btn btn-outline-primary">Gestión de Recursos</button>
               <button type="button" class="btn btn-outline-primary">Temáticos</button>
              </div>
             </div>
            <!-- Tarjeta de Producto -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets\imag\imagesCATAN.jpeg" class="card-img-top" alt="CATAN">
                    <div class="card-body text-center">
                        <h5 class="card-title">CATAN</h5>
                        <p class="card-text">Descripción breve del producto.</p>
                        <a href="productos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Tarjetas adicionales duplicando esta estructura -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets\imag\Img_Product2.png" class="card-img-top" alt="TICKET TO RIDE">
                    <div class="card-body text-center">
                        <h5 class="card-title">TICKET TO RIDE</h5>
                        <p class="card-text">Descripción breve del producto.</p>
                        <a href="productos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets\imag\Img_Product3.png" class="card-img-top" alt="7 WONDERS">
                    <div class="card-body text-center">
                        <h5 class="card-title">7 WONDERS</h5>
                        <p class="card-text">Descripción breve del producto.</p>
                        <a href="productos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets\imag\Img_Product4.png" class="card-img-top" alt="TERRAFORMING MARS">
                    <div class="card-body text-center">
                        <h5 class="card-title">TERRAFORMING MARS</h5>
                        <p class="card-text">Descripción breve del producto.</p>
                        <a href="productos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets\imag\Img_Product5.png" class="card-img-top" alt="NETRUNNER">
                    <div class="card-body text-center">
                        <h5 class="card-title">NETRUNNER</h5>
                        <p class="card-text">Descripción breve del producto.</p>
                        <a href="productos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets\imag\Img_Product6.png" class="card-img-top" alt="AGRICOLA">
                    <div class="card-body text-center">
                        <h5 class="card-title">AGRICOLA</h5>
                        <p class="card-text">Descripción breve del producto.</p>
                        <a href="productos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets\imag\Img_Product7.png" class="card-img-top" alt="PANDEMIC">
                    <div class="card-body text-center">
                        <h5 class="card-title">PANDEMIC</h5>
                        <p class="card-text">Descripción breve del producto.</p>
                        <a href="productos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets\imag\Img_Product8.png" class="card-img-top" alt="ARK NOVA">
                    <div class="card-body text-center">
                        <h5 class="card-title">ARK NOVA</h5>
                        <p class="card-text">Descripción breve del producto.</p>
                        <a href="productos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Botón de navegación -->
    <div class="text-center mt-4">
    <a href="productos.php" class="btn btn-primary btn-lg">Todos los Juegos</a>
  </div>
  </section>

  <!-- Botón de navegación -->
 
 <section class="buscar-juego">
  <!-- Navegador de búsqueda -->
  <div class="container-fluid bg-orange py-4">
    <div class="container">
      <h2 class="text-white text-uppercase text-center mb-4">Buscar Juego</h2>
      <form class="row g-3">
        <div class="col-md-3">
          <input type="text" class="form-control" placeholder="Palabras Claves">
        </div>
        <div class="col-md-2">
          <select class="form-select">
            <option selected>Plataforma</option>
            <option value="1">PC</option>
            <option value="2">Consola</option>
            <option value="3">Tablero</option>
          </select>
        </div>
        <div class="col-md-2">
          <select class="form-select">
            <option selected>Género</option>
            <option value="1">Estrategia</option>
            <option value="2">Acción</option>
            <option value="3">Aventura</option>
          </select>
        </div>
        <div class="col-md-2">
          <select class="form-select">
            <option selected>Idioma</option>
            <option value="1">Español</option>
            <option value="2">Inglés</option>
            <option value="3">Otros</option>
          </select>
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-light w-100">Buscar</button>
        </div>
      </form>
    </div>
  </div>
 </section>

 <section class="blog-highlight my-5">
  <div class="banner-container position-relative">
    <!-- Imagen de fondo -->
    <div class="banner-fondo"></div>
    <!-- Contenido sobrepuesto -->
    <div class="container position-relative text-white py-5">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="assets/imag/Blog_Highlight.png" alt="Zombicide" class="img-fluid banner-img">
        </div>
        <div class="col-md-6">
          <h3 class="text-uppercase fw-bold">Explorando <span class="text-warning">ARK NOVA</span></h3>
          <p>Sumérgete en el fascinante mundo de ARK NOVA, donde la estrategia y la creatividad se combinan para ofrecerte una experiencia única. Aprende a diseñar el zoológico perfecto.</p>
          <a href="productos.php" class="btn btn-primary">Descubre más</a>
        </div>
      </div>
    </div>
  </div>
 </section>

 <div class="subscription-row">
  <span class="subscribe-text">SUSCRIBETE</span>
  <input type="text" placeholder="Correo" class="input-field">
  <input type="text" placeholder="Nombre" class="input-field">
  <input type="text" placeholder="Apellido" class="input-field">
</div>

  <!-- Footer Social -->
  <footer class="footer">
    <div class="social-icons">
      <!-- Facebook -->
      <a href="https://www.facebook.com/profile.php?id=61562278854386" target="_blank" class="social-link">
        <img src="assets\imag\facebook-svgrepo-com.svg" alt="Facebook" class="icon">
        <span>Facebook</span>
      </a>
      <!-- Instagram -->
      <a href="https://www.instagram.com/elpobladobtg/" target="_blank" class="social-link">
        <img src="assets\imag\instagram-167-svgrepo-com.svg" alt="Instagram" class="icon">
        <span>Instagram</span>
      </a>
      <!-- TikTok -->
      <a href="https://www.tiktok.com/@el.poblado.by.tin" target="_blank" class="social-link">
        <img src="assets\imag\tiktok-svgrepo-com.svg" alt="TikTok" class="icon">
        <span>TikTok</span>
      </a>
    </div>
  </footer>

  <!-- Footer Principal -->
  <footer class="footer-container">
    <div class="container">
      <div class="row">
        <!-- Columna 1 -->
        <div class="col-md-4 mb-4">
          <h5>COLUMNA_FOOTER1</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at turpis ut neque consequat pellentesque. 
            Integer eget mauris vitae magna bibendum interdum non eu nunc. Sed efficitur velit a nulla blandit, sed tincidunt
            risus dictum. Curabitur dictum magna id eros fermentum, nec ultrices lacus suscipit. Cras vulputate, sapien sed 
            consequat.</p>

          <!-- Listas debajo del párrafo -->
          <div class="d-flex">
            <!-- Lista izquierda -->
            <ul class="custom-list" style="margin-right: 10px;">
              <li>Ipsum</li>
              <li>Ipsum</li>
              <li>Ipsum</li>
              <li>Ipsum</li>
            </ul>
            <!-- Lista derecha -->
            <ul class="custom-list">
              <li>Ipsum</li>
              <li>Ipsum</li>
              <li>Ipsum</li>
              <li>Ipsum</li>
            </ul>
          </div>
        </div>

        <!-- Columna 2 -->
        <div class="col-md-4 mb-4">
          <h5>COLUMNA_FOOTER2</h5>
          <div class="mb-3">
            <div class="d-flex align-items-start">
              <img src="imagenes/Ajedrez.jpeg" alt="Juego 1" class="me-3" style="width: 115px; height: 100px; object-fit: cover;">
              <div>
                <h6 class="fw-bold">TOP 5 JUEGOS DE MESA PARA PRINCIPIANTES</h6>
                <p class="mb-0">El clásico juego de estrategia para todas las edades.</p>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="d-flex align-items-start">
              <img src="imagenes/video juegos.png" alt="Juego 2" class="me-3" style="width: 115px; height: 100px; object-fit: cover;">
              <div>
                <h6 class="fw-bold">JUEGOS DE MESA IDEALES PARA APRENDER EN FAMILIA</h6>
                <p class="mb-0">Explora mundos fantásticos en este emocionante juego.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="d-flex align-items-start">
              <img src="imagenes/video juegos.png" alt="Juego 3" class="me-3" style="width: 115px; height: 100px; object-fit: cover;">
              <div>
                <h6 class="fw-bold">COMO ORGANIZAR UNA NOCHE DE JUEGOS INOLVIDABLE</h6>
                <p class="mb-0">Desafía a tus amigos con este juego de habilidad.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Columna 3 -->
        <div class="col-md-4 mb-4">
          <h5>COLUMNA_FOOTER3</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at turpis ut neque consequat pellentesque. 
            Integer eget mauris vitae magna bibendum interdum non eu nunc. Sed efficitur velit a nulla blandit, sed tincidunt
            risus dictum. Curabitur dictum magna id eros fermentum, nec ultrices lacus suscipit. Cras vulputate, sapien sed 
            consequat.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Mini Footer / Subfooter -->
  <div class="footer-mini-container">
    <div class="container">
      <div>
        <h5 class="footer-mini-text">TINKUNA <span>GAMES</span></h5>
      </div>
      <div>
        <p class="copyright">&copy; 2024 Todos los derechos reservados</p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script  src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="assets/js/iconos.js"></script>
</body>
</html>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script  src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="assets/js/iconos.js"></script>

</body>
</html>

