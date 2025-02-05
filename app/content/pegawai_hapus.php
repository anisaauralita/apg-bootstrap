<?php
if(!defined('INDEX')) die();

$id   = $_GET['id'];
$foto = $_GET['foto'];

if(file_exists("images/$foto")){
    unlink("images/$foto");
}

$query  = "DELETE FROM pegawai WHERE id_pegawai = '$id'";
$result = mysqli_query($con,$query);

if($result){
    echo "Data pegawai berhasil dihapus!";
    echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
}else{
    echo "Tidak dapat menghapus data pegawai!<br>";
    echo mysqli_error();
}

?>