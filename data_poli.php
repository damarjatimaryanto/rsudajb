<?php
include('api/koneksi.php');




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Pendaftaran</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="data_poli.php">Data Poli</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Data Pasien</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Data Dokter</a>
        </li>

    </ul>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Poli</th>
                <th>Nama Poli</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM tb_poli");

            foreach ($sql as $key => $value) { ?>

                <tr>
                    <td><?php echo $value['kdpoli'] ?></td>
                    <td><?php echo $value['namapoli'] ?></td>
                </tr>
            <?php  }
            ?>
        </tbody>
    </table>
</body>

</html>