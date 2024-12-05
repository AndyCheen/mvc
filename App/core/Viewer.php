<?php

namespace App\core;

class Viewer
{
    private array $data = [];

    public function setData(array $data): void
    {
        $this->data = $data;
    }
    public function includePublic(string $partName = 'main'): void
    {
        extract($this->data);
        include __DIR__ . "/../../public/templates/public.php";
    }

    public function includeAdmin(): void
    {
        include __DIR__ . "/../../public/templates/admin.php";
    }
}