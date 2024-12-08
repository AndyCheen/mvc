<?php

namespace App\controllers;

use App\core\Viewer;

class Controller
{
    protected array $data = [];
    public function publicView($partName = 'main')
    {
        $view = new Viewer();
        $view->setData($this->data);
        $view->includePublic($partName);
    }
    public function adminView($partName = 'main')
    {
        $view = new Viewer();
        $view->setData($this->data);
        $view->includeAdmin($partName);
    }
}