<?php

namespace App\controllers\public;

use App\core\Viewer;
use App\controllers\Controller;
use App\models\Gallery as GalleryModel;

class Gallery extends Controller
{

    public function view()
    {
        $model = new GalleryModel();
        $this->data = ['data' => $model->getAllGallery()];

        $this->publicView('gallery/view');
    }
}