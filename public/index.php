<?php
require_once '../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Config\Env;

Env::load();

$url = $_GET['url'] ?? 'home';
if ($url === 'home') {
    $controller = new HomeController();
    $controller->index();
} else {
    echo "404 - Page non trouvée";
}
