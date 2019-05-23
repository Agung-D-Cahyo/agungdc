<html>
<body>

<?php
$nama = $NIM = "";
$namaerr = $nimerr=" " ;
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) {
	if(empty($_POST["nama"])){
		$namaerr = "Nama Harus di Isi";
	}
	else{
		$nama = $_POST["nama"];
	}
	if(empty($_POST["NIM"])){
		$nimerr = "NIM Harus Di isi";
	}
	else if(!is_numeric($_POST["NIM"])){
		$nimerr = "NIM Harus Angka";
	}
	else if(strlen($_POST["NIM"])!=10){
		$nimerr = "NIM harus 10 Angka";
	}
	else{
		$NIM = $_POST["NIM"];
	}
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>";>
Nama: <input type="text" name="nama"><?php echo $namaerr; ?><br>
NIM: <input type="text" name="NIM"><?php echo $nimerr; ?><br>
<input type="submit">
</form>

<?php
	echo $nama;
	echo "<br>";
	echo $NIM;
?>
</body>
</html>