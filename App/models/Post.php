<?php

namespace App\models;

use App\sql\Connector;
use App\sql\Insert;

class Post
{
    public int $id;
    public string $title;
    public string $content;
    public int $user_id;
    public int $category_id;
    public string $created;
    public string $updated;


    public function __construct()
    {

    }

    public function getAllPosts()
    {
        return $this->post;
    }

    public function getOnePost($id)
    {
        if (!empty($this->post[$id])) {
            return $this->post[$id];
        }

        throw new \Exception('Post not found');
    }

    public function save(array $data): void
    {
        $insert = new Insert();
        $insert->setTableName('post');
        $insert->setData($data);
        $insert->execute();
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }
}