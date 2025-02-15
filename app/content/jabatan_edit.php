<?php
if (!defined('INDEX')) die();

$id = $_GET['id'];
$query = "SELECT * FROM jabatan WHERE id_jabatan='$id'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
?>

<div class="container mt-4">
    <h4 class="mb-3">Edit Jabatan</h4>
    <div class="card">
        <div class="card-body">
            <form action="?hal=jabatan_update" method="post">
                <input type="hidden" name="id" value="<?= $data['id_jabatan'] ?>">

                <div class="form-group">
                    <label for="nama">Nama Jabatan</label>
                    <input type="text" name="nama" id="nama" class="form-control" 
                        value="<?= htmlspecialchars($data['nama_jabatan']) ?>" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Simpan
                    </button>
                    <a href="?hal=jabatan" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
