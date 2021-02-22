<?php

declare(strict_types=1);

define('MYSQL_DSN', 'mysql:host=127.0.0.1;dbname=music;');
define('MYSQL_USER', 'root');
define('MYSQL_PWD', '');

try {
    $dbh = new PDO(MYSQL_DSN, MYSQL_USER, MYSQL_PWD);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>