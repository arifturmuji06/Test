<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['fullname', 'user_image', 'addres', 'about', 'lat', 'long', 'phone', 'slug'];

    public function getUser($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
