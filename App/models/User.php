<?php

namespace App\models;

class User
{
    private $user = [
        1 => [
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'role' => 'admin'
        ],
        2 => [
            'id' => 2,
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'role' => 'user'
        ],
        3 => [
            'id' => 3,
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => 'user2',
            'role' => 'user'
        ]
    ];

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
}