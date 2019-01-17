<?php
class Conexion {
    public function get_conexion(){
        $user = "postgres";
        $pass = "roger130296";
        $host = "localhost";
        $db = "pedido";

        $conexion = new PDO ("pgsql:host=$host;dbname=$db",$user,$pass);
        return $conexion;
    }
}
?>