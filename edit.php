<?php
require 'set.php';
if (isset($_GET['kode'])) {

    $kode = $_GET['kode'];

    $query = mysqli_query($connect, "SELECT * FROM blog WHERE id_blog='$kode'");

    $isi = mysqli_fetch_object($query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <title>Edit Data</title>
</head>

<body>
    <div class="alert alert-info text-center">Edit Data</div>

    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-left:auto;margin-right:auto">
                <div class="card card-body">

                    <?php
                    if (isset($_POST['simpan'])) {

                        $id_blog = $_POST['txtid'];
                        $author = $_POST['txtpengarang'];
                        $category = $_POST['txtkategori'];
                        $content = $_POST['txtkonten'];

                        $query = mysqli_query(
                            $connect,
                            "UPDATE blog set author = '$author', category = '$category', content = '$content'
                            WHERE id_blog='$id_blog'"
                        );

                        if ($query) {
                            header('location: home.php');
                        } else {
                            echo 'Error => ' . mysqli_error($connect);
                        }
                    }
                    ?>

                    <form action="edit.php" method="post">
                        <div class="mb-3">
                            <label for="">Merek</label>
                            <input type="hidden" name="txtid" value="<?php echo $isi->id_blog ?>">
                            <input type="text" name="txtpengarang" class="form-control" value="<?php echo $isi->author ?>">
                        </div>

                        <div class="mb-3">
                            <label for="">Kapasitas</label>
                            <input type="text" name="txtkategori" class="form-control" value="<?php echo $isi->category ?>">
                        </div>

                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input type="text" name="txtkonten" class="form-control" value="<?php echo $isi->content ?>">
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