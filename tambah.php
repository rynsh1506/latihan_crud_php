<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>TAMBAH</title>
</head>
    
<body>
    <div class="vh-100 d-flex align-items-center justify-content-center flex-column">
        <h1>Tambah Mahasiswa</h1>
        <div class="container py-5 d-flex align-items-center justify-content-center">
            <form method="post" action="./action/add.php" class="w-50">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control shadow-none" id="nama" name="nama" autocomplete="off" required>
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control shadow-none" id="nim" name="nim" autocomplete="off" required>
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control shadow-none" id="alamat" name="alamat" autocomplete="off" required>
                <div class="mt-3 d-flex flex-column justify-content-between">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
