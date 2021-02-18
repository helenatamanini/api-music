<?php

declare(strict_types=1);

namespace App\Domain\music;

use App\Infrastructure\repository\MusicRepository;

class MusicService
{
    private MusicRepository $musicRepository;
    public function __construct(MusicRepository $musicRepository)
    {
        $this->musicRepository=$musicRepository;
    }

    public function create(array $data){

        $music= new Music($data);
        if(!isset($music->name)){
            return 'Nome não enviado';
        }
        if(!isset($music->duration)){
            return 'Duração não enviado';
        }
        
        return $this->musicRepository->save($music);

    }

}
