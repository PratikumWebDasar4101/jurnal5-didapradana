<form method="post" action="">
	<input type="text" name="nama" maxlength="25" required> Nama <br><br>
	<input type="text" name="Nim" pattern="\d*" maxlength="10" required> NIM <br><br>
	<input type="email" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com" required> Email <br><br>
	<input type="submit" name="kirim">
</form>