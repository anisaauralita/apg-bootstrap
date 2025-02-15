<?php
if (!defined('INDEX')) die();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data pegawai untuk mendapatkan nama file foto
    $query = "SELECT foto FROM pegawai WHERE id_pegawai = '$id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $foto = $data['foto'];

        // Pastikan $foto tidak kosong sebelum mencoba menghapusnya
        if (!empty($foto) && file_exists("images/$foto")) {
            unlink("images/$foto");
        }

        // Hapus data pegawai dari database
        $delete = mysqli_query($con, "DELETE FROM pegawai WHERE id_pegawai = '$id'");

        if ($delete) {
            echo "<script>alert('Data pegawai berhasil dihapus!'); window.location='?hal=pegawai';</script>";
        } else {
            echo "<script>alert('Gagal menghapus data pegawai!'); window.location='?hal=pegawai';</script>";
        }
    } else {
        echo "<script>alert('Data pegawai tidak ditemukan atau sudah dihapus sebelumnya!'); window.location='?hal=pegawai';</script>";
    }
} else {
    echo "<script>alert('ID pegawai tidak valid!'); window.location='?hal=pegawai';</script>";
}
?>
