<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Pet</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        table { border-collapse: collapse; width: 90%; margin-top: 20px; }
        th, td { border:1px solid #888; padding:8px 12px; }
        th { background-color:#eee; }
    </style>
</head>
<body>
<h2>Daftar Pet</h2>
<table>
    <thead>
        <tr>
            <th>ID Pet</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Warna</th>
            <th>Jenis Kelamin</th>
            <th>ID Pemilik</th>
            <th>ID Ras Hewan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $pet)
        <tr>
            <td>{{ $pet->idpet }}</td>
            <td>{{ $pet->nama }}</td>
            <td>{{ $pet->tanggal_lahir }}</td>
            <td>{{ $pet->warna_tanda }}</td>
            <td>{{ $pet->jenis_kelamin }}</td>
            <td>{{ $pet->idpemilik }}</td>
            <td>{{ $pet->idras_hewan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
