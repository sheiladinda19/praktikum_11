<?php
    require 'functions.php';

    //ambil data
    $id = $_GET["id"];
    $employee = query("SELECT * FROM karyawan WHERE id = $id")[0];

    if(isset($_POST["submit"])){
        if( isset($_POST["submit"])){
            //jika sudah ditekan dijalankan function tambah
            if(ubah($_POST) > 0) {
                echo "
                    <script>
                        alert('data berhasil diubah!');
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('data gagal diubah!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ubah data</title>
</head>
<body>
    <div class="container">
    
        <h1>Ubah Data Employee</h1>
    
        <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $employee["id"] ?>">
    
            <table>
                <tr>
                    <th colspan="2">Ubah Data</th>
                </tr>
                <tr>
                    <td style="width: 40%;">Name</td>
                    <td><input type="text" name="name" id="name" value="<?= $employee["name"] ?>" required></td>
                </tr>
                <tr>
                    <td style="width: 40%;">Email</td>
                    <td><input type="email" name="email" id="email" value="<?= $employee["email"] ?>" required></td>
                </tr>
                <tr>
                    <td style="width: 40%;">Address</td>
                    <td><input type="text" name="address" id="address" value="<?= $employee["address"] ?>" required></td>
                </tr>
                <tr>
                    <td style="width: 40%;">Gender</td>
                    <td>
                      <select name="gender" id="gender" required>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                      </select>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;">Position</td>
                    <td><input type="text" name="position" id="position" value="<?= $employee["position"] ?>" required></td>
                </tr>
                <tr>
                    <td style="width: 40%;">Status</td>
                    <td>
                      <select name="status" id="status" required>
                        <option value="fulltime">Fulltime</option>
                        <option value="parttime">Parttime</option>
                      </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input class="button" type="submit" name="submit" value="Ubah Data">
                        <a href="index.php" class="button">Batal</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>