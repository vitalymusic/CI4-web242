<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    function __construct(){
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('posts');
    }

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
        $result = $this->builder->get();

        foreach ($result->getResultArray() as $row) {
            $data["posts"][] = $row;
        }

        $data["page_title"] = "Новости";
        return view('posts_screen',$data);
    }


    public function post($id){
        $data["page_title"] = "Новость";
        $this->builder->select('post_name, content, posts.post_img, posts.date, users.name, users.surname');
        $this->builder->join('Users', 'posts.user_id = Users.id');
        $result = $this->builder->where('posts.id',$id)->get();


        $data["post"] = $result->getResultArray()[0];

       $time = Time::parse($data["post"]["date"]);
        $data["post"]["date"]  = "{$time->day}.{$time->month}.{$time->year} {$time->hour}:{$time->minute}";





        // return d($time);
        return view('post_screen',$data);
    }



    public function new_post_form(){

        return view('new_post_form');

    }


    public function save_post(){
        $formData = [
            "post_name" =>$this->request->getPost('post_name'),
            "content" =>$this->request->getPost('content'),
            "post_img" =>$this->request->getFile('post_img')->getName(),
            "user_id" =>$this->request->getPost('user_id')
        ];

        $this->request->getFile('post_img')->store(FCPATH .'/uploads');

        if($this->builder->insert($formData)){
            return redirect()->to("posts");
        }
    }
    


    public function get_menu(){
        $builder = $this->db->table('menu');    
        $result = $builder->get();

        foreach ($result->getResultArray() as $row) {
            $data["menu"][] = $row;
        }

        return $this->response->setJSON($data);
        
        //  echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

}
