<!DOCTYPE html> 
<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <a href="/user/tambah"> + Tambah User</a>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{$d->user_id}}</td>
                <td>{{$d->username}}</td>
                <td>{{$d->nama}}</td>
                <td>{{$d->level_id}}</td>
                <td><a href="/user/ubah/{{ $d->user_id }}">ubah</a>   <a href="/user/hapus/{{ $d->user_id }}">Hapus</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
</head>
<body>
    <h1>User Data</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>Jumlah Pengguna</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $userCount }}</td>
            </tr>
        </tbody>
    </table>
</body>--}}
