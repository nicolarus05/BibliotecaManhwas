<?php
class Seguridad {
    //Compobamos si hay alguna sesion iniciada.
    public static function iniciarSesion() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    //Llamamos al metodo inicarSesion para comprobar si el usuario a iniciado sesion o no.
    public static function verificarSesion() {
        self::iniciarSesion();
        return isset($_SESSION['usuario_id']);
    }

    //Llamamos al metodo iniciarSesion para comprobar si el usuario a iniciado sesion y despues verificamos su rol.
    //esto nos permitira restringir a donde podra entrar el usuario y a donde no.
    public static function verificarRol($rolRequerido) {
        self::iniciarSesion();
        return isset($_SESSION['usuario_rol']) && $_SESSION['usuario_rol'] === $rolRequerido;
    }

    //Simplemente cerramos la sesion del usuario.
    public static function cerrarSesion() {
        self::iniciarSesion();
        session_unset();
        session_destroy();
        header("Location: vistaLogin.php");
    }
}
?>