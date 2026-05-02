<?php
include_once "../CONTROLLERS/KategoriController.php";

$controller = new KategoriController();
$id = $_GET['id'];

$data = $controller->model->getById($id);
$row = $data->fetch_assoc();

if(isset($_POST['update'])) {
    $controller->model->update(
        $id,
        $_POST['nama'],
        $_POST['deskripsi']
    );

    header("Location: ../index.php");
}
?>

<h2>Edit Data Kategori Buku</h2>

<form method="POST">
Nama Kategori :
<input type="text" name="nama" value="<?= $row['nama_kategori']; ?>">
<br><br>

Deskripsi :
<input type="text" name="deskripsi" value="<?= $row['deskripsi']; ?>">
<br><br>

<button type="submit" name="update">Update</button>
</form>