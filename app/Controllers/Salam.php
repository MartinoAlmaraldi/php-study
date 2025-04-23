<?php
namespace App\Controllers;

use App\Models\SalamModel;

class Salam extends BaseController
{

    public function index()
    {
        return view('SalamView.php');
    }

    public function nama($user)
    {
        $model = new SalamModel();
        if ($user == ""){
            $user = "User";
        }
        echo $model->getData($user);
    }
}