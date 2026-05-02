<?php
class Kategori {

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM kategori");
    }

    public function getById($id) {
        return $this->conn->query("SELECT * FROM kategori WHERE id=$id");
    }

    public function create($nama, $deskripsi) {
        return $this->conn->query("INSERT INTO kategori(nama_kategori, deskripsi)
        VALUES('$nama','$deskripsi')");
    }

    public function update($id, $nama, $deskripsi) {
        return $this->conn->query("UPDATE kategori SET nama_kategori='$nama',
        deskripsi='$deskripsi' WHERE id=$id");
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM kategori WHERE id=$id");
    }
}
?>