<?php

namespace App\Controllers;

use App\Models\RecipeModel;
use App\Models\UserModel;

class User extends BaseController
{
    protected $recipeModel;
    protected $userModel;

    public function __construct()
    {
        $this->recipeModel = new RecipeModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title'  => 'Cookies Culinary',
        ];
        return view('user/index', $data);
    }

    public function edit()
    {
        $data = [
            'title'  => 'Edit Profile',
        ];
        return view('user/edit', $data);
    }

    public function resep()
    {
        $data = [
            'title'  => 'List Resep',
        ];
        return view('user/resep', $data);
    }



    //--------------------------------------------------------------------

}
