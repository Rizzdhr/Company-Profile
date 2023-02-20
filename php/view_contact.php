<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Pesanan</h2>
    <!-- tabel data yang diambil dari database -->
    <table border="1" >
        <thead>
            <tr>
                <td>No</td>
                <td>Name </td>
                <td>Email </td>
                <td>Phone Number </td>
                <td>Message </td>
                <td>Action</td>
            
            </tr>
        </thead>
        <!-- syntax php -->
        <?php 
        
        // menghubungkan koneksi ke database
        $koneksi = mysqli_connect('localhost','root','','db_company');

        $no = 1;
        $query = "SELECT * FROM tbl_contact";
        $hasil = mysqli_query($koneksi, $query);
        while ($data = mysqli_fetch_array($hasil)) {
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['phone'] ?></td>
                <td><?= $data['pesan'] ?></td>
                <td>
                    <a href="form_update.php?id=<?= $data['id']; ?>">Edit</a>
                    <a href="act_delete.php?id=<?= $data['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php $no++; 
            } ?>
        </tbody>
        
    </table>
</body>
</html>