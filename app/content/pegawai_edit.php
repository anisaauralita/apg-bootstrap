<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "SELECT * FROM pegawai WHERE id_pegawai = '$id'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
?>

<div class="card mt-4">
    <div class="card-header text-dark">
        <h4>Edit Pegawai</h4>
    </div>
    <div class="card-body">
        <form action="?hal=pegawai_update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data['id_pegawai'] ?>">

            <!-- Input Foto -->
            <div class="form-group">
                <label for="foto">Foto</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto" id="foto" onchange="previewImage(event)">
                    <label class="custom-file-label" for="foto">Pilih Foto</label>
                </div>
                <img src="images/<?= $data['foto'] ?>" id="preview" class="img-thumbnail mt-2" width="120" alt="">
            </div>

            <!-- Input Nama -->
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama_pegawai'] ?>" required>
            </div>

            <!-- Input Gender -->
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="jk_l" value="L" <?= ($data['jenis_kelamin'] == "L") ? "checked" : "" ?>>
                    <label class="form-check-label" for="jk_l">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="jk_p" value="P" <?= ($data['jenis_kelamin'] == "P") ? "checked" : "" ?>>
                    <label class="form-check-label" for="jk_p">Perempuan</label>
                </div>
            </div>

            <!-- Input Tanggal Lahir -->
            <div class="form-group">
                <label for="tanggal">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $data['tgl_lahir'] ?>" required>
            </div>

            <!-- Input Jabatan -->
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <select class="form-control" name="jabatan" id="jabatan">
                    <option value="">- Pilih Jabatan -</option>
                    <?php
                    $queryj = "SELECT * FROM jabatan";
                    $resultj = mysqli_query($con, $queryj);
                    while ($j = mysqli_fetch_assoc($resultj)) {
                        echo "<option value='".$j['id_jabatan']."'".($j['id_jabatan'] == $data['id_jabatan'] ? " selected" : "").">".$j['nama_jabatan']."</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Input Keterangan -->
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="keterangan" rows="4" required><?= $data['keterangan'] ?></textarea>
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
                <a href="?hal=pegawai" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Batal</a>
            </div>
        </form>
    </div>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
