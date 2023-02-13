<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstr
ap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.c
ss">
</head>

<body style="background: rgb(244, 244, 244)">
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center">{{ __('UPDATE ITEM') }} </div>
        <div class="card-body">
            
            <form action="{{route('updateKaryawan', ['id' => $karyawan->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input name="nama" type="text" value="{{$book->nama}}" class="form-control" id="formGroupExampleInput" placeholder="Input Title of Book">
                    @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
 
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input name="umur" type="text" value="{{$book->umur}}" class="form-control" id="formGroupExampleInput" placeholder="Input Author of Book">
                    @error('umur')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input name="alamat" type="date" value="{{$book->alamat}}" class="form-control" id="formGroupExampleInput" placeholder="Input Release Date of Book">
                    @error('alamat')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                    <input name="nomor_telepon" type="date" value="{{$book->nomor_telepon}}" class="form-control" id="formGroupExampleInput" placeholder="Input Release Date of Book">
                    @error('nomor_telepon')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="card-body text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>