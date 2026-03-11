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

    public static function create($user): void
    {
        self::destroy();

        $_SESSION['user'] = [
            'id' => $user["id"],
            'email' => $user['email'],
            'username' => $user['username']
        ];
    }

    public static function destroy(): void
    {
        unset($_SESSION['user']);
    }


    public static function setFlashMessage(string $type, array $messages)
    {
        $_SESSION['flash'] = [
            "type" => $type,
            "messages" => $messages
        ];
    }


    /*
    *   --- FLASH MESSAGES MANAGEMENT ---
    */

    public static function isFlashMessages()
    {
        return isset($_SESSION['flash']);
    }

    public static function getFlashMessage()
    {
        $flash = $_SESSION['flash'];
        self::deleteFlashMessages();
        return $flash;
    }

    private static function deleteFlashMessages(): void
    {
        unset($_SESSION['flash']);
    }


    /*
    * -- FORM DATA ---
    */

    public static function getFormData(string $varName): mixed
    {
        $formData = $_SESSION['form-data'][$varName] ?? null;
        if ($formData && is_string($formData)) {
            $formData = htmlspecialchars($formData);
        }
        return $formData;
    }

    public static function setFormData(string $varName, $value): void
    {
        $_SESSION['form-data'][$varName] = $value;
    }

    public static function resetFormData()
    {
        self::unsetFormData();
    }

    private static function unsetFormData(): void
    {
        unset($_SESSION['form-data']);
    }
}
