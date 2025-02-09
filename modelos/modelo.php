<?php
require_once './seguridad/conexion.php';

class Modelo{
    //Atributos de la clase modelo
    protected $conexion;
    protected $tabla;

    //Constructor de la clase modelo
    protected function __construct($tabla){
        $this->conexion = $this->conectar();
        $this->tabla = $tabla;
    }

    //Metodo para establecer la conexion con la base de datos.
    protected function conectar(){
        return Conexion::getConexion();
    }

    //Metodo para ejecutar consultas sql(SELECT).
    protected function ejecutarConsulta($sql, $parametros = []){
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute($parametros);
        return $stmt->fetchAll();
    }

    //Metodo para ejecutar consultas sql(INSERT, UPDATE, DELETE).
    protected function ejecutarActualizacion($sql, $parametros = []){
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute($parametros);
        return $stmt->fetchAll();
    }

    //Metodo para obtener todos los datos de una tabla
    public function obtenerTodos(){
        $sql = 'SELECT * FROM {$this->tabla}';
        return $this->ejecutarConsulta($sql);
    }

    //metodo para eliminar datos de una tabla.
    public function eliminar($id){
        $sql = 'DELETE FROM {$this->tabla} WHERE id = :id';
        return $this->ejecutarActualizacion($sql, [':id' => $id]);
    }
}