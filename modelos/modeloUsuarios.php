<?php
require_once './seguridad/conexion.php';
require_once './modelo.php';

class ModeloUsuarios extends Modelo{
    //contructor de la clase ModeloUsuarios
    public function __construct(){
        parent::__construct("usuario"); //le pasamos por parametro el nombre de la tabla con la que trabajaremos
    }

    //Metodo para registrar a un nuevo usuario.
    public function registrarUsuario($nombre, $apellidos, $edad, $correo, $login, $password, $rol = 'usuario'){
        $salt = random_int(10000000, 99999999);
        $hashPassword = password_hash($password . $salt, PASSWORD_DEFAULT);

        $sql = 'INSER INTO usuario (nombre, apellidos, edad, correo, login, password, rol) VALUES (?, ?, ?, ?, ?, ?, ?)';
        return $this->ejecutarActualizacion($sql, [$nombre, $apellidos, $edad, $correo, $login, $hashPassword, $salt, $rol]);
    }

    //Metodo para logear a un usuario registrado.
    public function loginUsuario($login, $password){
        $sql = 'select id, password, salt FROM usuario WHERE login = ?';
        $resultado = $this->ejecutarConsulta($sql, [$login]);

        //si la consulta encuentra al usuario registrado en la bd.
        if($resultado){
            //obtendra su contraseña.
            $hashPassword = $resultado[0]['password'];
            $salt = $resultado[0]['salt'];

            //comprobamos que la contraseña introducida por el usuario sea la misma que tenemos en la bd.
            if(password_verify($password . $salt, $hashPassword)){
                //si las contraseñas coinciden devolvera el id de dicho usuario.
                return $resultado[0]['id'];
            }
        }
        return false;
    }

    //Metodo para obtener un usuario por su id.
    public function obtenerUsuario($id){
        $sql = 'SELECT id, nombre, apellidos, edad, correo, login FROM usuario WHERE id = ?';
        $resultado = $this->ejecutarConsulta($sql, [$id]);

        //si la consulta encuentra al usuario lo devolvera sino devolvera null.
        return $resultado ? $resultado[0] : null;
    }

    //Metodo para modificar un usuario.
    public function modificarUsuario($id, $nombre, $apellidos, $edad, $correo){
        $sql = "UPDATE usuario SET nombre = ?, apellidos = ?, edad = ?, correo = ? WHERE id = ?";
        return $this->ejecutarActualizacion($sql, [$nombre, $apellidos, $edad, $correo, $id]);
    }
}