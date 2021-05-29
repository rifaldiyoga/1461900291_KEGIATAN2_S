<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('libraries/bootstrap/css/bootstrap.css')}}">
</head>
<body>
    <div class="container-fluid">

        <!-- SELECT -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h5>Select</h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nama Siswa</td>
                                <td>NIS</td>
                                <td>Jenis Kelamin</td>
                                <td>Alamat</td>
                                <td>Telepon</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($select as $data)
                            <tr>
                                <td>{{ $data->id_siswa }}</td>
                                <td>{{ $data->nama_siswa }}</td>
                                <td>{{ $data->nis }}</td>
                                <td>{{ $data->kelamin }}</td>
                                <td>{{ $data->alamat_siswa }}</td>
                                <td>{{ $data->telpon_siswa }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- SELECT LIKE -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h5>Select Like</h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nama Siswa</td>
                                <td>NIS</td>
                                <td>Jenis Kelamin</td>
                                <td>Alamat</td>
                                <td>Telepon</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($selectLike as $data)
                            <tr>
                                <td>{{ $data->id_siswa }}</td>
                                <td>{{ $data->nama_siswa }}</td>
                                <td>{{ $data->nis }}</td>
                                <td>{{ $data->kelamin }}</td>
                                <td>{{ $data->alamat_siswa }}</td>
                                <td>{{ $data->telpon_siswa }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- SELECT JOIN -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h5>Select Join</h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Nama Siswa</td>
                                <td>Nama Guru</td>
                                <td>Nama Pelajaran</td>
                                <td>Nama Kelas</td>
                                <td>Nilai</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($selectJoin as $data)
                            <tr>
                                <td>{{ $data->id_siswa }}</td>
                                <td>{{ $data->nama_siswa }}</td>
                                <td>{{ $data->nama_guru }}</td>
                                <td>{{ $data->nama_pelajaran }}</td>
                                <td>{{ $data->nama_kelas }}</td>
                                <td>{{ $data->nilai }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- SELECT JOIN WHERE-->
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h5>Select Join Where</h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Nama Siswa</td>
                                <td>Nama Guru</td>
                                <td>Nama Pelajaran</td>
                                <td>Nama Kelas</td>
                                <td>Nilai</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($selectJoinLike as $data)
                            <tr>
                                <td>{{ $data->id_siswa }}</td>
                                <td>{{ $data->nama_siswa }}</td>
                                <td>{{ $data->nama_guru }}</td>
                                <td>{{ $data->nama_pelajaran }}</td>
                                <td>{{ $data->nama_kelas }}</td>
                                <td>{{ $data->nilai }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{url('libraries/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{url('libraries/jquery/jquery-3.6.0.min.js')}}"></script>
</html>