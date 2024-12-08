<?php

namespace App\core;

class Viewer
{
    private array $data = [];

    public function setData(array $data): void
    {
        $this->data = $data;
    }
    public function includePublic(string $partName = 'view'): void
    {
        extract($this->data);
        include __DIR__ . "/../../views/templates/public.php";
    }

    public function includeAdmin(string $partName = 'view'): void
    {
        include __DIR__ . "/../../views/templates/admin.php";
    }
}