<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?php echo $judul; ?></h3>
    <a href="<?php echo base_url('index.php/mahasiswa/form') ?>">
        TAMBAH DATA
    </a>
    <table border="1">
        <thead>
            <tr>
                <td>NPM</td>
                <td>NAMA</td>
                <td>JENIS KELAMIN</td>
                <td>ALAMAT</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mhs as $data) : ?>
                <tr>
                    <td><?php echo $data->nrp; ?></td>
                    <td><?php echo $data->nama; ?></td>
                    <td><?php echo $data->jenis_kelamin; ?></td>
                    <td><?php echo $data->alamat; ?></td>
                    <td>
                        <a href="<?php echo base_url('index.php/mahasiswa/update/' . $data->nrp); ?>">UPDATE</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="<?php echo base_url('index.php/mahasiswa/delete/' . $data->nrp); ?>">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>