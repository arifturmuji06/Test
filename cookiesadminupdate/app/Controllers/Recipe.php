<?php

namespace App\Controllers;

use App\Models\RecipeModel;
use App\Models\UserModel;

class Recipe extends BaseController
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
            'recipe' => $this->recipeModel->getRecipe()
        ];
        return view('recipe/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Resep',
            'recipe' => $this->recipeModel->getRecipe($slug)
        ];

        // jika komik tidak ada di tabel
        if (empty($data['recipe'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Resep ' . $slug . ' tidak ditemukan.');
        }

        return view('recipe/detail', $data);
    }

    public function create()
    {

        $data = [
            'title'  => 'Buat Resep',
            'validation' => \Config\Services::validation()
        ];
        return view('recipe/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[recipes.title]',
                'errors' => [
                    'required' => '{field} resep harus diisi.',
                    'is_unique' => '{field} resep sudah terdaftar.'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
            return redirect()->to('/recipe/create')->withInput();
        }
        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->recipeModel->save([
            'title' => $this->request->getVar('title'),
            'id' => $this->request->getVar('id_user'),
            'slug' => $slug,
            'serving' => $this->request->getVar('serving'),
            'duration' => $this->request->getVar('duration'),
            'ingredients' => $this->request->getVar('ingredients'),
            'steps' => $this->request->getVar('steps')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/recipe');
    }
    // public function contohApiMap()
    // {
    //     return view('recipe/contohApiMap');
    // }
    //--------------------------------------------------------------------

}
