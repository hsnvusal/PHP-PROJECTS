<?php


namespace App\Controllers\Front;
use App\Core\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $title = 'MVC Egitimi';
        $content = 'Hos geldiniz';
        $this->render("front/home",['title'=>$title,'content'=>$content]);
    }
}
