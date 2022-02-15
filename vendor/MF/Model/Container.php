<?php

namespace MF\Model;
use App\Connection;

class container {
    public static function getModel($model){
        $class = "\\App\\Models\\".ucfirst($model);
        $conn = Connection::getDb();

        return new $class($conn);
    }
}


?>