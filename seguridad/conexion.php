<?php
require_once '/../seguridad/Config.php';
class Conexion {
    private static $conexion;

    private function __construct() {}

    public static function getConexion(){
        if(!isset(self::$conexion)){
            try{
                self::$conexion = new PDO("mysql:host=".HOST.";port=".PUERTO.";dbname=".BASEDATOS, USUARIO, PASSWORD);
            }catch(PDOException $e){
                echo "Conexion con base de datos fallida" . $e->getMessage();
            }
        }
        return self::$conexion;
    }

    public function __destruct(){
        self::$conexion = null;
    }

    public static function lastError(){
        return self::$conexion->errorInfo();
    }
}
?>