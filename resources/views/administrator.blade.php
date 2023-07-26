@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <a href="{{ url('administrator/add') }}"><button class="btn btn-primary btn-sm mt-3">Tambah data</button></a>
        <table class="table table-bordered text-center mt-3">
            <tr>
                <th>No</th>
                <th>ID Adm</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            @foreach ($table_administrator as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->id_adm }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jk=='L'?'Laki-laki':'Perempuan' }}</td>
                <td>{{ $item->alamat }}</td>
                <td>
                    <a href="administrator/edit/{{ $item->id_adm }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="administrator/hapus/{{ $item->id_adm }}" class="btn btn-danger btn-sm" onclick="return window.confirm('hapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
    </table>
</div>
</body>
</html>
