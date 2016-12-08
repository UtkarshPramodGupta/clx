<?php
define('DB_HOST' , 'TO DO');
define('DB_USER' , 'TO DO');
define('DB_PWD' , 'TO DO');
define('DB_NAME' , 'TO DO');

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;

try{
	$dbh = new PDO($dsn , DB_USER , DB_PWD);
}
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
