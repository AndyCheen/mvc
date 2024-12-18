<?php

namespace App\controllers\admin;

use App\core\Viewer;
use App\controllers\Controller;

class Main extends Controller
{
    public function action($method)
    {
        $this->view();
    }

    public function view()
    {
        $this->data = [
            "title" => "Home",
            "email" => 'addres@mail.com'
        ];
        $this->adminView('main/view');
    }
}