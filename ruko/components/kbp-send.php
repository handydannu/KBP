<?php
if($_POST['kirim']){
	$admin = 'handydannu@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$nama	= htmlentities($_POST['nama']);
	$email	= htmlentities($_POST['email']);
	$tlp	= htmlentities($_POST['tlp']);
	$pesan	= htmlentities($_POST['pesan']);
	
	$pengirim	= 'Nama Pengirim : '.$nama.'- Nomor Telepon : ' .$tlp.' <'.$email.'>';
	
	if(mail($admin, $pesan, $pengirim)){
		header("Location: index.php");
		echo "<script>
				btn.removeClass('show');
				</script>";
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
	}
}else{
	header("Location: index.php");
}
?>