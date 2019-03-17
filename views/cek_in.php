<h2>Cek In</h2>


<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>ID Pengunjung</label>
		<input type="text" class="form-control" name="id_tamu">
	</div>
	<div class="form-group">
		<label>Nama Pengunjung</label>
		<input type="text" class="form-control" name="nama_tamu">
	</div>
	<div class="form-group">
		<label> Jenis Kelamin</label><br>
		<input type="radio" class="form-group" name="jenis_kelamin" value="laki"checkced>Laki-laki<br/>
		<input type="radio" class="form-group" name="jenis_kelamin" value="perempuan"checked>Perempuan<br/>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label>No. Telp</label>
		<input type="text" class="form-control" name="no_telp">
	</div>
	<div class="form-group">
		<label>Tipe Kamar</label>
		<select name="kamar">
			<option value="1">Reguler</option>
			<option value="2">Suite</option>
			<option value="3">Vip</option>
		</select>
	</div>
	<div class="form-group">
		<label>Lama Menginap(hari)</label>
		<input type="text" class="form-control" name="lama">
	</div>

	<button class="btn btn-success" name="save">Cek-in</button>
	
</form>


<?php
if(isset($_POST['save'])){ 
	$koneksi->query("INSERT INTO daftar_tamu (id_tamu,nama_tamu,jenis_kelamin,alamat,no_telp,kamar,lama) VALUES ('$_POST[id_tamu]','$_POST[nama_tamu]','$_POST[jenis_kelamin]','$_POST[alamat]','$_POST[no_telp]','$_POST[kamar]','$_POST[lama]')");
	echo "<div class='alert alert-info'>Berhasil Cek-in</div>";
	
	
}
?>