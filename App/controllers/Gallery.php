<?php

namespace App\controllers;

class Gallery
{

    public function action($method)
    {
        switch ($method) {
            case 'create':
                $this->create();
                break;
            case 'update':
                $this->update();
                break;
            case 'delete':
                $this->delete();
                break;
            default:
                $this->index();
                break;
        }
    }

    public function index()
    {
        echo "Gallery index page";
    }

    public function create()
    {
        echo "Gallery create page";
    }

    public function update()
    {
        echo "Gallery update page";
    }

    public function delete()
    {
        echo "Gallery delete page";
    }
}