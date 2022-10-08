<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function index()
    {
        $pgModel = new PegawaiModel();
        $data = $pgModel->findAll();

        $load = [
            'title' => 'Master Data Pegawai',
            'data' => $data,
        ];

        return view('/content/pegawai_view', $load);
    }
}
