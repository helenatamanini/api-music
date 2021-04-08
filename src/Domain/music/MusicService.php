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

    public function update(int $id, array $data)
    {

        $result = [];
        $music = $this->musicRepository->getById($id);
        if ($music == false) {
            $result['result'] = 'musica nao encontrada';
            $result['code'] = 404;

            return $result;
        }

        $music->setData($data);


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

        $result['result'] = $this->musicRepository->update($music);
        $result['code'] = 200;

        return $result;
    }

    public function delete(int $id): array
    {

        $result = [];
        $music = $this->musicRepository->getById($id);
        if ($music == false) {
            $result['result'] = 'musica nao encontrada';
            $result['code'] = 404;

            return $result;
        }

        $this->musicRepository->delete($id);
        $result['result'] = 'Musica deletada com sucesso';
        $result['code'] = 200;

        return $result;
    }
}
