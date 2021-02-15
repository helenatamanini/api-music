<?php

define('MYSQL_DSN', 'mysql:host=127.0.0.1;dbname=API-music;');
define('MYSQL_USER', 'root');
define('MYSQL_PWD', '');

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>