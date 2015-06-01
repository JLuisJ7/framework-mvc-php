<?php
//definiendo las constantes
define('DS', DIRECTORY_SEPARATOR); //separador /
define('ROOT', realpath(dirname(__FILE__)).DS);// Ruta base de la aplicacion
//echo ROOT;

define('APP_PATH',ROOT . 'application'.DS);

require_once APP_PATH.'Config.php';
require_once APP_PATH.'Request.php';//va a recibir las peticiones por la url y las va a enviar a Bootstrap
require_once APP_PATH.'Bootstrap.php';//Bootstrap va a  llamar al controllers
require_once APP_PATH.'Controller.php';//controlador principal 
require_once APP_PATH.'Model.php';//metodos comunes para todos models
require_once APP_PATH.'View.php';
require_once APP_PATH.'Registro.php';
require_once APP_PATH.'Database.php';

//echo '<pre>';print_r(get_required_files()); //
/*$r=new Request();
echo $r->getControlador().'<br>';
echo $r->getMetodo().'<pre>';
print_r($r->getArgs());
*/

try{
    Bootstrap::run(new Request());
}  catch (Exception $e){
    echo $e->getMessage();
}

?>