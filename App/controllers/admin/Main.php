<?php

namespace App\controllers\admin;

use App\core\Viewer;
use App\controllers\Controller;

class Main extends Controller
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
                $this->view();
                break;
        }
    }

    public function view()
    {
        $this->data = [
            "title" => "Home",
            "email" => 'addres@mail.com'
        ];
        $this->adminView('main/view');
    }

    public function create()
    {
        $this->adminView('main/create');
    }

    public function update()
    {
        $this->adminView('main/update');
    }

    public function delete()
    {
        $this->adminView('main/delete');
    }
}