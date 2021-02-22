<?php

declare(strict_types=1);

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use App\Application\Actions\Genre\CreateGenreAction;
use App\Application\Actions\Music\CreateMusicAction;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/music',function (Group $musics){
        $musics->post('',CreateMusicAction::class);
        
    });

    $app->group('/genre', function (Group $musics) {
        $musics->post('', CreateGenreAction::class);
    });


};
