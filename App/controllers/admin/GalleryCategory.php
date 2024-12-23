<?php

namespace App\controllers\admin;

use App\controllers\Controller;
use App\models\GalleryCategory as GalleryCategoryModel;

class GalleryCategory extends Controller
{

    public function view()
    {
        $model = new GalleryCategoryModel();
//        $this->data = ['data' => $model->getAllGalleryCategory()];

        $this->adminView('galleryCategory/view');
    }

    public function create()
    {
        if (!empty($_POST)) {
            $model = new GalleryCategoryModel();
            $model->save(array_intersect_key($_POST, $model->to_array()));
        }
        $this->adminView('galleryCategory/create');
    }

    public function update()
    {

        $model = new GalleryCategoryModel();
        $this->data = ['data' => $model->getOneGalleryCategory($_GET['id'])];

        $this->adminView('galleryCategory/update');
    }

    public function delete()
    {
        // Кодя для видалення сутності
        header('Location: http://localhost:8888/site/admin/galleryCategory/view');
    }
}