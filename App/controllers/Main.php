<?php

namespace App\controllers;

use App\core\Viewer;

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
        $viewer = new Viewer();
        $viewer->setData([
            "title" => "Home",
            "email" => 'addres@mail.com'
        ]);
        $viewer->includePublic();
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