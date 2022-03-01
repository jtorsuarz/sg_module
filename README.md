# sg_module
 Modulo RP - SG


PHP SPARK - CREATION: 
    Commands: 
      php spark make:controller (crea controlador)
      php spark make:model (crea modelo)
      php spark make:entity (crea la entidad)

---------------------------------------------------------------------
Para el correcto funcionamiento del modulo, se debe configurar el archivo:

Ruta:   app\Config\Constants.php
   
Codigo a Editar:
switch(ENVIRONMENT) {
  case 'development':
      define("BASE_URL", "Aqui la URL de donde se alojo la carpeta, es importante poner al final el /public/");
            define("DB_HOST","Aqui el host"); 
            define("DB_USER","Aqui Usuario"); 
            define("DB_PASS","Aqui pass"); 
            define("DB_DATABASE","Aqui la bbdd");
     break;
     default:
            define("BASE_URL", "www.domain.com/");
      define("DB_HOST","hosting");
            define("DB_USER","user");
            define("DB_PASS","pass");
            define("DB_DATABASE","databse");
     break;
    }
      
