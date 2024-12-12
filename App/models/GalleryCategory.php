<?php

namespace App\models;

class GalleryCategory
{

    private array $galleryCategory = [
        1 => [
            'id' => 1,
            'name' => 'name 1'
        ],
        2 => [
            'id' => 2,
            'name' => 'name 2'
        ],
        3 => [
            'id' => 3,
            'name' => 'name 3'
        ],
        4 => [
            'id' => 4,
            'name' => 'name 4'
        ],
    ];

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
}