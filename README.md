# sg_module
 Modulo RP - SG
 
 
 PHP SPARK - CREATION:


Commands: 


php spark make:controller (crea controlador)


php spark make:model (crea modelo)


php spark make:entity (crea la entidad)

# CONFIGURACIONES IMPORTANTES - CORRECTO FUNCIONAMIENTO

Configurar el Archivo en la Ruta:   app\Config\Constants.php - LINEA 85 en adelante.


composer update --ignore-platform-reqs  // ERROR BOOSTRAP FILE - VENDOR


Error php init - ir a la ruta del xampp: xampp/php/php.ini y cambiar el ";extension=php_intl" -> "extension=php_intl"

# IMPORTANTE - AL CREAR UN METODO PARA INDEXARLO ES NECESARIO AGREGAR LA RUTA EN

config/routes
