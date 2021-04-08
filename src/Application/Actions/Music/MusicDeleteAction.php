<?php

declare(strict_types=1);

namespace App\Application\Actions\Music;

use Slim\Psr7\Response;

class MusicDeleteAction extends AbstractMusicAction
{

    public function action(): Response
    {
        $id = (int)$this->args['id'];
        $response = $this->musicService->delete($id);

        return $this->respondWithData($response['result'], $response['code']);
    }
}
