<?php

namespace App\models;

use App\sql\Insert;

class GalleryCategory
{
    public int $id;
    public string $title;
    public string $created;
    public string $updated;

    public function getAllGalleryCategory(): array
    {
        return $this->galleryCategory;
    }

    public function getOneGalleryCategory(int $id): array
    {
        if (!empty($this->galleryCategory[$id])) {
            return $this->galleryCategory[$id];
        }

        throw new \Exception('id is absent');
    }

    public function save(array $data): void
    {
        $insert = new Insert();
        $insert->setTableName('gallery_category');
        $insert->setData($data);
        $insert->execute();
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }
}