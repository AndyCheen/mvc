<?php

namespace App\controllers\admin;

use App\core\Viewer;
use App\controllers\Controller;
use App\models\Gallery as GalleryModel;

class Gallery extends Controller
{

    public function view()
    {
//        $model = new GalleryModel();
//        $this->data = ['data' => $model->getAllGallery()];

        $this->adminView('gallery/view');
    }

    public function create()
    {
        if (!empty($_POST)) {
            $model = new GalleryModel();
            $model->save(array_intersect_key($_POST, $model->to_array()));
        }
        $this->adminView('gallery/create');
    }

    public function update()
    {
        $model = new GalleryModel();

        if (!isset($_GET['id'])) {
            $this->view();
        } else {
            $this->data = ['data' => $model->getOneGallery($_GET['id'])];
            $this->adminView('gallery/update');
        }
    }

    public function delete()
    {
        // Кодя для видалення сутності
        header('Location: http://localhost:8888/site/admin/gallery/view');
    }
}