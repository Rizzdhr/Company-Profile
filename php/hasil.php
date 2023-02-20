<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pesan = $_POST['pesan'];

$query = "INSERT INTO tbl_contact(nama, email, phone, pesan) VALUES('$nama','$email','$phone','$pesan')";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    echo "<script>
        alert('Pesanan Terkirim!');
        window.location='view_contact.php';
        </script>";
} else {
    echo "<script>
        alert('Pesanan Gagal Terkirim!');
        window.location='index.php';
        </script>";
}

