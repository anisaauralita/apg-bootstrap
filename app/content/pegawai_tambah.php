<?php
if(!defined('INDEX')) die();
?>

<h2 class="judul">Tambah Pegawai</h2>
<form action="?hal=pegawai_insert" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input">
            <input type="file" name="foto" id="foto">
        </div>
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" name="nama" id="nama">
        </div>
    </div>

    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <input type="radio" name="jk" id="jk" value="L"> Laki-laki
        <input type="radio" name="jk" id="jk" value="P"> Perempuan
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" name="tanggal" id="tanggal">
        </div>
    </div>

    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
            <select name="jabatan" id="jabatan">
                <option value=""> - Pilih Jabatan - </option>
<?php
$query = "SELECT * FROM jabatan";
$result = mysqli_query($con,$query);
while($data = mysqli_fetch_assoc($result)){
    echo "<option value='$data[id_jabatan]'> $data[nama_jabatan] </option>";
}
?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea name="keterangan" id="keterangan" style="width:100%" rows="5" ></textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>