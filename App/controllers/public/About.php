<?php

namespace App\controllers\public;

use App\core\Viewer;
use App\controllers\Controller;

class About extends Controller
{

    public function view()
    {
        $this->publicView('about/view');
    }
}