<!DOCTYPE html>
<html>

<head>
	<title>KEAMANAN SISTEM</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
<div class="bg-dark">
<div class="container col-md-6">
		<h1 class ="text-center text-white mb-4 " >INJECT | TABEL EDIT MAHASISWA</h1>
		<div class="card">
			<div class="card-header text-center bg-danger text-white">
				Edit Mahasiswa
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang ingin diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($koneksi, "select * from mahasiswa where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<!--  menampilkan nama barang -->
						<input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">

						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>NIM</label>
						<input type="text" name="nim" class="form-control" value="<?= $row['nim']; ?>">
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" name="alamat"><?= $row['alamat']; ?></textarea>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						
						<input type="file" name="gambar" required="" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$nama = $_POST['nama'];
					$nim = $_POST['nim'];
					$alamat = $_POST['alamat'];
					$gambar = $_POST['gambar'];

					//query mengubah barang
					mysqli_query($koneksi, "update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat', gambar='$gambar' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='home.php';</script>";
				}



				?>
			</div>
		</div>
	</div>
			</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>