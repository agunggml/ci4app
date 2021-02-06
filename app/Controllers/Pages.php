<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dagung'
        ];

        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us'
        ];

        echo view('pages/contact', $data);
    }
}
