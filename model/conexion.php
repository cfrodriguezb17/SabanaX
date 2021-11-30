<?php

    class conexion
    {

        public function get_conexion(){
            $user="root";
            $pass="";
            $host="localhost";
            $db="sabanax";

            $conexion = new PDO("mysql: host=$host; dbname=$db", $user, $pass);
            return $conexion;
        }

    }

?>