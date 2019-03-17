<h2>List Kamar</h2>
<?php 
$koneksi = new mysqli("localhost","root","","perhotelan");
 ?>

<table class="table table-bordereed"> 
<thead>
	<tr>
		<th>ID Kamar</th>
		<th>Tipe Kamar</th>
		<th>Gambar</th>
		<th>Harga</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	<?php $simpan=$koneksi->query("SELECT * FROM daftar_kamar"); ?>
	<?php while ($pisah=$simpan->fetch_assoc()) { ?>
		<tr>
			<th><?php echo $pisah['id_kamar']; ?></th>
			<th><?php if ($pisah["kamar"]==1) {
	echo "Reguler";}
	elseif ($pisah["kamar"]==2) {
		echo "Suite";}
		elseif ($pisah["kamar"]==3) {
			echo "Vip";} ?></th>
			<th>
				<img src="gambar/<?php echo $pisah['gambar']; ?>" width="100">
			</th>
			<th><?php echo $pisah['harga']; ?></th>
			
			<th>
				<a href="index.php?page=hapuskamar&id=<?php echo $pisah['id_kamar']; ?>" class="btn-danger btn">hapus</a>
			</th>
		</tr>
	<?php } ?>
</tbody>
</table>
	<a href="index.php?page=tambahkamar">Tambah Kamar</a>