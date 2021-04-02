<?php

declare(strict_types=1);

namespace App\Application\Actions\Music;

use Slim\Psr7\Response;

class MusicUpdateAction extends AbstractMusicAction{

    public function action():Response{
        $id=(int)$this->args['id'];
        $data=$this->getFormData();
        $response=$this->musicService->update($id,$data);

        return $this->respondWithData($response['result'],$response['code']);
         
         
    }

}