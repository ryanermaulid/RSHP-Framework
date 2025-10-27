<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Role</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        table { border-collapse: collapse; width: 50%; margin-top: 20px; }
        th, td { border:1px solid #888; padding:8px 12px; }
        th { background-color:#eee; }
    </style>
</head>
<body>
<h2>Daftar Role</h2>
<table>
    <thead>
        <tr>
            <th>ID Role</th>
            <th>Nama Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $role)
        <tr>
            <td>{{ $role->idrole }}</td>
            <td>{{ $role->nama_role }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
