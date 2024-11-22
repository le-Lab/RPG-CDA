<?php
// config/env.php
namespace App\Config;

use Dotenv\Dotenv;

class Env {
    public static function load() {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
        $dotenv->load();
    }
}
