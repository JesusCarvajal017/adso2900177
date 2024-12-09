<?php
    require '../db/cnxion.php';

    $cxion = new Conexion();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nombre_user =  $_POST['txtNameUser'];
        $email_user =  $_POST['txtEmailUser'];
        $rol_user = $_POST['txtRolUser'];
        $rol_proyecto = $_POST['txtProyectoUser'] ?? null;
        $password_user =  strval($_POST['txtPassword']);

        $sql_registro = "INSERT INTO usuario(
                                    rol_id, 
                                    proyecto_id, 
                                    nombre_persona, 
                                    email_persona, 
                                    password_pers)
                            VALUES (:id_rol, 
                                    :id_proyecto, 
                                    :name_persona, 
                                    :email_user, 
                                    :password_user);";

        $values = [
            ":id_rol" => $rol_user,
            ":id_proyecto" => $rol_proyecto,
            ":name_persona" => $nombre_user,
            ":email_user" => $email_user,
            ":password_user" => $password_user
        ];

        $cxion->ejecutar($sql_registro, $values);
        
        header('Location: ../../Views/authentication-login.php');

    }

?>