<?php


namespace App\Core;

use PDO;

final class Mysql
{
    private static ?self $instance = null;
    private readonly PDO $db;

    private function __construct()
    {
        $dsn = "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'] . ";charset=utf8mb4";


        $this->db = new PDO(
            $dsn,
            $_ENV['DB_USER'],
            $_ENV['DB_USER_PASSWORD'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]
        );
    }

    public static function getDb(): pdo
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance->db;
    }
}
