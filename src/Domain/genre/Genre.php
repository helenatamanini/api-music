<?php

declare(strict_types=1);

namespace App\Domain\genre;

use App\Domain\Entity;

class Genre extends Entity
{
    public int $id;

    public string $name;
}
