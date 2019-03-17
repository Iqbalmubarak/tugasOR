<h2>Total Income</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Income</th>
		</tr>
	</thead>
	<tbody>
		<?php $angka=1; ?>
		<?php  $total=0; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM laporan"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<th><?php  echo $angka; ?></th>
			<th><?php echo $pecah['income']; 
			$total=$total+$pecah['income']; ?></th>
		</tr>
			</tbody>
			<?php $angka++; ?>

		<?php } ?>
</table>

<h3 class="alert alert-info">
<?php 
echo "Total Pemasukkan Anda : Rp "; 
echo number_format($total);
echo ",00";
 ?>
</h3>