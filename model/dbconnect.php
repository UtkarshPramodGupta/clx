<?php
define('DB_HOST' , 'localhost');
define('DB_USER' , 'jharvard');
define('DB_PWD' , 'crimson');
define('DB_NAME' , 'sophomor');

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;

try{
	$dbh = new PDO($dsn , DB_USER , DB_PWD);
}
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
