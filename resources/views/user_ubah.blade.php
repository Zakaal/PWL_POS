<!DOCTYPE html> 
<html>
    <head>
        <title>Forma Ubah Data</title>
    </head>
    <body>
        <h1>Form Ubah Data</h1>
        <a href="/user">Kembali</a>
        <form method="post" action="/user/ubah_simpan/{{ $data->user_id}}">
            {{ csrf_field() }}
            {{ method_field('PUT')}}

            <label for="">Username</label>
            <input type="text" name="username" placeholder="Masukkan Username" value="{{ $data->username}}">
            <br>
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $data->nama}}">
            <br>
            <label for="">Password</label>
            <input type="text" name="password" placeholder="Masukkan Password" value="{{ $data->password}}">
            <br>
            <label for="">Level ID</label>
            <input type="number" name="level_id" placeholder="Masukkan Level ID" value="{{ $data->level_id}}">
            <br><br>
            <input type="submit" class="btn btn-success" value="Ubah">
        </form>
    </body>
</html>