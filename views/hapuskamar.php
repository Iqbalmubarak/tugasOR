<?php

$ambil = $koneksi->query("SELECT * FROM daftar_kamar WHERE id_kamar='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM daftar_kamar WHERE id_kamar='$_GET[id]'");

echo "<div class='alert alert-info'>Data Terhapus</div>";
echo "<meta http-equiv='refresh' content='1;url=index.php?page=kamar'>";

 ?>