<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "SELECT * FROM pegawai WHERE id_pegawai = '$id'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
?>

<h2 class="judul">Edit Pegawai</h2>
<form action="?hal=pegawai_update" method="post" enctype="multipart/form-data">

    <!-- Input ID -->
    <input type="hidden" name="id" value="<?=$data['id_pegawai']?>">

    <!-- Input Foto -->
    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input">
            <input type="file" name="foto" id="foto">
            <img src="images/<?=$data['foto']?>" width="100"  alt="">
        </div>
    </div>

    <!-- Input Nama -->
    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" name="nama" id="nama" value="<?=$data['nama_pegawai']?>">
        </div>
    </div>

    <!-- Input Gender -->
    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>

        <!-- Pengecekan gender -->
        <?php
        if($data['jenis_kelamin']=="L"){
            $l=" checked";
            $p="";
        }else{
            $l="";
            $p=" checked";
        }
        ?>

        <input type="radio" name="jk" id="jk" value="L" <?= $l ?>> Laki-laki
        <input type="radio" name="jk" id="jk" value="P" <?= $p ?>> Perempuan
    </div>

    <!-- Input Tanggal Lahir -->
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" name="tanggal" id="tanggal" value="<?=$data['tgl_lahir']?>">
        </div>
    </div>

    <!-- Input Jabatan -->
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
            <select name="jabatan" id="jabatan">
                <option value=""> - Pilih Jabatan - </option>
<?php
$queryj = "SELECT * FROM jabatan";
$resultj = mysqli_query($con,$queryj);
while($j = mysqli_fetch_assoc($resultj)){
    echo "<option value='$j[id_jabatan]'";
    if($j['id_jabatan'] == $data['id_jabatan']) echo " selected";
    echo "> $j[nama_jabatan] </option>";
}
?>
            </select>
        </div>
    </div>

    <!-- Input Keterangan -->
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea name="keterangan" id="keterangan"
            style="width:100%" rows="5"><?= $data['keterangan'] ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>