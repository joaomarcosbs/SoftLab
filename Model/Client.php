<?php

class Client{

    public $id;
    public $name;
    public $email;


    public function __construct($id, $name, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public static function register($name, $email, $password) {

        if ($name != '' && $email != '' && $password != '') {

            $password = password_hash($password, PASSWORD_DEFAULT); 

            $query = DB::conn()->prepare('INSERT INTO client (name, email, password) VALUES (:name, :email, :password)');
            $query->bindValue('name', $name);
            $query->bindValue('email', $email);
            $query->bindValue('password', $password);

            return $query->execute();
        }

        return false;
    }

    public static function login($email, $password) {

        $query = DB::conn()->prepare('SELECT * FROM client WHERE email = :email');
        $query->bindValue('email', $email);
        $query->execute();

        if ($query->rowCount() != 0) {
            $client = $query->fetch(PDO::FETCH_OBJ);

            if (password_verify($password, $client->password))
                return new Client($client->id, $client->name, $client->email);
        }

        return false;
    }


}