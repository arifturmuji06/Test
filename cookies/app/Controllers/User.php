<?php

namespace App\Controllers;

use App\Models\RecipeModel;
// use App\Models\UserModel;

class User extends BaseController
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
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, addres, about, lat, long, phone');

        $query = $builder->get();

        $data = [
            'title'  => 'User Profile',
            'users'  => $query->getResult()
        ];
        return view('user/index', $data);
    }

    public function edit($id)
    {
        $users = new \Myth\Auth\Models\UserModel();
        $data = [
            'title'  => 'Edit Profile',
            'validation' => \Config\Services::validation(),
            'user' => $users->getUser($id)
        ];
        return view('user/edit', $data);
    }

    public function update($id)
    {
        $users = new \Myth\Auth\Models\UserModel();
        // cek fullname
        $userLama = $users->getUser($this->request->getVar('id'));
        if ($userLama->fullname == $this->request->getVar('fullname')) {
            $rule_fullname = 'required';
        } else {
            $rule_fullname = 'required|is_unique[users.fullname]';
        }

        if (!$this->validate([
            'fullname' => [
                'rules' => $rule_fullname,
                'errors' => [
                    'required' => '{field} Nama lengkat harus diisi.',
                    'is_unique' => '{field} Nama lengkap sudah terdaftar.'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/user/edit/' . $this->request->getVar('id'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        // cek gambar, apakah tetap gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            // generate nama file random
            $namaFoto = $fileFoto->getRandomName();
            // pindakhan gambar
            $fileFoto->move('img', $namaFoto);
            // hapus file yang lama
            if ($this->request->getVar('fotoLama') != 'default.svg') {
                unlink('img/' . $this->request->getVar('fotoLama'));
            }
        }

        $slug = url_title($this->request->getVar('fullname'), '-', true);
        $users->save([
            'id' => $id,
            'fullname' => $this->request->getVar('fullname'),
            'slug' => $slug,
            'about' => $this->request->getVar('about'),
            'addres' => $this->request->getVar('addres'),
            'phone' => $this->request->getVar('phone'),
            'lat' => $this->request->getVar('lat'),
            'long' => $this->request->getVar('long'),
            'user_image' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/user/index');
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
        return view('user/resep', $data);
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
        return redirect()->to('/user/resep');
    }



    //--------------------------------------------------------------------

}
