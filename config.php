<?php
require_once 'messages.php';

define( 'BASE_PATH', 'cloud-tools.online');//Ruta base donde se encuentra
define( 'DB_HOST', '138.201.81.134' );//Servidor de la base de datos
define( 'DB_USERNAME', 'cloudtoo_admin');//Usuario de la base de datos
define( 'DB_PASSWORD', 'angeel13');//Contraseña de la base de datos
define( 'DB_NAME', 'cloudtoo_global');//Nombre de la base de datos

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
