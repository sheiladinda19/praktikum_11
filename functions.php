<?php
        //koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "praktikum_11");

        //fungsi untuk mengambil data dari database
        function query($query){
            global $conn;
            $data = mysqli_query($conn, $query);
            $employees = [];
            while( $employee = mysqli_fetch_assoc($data) ){
                $employees[] = $employee;
            }
            return $employees;
        }

        function tambah($data){
            global $conn;

            $name = $data["name"];
            $email = $data["email"];
            $address = $data["address"];
            $gender = $data["gender"];
            $position = $data["position"];
            $status = $data["status"];

            $query = "INSERT INTO karyawan
                    VALUES
                    ('', '$name', '$email', '$address', '$gender', '$position', '$status')
                ";
            //menggunakan query untuk menambah data yaitu memerlukan parameter penghubung database dan query sql
            mysqli_query($conn, $query);
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }

        function hapus($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }

        function ubah($data){
            global $conn;

            $id = $data["id"];
            $name = $data["name"];
            $email = $data["email"];
            $address = $data["address"];
            $gender = $data["gender"];
            $position = $data["position"];
            $status = $data["status"];

            $query = "UPDATE karyawan SET
                        name = '$name',
                        email = '$email',
                        address = '$address',
                        gender = '$gender',
                        position = '$position',
                        status = '$status'
                      WHERE id = $id
                        ";
            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
        }
?>