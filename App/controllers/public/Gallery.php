<?php

namespace App\controllers\public;

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
        $this->publicView('gallery/view');
    }

    public function create()
    {
        $this->publicView('gallery/create');
    }

    public function update()
    {
        $this->publicView('gallery/update');
    }

    public function delete()
    {
        $this->publicView('gallery/delete');
    }
}