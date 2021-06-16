<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            '0' => [
                'id' => 1,
                'name' => 'Cao Ngan',
                'bod' => '2000-09-08',
                'email' => 'caongan@gmail.com'
            ],
            '1' => [
                'id' => 2,
                'name' => 'Ngan Ngo',
                'bod' => '2001-01-05',
                'email' => 'nganngo@gmail.com'
            ],
            '2' => [
                'id' => 3,
                'name' => 'Coco',
                'bod' => '2002-11-08',
                'email' => 'duongqua@gmail.com'
            ]
        ];

        return view('list', compact('customers'));
    }
}
