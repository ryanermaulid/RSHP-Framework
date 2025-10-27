<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Kategori</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        table { border-collapse: collapse; width: 60%; margin-top: 20px; }
        th, td { border:1px solid #888; padding:8px 12px; }
        th { background-color:#eee; }
    </style>
</head>
<body>
<h2>Daftar Kategori</h2>
<table>
    <thead>
        <tr>
            <th>ID Kategori</th>
            <th>Nama Kategori</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $kategori)
        <tr>
            <td>{{ $kategori->idkategori }}</td>
            <td>{{ $kategori->nama_kategori }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
