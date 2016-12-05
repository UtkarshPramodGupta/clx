<?php
session_start();

define('SOPHO_FOLDER' , __DIR__ . '/../');
define('C' , SOPHO_FOLDER . 'controller/');
define('V' , SOPHO_FOLDER . 'view/');
define('M' , SOPHO_FOLDER . 'model/');
define('I' , SOPHO_FOLDER . 'includes/');
define('P' , SOPHO_FOLDER . 'public/');

$page = 'home';

if(isset($_GET["page"])){
	$page = $_GET["page"];
}
	
$path = C . $page . '.php';
	
if(!file_exists($path)){	
	$path = C . '404.php';
}

require($path);

?>
