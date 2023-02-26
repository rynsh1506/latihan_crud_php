<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>CRUD APP</title>
</head>

<body>
    <div class="d-flex align-items-center flex-column">
        <div class="container py-5">
            <h1 class="text-center">CRUD</h1>
            <div class="d-flex align-items-center justify-content-between">
                <a href="tambah.php" class="btn btn-success">Tambah Mahasiswa</a>
                <form action="" method="GET" class="d-flex">
                    <input class="form-control me-2 shadow-none" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <button type="submit" class="btn btn-primary me-2">Search</button>
                </form>
            </div>
            <table class="table table-hover mt-2">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "./action/conn.php";
                    $no = 1;
                    $data = mysqli_query($conn, "SELECT * FROM mahasiswa");
                    while ($d = mysqli_fetch_assoc($data)) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $d["nama"] ?></td>
                            <td><?= $d["nim"] ?></td>
                            <td><?= $d["alamat"] ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-success btn-sm">EDIT</a>
                                <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">HAPUS</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
