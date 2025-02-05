<?php
if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data Jabatan</h2>
<a href="?hal=jabatan_tambah" class="tombol">Tambah</a>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM jabatan ORDER BY id_jabatan DESC";
        $result = mysqli_query($con,$query);
        $no = 0;
        while($data = mysqli_fetch_array($result)){
            $no++;
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama_jabatan'] ?></td>
                <td>
                    <a href="?hal=jabatan_edit&id=<?= $data['id_jabatan'] ?>" class="tombol edit"> Edit</a>
                    <a href="?hal=jabatan_hapus&id=<?= $data['id_jabatan'] ?>" class="tombol hapus"> Hapus</a>
                </td>
            </tr>
        <?php    
        }
        ?>
    </tbody>
</table>