<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Data Siswa</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4">
        <h2>Form Data Siswa</h2>
        <form action="/update-data-siswa/{{ $data->id }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin:</label>
                <select class="form-control" id="jenisKelamin" name="jenis_kelamin">
                    <option value="laki-laki" @if($data->jenis_kelamin == 'laki-laki') selected @endif >Laki-laki</option>
                    <option value="perempuan" @if($data->jenis_kelamin == 'perempuan') selected @endif >Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $data->kelas }}" placeholder="Masukkan Kelas">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>