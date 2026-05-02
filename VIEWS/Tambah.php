<?php
include_once "../CONTROLLERS/KategoriController.php";

$controller = new KategoriController();

if(isset($_POST['simpan'])) {
    $controller->model->create($_POST['nama'], $_POST['deskripsi']);
    header("Location: ../index.php");
}
?>

<h2>Tambah Data Kategori Buku</h2>

<form method="POST">
Nama Kategori :
<input type="text" name="nama">
<br><br>

Deskripsi :
<input type="text" name="deskripsi">
<br><br>

<button type="submit" name="simpan">Simpan</button>
</form>