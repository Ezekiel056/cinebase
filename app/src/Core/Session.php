<?php

namespace App\Core;

use App\Model\User;

final class Session
{
    private function __construct() {}

    public static function get(): array
    {
        return $_SESSION['user'] ?? [];
    }

    public static function user(): ?array
    {
        return $_SESSION['user'] ?? null;
    }

    public static function isAuthenticated(): bool
    {
        return isset($_SESSION['user']);
    }

    public static function create(User $user): void
    {
        $_SESSION['user'] = [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'username' => $user->getUsername()
        ];
    }

    public static function destroy(): void
    {
        unset($_SESSION['user']);
    }
}
