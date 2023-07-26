@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body> 
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="container-fluid p-3">
                <div class="col-md-12">
                    <form action="">
                        <div class="col-4 mb-2">
                            <label for="" class="form-label ">ID Administrator</label>
                            <input type="text" name="id_adm" id="id_adm" class="form-control" placeholder="Masukan ID">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <input type="radio" name="jk" id="jk" value="L">Laki-laki
                            <input type="radio" name="jk" id="jk" value="P">Perempuan
                        </div>
                        <div class="col-4">
                            <label for="" class="form-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat">
                        </div>
                        <div class="pt-3">
                            <input type="submit" value="simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
