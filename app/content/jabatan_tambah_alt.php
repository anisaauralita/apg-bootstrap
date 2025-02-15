<?php
if(!defined('INDEX')) die("");
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['nama'])){
        $nama_jabatan = $_POST['nama'];
        $query = "INSERT INTO jabatan SET nama_jabatan = '$nama_jabatan'";
        $result = mysqli_query($con,$query);

        if ($result) {
            echo "<script>alert('Jabatan {$nama_jabatan} berhasil ditambahkan..!')</script>";
            echo "<meta http-equiv='refresh' content='0; url=?hal=jabatan'>";
        } else {
            echo "Tidak dapat menyimpan data!<br>";
            echo mysqli_error();
        }
    }
}
?>

<h2 class="judul">Tambah Jabatan</h2>
<form action="" method="post">
    
    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" name="nama" id="nama">
        </div>
    </div>

    <div class="form-group">
        <input type="reset" value="Reset" class="tombol reset">
        <input type="submit" value="Simpan" class="tombol simpan">
    </div>
</form>