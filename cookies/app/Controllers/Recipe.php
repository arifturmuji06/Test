<?php

namespace App\Controllers;

use App\Models\RecipeModel;
// use App\Models\UserModel;

class Recipe extends BaseController
{
    protected $recipeModel;
    // protected $userModel;

    public function __construct()
    {
        $this->recipeModel = new RecipeModel();
        // $this->userModel = new UserModel();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('recipes');
        $builder->select('users.id as userid, username, user_image, users.slug as user_slug, recipe_id, title, recipe_image, recipe_desc, status_resep, recipes.slug as recipe_slug, recipes.created_at as created');
        $builder->join('users', 'users.id = recipes.id');
        $query = $builder->get();

        $data = [
            'title'  => 'Cookies Culinary',
            'recipe'   => $query->getResult()
        ];

        return view('recipe/index', $data);
    }

    public function detail($slug)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('recipes');
        $builder->select('users.id as userid, addres, username, fullname, user_image, users.slug as user_slug, recipe_id, title, recipe_image, recipe_desc, status_resep, recipes.slug as recipe_slug, duration, ingredients, steps, serving, recipes.created_at as created');
        $builder->where([
            'recipes.slug' => $slug
        ]);
        $builder->join('users', 'users.id = recipes.id');
        $query = $builder->get();

        $data = [
            'title' => 'Detail Resep',
            'recipe' => $query->getResult()
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
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
            return redirect()->to('/recipe/create')->withInput();
        }

        // ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        // apakah tidak ada gambar yang diupload
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'defaultreseppic.jpg';
        } else {
            // generate nama Gambar random
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan file ke folder img
            $fileGambar->move('img', $namaGambar);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->recipeModel->save([
            'title' => $this->request->getVar('title'),
            'id' => $this->request->getVar('id_user'),
            'slug' => $slug,
            'serving' => $this->request->getVar('serving'),
            'duration' => $this->request->getVar('duration'),
            'ingredients' => $this->request->getVar('ingredients'),
            'steps' => $this->request->getVar('steps'),
            'recipe_desc' => $this->request->getVar('rdesc'),
            'recipe_image' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Terima kasih, resep anda sudah tersimpan dan sedang dalam tahap approval.');

        return redirect()->to('/recipe/create');
    }

    public function edit($slug)
    {
        $data = [
            'title'  => 'Edit Resep',
            'validation' => \Config\Services::validation(),
            'recipes' => $this->recipeModel->getRecipe($slug)
        ];
        return view('recipe/edit', $data);
    }

    public function update($id)
    {
        // cek fullname
        $recipeLama = $this->recipeModel->getRecipe($this->request->getVar('slug'));
        if ($recipeLama['title'] == $this->request->getVar('title')) {
            $rule_title = 'required';
        } else {
            $rule_title = 'required|is_unique[recipes.title]';
        }

        if (!$this->validate([
            'title' => [
                'rules' => $rule_title,
                'errors' => [
                    'required' => '{field} Judul resep harus diisi.',
                    'is_unique' => '{field} Judul resep sudah terdaftar.'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/recipe/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // generate nama file random
            $namaGambar = $fileGambar->getRandomName();
            // pindakhan gambar
            $fileGambar->move('img', $namaGambar);
            // hapus file yang lama
            if ($this->request->getVar('gambarLama') != 'defaultreseppic.jpg') {
                unlink('img/' . $this->request->getVar('gambarLama'));
            }
        }

        $slug = url_title($this->request->getVar('fullname'), '-', true);
        $this->recipeModel->save([
            'recipe_id' => $id,
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'serving' => $this->request->getVar('serving'),
            'duration' => $this->request->getVar('duration'),
            'ingredients' => $this->request->getVar('ingredients'),
            'steps' => $this->request->getVar('steps'),
            'recipe_desc' => $this->request->getVar('rdesc'),
            'id' => $this->request->getVar('id_user'),
            'user_image' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/user/index');
    }
    // public function contohApiMap()
    // {
    //     return view('recipe/contohApiMap');
    // }
    //--------------------------------------------------------------------

}
