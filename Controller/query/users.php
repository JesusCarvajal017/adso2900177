<?php
    class User{
        private $consulta;
        private $conexion;

        public function __construct($cnxion){
            $this->conexion = $cnxion;
        }

        public function integrantesPry($name){
            $this->consulta = "SELECT rol.nombre, proyectos.nombre, usuario.nombre_persona, usuario.email_persona
                                    FROM usuario
                                JOIN rol
                                    ON rol.rol_id = usuario.rol_id
                                JOIN proyectos
                                    ON usuario.proyecto_id = proyectos.proyecto_id
                                WHERE proyectos.nombre = :name_proyecto";

            $values = [
                ":name_proyecto" => $name
            ];

            $resultado = $this->conexion->consultaIndividual($this->consulta, $values);

            return $resultado;
        }

    }

?>