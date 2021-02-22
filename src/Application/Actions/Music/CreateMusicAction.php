<?php

declare(strict_types=1);

namespace App\Application\Actions\Music;

use Slim\Psr7\Response;

class CreateMusicAction extends AbstractMusicAction{

    public function action():Response{

        $data=$this->getFormData();
        $response=$this->musicService->create($data);

        return $this->respondWithData($response['result'],$response['code']);
         
         
    }

}