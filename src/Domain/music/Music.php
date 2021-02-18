<?php

declare(strict_types=1);

namespace App\Domain\music;

use App\Domain\Entity;

class Music extends Entity
{

    public int $id;
    public string $name;
    public float $duration;
}
