<!DOCTYPE html>
<html>
<head>
    <title>Detail Sepatu</title>
</head>
<body>
    <h1>Detail Sepatu</h1>
    <p>Nama: {{ $sepatu->nama }}</p>
    <p>Ukuran: {{ $sepatu->ukuran }}</p>
    <p>Deskripsi: {{ $sepatu->deskripsi }}</p>
    <a href="{{ route('sepatu.index') }}">Kembali ke Daftar Sepatu</a>
</body>
</html>
