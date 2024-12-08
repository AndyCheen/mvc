<?php

namespace App\controllers\public;
use App\controllers\Controller;
class NotFound extends Controller
{

    public function action($method)
    {
        echo "<h3>Error 404. Page not found</h3>";
    }
}