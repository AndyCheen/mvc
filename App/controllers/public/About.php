<?php

namespace App\controllers\public;
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
        $this->publicView('about/view');
    }

    public function create()
    {
        $this->publicView('about/create');
    }

    public function update()
    {
        $this->publicView('about/update');
    }

    public function delete()
    {
        $this->publicView('about/delete');
    }
}