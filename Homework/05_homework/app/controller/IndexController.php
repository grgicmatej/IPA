<?php

class IndexController
{
    public function index()
    {
        $view = new View();
        $posts = [
            'First Post',
            'Second Post'
        ];

        $view->render('index',[
            "posts"=>$posts
        ]);
    }
}