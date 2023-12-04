<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function index()
    {
        $data = [
            [
                'nama' => 'ahmad',
                'email' => 'ilham.12@gmai.com',
                'telp' => '08987779998'
            ],
            [
                'nama' => 'yayan',
                'email' => 'ilham.12@gmai.com',
                'telp' => '08987779998'
            ],
            [
                'nama' => 'yuyun',
                'email' => 'ilham.12@gmai.com',
                'telp' => '08987779998'
            ]
        ];
        $id = '222';

        // if ($data['nama'] == 'ahmad') {
        //     $string = 'nama terdaftar';
        // } else {
        // //     $string = 'nama tidak terdaftar';
        // }
        return view('user', compact('data', 'id'));
    }
}
