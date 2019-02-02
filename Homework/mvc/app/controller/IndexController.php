<?php

class IndexController
{
    public function index()
    {
        $view = new View();
        $posts = Post::All();
        $view->render('index',["posts"=>$posts]);
    }

    public function view($id = 0)
    {
        $view = new View();
        $view->render('view',["post"=>Post::find($id)]);
    }

    public function newPost()
    {
        $data = $this->_validate($_POST);
        if ($data === false){
            header('Location: '. App::config('url'));
        } else{
            $connection = Db::connect();
            $sql = 'INSERT INTO post(content) VALUES (:content)';
            $stmt = $connection->prepare($sql);
            $stmt->bindValue('content'.$data['content']);
            $stmt->execute();
            header('Location: '. App::config('url'));
        }
    }

    private function _validate($data)
    {
        $required = ['content'];
        foreach ($required as $key){
            if(!isset($data[$key])){
                return false;
            }

            $data[$key] = trim((string)$data[$key]);
            if (empty($data[$key])){
                return false;
            }
        }
        return $data;
    }
}