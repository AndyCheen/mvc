<?php

namespace App\controllers\admin;

use App\controllers\Controller;
use App\models\User as UserModel;

class User extends Controller
{

    public function view()
    {
        $model = new UserModel();
        $this->data = ['data' => $model->getAllUsers()];

        $this->adminView('user/view');
    }

    public function create()
    {
        if (!empty($_POST)) {
            $model = new UserModel();
            $model->save(array_intersect_key(array_filter($_POST), $model->to_array()));
        }
        $this->adminView('user/create');
    }

    public function update()
    {
        $model = new UserModel();
        $this->data = ['data' => $model->getOneUser($_GET['id'])];

        $this->adminView('user/update');
    }

    public function delete()
    {
        // Кодя для видалення сутності
        header('Location: http://localhost:8888/site/admin/user/view');
    }
}