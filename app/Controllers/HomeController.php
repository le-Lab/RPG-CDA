<?php
namespace App\Controllers;
use PDO;
use App\Models\Database;

class HomeController {
  public function index() {
    $db = Database::getConnection();
    $test = $db->query("SHOW TABLES")->fetchAll(PDO::FETCH_ASSOC);
    include '../app/Views/home.php';
}
}




