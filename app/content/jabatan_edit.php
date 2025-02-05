<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "SELECT * FROM jabatan WHERE id_jabatan='$id'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
?>

<h2 class="judul">Edit Jabatan</h2>
<form action="?hal=jabatan_update" method="post">
    <input type="hidden" name="id" value="<?= $data['id_jabatan']?>">
    <div class="form-group">
        <label for="nama">Nama Jabatan</label>
        <div class="input">
            <input type="text" name="nama" id="nama" value="<?=$data['nama_jabatan']?>">
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Reset" class="tombol reset">
    </div>
</form>