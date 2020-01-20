<?php
//validasi
if (trim($_POST['nama_depan']) == '') {
    $error[] = '- Nama Depan harus diisi';
} else {
    $nama_depan = $_POST['nama_depan'];
}

if (trim($_POST['nama_belakang']) == '') {
    $error[] = '- Nama Belakang harus diisi';
} else {
    $nama_belakang = $_POST['nama_belakang'];
}

if (trim($_POST['judul']) == '') {
    $error[] = '- Judul harus diisi';
} else {
    $Judul = $_POST['judul'];
}

if (trim($_POST['email']) == '') {
    $error[] = '- Email harus diisi';
} else {
    $email = $_POST['email'];
}

if (trim($_POST['password']) != trim($_POST['password2'])) {
    $error[] = '- Password harus sama';
} else if (trim($_POST['password']) == '') {
    $error[] = '- Password harus diisi';
} else if (trim($_POST['password2']) == '') {
    $error[] = '- Password harus diisi';
}


if ($_POST['kualitas'] == 1) {
    $kualitas = 'HD 1080P';
} else if ($_POST['kualitas'] == 2) {
    $kualitas == '720P';
} else if ($_POST['kualitas'] == 3) {
    $kualitas == '480P';
} else if ($_POST['kualitas'] == 4) {
    $kualitas == '360P';
} else if ($_POST['kualitas'] == 5) {
    $kualitas == '240P';
} else if ($_POST['kualitas'] == 6) {
    $kualitas == '144P';
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

    echo '<b>Data berhasil dikirim. Berikut ini data anda:</b><br />';
    echo "Nama    : $nama_depan $nama_belakang <br>";
    echo "Email             : $email <br>";
    echo "Kualitas          : $kualitas <br>";
    echo "Judul             : $Judul <br>";
}
die();
