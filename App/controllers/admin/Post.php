<?php

namespace App\controllers\admin;

use App\controllers\Controller;
use App\models\Post as PostModel;

class Post extends Controller
{

    public function view()
    {
        $model = new PostModel();
        $this->data = ['data' => $model->getAllPosts()];

        $this->adminView('post/view');
    }

    public function create()
    {
        if (!empty($_POST)) {
            $model = new PostModel();
            $model->save(array_intersect_key(array_filter($_POST), $model->to_array()));
        }
        $this->adminView('post/create');
    }

    public function update()
    {
        $model = new PostModel();
        $this->data = ['data' => $model->getOnePost($_GET['id'])];

        $this->adminView('post/update');
    }

    public function delete()
    {
        // Кодя для видалення сутності
        header('Location: http://localhost:8888/site/admin/post/view');
    }
}