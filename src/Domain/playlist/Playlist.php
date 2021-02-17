<?php

declare(strict_types=1);

namespace App\Domain\playlist;

class Playlist
{

    public int $id;
    public string $name;
    public bool $privacy;
    public int $user;

}