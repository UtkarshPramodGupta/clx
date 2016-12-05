<?php
define('DB_HOST' , 'ENTER YOUR HOST NAME');
define('DB_USER' , 'ENTER YOUR DB USERNAME');
define('DB_PWD' , 'ENTER YOUR DB PWD');
define('DB_NAME' , 'ENTER YOUR DB NAME');

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;

try{
	$dbh = new PDO($dsn , DB_USER , DB_PWD);
}
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
