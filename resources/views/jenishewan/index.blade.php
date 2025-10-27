<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Jenis Hewan</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        table { border-collapse: collapse; width: 60%; margin-top: 20px; }
        th, td { border:1px solid #888; padding:8px 12px; }
        th { background-color:#eee; }
    </style>
</head>
<body>
<h2>Daftar Jenis Hewan</h2>
<table>
    <thead>
        <tr>
            <th>ID Jenis Hewan</th>
            <th>Nama Jenis Hewan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $jenis)
        <tr>
            <td>{{ $jenis->idjenis_hewan }}</td>
            <td>{{ $jenis->nama_jenis_hewan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
