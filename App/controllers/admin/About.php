<?php

namespace App\controllers\admin;

use App\core\Viewer;
use App\controllers\Controller;
class About extends Controller
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
        $this->adminView('about/view');
    }

    public function create()
    {
        $this->adminView('about/create');
    }

    public function update()
    {
        $this->adminView('about/update');
    }

    public function delete()
    {
        $this->adminView('about/delete');
    }
}