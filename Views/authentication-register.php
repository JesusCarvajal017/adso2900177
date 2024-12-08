<?php
  require '../model/db/cnxion.php';
  session_start();

  if(isset($_SESSION['user_id'])){
    header('Location: ../index.php');
  }

  $cxion = new Conexion();

  // consultas
  $query_rol = "SELECT * FROM rol";
  $query_proyectos = "SELECT * FROM proyectos";

  // informacion de la db
  $data_rol = $cxion->consultar($query_rol);
  $data_proyectos = $cxion->consultar($query_proyectos);

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-sena.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/parchers.css" />
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
                  <img src="../assets/images/logos/logo-sena.png" width="90" alt="">
                </div>
                <p class="text-center">ADSO-2900177</p>
                <form action="../model/registro/registro.php" method="post">
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nameUser" name="txtNameUser" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="emailUser" name="txtEmailUser" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="rol" class="form-label">Rol</label>
                    <select class="form-select select-rol" id="rol" aria-label="Selecciona tu rol" name="txtRolUser">
                      <option disabled selected>Elige un rol</option>
                      <?php
                        foreach($data_rol as $fila){
                          $id_rol = $fila['rol_id'];
                          $name_rol = $fila['nombre'];
                      
                          echo "<option value='".$id_rol."'>".$name_rol."</option>"; 
                        }
                      ?>
                    </select>
                  </div>

                  <div class="mb-3 select-proyecto">
                    <label for="rol" class="form-label">Grupo</label>
                    <select class="form-select" id="rol" aria-label="Selecciona tu rol" name="txtProyectoUser">
                      <option value="" disabled selected>Elige un proyecto</option>
                      <?php
                        foreach($data_proyectos as $fila){
                          $id_proyecto = $fila['proyecto_id'];
                          $name_proyecto = $fila['nombre'];
                      
                          echo "<option value='".$id_proyecto."'>".$name_proyecto."</option>"; 
                        }
                      ?>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="txtPassword">
                  </div>
                  <!-- <a href="../index.php" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Registrarse</a> -->
                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Registrarse</button>
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
  <script src="../controller/controladores.js"></script>
</body>

</html>