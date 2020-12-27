<?php

namespace App\Controllers;

use App\Models\RecipeModel;
use Myth\Auth\Models\UserModel;

class Admin extends BaseController
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
            'title'  => 'Admin Page',
        ];
        return view('admin/index', $data);
    }

    public function user()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');

        $query = $builder->get();

        $data = [
            'title'  => 'List User',
            'users'  => $query->getResult()
        ];
        return view('admin/user', $data);
    }

    public function deleteuser()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $id = $this->request->getVar('userid');
        $builder->where([
            'id' => $id
        ]);
        $builder->delete();

        session()->setFlashdata('pesan', 'User berhasil dihapus.');
        return redirect()->to('/admin/user');
    }


    public function resep()
    {

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $recipe = $this->recipeModel->search($keyword);
        } else {
            $recipe = $this->recipeModel;
        }

        $data = [
            'title'  => 'List Resep',
            'recipes'  => $recipe->getRecipe()
        ];
        return view('admin/resep', $data);
    }

    public function approve()
    {

        $db = \Config\Database::connect();
        $builder = $db->table('recipes');
        $value = [
            'status_resep' => 'approve'
        ];
        $id = $this->request->getVar('recipe_id');
        $builder->update($value, [
            'recipe_id' => $id
        ]);

        session()->setFlashdata('pesan', 'Resep berhasil di-approve.');
        return redirect()->to('/admin/resep');
    }

    public function approveall()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('recipes');
        $value = [
            'status_resep' => 'approve'
        ];
        $builder->update($value, [
            'status_resep' => ''
        ]);

        session()->setFlashdata('pesan', 'Semua resep berhasil di-approve.');
        return redirect()->to('/admin/resep');
    }

    public function detail()
    {
        $data = [
            'title'  => 'Detail Resep',
        ];
        return view('admin/detail', $data);
    }

    public function deleteresep()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('recipes');
        $id = $this->request->getVar('recipe_id');
        $builder->where([
            'recipe_id' => $id
        ]);
        $builder->delete();

        session()->setFlashdata('pesan', 'Resep berhasil dihapus.');
        return redirect()->to('/admin/resep');
    }

    //--------------------------------------------------------------------

}
