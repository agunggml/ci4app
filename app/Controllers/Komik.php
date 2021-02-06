<?php

namespace App\Controllers;

use App\Models\KomikModel;
use CodeIgniter\HTTP\RequestInterface;

class Komik extends BaseController
{

    protected $komikModel;
    protected $request;

    public function __construct(RequestInterface $request)
    {
        $this->komikModel = new KomikModel();
        $this->request = $request;
    }

    public function index()
    {
        $komik = $this->komikModel->getKomik();
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];


        echo view('komik/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('komik/detail', $data);
    }

    public function save()
    {
        $this->komikModel->save([
            'judul' => $this->request->getVar('judul')
        ]);
    }
}
