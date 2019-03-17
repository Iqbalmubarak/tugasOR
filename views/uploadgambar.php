<?php 
if(isset($_POST['save'])){
	$fotobaru=$_FILES['gambar']['name'];
	$lokasi=$_FILES['gambar']['tmp_name'];
	move_uploaded_file($lokasi,"../gamar/".$fotobaru);
 ?>}
