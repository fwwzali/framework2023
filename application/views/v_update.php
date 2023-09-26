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
        <?php foreach ($mahasiswa as $mhs) : ?>
            <table>
                <tr>
                    <td>NRP </td>
                    <td>:</td>
                    <td><input type="text" name="nrp" value="<?php echo $mhs->nrp; ?>" readonly></td>
                </tr>
                <tr>
                    <td>NAMA </td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?php echo $mhs->nama; ?>"></td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN </td>
                    <td>:</td>
                    <td><input type="text" name="jenis_kelamin" value="<?php echo $mhs->jenis_kelamin; ?>"></td>
                </tr>
                <tr>
                    <td>ALAMAT </td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?php echo $mhs->alamat; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="UPDATE DATA"></td>
                </tr>
            </table>
        <?php endforeach; ?>
    </form>
</body>

</html>