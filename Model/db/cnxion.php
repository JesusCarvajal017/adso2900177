<?php
    class Conexion{
        private $dns;
        private $server;
        private $dbname;
        private $user;
        private $password;

        public function __construct(){
            require 'cnxion_config.php';

            $this->server = $SERVER;
            $this->dbname = $NAME_DB;
            $this->user = $USER;
            $this->password = $PASSWORD;
        }

        public function conexionDb(){
            $this->dns = 'pgsql:host='.$this->server.';dbname='.$this->dbname.'';
            try {
                $conexion = new PDO($this->dns, $this->user, $this->password);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // echo "conexion a al base de datos exitosa";
            } catch (PDOException $e) {
                echo "Error al conectar al base de datos: ". $e->getMessage();
            }

            return $conexion;
        }

        public function consultar($sql){
            $conexion = $this->conexionDb();
            $consulta = $conexion->query($sql);
            $resultado =[];
            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)){
                $resultado[]= $fila;
            } 
            return $resultado;
        }

        public function consultaIndividual($sql, $values){
            $conexion = $this->conexionDb();
            $consulta = $conexion->prepare($sql);
            $consulta->execute($values);

            $resultado = [];

            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)){
                $resultado[]= $fila;
            } 
            return $resultado;
        }

        // insert, update, delete
        public function ejecutar($sql, $value){
            $conexion = $this->conexionDb();
            $consulta = $conexion->prepare($sql);
            $consulta->execute($value);

            return $consulta;
        }

        // verificacion de registro
        public function numRegistros($sql, $values){
            $conexion = $this->conexionDb();
            $consulta = $conexion->prepare($sql);
            $consulta->execute($values);

            $num = $consulta->rowCount();

            return $num;
        }
    }
?>