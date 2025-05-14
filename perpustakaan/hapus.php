<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM tb_buku WHERE id = ?");
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        header("Location: perpustakaan.php");
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    header("Location: perpustakaan.php");
}