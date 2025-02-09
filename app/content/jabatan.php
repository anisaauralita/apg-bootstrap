<?php
if(!defined('INDEX')) die("");
?>
<h4 class="mt-2">Data Jabatan</h4>
<hr>
<a class="btn btn-success" href="?hal=jabatan_tambah"><i class="oi oi-plus"></i> Tambah</a>
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC");
            $no = 0;
            while($data = mysqli_fetch_array($query)){
                $no++;
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= htmlspecialchars($data['nama_jabatan']) ?></td>
                    <td>
                        <a class="btn btn-sm btn-info" href="?hal=jabatan_edit&id=<?= $data['id_jabatan'] ?>">
                            <i class="oi oi-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="?hal=jabatan_hapus&id=<?= $data['id_jabatan'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
                            <i class="oi oi-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
