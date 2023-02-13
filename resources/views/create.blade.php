<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstr
ap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.c
ss">
    <title>PT.Meksiko</title>
</head>

<body>
    <div class="container card mt-5">
        <div class="card-body">
            <form action="{{ route('createKaryawan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="font-weight-bold">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Umur</label>
                    <input type="number" class="form-control" name="umur" value="{{ old('umur') }}">
                    @error('umur')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Nomor Telepon</label>
                    <input type="tel" class="form-control" name="nomor_telepon" value="{{ old('nomor_telepon') }}">
                    @error('nomor_telepon')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-md btn-primary">Save</button>
            </form>
        </div>
    </div>

</body>

</html>
