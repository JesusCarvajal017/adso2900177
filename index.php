<?php
  require('model/db/cnxion.php');

  $cxion = new Conexion();

  session_start();
  // session_destroy();

  if(!isset($_SESSION['user_id'])){
    header('Location: Views/authentication-login.php');
  }
    
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADSO</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logo-sena.png" />
  <link rel="stylesheet" href="assets/libs/bootstrap/scss/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
  <link rel="stylesheet" href="assets/libs/Swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/general.css">


</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="" class="text-nowrap logo-img">
            <img src="assets/images/logo-sena.png" width="70" alt="" />
          </a>
          <h3>Proyectos</h3>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Bienvenidos</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">GRUPOS</span>
            </li>
            <!-- Grupo01 -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="Views/Grupos/card-01.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                  </svg>
                </span>
                <span class="hide-menu">Aqua Memorize</span>
              </a>
            </li>

            <!-- Grupo02 -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="Views/Grupos/card-02.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                  </svg>
                </span>
                <span class="hide-menu">Arcade Memory</span>
              </a>
            </li>

            <!-- Grupo03 -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="Views/Grupos/card-03.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                  </svg>
                </span>
                <span class="hide-menu">Neurodash</span>
              </a>
            </li>

            <!-- Grupo04 -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="Views/Grupos/card-04.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                  </svg>
                </span>
                <span class="hide-menu">Food Memorize</span>
              </a>
            </li>

            <!-- Grupo05 -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="Views/Grupos/card-05.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                  </svg>
                </span>
                <span class="hide-menu">Memory Start</span>
              </a>
            </li>

            <!-- Grupo06 -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="Views/Grupos/card-06.php" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                  </svg>
                </span>
                <span class="hide-menu">PAT Game</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Excel</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Views/matriz-riesgos.php" aria-expanded="false">
                <span>
                  <i class="ti ti-table"></i>
                </span>
                <span class="hide-menu">Matriz de Riesgos</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Views/cuestionario.php" aria-expanded="false">
                <span>
                  <i class="ti ti-table"></i>
                </span>
                <span class="hide-menu">Cuestionario</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <div class="body-wrapper">
      <!-- Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link ">
                ADSO
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <!-- Icono Usuario -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <!-- Botón Cerrar Sesión -->
                    <a href="Model/login/cerrarSession.php" class="btn btn-outline-primary mx-5 mt-2 d-flex justify-content-center align-items-center gap-2">
                      <div>Salir</div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M9 12h12l-3 -3" />
                        <path d="M18 15l3 -3" />
                      </svg>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Header End -->
      <div class="container-fluid">
        <h1 class="title-dashboard">FICHA - 2900177</h1>
        <div class="container-fluid mb-5">
          <!-- Seccion Integrantes -->
          <div class="card m-auto">
            <div class="card-body p-0">
              <div class="row p-2">
                <div class="col-md-6">
                  <!-- Contenido Intregrantes -->
                  <div class="contenedor-mosaico">
                    <img src="assets/images/ADSO/Mosaico.png" alt="mosaico">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="contenedor-descripcion">
                    <div class="carta-descripcion">
                      <h2>¡Bienvenidos!</h2>
                      <div class="contendor-parrafo">
                        <p>Estas en el portafolio de proyectos ADSO-2900177. Aquí podrás explorar y encontrar toda la informacion relacionada con los proyectos de esta gran ficha.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="container-fluid">
          <div class="card m-auto">
            <div class="card-body p-0">
              <div class="contendor-proyectos p-2">
                <h2 class="title-proyectos">Proyectos</h2>
                <div class="carruel-proyectos">
                  <div class="swiper mySwiper container">
                    <div class="swiper-wrapper content">

                      <!-- Carta Grupo 01 -->
                      <div class="swiper-slide card-proyecto">
                        <div class="card-content">
                          <div class="contenedor-img">
                            <img src="assets/images/Logos Juegos/AQUA.png" alt="">
                          </div>

                          <div class="contenedor-detalles">
                            <span class="nombre-proyecto">AQUA MEMORIZE</span>
                            <span class="descripcion-proyecto">Nombre Grupo</span>
                          </div>


                          <div class="contenedor-btn mb-1">
                            <a href="Views/Grupos/card-01.php">
                              <button class="btn-visitar">
                                <span>Visitar</span>
                                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                  <path
                                    clip-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                    fill-rule="evenodd"></path>
                                </svg>
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>

                      <!-- Carta Grupo 02 -->
                      <div class="swiper-slide card-proyecto">
                        <div class="card-content">
                          <div class="contenedor-img">
                            <img src="assets/images/Logos Juegos/ARCADE.png" alt="">
                          </div>

                          <div class="contenedor-detalles">
                            <span class="nombre-proyecto">ARCADE MEMORY</span>
                            <span class="descripcion-proyecto">Nombre Grupo</span>
                          </div>


                          <div class="contenedor-btn mb-1">
                            <a href="Views/Grupos/card-02.php">
                              <button class="btn-visitar">
                                <span>Visitar</span>
                                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                  <path
                                    clip-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                    fill-rule="evenodd"></path>
                                </svg>
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>

                      <!-- Carta Grupo 03 -->
                      <div class="swiper-slide card-proyecto">
                        <div class="card-content">
                          <div class="contenedor-img">
                            <img src="assets/images/Logos Juegos/DASH.png" alt="">
                          </div>

                          <div class="contenedor-detalles">
                            <span class="nombre-proyecto">NEURODASH</span>
                            <span class="descripcion-proyecto">Nombre Grupo</span>
                          </div>


                          <div class="contenedor-btn mb-1">
                            <a href="Views/Grupos/card-03.php">
                              <button class="btn-visitar">
                                <span>Visitar</span>
                                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                  <path
                                    clip-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                    fill-rule="evenodd"></path>
                                </svg>
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>

                      <!-- Carta Grupo 04 -->
                      <div class="swiper-slide card-proyecto">
                        <div class="card-content">
                          <div class="contenedor-img">
                            <img src="assets/images/Logos Juegos/FOOD.png" alt="">
                          </div>

                          <div class="contenedor-detalles">
                            <span class="nombre-proyecto">FOOD MEMORIZE</span>
                            <span class="descripcion-proyecto">Nombre Grupo</span>
                          </div>


                          <div class="contenedor-btn mb-1">
                            <a href="Views/Grupos/card-04.php">
                              <button class="btn-visitar">
                                <span>Visitar</span>
                                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                  <path
                                    clip-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                    fill-rule="evenodd"></path>
                                </svg>
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>

                      <!-- Carta Grupo 05 -->
                      <div class="swiper-slide card-proyecto">
                        <div class="card-content">
                          <div class="contenedor-img">
                            <img src="assets/images/Logos Juegos/MEMORY-START.png" alt="">
                          </div>

                          <div class="contenedor-detalles">
                            <span class="nombre-proyecto">MEMORY START</span>
                            <span class="descripcion-proyecto">Nombre Grupo</span>
                          </div>


                          <div class="contenedor-btn mb-1">
                            <a href="Views/Grupos/card-05.php">
                              <button class="btn-visitar">
                                <span>Visitar</span>
                                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                  <path
                                    clip-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                    fill-rule="evenodd"></path>
                                </svg>
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>

                      <!-- Carta Grupo 06-->
                      <div class="swiper-slide card-proyecto">
                        <div class="card-content">
                          <div class="contenedor-img">
                            <img  src="assets/images/Logos Juegos/PAT.png" width="80px" height="80px" alt="">
                          </div>

                          <div class="contenedor-detalles">
                            <span class="nombre-proyecto">PAT GAME</span>
                            <span class="descripcion-proyecto">Jovenes Promesas</span>
                          </div>


                          <div class="contenedor-btn mb-1">
                            <a href="Views/Grupos/card-06.php">
                              <button class="btn-visitar">
                                <span>Visitar</span>
                                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                  <path
                                    clip-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                    fill-rule="evenodd"></path>
                                </svg>
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <script src="assets/libs/Swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/carrusel.js"></script>
    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="assets/js/dashboard.js"></script>

</body>

</html>