<!DOCTYPE html>
<html>

<head>
	<title>KEAMANAN</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
<div class="bg-dark">

	<div class="container col-md-6">
		<h1 class ="text-center text-white mb-4 " >INJECT | TABEL MAHASISWA</h1>
		<div class="card">
			<div class="card-header text-center bg-danger text-white">
				Tambah Mahasiswa
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>NIM</label>
						<input type="text" name="nim" class="form-control">
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" name="alamat"></textarea>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="gambar" required="" class="form-control">
					</div>
					<button type="submit" class="btn btn-danger" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$nama = $_POST['nama'];
					$nim = $_POST['nim'];
					$alamat = $_POST['alamat'];
					$gambar = $_POST['gambar'];

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into mahasiswa (nama,nim,alamat,gambar)values('$nama', '$nim', '$alamat','$gambar')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='home.php';</script>";
				}
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				/* if (isset($_POST['submit'])) {
					
				} */
				?>
			</div>
		</div>
	</div>
			</div>
</body>

</html>