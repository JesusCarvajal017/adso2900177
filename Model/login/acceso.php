<?php 
    require '../db/cnxion.php';

    $cnxion = new Conexion();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email_user = $_POST['txtEmial'];
        $password_user = $_POST['txtPassword'];

        // validacion de credenciales
        $consulta_verify = "SELECT persona_id FROM public.usuario
                            WHERE email_persona = :email_user AND password_pers = :password_user;";

        $values = [
            ":email_user" => $email_user,
            ":password_user" => $password_user
        ];

        $validation = $cnxion->numRegistros($consulta_verify, $values);

        if($validation == 1){
            session_start();
            $info_user = $cnxion->consultaIndividual($consulta_verify, $values);

            print_r($info_user);
            $_SESSION['user_id'] = $info_user[0]['persona_id'];
            header('Location: ../../index.php');
        }else{
            header('Location: ../../views/authentication-login.php');
        }

    }

?>