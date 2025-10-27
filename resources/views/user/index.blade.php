<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data User</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        table { border-collapse: collapse; width: 80%; margin-top: 20px; }
        th, td { border:1px solid #888; padding:8px 12px; }
        th { background-color:#eee; }
    </style>
</head>
<body>
<h2>Daftar User</h2>
<table>
    <thead>
        <tr>
            <th>ID User</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $user)
        <tr>
            <td>{{ $user->iduser }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
