<?php
include_once dirname(__DIR__) . "/CONFIG/Database.php";
include_once dirname(__DIR__) . "/MODELS/Kategori.php";

class KategoriController {
    public $model;

    public function __construct() {
        $database = new Database();
        $db = $database->connect();
        $this->model = new Kategori($db);
    }
}
?>