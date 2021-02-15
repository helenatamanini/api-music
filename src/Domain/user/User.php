<?php

declare(strict_types=1);

namespace App\Domain\user;

class User
{

    public const TYPE_ADMIN = 1;
    public const TYPE_CUSTOMER = 2;

    public int $id;
    public string $name;
    public string $login;
    public string $password;
    public int $type;
}
