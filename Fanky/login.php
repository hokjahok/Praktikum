<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="ceklogin.php" method="post">
                    <?php
                        if(isset($_GET['pesan'])){
                        if($_GET['pesan']=="gagal"){
                            echo "<h4><center>username dan password tidak sesuai !</center></h4>";
                            }
                        }
                    ?>
                    <h4 class="mt-3 mb-3">login</h4>
                    <div class=" mb-3 ">
                        <input type="text" placeholder="username" name="uname" class="form-control" required>
                    </div>
                    <div class=" mb-3">
                        <input type="password" placeholder="password" name="psw" class="form-control" required>
                    </div>
                    <div class=" mb-3 text-center">
                        <button type="submit" class="btn btn-danger">login</button>
                        <a href="index.php text-center">
                            <button type="button" class="btn btn-ligh">cancel</button>
                        </a>
                    </div>
                    <div class="text-center">
                        <label>Don't have an account? <a href="register.php">Clik</a> 
                            <a href="register.php"></a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>