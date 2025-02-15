<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "DELETE FROM jabatan WHERE id_jabatan = '$id'";
$result = mysqli_query($con, $query);

if ($result) {
    echo "Jabatan berhasil dihapus!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=jabatan'>";
} else {
    echo "Tidak dapat menghapus data!!<br>";
    echo mysqli_error();
}
?>