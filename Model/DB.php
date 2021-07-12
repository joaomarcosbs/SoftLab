<?php

//Connection with Database;

class DB {

    public static function conn() {
        return new PDO("mysql:host=localhost:3306;dbname=lojaweb2", 'root', '');
    }

}