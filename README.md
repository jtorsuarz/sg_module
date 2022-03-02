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

# IMPORTANTE - Base de Datos

1.- CREAR UNA BASE DE DATOS CON EL NOMBRE = "agse"


2.- Desde el proyecto lanzar el siguiente comando:


<----- Crear las tablas.
    
    php spark migrate:refresh 
 
 <----- Limpia las tablas.
 
    php spark migrate:rollback
