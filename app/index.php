<?php
    session_start();
    ob_start();

    include "library/config.php";

    if (empty($_SESSION['username']) OR empty($_SESSION['password'])) {
        echo "<p align='center'>Anda harus login terlebih dahulu!</p>";
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    } else {
        define('INDEX', true);
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard</title>

	<!-- Css Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="plugin/DataTables/css/dataTables. bootstrap4.min.css" rel="stylesheet">
	<link href="plugin/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
	<link href="plugin/summernote/summernote-bs4.css" rel="stylesheet">
</head>
<body class="h-100">
	<nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-info">
		<a class="navbar-brand" href="#">Manajemen Pegawai</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<nav class="collapse navbar-collapse" id="sidebar">
			<ul class="navbar-nav d-sm-none">
				<li class="nav-item">
					<a class="nav-link text-white" href="?hal=dashboard">
					<i class="bi bi-speedometer"></i> Dashboard 
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="?hal=pegawai">
					<i class="bi bi-people"></i> Data Pegawai 
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="?hal=jabatan">
					<i class="bi bi-clipboard-data"></i> Data Jabatan 
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="logout.php">
					<i class="bi bi-box-arrow-right"></i> Keluar 
					</a>
				</li>
			</ul>
		</nav>
	</nav>
	<div class="container-fluid h-100">
		<div class="row h-100">
			<nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
				<ul class="list-group list-group-flush">
					<li class="list-group item bg-dark">
						<a class="nav-link text-white" href="?hal=dashboard">
						<i class="bi bi-speedometer"></i> Dashboard
						</a>
					<li class="list-group item bg-dark">
						<a class="nav-link text-white" href="?hal=pegawai">
						<i class="bi bi-people"></i> Data Pegawai
						</a>
					<li class="list-group item bg-dark">
						<a class="nav-link text-white" href="?hal=jabatan">
						<i class="bi bi-clipboard-data"></i> Data Jabatan
						</a>
					<li class="list-group item bg-dark">
						<a class="nav-link text-white" href="logout.php">
						<i class="bi bi-box-arrow-right"></i> Keluar
						</a>
					</li>
				</ul>
			</nav>
			<div class="col-md-10 col-sm-9 offset-md-2 offset-sm-2 mb-3">
				<section>
					<?php include "konten.php"; ?>
				</section>
			</div>
		</div>
	</div>
	<div class="bg-light fixed-bottom">
		<p class="m-2 text-center text-muted">Made with by ❤️ Masipnu | &copy 2025</p>
	</div>
<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="plugin/DataTables/js/jquery. dataTables. min.js"></script>
<script src="plugin/DataTables/js/dataTables. bootstrap4. min.js"></script>
<script src="plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="plugin/summernote/summernote-bs4.min.js"></script>

<script>
    $(function(){
        $('.table').DataTable();
        $('#tanggal').datepicker();
        $('#keterangan').summernote();
    });
</script>
</body>
</html>

<?php
}
?>