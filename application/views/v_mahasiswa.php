<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td>NPM</td>
                <td>NAMA</td>
                <td>JENIS KELAMIN</td>
                <td>ALAMAT</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mhs as $data) : ?>
                <tr>
                    <td><?php echo $data->nrp; ?></td>
                    <td><?php echo $data->nama; ?></td>
                    <td><?php echo $data->jenis_kelamin; ?></td>
                    <td><?php echo $data->alamat; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>