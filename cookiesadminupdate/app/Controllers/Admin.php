<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title'  => 'Admin Page',
        ];
        return view('admin/index', $data);
    }

    public function user()
    {
        $data = [
            'title'  => 'List User',
        ];
        return view('admin/user', $data);
    }

    public function resep()
    {
        $data = [
            'title'  => 'List Resep',
        ];
        return view('admin/resep', $data);
    }

    public function detail()
    {
        $data = [
            'title'  => 'Detail Resep',
        ];
        return view('admin/detail', $data);
    }

    //--------------------------------------------------------------------

}
