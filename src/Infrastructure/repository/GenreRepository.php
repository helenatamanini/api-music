<?php

declare(strict_types=1);

namespace App\Infrastructure\repository;

use App\Domain\genre\Genre;
use App\Infrastructure\Repository\AbstractRepository;


class GenreRepository extends AbstractRepository
{

    public function save(Genre $genre): int
    {

        var_dump($this->getByField('music','id',1));die;
        $stmt = $this->pdo->prepare('INSERT INTO genre(name) VALUES (:name)');
        $stmt->bindValue(':name', $genre->name);

        $stmt->execute();

        return (int)$this->pdo->lastInsertId();
    }


}
