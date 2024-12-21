<?php

namespace App\controllers\public;

use App\core\Viewer;
use App\controllers\Controller;

class Main extends Controller
{

    public function view()
    {
        $this->publicView('main/view');
    }
}