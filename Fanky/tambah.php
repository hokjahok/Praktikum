<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP | Tambah Data Identitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <header>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <h3>Tambah Identitas</h3>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-8 form">
    
                <form action="proses_tambah.php" method="POST">
                    <fieldset>
                        <p>
                            <label class="form-label"for="nama">nama: </label>
                            <input class="form-control" type="text" name="nama" placeholder=>
                        </p>
                        <p>
                            <label for="alamat">alamat: </label>
                            <textarea name="alamat"class="form-control"></textarea>
                        </p>
                        <p>
                            <label for="telp">telp: </label>
                            <textarea class="form-control" name="telp"></textarea>
                        </p>
                        <p>
                            <label for="prodi">prodi: </label>
                            <input class="form-control" type="text" name="prodi" placeholder="prodi" />
                        </p>
                        <p>
                            <input class="form-control btn btn-outline-dark" type="submit" value="Daftar" name="daftar" />
                        </p>

                    </fieldset>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>