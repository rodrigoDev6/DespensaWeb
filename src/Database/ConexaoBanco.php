<?php

namespace DespensaWeb\Database;

use PDO;
class ConexaoBanco
{
    public static function criadorConexao(): PDO
    {
        $host = "127.0.0.1";
        $database = "despensa_web";
        $username = "root";
        $password = "password";

        $connection = new PDO(
            "mysql:host={$host}; dbname={$database}",
            $username,
            $password
        );

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }

}