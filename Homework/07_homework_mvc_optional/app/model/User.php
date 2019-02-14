<?php

class user
{
    public static function find($id)
    {
        $db = Db::connect();
        $statement = $db->prepare("select * from user where id=:id");
        $statement->execute(["id"=>$id]);
        return $statement->fetch();
    }

    public static function update($id)
    {
        var_dump(intval($id));
        $db = Db::connect();
        $statement = $db->prepare("UPDATE user SET firstname=:firstname,lastname=:lastname,email=:email,pass=:pass where id=:id ");
        $infodata = self::infodata();
        $infodata["id"]=intval($id);
        var_dump($_POST)."<br />";
        var_dump($infodata)."<br />";
        $statement->execute($infodata);
        //$this->index();
    }
    private static function infodata(){
        return [
            "firstname"=>Request::post("firstname"),
            "lastname"=>Request::post("lastname"),
            "email"=>Request::post("email"),
            "pass"=>password_hash(Request::post("pass"), PASSWORD_DEFAULT),
        ];
    }

}