<?php
require 'set.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Konten</title>
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="alert alert-info text-center">Data Konten</div>

    <div class="container">
        <a href="add.php" class="btn btn-primary float-end">Tambah Komponen</a>

        <br></br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pengarang</th>
                    <th>Kategori</th>
                    <th>Konten</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($connect, "SELECT * FROM blog");
                while ($isi = mysqli_fetch_object($query)) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $isi->author; ?></td>
                        <td><?= $isi->category ?></td>
                        <td><?= $isi->content; ?></td>
                        <td>
                            <a onclick="return confirm('Anda Yakin Untyk Menghapus?')" href="delete.php?kode=<?php echo $isi->id_blog; ?>" class="btn btn-danger btn-sm">Del</a>
                            <a onclick="return confirm('Anda Yakin Untyk Mengganti??')" href="edit.php?kode=<?php echo $isi->id_blog; ?>" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                <?php
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>