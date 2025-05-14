<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama_buku = $_POST['nama_buku'];
    $pengarang = $_POST['pengarang'];
    $genre = $_POST['genre'];
    
    $stmt = $conn->prepare("UPDATE tb_buku SET nama_buku = ?, pengarang = ?, genre = ? WHERE id = ?");
    $stmt->bind_param("ssss", $nama_buku, $pengarang, $genre, $id);

    if ($stmt->execute()) {
        header("Location: perpustakaan.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}