<?php

namespace App\controllers\admin;

use App\controllers\Controller;
use App\models\PostCategory as PostCategoryModel;

class PostCategory extends Controller
{

    public function view()
    {
        $model = new PostCategoryModel();
        $this->data = ['data' => $model->getAllPostsCategory()];

        $this->adminView('postCategory/view');
    }

    public function create()
    {
        if (!empty($_POST)) {
            $model = new PostCategoryModel();
            $model->save(array_intersect_key(array_filter($_POST), $model->to_array()));
        }
        $this->adminView('postCategory/create');
    }

    public function update()
    {

        $model = new PostCategoryModel();
        $this->data = ['data' => $model->getOnePostCategory($_GET['id'])];

        $this->adminView('postCategory/update');
    }

    public function delete()
    {
        // Кодя для видалення сутності
        header('Location: http://localhost:8888/site/admin/postCategory/view');
    }
}