<?php
class Database {
    private static $instance = null;

    public static function getConnection() {
        if (!self::$instance) {
            $config = include(__DIR__ . '/../../config/database.php');
            $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";
            self::$instance = new PDO($dsn, $config['user'], $config['password']);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
