<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Kode Tindakan Terapi</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        table { border-collapse: collapse; width: 90%; margin-top: 20px; }
        th, td { border:1px solid #888; padding:8px 12px; }
        th { background-color:#eee; }
    </style>
</head>
<body>
<h2>Daftar Kode Tindakan Terapi</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Kategori Klinis</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $t)
        <tr>
            <td>{{ $t->idkode_tindakan_terapi }}</td>
            <td>{{ $t->kode }}</td>
            <td>{{ $t->deskripsi_tindakan_terapi }}</td>
            <td>{{ $t->kategori->nama_kategori ?? '-' }}</td>
            <td>{{ $t->kategoriKlinis->nama_kategori_klinis ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
