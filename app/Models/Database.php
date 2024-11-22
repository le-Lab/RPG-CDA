<?php
namespace App\Models;

use PDO;
use PDOException;

class Database {
    private static $connection = null;

    public static function getConnection() {
        if (!self::$connection) {
            try {
                $dsn = "mysql:unix_socket={$_ENV['DB_SOCKET']};dbname={$_ENV['DB_NAME']};charset={$_ENV['DB_CHARSET']}";
                self::$connection = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }
        }
        return self::$connection;
    }
}
