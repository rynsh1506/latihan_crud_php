<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>EDIT</title>
</head>

<body>
    <div class="vh-100 d-flex align-items-center justify-content-center flex-column">
        <h1>Edit Mahasiswa</h1>
        <div class="container py-5 d-flex align-items-center justify-content-center">
            <?php
            include './action/conn.php';
            $id = $_GET['id'];
            $data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
            while ($d = mysqli_fetch_array($data)) : ?>
                <form method="post" action="./action/update.php" class="w-50">
                    <label for="id" class="form-label d-none">id</label>
                    <input value="<?= $d['id']; ?>" type="number" class="form-control shadow-none d-none" id="id" name="id" autocomplete="off">
                    <label for="nama" class="form-label">Nama</label>
                    <input value="<?= $d['nama']; ?>" type="text" class="form-control shadow-none" id="nama" name="nama" autocomplete="off">
                    <label for="nim" class="form-label">NIM</label>
                    <input value="<?= $d['nim']; ?>" type="number" class="form-control shadow-none" id="nim" name="nim" autocomplete="off">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input value="<?= $d['alamat']; ?>" type="text" class="form-control shadow-none" id="alamat" name="alamat" autocomplete="off">
                    <div class="mt-3 d-flex flex-column justify-content-between">
                        <button type="submit" class="btn btn-success">Edit</button>
                        <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
                    </div>
                </form>
            <?php endwhile; ?>
        </div>
    </div>
</body>

</html>