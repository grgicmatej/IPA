<?php

class IndexController
{
    public function index()
    {
        $view = new View();
        $posts = ['Matej Grgic'];
        $view->render('index',[
            "posts"=>$posts
        ]);
    }
}