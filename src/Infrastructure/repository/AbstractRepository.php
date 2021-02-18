<?php

declare(strict_types=1);

namespace App\Infrastructure\repository;

use PDO;
abstract class AbstractRepository
{
    
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO(MYSQL_DSN, MYSQL_USER, MYSQL_PWD);
        $this->pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->pdo->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
    }
}