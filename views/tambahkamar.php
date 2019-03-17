<h2>PILIHAN PESANAN</h2>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
	<label>Tipe Kamar</label>
	<input type="number" class="form-control" name="kamar">
</div> 
<div class="form-group">
	<label>Gambar</label>
	<input type="file" class="form-control" name="gambar">
</div>

<div class="form-group">
	<label>Harga</label>
	<input type="number" class="form-control" name="harga">
</div>

<button class="btn btn-primary" name="save">Masukkan</button>
</form>

<?php 
if(isset($_POST['save'])){


	$fotobaru=$_FILES['gambar']['name'];
	$lokasi=$_FILES['gambar']['tmp_name'];
	move_uploaded_file($lokasi,"gambar/".$fotobaru);

	$koneksi->query("INSERT INTO daftar_kamar(kamar,gambar,harga) VALUES ('$_POST[kamar]','$fotobaru','$_POST[harga]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";

}

 ?>