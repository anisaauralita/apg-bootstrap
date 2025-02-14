<?php
    if(!defined('INDEX')) die("");
?>

<h4 class="mt-2">Tambah Pegawai</h4>
<hr>
<form class="mb-5" method="post" action="?hal=pegawai_insert" enctype="multipart/form-data">
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-4">
            <div class="custom-file">
                <label for="foto" class="custom-file-label"></label>
                <input class="custom-file-input" type="file" id="foto" name="foto">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" id="nama" name="nama">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-4">
            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" id="jkl" name="jk" value="L">
                <label class="custom-control-label" for="jkl">Laki-laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" id="jkp" name="jk" value="P">
                <label class="custom-control-label" for="jkp">Perempuan</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-2">
            <input class="form-control" type="text" id="tanggal" name="tanggal">
        </div>
    </div>

    <div class="form-group row">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-4">
            <select class="custom-select" id="jabatan" name="jabatan">
                <option value="">Pilih Jabatan</option>
                <?php
                    $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
                    while($j = mysqli_fetch_array($queryjabatan)){
                        echo "<option value='{$j['id_jabatan']}'>{$j['nama_jabatan']}</option>";
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-8">
            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-info">Simpan</button>
    <button type="reset" class="btn btn-warning">Reset</button>
    <a href="?hal=pegawai" class="btn btn-danger">Batal</a>
</form>

<link href="plugin/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
<link href="plugin/summernote/summernote-bs4.css" rel="stylesheet">

<script src="plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="plugin/summernote/summernote-bs4.min.js"></script>

<script>
    $(function(){
        $('.table').DataTable();
        $('#tanggal').datepicker();
        $('#keterangan').summernote();
    });
</script>
