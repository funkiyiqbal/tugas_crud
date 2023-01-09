<?php
require 'set.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <title>Tambah Data</title>
</head>

<body>
    <div class="alert alert-info text-center">Tamabah Data</div>

    <div class="container">
        <div class="row">
            <div class="col-md-4" style="margin-left:auto;margin-right:auto">
                <div class="card card-body">

                    <?php
                    if (isset($_POST['simpan'])) {
                        $author = $_POST['txtpengarang'];
                        $category = $_POST['txtkategori'];
                        $content = $_POST['txtkonten'];

                        $query = mysqli_query(
                            $connect,
                            "INSERT INTO blog value(NULL, '$author', '$category', '$content')"

                        );

                        if ($query) {
                            header('location: home.php');
                        } else {
                            echo 'Error => ' . mysqli_error($connect);
                        }
                    }
                    ?>

                    <form action="add.php" method="post">
                        <div class="mb-3">
                            <label for="">Pengarang</label>
                            <input type="text" name="txtpengarang" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Kategori</label>
                            <input type="text" name="txtkategori" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Konten</label>
                            <input type="text" name="txtkonten" class="form-control">
                        </div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        <a href="home.php" class="btn btn-warning">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>