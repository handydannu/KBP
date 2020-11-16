<?php
if($_POST['kirim']){
	$admin = 'handydannu@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$nama	= htmlentities($_POST['nama']);
	$email	= htmlentities($_POST['email']);
	$tlp	= htmlentities($_POST['tlp']);
	$pesan	= htmlentities($_POST['pesan']);
	
	$pengirim	= 'Nama Pengirim : '.$nama.'- Nomor Telepon : ' .$tlp.' <'.$email.'>';
	
	if(mail($admin, $pesan, $pengirim)){
		header("Location: sukses.php");

	}else{
		header("Location: gagal.php");
	}
}else{
	header("Location: gagal.php");
}
?>