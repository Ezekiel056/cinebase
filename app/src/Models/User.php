<?php

namespace App\Models;

use PDOException;

class User extends Model
{


    public function getUsers(): array
    {
        $stmt = $this->mysql->query('SELECT * FROM Users ORDER BY Username ASC');
        $users = $stmt->fetchAll();
        return $users;
    }


    public function getUserById(int $id): bool|array
    {
        if ($id > 0) {

            $stmt = $this->mysql->prepare('SELECT * FROM Users WHERE id=:id');
            $user = $stmt->execute(['id' => $id]);
            return $user;
        }

        return false;
    }

    public function getUserByEmail(string $email): bool|array
    {
        if ($email !== "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $stmt = $this->mysql->prepare('SELECT * FROM Users WHERE email=:email');
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch();
            return $user;
        }

        return false;
    }

    public function create(array $data): bool
    {
        $stmt = $this->mysql->prepare('INSERT INTO users (email, password, username) VALUES (:email, :password, :username)');
        try {

            $result = $stmt->execute([
                'email' => $data["email"],
                'password' => $this->generatePasswordhash($data["password"]),
                'username' => $data["username"],
            ]);

            return $result;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function checkPassword(string $inputPassword, string $userPassword): bool
    {
        return password_verify($inputPassword, $userPassword);
    }

    public function generatePasswordhash(string $password)
    {
        return password_hash($password, PASSWORD_ARGON2ID);
    }
}
