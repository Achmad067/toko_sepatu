<!DOCTYPE html>
<html>
<head>
    <title>Edit Sepatu</title>
</head>
<body>
    <h1>Edit Sepatu</h1>
    <form action="{{ route('sepatu.update', $sepatu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $sepatu->nama }}" required><br>
        <label>Ukuran:</label>
        <input type="text" name="ukuran" value="{{ $sepatu->ukuran }}" required><br>
        <label>Deskripsi:</label>
        <textarea name="deskripsi" required>{{ $sepatu->deskripsi }}</textarea><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
