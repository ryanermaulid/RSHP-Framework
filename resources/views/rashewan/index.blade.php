<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Ras Hewan</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        table { border-collapse: collapse; width: 80%; margin-top: 20px; }
        th, td { border:1px solid #888; padding:8px 12px; }
        th { background-color:#eee; }
    </style>
</head>
<body>
<h2>Daftar Ras Hewan</h2>
<table>
    <thead>
        <tr>
            <th>ID Ras Hewan</th>
            <th>Nama Ras</th>
            <th>Jenis Hewan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $ras)
        <tr>
            <td>{{ $ras->idras_hewan }}</td>
            <td>{{ $ras->nama_ras }}</td>
            <td>{{ $ras->jenis->nama_jenis_hewan ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
