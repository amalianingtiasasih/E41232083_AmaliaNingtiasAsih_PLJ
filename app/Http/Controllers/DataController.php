<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function login()
    {
        return view('login');
    }

    public function pel()
    {
        return view('pel');
    }

    public function foo()
    {
        $data = array(
            [
                "nama" => "Rasya",
                "jurusan" => "ti",
                "hoby" => "olahraga",
            ],
            [
                "nama" => "mega",
                "jurusan" => "mbp",
                "hoby" => "musik",
            ],
            
        );

        // dd($data);
        return view('foo', compact('data'));
    }
}
