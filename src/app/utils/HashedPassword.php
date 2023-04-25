<?php

namespace Artaxerxes\Educaciona\utils;

use PasswordCompat\Hash\PasswordHash;

class HashedPassword
{
    private PasswordHash $hasher;

    public function __construct()
    {
        $this->hasher = new PasswordHash(8, false);
    }

    public function hash(string $password): string
    {
        return $this->hasher->HashPassword($password);
    }

    public function verify(string $password, string $hash): bool
    {
        return $this->hasher->CheckPassword($password, $hash);
    }
}
