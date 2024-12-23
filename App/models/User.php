<?php

namespace App\models;

use App\sql\Insert;

class User
{

    public int $id;
    public string $name;
    public string $email;
    public string $password;
    public int $role;
    public string $created;
    public string $updated;

    public function getAllUsers()
    {
        return $this->user;
    }

    public function getOneUser($id)
    {
        if (!empty($this->user[$id])) {
            return $this->user[$id];
        }

        throw new \Exception('User not found');
    }

    public function save(array $data): void
    {
        $insert = new Insert();
        $insert->setTableName('user');
        $insert->setData($data);
        $insert->execute();
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }
}