<html>

<head>
    <title>Remedial Pemrograman 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">

</head>

<body style="margin: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <h4>Tambah Pegawai</h4>
            <form action="{{route('add_pegawai')}}" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="">NIP</label>
                    <input type="text" name="nip" id="" class="form-control" max="20">
                </div>
                <div class="form-group mb-2">
                    <label for="">Nama</label>
                    <input type="text" name="nama" id="" class="form-control" max="50">
                </div>
                <div class="form-group mb-2">
                    <label for="">Jenis Kelamin</label><br>
                    <input type="radio" name="jenis" id="" value="L">Laki-Laki
                    <input type="radio" name="jenis" id="" value="P">Perempuan
                </div>
                <div class="form-group mb-2">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tmplahir" id="" class="form-control" max="20">
                </div>
                <div class="form-group mb-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgllahir" id="" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan!</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h4>List Pegawai</h4>
            <table class="table">
                <tr>
                    <td>No</td>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tempat Lahir</td>
                    <td>Tanggal Lahir</td>
                    <td>Aksi</td>
                </tr>
                @php
                $no = 1;
                @endphp
                @forelse ($pegawai as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nip}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jenis}}</td>
                    <td>{{$item->tmplahir}}</td>
                    <td>{{$item->tgllahir}}</td>
                    <td>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_pegawai" data-nip="{{$item->nip}}"
                            data-nama="{{$item->nama}}" data-jenis="{{$item->jenis}}"
                            data-tmplahir="{{$item->tmplahir}}" data-tgllahir="{{$item->tgllahir}}"
                            class="btn btn-primary btn-small"><i class="fa fa-pencil"></i></a>
                        <a href="{{route('delete_pegawai', $item->nip)}}" class="btn btn-danger btn-small"><i
                                class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>1</td>
                    <td>1238372823</td>
                    <td>Jorah Mormont</td>
                    <td>Laki-laki</td>
                    <td>Moscow</td>
                    <td>11-12-1993</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-small"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-small"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforelse
            </table>
        </div>

        <div class="modal fade" id="modal_pegawai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('update_pegawai')}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="old_nip" id="old_nip">
                            <div class="form-group mb-3">
                                <label class="form-label">NIP</label>
                                <input type="text" name="nip" class="form-control" value="" id="nip" max="20">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="" id="nama" max="50">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Jenis Kelamin</label><br>
                                <input type="radio" name="jenis" id="jl" value="L">Laki-Laki
                                <input type="radio" name="jenis" id="jp" value="P">Perempuan
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" name="tmplahir" class="form-control" value="" id="tmplahir" max="20">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tgllahir" class="form-control" value="" id="tgllahir">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script>
        $("#modal_pegawai").on('show.bs.modal', function(e) {
        var x = $(e.relatedTarget);
        console.log(x)
        $('#old_nip').val(x.data('nip'))
        $('#nip').val(x.data('nip'))
        $('#nama').val(x.data('nama'))
        $('#tmplahir').val(x.data('tmplahir'))
        $('#tgllahir').val(x.data('tgllahir'))
        if (x.data('jenis') == 'L') {
            $('#jl').prop('checked', true);
        } else {
            $('#jp').prop('checked', true); 
        }
    })
    </script>
</body>

</html>