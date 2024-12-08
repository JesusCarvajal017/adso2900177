<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logo-sena.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <div class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logo-sena.png" width="90" alt="">
                </div>
                <p class="text-center">ADSO-2900177</p>
                <form>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <!-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Rol</label>
                    <input type="text" class="form-control" id="exampleInputRol" aria-describedby="RolHelp">
                  </div> -->
                  <div class="mb-3">
                    <label for="rol" class="form-label">Rol</label>
                    <select class="form-select" id="rol" name="rol" aria-label="Selecciona tu rol">
                      <option value="" disabled selected>Elige un rol</option>
                      <option value="1">Instructor</option>
                      <option value="2">Memory-Star</option>
                      <option value="3">Aquac-Memory</option>
                      <option value="4">PAT GAME</option>
                      <option value="5">NEURODASH</option>
                      <option value="6">ARCADE MEMORY</option>
                      <option value="7">FOOD MEMORIZE</option>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <a href="../index.php" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Registrarse</a>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Ya tienes cuenta?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-login.php">Iniciar Sesion</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>