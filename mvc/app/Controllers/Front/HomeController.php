<?php

namespace app\Controllers\Front;
use App\Core\BaseController;
use App\Core\Database;
use Exception;

class HomeController extends BaseController 
{
    public function index()
    {
        try {
            $db = Database::getInstance()->getConnection();
            echo "Veritabani baglantisi basarili";
        }
        catch (Exception $e) {
             echo "Veritabani baglantisi basarisiz: " . $e->getMessage();
        }
        // $title = "MVC Egitimi";
        // $content = "Hos geldiniz";
        // $this->render("front/home",['title'=>$title,'content'=>$content ]);  
    }
}