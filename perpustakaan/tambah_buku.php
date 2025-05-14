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

<form action="proses_tambah.php" method="POST">
    <h2>Tambah Buku</h2>

    <label>Nama Buku:</label>
    <input type="text" name="nama_buku" required><br><br>

    <label>Pengarang:</label>
    <input type="text" name="pengarang" required><br><br>

    <label>Genre:</label>
    <input type="text" name="genre" required><br><br>

    <button type="submit">Tambah Buku</button><br><br>
    <a href="perpustakaan.php">Kembali</a>
</form>