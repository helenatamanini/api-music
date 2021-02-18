<?php

declare(strict_types=1);

namespace App\Application\Actions\Music;

use App\Application\Actions\Action;
use App\Domain\music\MusicService;

abstract class AbstractMusicAction extends Action
{


    protected $musicService;

    public function __construct(MusicService $musicService)
    {
        $this->musicService = $musicService;
    }

    
}
