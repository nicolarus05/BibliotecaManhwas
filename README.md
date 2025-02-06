# BibliotecaManhwas
Biblioteca para manhwas y mangas

# Estructura de ficheros de la aplicacion
BibliotecaMnahwas/
│── modelos/
│   ├── modelo.php               // Clase base con la conexión a la BD.
│   ├── modelo_usuarios.php       // CRUD de usuarios, login y registro.
│   ├── modelo_manhwas.php        // CRUD de manhwas y gestión de visitas/likes.
│   ├── modelo_progreso.php       // Relación usuario-manhwa (pendiente/leyendo).
│
│── controladores/
│   ├── controlador_usuarios.php  // Controlador de usuarios.
│   ├── controlador_manhwas.php   // Controlador de manhwas.
│   ├── controlador_progreso.php  // Controlador de progreso de lectura.
│
│── vistas/
│   ├── partes/
│   │   ├── vista_cabecera.php    // Menú de navegación.
│   │   ├── vista_pie.php         // Pie de página.
│   ├── usuario/
│   │   ├── vista_login.php       // Formulario de login.
│   │   ├── vista_registro.php    // Formulario de registro.
│   │   ├── vista_perfil.php      // Edición de perfil.
│   ├── manhwas/
│   │   ├── vista_listado.php     // Listado y búsqueda.
│   │   ├── vista_detalle.php     // Info de un manhwa y capítulos.
│   │   ├── vista_insertar.php    // Agregar un manhwa.
│   │   ├── vista_modificar.php   // Editar un manhwa.
│   ├── progreso/
│   │   ├── vista_progreso.php    // Lista de manhwas en "pendiente" o "leyendo".
│
│── seguridad/
│   ├── config.php                // Configuración de BD.
│   ├── seguridad.php             // Manejo de sesiones y roles.
│   ├── conexion.php              // Conexión a la BD.
│
│── public/
│   ├── css/                      // Estilos.
│   ├── js/                       // Scripts dinámicos.
│   ├── img/                      // Imágenes.
│   ├── index.php                 // Página de inicio.
│
│── .gitignore                    // Evitar subir configuraciones
