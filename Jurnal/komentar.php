<form method="post">
	<input type="text" name="nama" maxlength="25" required> Nama <br><br>
	<textarea name="komentar" cols="20" rows="5"></textarea> <br> <br>
	<input type="submit" name="kirim">
</form>

<?php  

if (isset($_POST['kirim'])) {
	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];

	$count = strlen($komentar);
	if ($count < 5) {
		echo "Jumlah Tidak sampai 5";
	}else{
		echo "jumlah huruf di komentar : $count";
	}
}

?>