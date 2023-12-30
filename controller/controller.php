<?php
require_once("../model/model.php");
class controller extends model{
    public function __construct(){
        // parent::__construct();
        $path = (isset($_SERVER["PATH_INFO"]))? $_SERVER["PATH_INFO"] : "/home" ;
        switch ($path) {
            case '/home':
                $this->view("../view/home.php");
                break;
            case '/api/get':{
                if($_SERVER["REQUEST_METHOD"]=="GET"){
                    $data=[
                        "data"=>[
                            "name"=>"jatin",
                            "email"=>"jatin@example.com"
                        ],
                        "message"=>"success",
                        "status"=>200
                    ];
                    print_r(json_encode($data));
                }
                break;
            }
            default:
                
                break;
        }
    } 

    public function view($url){
        require_once("../view/header.php");
        require_once($url);
        require_once("../view/footer.php");
    }
}