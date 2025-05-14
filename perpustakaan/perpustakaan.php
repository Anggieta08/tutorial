<?php
include 'koneksi.php';

$result = $conn->query("SELECT * FROM tb_buku");
?>
<style>
    body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #fce38a;
    margin: 0;
    padding: 20px;
    color: #333;
}

h2 {
    text-align: center;
    color: #2c3e50;
}

a {
    color: #2c7be5;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

table {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table th, table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #35b0ab;
    color: white;
}

table tr:hover {
    background-color: #f1f1f1;
}

button, .tambah-btn {
    display: inline-block;
    padding: 8px 15px;
    background-color: #2c7be5;
    color: white;
    border: none;
    border-radius: 5px;
    margin: 10px;
    text-decoration: none;
}

button:hover, .tambah-btn:hover {
    background-color: #1a5bb8;
    cursor: pointer;
}

.fitur-links a {
    margin-right: 10px;
    color: #e74c3c;
}

.fitur-links a:first-child {
    color: #27ae60;
}

</style>

<h2>Daftar Buku</h2>
<a href="tambah_buku.php">Tambah buku</a>
<table border="1">
    <tr>
        <th>Nama Buku</th>
        <th>Pengarang</th>        
        <th>Genre</th>
        <th>Fitur</th>
    </tr>
    <?php while ($buku = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $buku['nama_buku']; ?></td>
            <td><?php echo $buku['pengarang']; ?></td>
            <td><?php echo $buku['genre']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $buku['id']; ?>">Edit</a>
                <a href="hapus.php?id=<?php echo $buku['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
    
</table>