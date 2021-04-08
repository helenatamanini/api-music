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


    /**
     * 
     * @param int $id
     * @return Music|false
     */
    public function getById(int $id){

        $data = $this->getByField('music','id',$id);
        
        if(empty ($data)){

            return false;
        }
       
        $music = new Music($data[0]);
        
        return $music;

    }


    public function update(Music $music):int{

        $stmt=$this->pdo->prepare('UPDATE music SET name =:name, duration = :duration WHERE id=:id');
        $stmt->bindValue(':id',$music->id);
        $stmt->bindValue(':name',$music->name);
        $stmt->bindValue(':duration',$music->duration);

       
        $stmt->execute();
        
        return $music->id;
    }
    
    public function delete(int $id){
        
        $stmt=$this->pdo->prepare('DELETE FROM music WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        return $id;
 
    }
}