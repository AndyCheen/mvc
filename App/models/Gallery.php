<?php

namespace App\models;

use App\sql\Insert;

class Gallery
{

    public int $id;
    public string $title;
    public string $image;
    public int $category_id;
    public string $created;
    public string $updated;

    public function getAllGallery(): array
    {
        return $this->gallery;
    }

    public function getOneGallery(int $id): array
    {
        if (!empty($this->gallery[$id])) {
            return $this->gallery[$id];
        }

        throw new \Exception('id is absent');
    }

    public function save(array $data): void
    {
        $insert = new Insert();
        $insert->setTableName('gallery');
        $insert->setData($data);
        $insert->execute();
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }
}