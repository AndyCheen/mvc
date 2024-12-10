<?php

namespace App\models;

class Gallery
{

    private array $gallery = [
        1 => [
                'id' => 1,
                'name' => '1',
                'image' => 'image_1.jpg',
                'categoryName' => '1',
                'categoryId' => 1
            ],
        2 => [
                'id' => 2,
                'name' => '2',
                'image' => 'image_2.jpg',
                'categoryName' => '2',
                'categoryId' => 2
            ],
        3 => [
                'id' => 3,
                'name' => '3',
                'image' => 'image_3.jpg',
                'categoryName' => '3',
                'categoryId' => 3
            ],
        4 => [
                'id' => 4,
                'name' => '4',
                'image' => 'image_4.jpg',
                'categoryName' => '4',
                'categoryId' => 4
            ],
    ];

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
}