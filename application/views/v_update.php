<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?php echo $judul; ?></h3>
    <form method="post" action="<?php echo base_url('index.php/mahasiswa/update') ?>">
        <table>
            <tr>
                <td>NRP </td>
                <td>:</td>
                <td><input type="text" name="nrp"></td>
            </tr>
            <tr>
                <td>NAMA </td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN </td>
                <td>:</td>
                <td><input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr>
                <td>ALAMAT </td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>