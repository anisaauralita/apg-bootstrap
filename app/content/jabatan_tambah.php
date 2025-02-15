<?php
if(!defined('INDEX')) die("");
?>

<h4 class="mt-2">Tambah Jabatan</h4>
<hr>

<form action="?hal=jabatan_insert" method="post">
    
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Jabatan</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-4 offset-sm-2">
            <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
            <a href="?hal=jabatan" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Batal</a>
        </div>
    </div>

</form>
