<?php
//validasi

if (trim($_POST['nama']) == '') {
    $error[] = '- Nama harus diisi';
} else {
    $nama = $_POST['nama'];
}

if (trim($_POST['email']) == '') {
    $error[] = '- Email harus diisi';
} else {
    $email = $_POST['email'];
}

if (trim($_POST['komentar']) == '') {
    $error[] = '- Komentar harus diisi';
} else {
    $komentar = $_POST['komentar'];
}

//dan seterusnya

if (isset($error)) {
    echo '<b>Error</b>: <br />' . implode('<br />', $error);
} else {
    /*
	jika data mau dimasukkan ke database,
	maka perintah SQL INSERT bisa ditulis di sini
	*/

    $data = '';
    foreach ($_POST as $k => $v) {
        $data .= "$k : $v<br />";
    }

    echo '<b>Form berhasil disubmit. Berikut ini data anda:</b><br />';
    echo "Nama         : $nama <br>";
    echo "Email        : $email <br>";
    echo "Komentar     : $komentar <br>";
}
die();
