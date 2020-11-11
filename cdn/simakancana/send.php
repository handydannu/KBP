<?php
// if($_POST['kirim']){
// 	$admin = 'handydannu@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
// 	$nama	= htmlentities($_POST['nama']);
// 	$email	= htmlentities($_POST['email']);
// 	$tlp	= htmlentities($_POST['tlp']);
// 	$pesan	= htmlentities($_POST['pesan']);
	
// 	$pengirim	= 'Nama Pengirim : '.$nama.'- Nomor Telepon : ' .$tlp.' <'.$email.'>';
	
// 	if(mail($admin, $pesan, $pengirim)){
// 		header("Location: index.php");
// 		echo '<script>alert("Welcome to Geeks for Geeks")</script>';
// 	}else{
// 		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
// 	}
// }else{
// 	header("Location: index.php");

// }

if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['nama'];
    $tlp = $_POST['tlp'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $tlp . " wrote the following:" . "\n\n" . $_POST['pesan'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['pesan'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>