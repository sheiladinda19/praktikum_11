<?php
    require 'functions.php';
    $result = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div></div>
    <div class="container">
        <div style="text-align: center;">
            <h1>Daftar Karyawan</h1>
            <a href="tambah.php" class="button">Tambah data</a>
        <div>
        <br><br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>No.</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
                <td>Gender</td>
                <td>Position</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
            <!-- print data from result -->
            <?php $i = 1; ?>
            <?php foreach($result as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["name"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["address"]; ?></td>
                <td><?= $row["gender"]; ?></td>
                <td><?= $row["position"]; ?></td>
                <td><?= $row["status"]; ?></td>
                <td>
                    <a href="hapus.php?id=<?= $row["id"]; ?>"" class="button">Delete</a>
                    <a href="ubah.php?id=<?= $row["id"]; ?>"" class="button">Edit</a>
                </td>
                <?php $i++; ?>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>