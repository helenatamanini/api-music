<?php

declare(strict_types=1);

namespace App\Domain\music;

use App\Infrastructure\repository\MusicRepository;

class MusicService
{
    private MusicRepository $musicRepository;
    public function __construct(MusicRepository $musicRepository)
    {
        $this->musicRepository = $musicRepository;
    }

    public function create(array $data)
    {
        $result = [];
        $music = new Music($data);
        if (!isset($music->name)) {
            $result['result'] = 'Nome não enviado';
            $result['code'] = 403;
            return $data;
        }
     
        if (!isset($music->duration)) {
            $result['result'] = 'Duração não enviado';
            $result['code'] = 403;
            return $result;
        }

        $result['result'] = $this->musicRepository->save($music);
        $result['code'] = 200;
        return $result;
    }
}
