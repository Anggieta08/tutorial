<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM tb_buku WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $buku = $result->fetch_assoc();
} else {
    header("Location: perpustakaan.php");
    exit();
}
?>
<style>
    body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #95e1d3;
    padding: 30px;
    color: #333;
}

form {
    max-width: 500px;
    margin: auto;
    padding: 25px 30px;
    background-color: #fce38a;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: 600;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 15px;
}

button {
    width: 100%;
    padding: 12px;
    background-color: #f38181;
    color: white;
    border: none;
    font-size: 16px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color:rgb(207, 110, 110);
    cursor: pointer;
}

a {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #2c7be5;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>
<h2>Edit Admin</h2>
<form action="proses_edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $buku['id']; ?>">

    <label>Nama Buku : </label>
    <input type="text" name="nama_buku" value="<?php echo $buku['nama_buku']; ?>" required><br><br>

    <label>Pengarang : </label>
    <input type="text" name="pengarang" value="<?php echo $buku['pengarang']; ?>" required><br><br>

    <label>Genre : </label>
    <input type="text" name="genre" value="<?php echo $buku['genre']; ?>" required><br><br>

    <button type="submit">Edit</button>
    <a href="perpustakaan.php">Kembali</a>
</form>
