<!DOCTYPE html>
<html>
<head>
    <title>Tambah Sepatu</title>
</head>
<body>
    <h1>Tambah Sepatu</h1>
    <form action="{{ route('sepatu.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>Ukuran:</label>
        <input type="text" name="ukuran" required><br>
        <label>Deskripsi:</label>
        <textarea name="deskripsi" required></textarea><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
