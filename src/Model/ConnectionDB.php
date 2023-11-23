<?php

namespace viniciusdnb\portifolio\Model;

use PDO;
use PDOException;
use viniciusdnb\portifolio\Model\ConfigDB;

class ConnectionDB
{
    private static $connection;

    public static function getConnection()
    {
        new ConfigDB();

        $dsn = DB_DRIVER . ":dbname=" . DB_NAME . ";host=" . DB_HOST;

        try {
                if(!isset($connection))
                {
                    $connection = new PDO($dsn, DB_USER, DB_PASS);
                    $connection->setAttribute(PDO::ATTR_ERRMODE, 						PDO::ERRMODE_EXCEPTION);
                    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                    $connection->setAttribute(PDO::ATTR_PERSISTENT, 				true);
                    $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, 	false);

                    return $connection;
                }

        }catch(PDOException $ex)
        {
                echo "mensagem: " . $ex->getMessage() . " codigo: " . $ex->getCode();
        }
    }

    function __destruct()
    {
        
    }
}
?>