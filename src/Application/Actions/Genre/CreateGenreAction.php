<?php

declare(strict_types=1);

namespace App\Application\Actions\Genre;

use Slim\Psr7\Response;

class CreateGenreAction extends AbstractGenreAction{

    public function action():Response{

        $data=$this->getFormData();
        $response=$this->service->create($data);

        return $this->respondWithData($response['result'],$response['code']);
         
         
    }

}