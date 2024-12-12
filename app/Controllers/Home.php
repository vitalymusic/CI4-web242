<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            "page_title" => "Главная страница",
            "content" => "
                <h1>This is content</h1>
            ",
            "user_data" =>[
                "name"=>"Vitaly",
                "email" => "user@inbox.lv"
            ]
        ];





        return view('main_screen',$data);
    }

    public function about(): string
    {
        return view('about_screen');
    }
    

}
