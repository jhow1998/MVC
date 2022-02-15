<?php

namespace App;

class Connection{

    public static function getDb(){
        
        try{
            $conn = new \PDO(
                "mysql:host=localhost;dbname=mvc",
                "root",
                ""
            );

            return $conn;

        } catch (\PDOException $e){
            '<p>'.$e->getMessage.'</p>';
        }
    }





}



?>