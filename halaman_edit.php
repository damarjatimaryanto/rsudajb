<?php
include('api/koneksi.php');

$poli = mysqli_query($conn, "SELECT * FROM tb_poli");
$dokter = mysqli_query($conn, "SELECT * FROM tb_dokter");

$pasien = mysqli_query($conn, "SELECT * FROM tb_pasien");
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

    <!-- <div class="nav"> -->
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
            <a class="nav-link" href="">Data Dokter</a>
        </li>

    </ul>
    <!-- </div> -->


    <form action="" method="post">
        <table>
            <tr>
                <th>
                    <Label>
                        Tanggal Sekarang
                    </Label>
                </th>
                <td>
                    <input type="date" name="tanggal">
                </td>
            </tr>
            <!-- <tr>
                <th>
                    <Label>
                        NoRM
                    </Label>
                </th>
                <td>

                    <input type="text" name="norm">
                </td>
            </tr> -->
            <tr>
                <th>
                    <Label>
                        Nama Lengkap
                    </Label>
                </th>
                <td>
                    <input type="text" required name="nama">
                </td>
            </tr>
            <tr>
                <th>
                    <Label>
                        Alamat
                    </Label>
                </th>
                <td>
                    <input type="text" required name="alamat">
                </td>
            </tr>
            <tr>
                <th>
                    <Label>
                        Tanggal Lahir
                    </Label>
                </th>
                <td>
                    <input type="date" name="tanggallahir">
                </td>
            </tr>
            <tr>
                <th>
                    <Label>
                        NIK
                    </Label>
                </th>
                <td>
                    <input type="text" required name="nik">
                </td>
            </tr>
            <tr>
                <th>
                    <Label>
                        Poli
                    </Label>
                </th>
                <td>
                    <select name="poli" id="" required>
                        <option value="">Pilih Poli</option>
                        <?php foreach ($poli as $key => $value) { ?>

                            <option value="<?php echo $value['kdpoli'] ?> "><?php echo $value['namapoli'] ?></option>
                        <?php   } ?>


                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    <Label>
                        dokter
                    </Label>
                </th>
                <td>
                    <select name="dokter" id="" required>
                        <option value="">Pilih Dokter</option>
                        <?php foreach ($dokter as $key => $value) { ?>

                            <option value="<?php echo $value['kddokter'] ?> "><?php echo $value['namadokter'] ?></option>
                        <?php   } ?>


                    </select>
                </td>
            </tr>
            <tr>
                <th>

                </th>
                <td>
                    <button type="submit" name="daftar">daftar</button>
                </td>
            </tr>

        </table>
    </form>


</body>

<?php if (isset($_POST['daftar'])) {
    $norm = $_POST['norm'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $tgl = $_POST['tanggal'];
    $tgllhr = $_POST['tanggallahir'];

    $poli = $_POST['poli'];
    $dokter = $_POST['dokter'];
    $alamat = $_POST['alamat'];

    $sql = mysqli_query($conn, "INSERT INTO tb_pasien VALUES ('', '$nama', '$alamat','$tgllhr','$nik') ");
    $sql2 = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES ('', '$tgl', '$poli','$dokter') ");

    if ($sql & $sql2) {
        echo "<script> alert('Pendaftaran Berhasil'); location.replace('pendaftaran.php'); </script>";
        // header('location:pendaftaran.php');
    } else {
        echo "<script> alert('Pendaftaran Gagal'); location.replace('index.php');  </script>";
    }
} ?>


</html>