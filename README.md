# BibliotecaManhwas
Biblioteca para manhwas y mangas

# Estructura de ficheros de la aplicacion
* Modelos/
  *  modelo.php //Modelo general de donde extenderan todas las clases modelo.
  *  modeloUsuarios.php  //Modelo donde estara el CRUD de usuarios junto con metodos login y registro.
  *  modeloManhwas.php  //Modelo donde estara el CRUD  de los manhwas.
* Controladores/
  *  controladorUsuarios.php //Controlador encargado de usar el modelo de usuarios
  *  controladorManhwas.php  //Controlador encargador de usar el modelo de manhwas
* Vistas/
  *  vistaCabecera.php  // vista donde se mostrara un menu de navegacion junto con el titulo de la web.
  *  vistaPie.php  // vista donde se mostrara una marca de copiright con el nombre y la fecha. 
  *  Vista.php  //vista donde heredaran las demas vistas.
  *  vistaGeneral.php  //vista donde sera redirigido el usuario una vez que se ha logueado, contendra tanto la cabecera como el pie de la pagina.
  *  vistaLogin.php  //vista donde se mostrara un formulario de logueo.
  *  vistaPerfil.php  //vista donde el usuario podra modificar sus datos. 
  *  vistaRegistro.php  //vista donde se mostrara un formulario de registro junto a un boton por si el usuario ya esta registrado.  
  *  vistaInsertar.php  //vista generica donde se podra insertar usuarios y manhwas dependiendo de que quiera hacer.
  *  vistaModificar.php  //vista generica donde se podra modificar usuarios y manhwas dependiendo de que quiera hacer.
* Seguridad/
  * Config.php // Define las constantes de la base de datos.
  * Seguridad.php  // Clase encargada de verificar los roles y comprobar si un usuario esta registrado.
  * Conexion.php  // Clase encargada de establecer la conexion con la base de datos.
  * .gitignore    // Encargado de no subir la configuracion de la base de datos.
* css/
  * registro.css // Hoja de estilos para el formulario de registro.
  * login.css    // Hoja de estilos para el formulario de login.
  * general.css  // Hoja de estilos generales por ejemplos: tablas, enlaces, titulos ...
* js/
  * script.js  // Scripts simples para hacer la web mas dinamica.
