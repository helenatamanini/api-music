<?php 

declare(strict_types=1);

namespace App\Domain\genre;

use App\Infrastructure\repository\GenreRepository;


Class GenreService {

private GenreRepository $repository;

    public function __construct(GenreRepository $genreRepository){
        $this->repository = $genreRepository;
    }

    public function create(array $data):array
    {
        $result = [];
        $genre = new Genre($data);
        if (!isset($genre->name)) {
            $result['result'] = 'Nome não enviado';
            $result['code'] = 403;

            return $data;
        }


        $result['result'] = $this->repository->save($genre);
        $result['code'] = 200;

        return $result;
    }



}
