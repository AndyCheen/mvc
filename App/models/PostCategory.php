<?php

namespace App\models;

use App\sql\Insert;

class PostCategory
{
    public int $id;
    public string $title;
    public string $created;
    public string $updated;

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

    public function save(array $data): void
    {
        $insert = new Insert();
        $insert->setTableName('post_catrgory');
        $insert->setData($data);
        $insert->execute();
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }
}