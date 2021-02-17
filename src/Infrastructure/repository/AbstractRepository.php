<?php

declare(strict_types=1);

namespace App\Infrastructure\Repository;

use PDO;

abstract class MysqlRepository
{
    
    protected PDO $pdo;

    protected function __construct()
    {
        $this->pdo = new Database(MYSQL_DSN, MYSQL_USER, MYSQL_PWD);
        $this->pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->pdo->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
    }
