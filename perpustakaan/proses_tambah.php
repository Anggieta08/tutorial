<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id        = $_POST['id'];
    $nama_buku = $_POST['nama_buku'];
    $pengarang = $_POST['pengarang'];
    $genre     = $_POST['genre'];

    $stmt = $conn->prepare("INSERT INTO tb_buku (id, nama_buku, pengarang, genre) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $id, $nama_buku, $pengarang, $genre);

    if ($stmt->execute()) {
        header("Location: perpustakaan.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}