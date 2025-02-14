<?php
if(!defined('INDEX')) die();
?>

<div class="container mt-4">
    <div class="card">
        <div class="card-header text-black">
            <h4 class="mb-0">Data Pegawai</h4>
        </div>
        <div class="card-body">
            <a href="?hal=pegawai_tambah" class="btn btn-success mb-3">Tambah Pegawai</a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Jabatan</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM pegawai ";
                        $query .= "LEFT JOIN jabatan ";
                        $query .= "ON pegawai.id_jabatan = jabatan.id_jabatan ";
                        $query .= "ORDER BY pegawai.id_jabatan DESC";
                        $result = mysqli_query($con, $query);
                        $no = 0;

                        while ($data = mysqli_fetch_assoc($result)) {
                            $no++;
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><img src="images/<?= $data['foto'] ?>" alt="Foto Pegawai" class="img-thumbnail" width="100"></td>
                                <td><?= $data['nama_pegawai'] ?></td>
                                <td><?= $data['jenis_kelamin'] ?></td>
                                <td><?= $data['tgl_lahir'] ?></td>
                                <td><?= $data['nama_jabatan'] ?></td>
                                <td><?= $data['keterangan'] ?></td>
                                <td>
                                <a class="btn btn-sm btn-info" href="?hal=pegawai_edit&id=<?= $data['id_pegawai'] ?>">
                                <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a class="btn btn-sm btn-danger" href="?hal=pegawai_hapus&id=<?= $data['id_pegawai'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash"></i> Hapus
                                </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
