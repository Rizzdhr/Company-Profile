<?php 


// menghubungkan koneksi ke database
$koneksi = mysqli_connect('localhost','root','','db_company');

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pesan = $_POST['pesan'];

        // query update data
        $query = "UPDATE tbl_contact SET nama='$nama', email='$email', phone='$phone',
        pesan='$pesan' WHERE id='$id' ";
        mysqli_query($koneksi, $query);
        echo "<script>
            alert('Ubah data berhasil!');
            window.location='view_contact.php';
            </script>";


