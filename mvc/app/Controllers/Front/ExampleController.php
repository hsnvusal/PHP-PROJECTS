<?php

namespace app\Controllers\Front;
use App\Core\BaseController;

class ExampleController extends BaseController 
{
    public function index()
    {
        $title = "Example MVC Egitimi";
        $content = "Hos geldiniz";
        $this->render("front/example",['title'=>$title,'content'=>$content ]);  
    }
}