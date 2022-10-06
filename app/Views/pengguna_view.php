<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengguna</title>
</head>

<body>
    <h2><?= $title; ?></h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Role ID</th>
            <th>Nama Pengguna</th>
        </tr>
        <?php
        $no = 0;
        foreach ($data as $v) :
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $v['role_id']; ?></td>
                <td><?= $v['username']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>