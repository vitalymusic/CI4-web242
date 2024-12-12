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
        $table = new \CodeIgniter\View\Table();
        
        $template = [
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table">',
        ];

        $table->setTemplate($template);


        $data["tableObject"] = $table;


        $data["tableData"] = [
            ['Name', 'Color', 'Size'],
            ['Fred', 'Blue', 'Small'],
            ['Mary', 'Red', 'Large'],
            ['John', 'Green', 'Medium'],
        ];

        


        return view('about_screen',$data);
    }


    public function all_posts(){
        $data["page_title"] = "Новости";
        $data["posts"] = [
                [
                    "id"=>"1",
                    "post_image"=>"https://placehold.co/300",
                    "post_title"=>"Post1",
                    "post_content"=>"Post 1 content"
                ],
                [
                    "id"=>"2",
                    "post_image"=>"https://placehold.co/300",
                    "post_title"=>"Post2",
                    "post_content"=>"Post 2 content"
                ],
                [
                    "id"=>"3",
                    "post_image"=>"https://placehold.co/300",
                    "post_title"=>"Post3",
                    "post_content"=>"Post 3 content"
                ]
            ];



        return view('posts_screen',$data);
    }


    public function post($id){

        $data["page_title"] = "Новость";

        $data["id"] = $id;


        return view('post_screen',$data);
    }
    

}
