<?php
class IndexController
{
    public function index()
    {
        $view = new View();
        $posts = Post::all();
        $view->render('index',[
            "posts"=>$posts
        ]);
    }
    public function newPost()
    {
        $data = $this->validate($_POST);
        if($data === false){
            header('Location: '.App::config('url'));
        }else{
            $connection = Db::connect();
            $sql = 'insert into post (content) values (:content)';
            $stmt = $connection -> prepare($sql);
            $stmt -> bindValue('content', $_POST['content']);
            $stmt -> execute();
            header('Location: '.App::config('url'));

        }
    }
    public function deletePost()
    {
        $connection = Db::connect();

        $sql = 'DELETE FROM post where id=:id';
        $stmt = $connection -> prepare($sql);
        $stmt -> execute($_POST);
        header('Location: '.App::config('url'));
    }
    private function validate($data)
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
    public function view($id)
    {
        $view = new View();
        $view -> render('view',[
            'post'=> Post::find($id)
    ]);
    }
}