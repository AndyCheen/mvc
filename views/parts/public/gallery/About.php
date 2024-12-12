<?php

namespace gallery;
use App\controllers\Controller;

class About extends Controller
{
    public function action($method)
    {
        $this->view();
    }

    public function view()
    {
        $this->publicView('about/view');
    }
}