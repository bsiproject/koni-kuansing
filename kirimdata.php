<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'] ,ENT_QUOTES)));
    $email = stripslashes(strip_tags(htmlspecialchars($_POST['email'] ,ENT_QUOTES)));
    $pesan = stripslashes(strip_tags(htmlspecialchars($_POST['pesan'] ,ENT_QUOTES)));

	$query = "INSERT into kontak (nama, email, pesan) VALUES (?, ?, ?)";
    $koni = $db->prepare($query);
    $koni->bind_param("sss", $nama, $email, $pesan);
    $koni->execute();
    if ($koni->affected_rows > 0) {
    	echo "<script>alert('Pesan Berhasil Dikirim');location='kontak.php';</script>";
    } else {
    	echo "<script>alert('Error');window.history.go(-1);</script>";
    }
}

$db->close();
?>