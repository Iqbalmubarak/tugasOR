<div class="alert alert-primary" role="alert">
 <h1>List Pengunjung</h1>
</div>
<?php 
$koneksi = new mysqli("localhost","root","","perhotelan");
 ?>
 <?php 

 ?>

<table class="table table-bordereed"> 
<thead>
	<tr>
		<th>No</th>
		<th>ID pengunjung</th>
		<th>Nama pengunjung</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>No. telp</th>
		<th>Tipe Kamar</th>
		<th>Lama Menginap(hari)</th>
		<th>Tagihan</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	<?php $ambil=$koneksi->query("SELECT * FROM daftar_tamu JOIN daftar_kamar ON daftar_tamu.kamar=daftar_kamar.kamar"); ?>

	<?php while ($pisah=$ambil->fetch_assoc()) { ?>
		<tr>
			<?php $tagihan=$pisah['harga']*$pisah['lama'] ?>
			
			<th><?php echo $pisah['no']; ?></th>
			<th><?php echo $pisah['id_tamu']; ?></th>
			<th><?php echo $pisah['nama_tamu']; ?></th>
			<th><?php echo $pisah['jenis_kelamin']; ?></th>
			<th><?php echo $pisah['alamat']; ?></th>
			<th><?php echo $pisah['no_telp']; ?></th>
			<th><?php echo $pisah['kamar']; ?></th>
			<th><?php echo $pisah['lama']; ?></th>
			<th><?php echo number_format($tagihan) ?></th>
			<th>
				<button href="index.php?page=hapus&id=<?php echo $pisah['no']; ?>"name=cekout class="btn-danger btn">Cek-out</button>
				<?php if (isset($_GET['cekout'])) ?>
<?php {$koneksi->query("INSERT INTO laporan (income) VALUES ('$tagihan')");}  ?>

			</th>
		</tr>
	<?php } ?>
</tbody>
</table>
