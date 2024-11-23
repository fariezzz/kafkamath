<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            'title' => 'Tentang Kami',
            'profiles' => [
                [
                    'photo' => 'images/profil/fariez.jpg',
                    'name' => 'Muhammad Fariez Riziq Ilham',
                    'nim' => '247006111146',
                    'institution' => 'Universitas Siliwangi',
                ],
                [
                    'photo' => 'images/profil/raya.jpg',
                    'name' => 'Moh Raya Alfareza Alban',
                    'nim' => '247006111133',
                    'institution' => 'Universitas Siliwangi',
                ],
                [
                    'photo' => 'images/profil/raffa.jpg',
                    'name' => 'Raffa Erlangga Faturochman',
                    'nim' => '247006111145',
                    'institution' => 'Universitas Siliwangi',
                ],
                [
                    'photo' => 'images/profil/dwiki.jpg',
                    'name' => 'Dwiki Muhammad Wasfi',
                    'nim' => '247006111136',
                    'institution' => 'Universitas Siliwangi',
                ],
                [
                    'photo' => 'images/profil/zaki.jpg',
                    'name' => 'M Zaki Zaidan B',
                    'nim' => '247006111134',
                    'institution' => 'Universitas Siliwangi',
                ],
            ],
        ]);
    }
}