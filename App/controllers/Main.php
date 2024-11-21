<?php

namespace App\controllers;

class Main
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
        echo "Main index page";
    }

    public function create()
    {
        echo "Main create page";
    }

    public function update()
    {
        echo "Main update page";
    }

    public function delete()
    {
        echo "Main delete page";
    }
}