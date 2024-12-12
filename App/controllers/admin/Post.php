<?php

namespace App\controllers\admin;

use App\controllers\Controller;
use App\models\Post as PostModel;

class Post extends Controller
{
    public function action($method)
    {
        switch ($method) {
            case 'create':
                $this->create();
                break;
            case 'update':
                $this->update();
                break;
            case 'delete':
                $this->delete();
                break;
            default:
                $this->view();
                break;
        }
    }

    public function view()
    {
        $model = new PostModel();
        $this->data = ['data' => $model->getAllPosts()];

        $this->adminView('post/view');
    }

    public function create()
    {
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