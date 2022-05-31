<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <a href="tambah.php" class="mt-3 mb-3 btn btn-outline-success containet-fluid Layanan pt-1 pb-1 ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            TAMBAH IDENTITAS
        </a>

        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">Nama</th>
                            <th scope="col">alamat</th>
                            <th scope="col">telp</th>
                            <th scope="col">prodi</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>


                    <tbody class="table-group-divider">
                        <?php
                        include 'connect.php';
                        $no = 1;
                        $data = mysqli_query($db, "SELECT * FROM mahasiswa");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td><?php echo $d['alamat']; ?></td>
                                    <td><?php echo $d['telp']; ?></td>
                                    <td><?php echo $d['prodi']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $d['id_mahasiswa']; ?>" class="btn btn-outline-primary">EDIT</a>
                                        <a href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>" class="btn btn-outline-danger">HAPUS</a>
                                    </td>
                                </tr>
                                <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>