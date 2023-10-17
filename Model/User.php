<?php
class User extends Model{
    var $id;
    var $username;
    var $email;

    public function get(){
        $SQL = "SELECT * FROM users";
        $stmt = self::$_conn->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS,'User');
        return $stmt->fetchAll();
    }

    public function edit(){
        $SQL = "UPDATE users SET username=:username, email=:email WHERE id=:id";
        $stmt = self::$_conn->prepare($SQL);
        $stmt->execute(['id'=>$this->id,
                        'username'=>$this->username,
                        'email'=>$this->email]);
        return $stmt->rowCount();
    }

    public function find($id){
        $SQL = "SELECT * FROM users WHERE id=:id";
        $stmt = self::$_conn->prepare($SQL);
        $stmt->execute(['id'=>$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS,'User');
        return $stmt->fetch();
    }

}




?>