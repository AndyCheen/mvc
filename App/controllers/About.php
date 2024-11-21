<?php

namespace App\controllers;

class About
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
        echo "About index page";
    }

    public function create()
    {
        echo "About create page";
    }

    public function update()
    {
        echo "About update page";
    }

    public function delete()
    {
        echo "About delete page";
    }
}