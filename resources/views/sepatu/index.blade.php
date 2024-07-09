<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Sepatu</title>
</head>
<body>
    <h1>Daftar Sepatu</h1>
    <a href="{{ route('sepatu.create') }}">Tambah Sepatu</a>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Ukuran</th>
           <tr>
                <td>{{ $sepatu->nama }}</td>
                <td>{{ $sepatu->ukuran }}</td>
                <td>{{ $sepatu->deskripsi }}</td>
                <td>
                    <a href="{{ route('sepatu.show', $sepatu->id) }}">Detail</a>
                    <a href="{{ route('sepatu.edit', $sepatu->id) }}">Edit</a>
                    <form action="{{ route('sepatu.destroy', $sepatu->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>              <th>Deskripsi</th>
</html>