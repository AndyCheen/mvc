<?php

namespace App\models;

class PostCategory
{
    private $postCategory = [
        1 => [
            'id' => 1,
            'title' => 'Title 1'
        ],
        2 => [
            'id' => 2,
            'title' => 'Title 2'
        ],
        3 => [
            'id' => 3,
            'title' => 'Title 3'
        ],
    ];

    public function getAllPostsCategory()
    {
        return $this->postCategory;
    }

    public function getOnePostCategory($id)
    {
        if (!empty($this->postCategory[$id])) {
            return $this->postCategory[$id];
        }

        throw new \Exception('PostCategory not found');
    }
}