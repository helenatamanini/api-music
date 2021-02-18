<?php

declare(strict_types=1);

namespace App\Infrastructure\repository;

use App\Domain\music\Music;
use App\Infrastructure\Repository\AbstractRepository;


class MusicRepository extends AbstractRepository{

    public function save(Music $music):int{


        $stmt=$this->pdo->prepare('INSERT INTO music(name,duration) VALUES (:name,:duration)');
        $stmt->bindValue(':name',$music->name);
        $stmt->bindValue(':duration',$music->duration);

        $stmt->execute();
        
        return (int)$this->pdo->lastInsertId();
    }

    
}