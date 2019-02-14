<?php

class UserController
{
    public function prepareedit()
    {
        $view = new View();
        $view->render('users/edit',["message"=>""]);
    }

    public function edit($id)
    {
        if(Request::post("pass")!==Request::post("confirmpass")){
            $view = new View();
            $view->render('users/edit',["message"=>"passwords are not equal"]);
        }else{
            $control=$this->control();
            if($control===true){
                try{
                    $db = Db::connect();
                    $stmt = $db->prepare("update user set firstname = :firstname, lastname = :lastname, email = :email, pass = :pass where id = :id");
                    $stmt ->bindValue('firstname', Request::post("firstname"));
                    $stmt ->bindValue('lastname', Request::post("lastname"));
                    $stmt ->bindValue('email', Request::post("email"));
                    $stmt ->bindValue('pass', password_hash(Request::post("pass"), PASSWORD_DEFAULT));
                    $stmt ->bindValue('id',$id);
                    $stmt ->execute();
                    Session::getInstance()->logout();
                    $view = new View();
                    $view ->render('login',["message"=>"please login again"]);
                }catch (PDOException $exception){
                    $view = new View();
                    $view->render('users/edit',["message"=>"email already exists!"]);
                }
            }else{
                $view = new View();
                $view->render('users/edit',["message"=>$control]);
            }
        }
    }

    public function control()
    {
        if(Request::post("firstname")===""){
            return "First name is mandatory!";
        }
        if(Request::post("lastname")===""){
            return "Last name is mandatory!";
        }
        if(Request::post("email")===""){
            return "Email name is mandatory!";
        }
        if(Request::post("pass")===""){
            return "Password is mandatory!";
        }
        if(strlen(Request::post("firstname"))<1 || strlen(Request::post("firstname"))>30){
            return "First name is too short or too long!";
        }
        $db = Db::connect();
        $statement = $db->prepare("select count(id) from user where email=:email and id<>:id");
        $statement->execute(["email"=>Request::post("email"), "id" => Request::post("id")]);
        $total = $statement->fetchColumn();
        if($total>0){
            return "Email already exists!";
        }
        return true;
    }

    public function index()
    {

        $posts = Post::all();
        $view = new View();
        $view->render('index', [
            "posts" => $posts
        ]);
    }
}