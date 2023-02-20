<?php 
// menghubungkan koneksi ke database
$koneksi = mysqli_connect('localhost','root','','db_company');

$id = $_GET ['id'];
// query delete
$query = "DELETE FROM tbl_contact WHERE id='$id'";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    echo "<script>
        alert('Hapus data berhasil!');
        window.location='view_contact.php';
    </script>";
} else {
    echo "<script>
        alert('Hapus data gagal');
        window.location='view_contact.php';
    </script>";
}
