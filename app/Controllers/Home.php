<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('main_screen');
    }

    public function about(): string
    {
        return view('about_screen');
    }
    

}
