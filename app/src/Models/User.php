<?php

namespace App\Models;


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
}
