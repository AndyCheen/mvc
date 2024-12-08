<?php

namespace App\controllers\admin;

use App\core\Viewer;
use App\controllers\Controller;

class Gallery extends Controller
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
        $this->adminView('gallery/view');
    }

    public function create()
    {
        $this->adminView('gallery/create');
    }

    public function update()
    {
        $this->adminView('gallery/update');
    }

    public function delete()
    {
        $this->adminView('gallery/delete');
    }
}