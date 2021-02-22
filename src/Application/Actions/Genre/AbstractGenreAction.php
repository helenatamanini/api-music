<?php

declare(strict_types=1);

namespace App\Application\Actions\Genre;

use App\Domain\genre\GenreService;
use App\Application\Actions\Action;

abstract class AbstractGenreAction extends Action
{


    protected $service;

    public function __construct(GenreService $genreService)
    {
        $this->service = $genreService;
    }

    
}
