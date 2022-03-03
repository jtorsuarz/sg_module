# module_rrhh
 Modulo de ERP / Recurdos Humanos



 
# PHP SPARK - CREATION:

Crea controlador

    php spark make:controller

Crea modelo

    php spark make:model

Crea entity

    php spark make:entity

# CONFIGURACIONES IMPORTANTES - CORRECTO FUNCIONAMIENTO

Configurar el Archivo en la Ruta (LINEA 85 en adelante.):

     app\Config\Constants.php

Solucion al error de boostrap (Tener el composer instalado):

    composer update --ignore-platform-reqs

  Error php init ir a la ruta del xampp:

    xampp/php/php.ini
    
  Buscar la siguiente Linea:
  
    ;extension=php_intl  
    
  y editarla, dejarla asi:
  
    extension=php_intl

# IMPORTANTE - Base de Datos

1.- CREAR UNA BASE DE DATOS CON EL NOMBRE = "agse"


2.- Desde el proyecto lanzar el siguiente comando:


Crear las tablas.
    
    php spark migrate:refresh 
 
 Limpia las tablas.
 
    php spark migrate:rollback
