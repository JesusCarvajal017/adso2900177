<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
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
            <img src="assets/images/logos/logo-sena.png" width="70" alt="" /> <h3>Proyectos</h3>
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
                <span class="hide-menu">Grupo</span>
              </a>
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
        <h5 class="m-0">SENA - ADSO</h5>
      </ul>
      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- Icono Usuario -->
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              </svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
              <div class="message-body">
                <!-- Botón Cerrar Sesión -->
                <a href="Views/authentication-login.php" class="btn btn-outline-primary mx-5 mt-2 d-flex justify-content-center align-items-center gap-2">
                  <div>Salir</div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
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
    <!-- Row 1 -->
    <div class="row">
      <!-- imagen -->
      <div class="col-md-6 d-flex justify-content-center">
        <img src="assets/images/logos/logo-sena.png" alt="Logo SENA" class="img-fluid" style="max-height: 300px;">
      </div>

      <!-- Texto -->
      <div class="col-md-6 d-flex align-items-center">
        <p class="text-center fs-5">
          Bienvenido al portafolio de proyectos ADSO-2900177. Aquí podrás explorar  y encontrar toda la informacion  relacionada con los proyectos
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/sidebarmenu.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="assets/libs/simplebar/dist/simplebar.js"></script>
<script src="assets/js/dashboard.js"></script>

</body>

</html>