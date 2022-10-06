<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    public function index()
    {
        $pgModel = new PenggunaModel();
        $data = $pgModel->findAll();

        $load = [
            'title' => 'Data Pengguna',
            'data'  => $data,
        ];

        return view('pengguna_view', $load);
    }
}
