<?php
include_once "CONTROLLERS/KategoriController.php";

$controller = new KategoriController();

if(isset($_GET['hapus'])) {
    $controller->model->delete($_GET['hapus']);
    header("Location: index.php");
}

include_once "VIEWS/List.php";
?>