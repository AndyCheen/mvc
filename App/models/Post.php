<?php

namespace App\models;

use App\sql\Connector;
use App\sql\Insert;

class Post
{
    private $post = [
        1 => [
            'id' => 1,
            'title' => 'Title 1',
            'content' => 'Content 1',
            'user_id' => 1,
            'category_id' => 1
        ],
        2 => [
            'id' => 2,
            'title' => 'Title 2',
            'content' => 'Content 2',
            'user_id' => 2,
            'category_id' => 2
        ],
        3 => [
            'id' => 3,
            'title' => 'Title 3',
            'content' => 'Content 3',
            'user_id' => 3,
            'category_id' => 1
        ],
    ];

    public function __construct()
    {
        $connect = new Connector();
        $insert = new Insert();
        $insert->setTableName('post');
        $insert->setData([['a' => "1", 'b' => 4, 'c' => 3],['a' => "1", 'c' => 2, 'b' => 3], ['b' => 1, 'c' => 3, 'a' => 4]]);
        var_dump($insert->buildSql());
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

    public function create(): void
    {

    }
}