<?php
namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{

    public function index()
    {
        return view('BlogView.php');
    }

    public function tampil()
    {
        $model = new BlogModel();
        echo $model->getData();
    }
}