<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="{{ route('pegawai.add') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nip" placeholder="NIP Pegawai" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nama_pegawai" placeholder="Nama Pegawai" class="form-control">
                    </div>
                    <div class="custom-file form-group">
                        <input type="file" class="custom-file-input" id="customFile" name="img_profile">
                        <label class="custom-file-label" for="customFile">Foto Profil</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">SUBMIT</button>
                </form>
            </div>
        </div>

    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
