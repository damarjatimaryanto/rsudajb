<?php
include('api/koneksi.php');
// $sql = mysqli_query($conn, "SELECT * FROM tb_pendaftaran JOIN tb_pasien ON tb_pendaftaran.norm = tb_pasien.norm JOIN tb_poli ON tb_pendaftaran.kdpoli = tb_poli.kdpoli JOIN tb_dokter ON tb_pendaftaran.kddokter = tb_dokter.kddokter
//  ");
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
            <a class="nav-link" href="">Pendaftaran</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="data_poli.php">Data Poli</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Data Pasien</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=" <a class=" nav-link" href="data_dokter">Data Dokter</a>">Data Dokter</a>
        </li>

    </ul>
    <h1>pendaftaran</h1>

    <table class="table table-bordered">
        <thead>
            <tr>

                <th>norm</th>
                <th>tanggal registrasi</th>
                <th>nama</th>
                <th>tanggal lahir</th>
                <th>nik</th>
                <th>alamat</th>
                <th>Poli</th>
                <th>Dokter</th>

            </tr>
        </thead>

        <tbody>
            <?php

            $sql = mysqli_query($conn, "SELECT * FROM tb_pendaftaran JOIN tb_pasien ON tb_pendaftaran.norm = tb_pasien.norm JOIN tb_poli ON tb_pendaftaran.kdpoli = tb_poli.kdpoli JOIN tb_dokter ON tb_pendaftaran.kddokter = tb_dokter.kddokter
 ");
            foreach ($sql as $key => $value) { ?>

                <tr>
                    <td><?php echo $value['norm'] ?></td>
                    <td><?php echo $value['tglreg'] ?></td>
                    <td><?php echo $value['nama'] ?></td>
                    <td><?php echo $value['tgllahir'] ?></td>
                    <td><?php echo $value['nik'] ?></td>
                    <td><?php echo $value['alamat'] ?></td>
                    <td><?php echo $value['namadokter'] ?></td>
                    <td><?php echo $value['namapoli'] ?></td>
                    <td>
                        <a href="halaman_edit.php?id=<?php echo $value['norm'] ?> ">edit</a> | <a href="api/hapus.php?id=<?php echo $value['norm'] ?> ">delete</a>
                    </td>
                </tr>
            <?php  }
            ?>
        </tbody>

    </table>
</body>

</html>