<?php

include('../conf/config.php');

$nama = isset($_POST['namaLengkap']) ? $_POST['namaLengkap'] : '';
$nohp = isset($_POST['noHp']) ? $_POST['noHp'] : '';
$username = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['pass']) ? $_POST['pass'] : '';

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

function generateUniqueID()
{
    $characters = '0123456789';
    $uniqueID = '';

    for ($i = 0; $i < 7; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $uniqueID .= $characters[$index];
    }

    return $uniqueID;
}

$uniqueID = generateUniqueID();

$stmt = $koneksi->prepare("INSERT INTO tb_users VALUES ('', ?, ?, ?, ?, 'default.png', 'Online', current_timestamp())");
$stmt->bind_param('ssss', $uniqueID, $username, $hashedPassword, $nama);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    // Redirect ke halaman konsultasi atau halaman lain yang sesuai
    header('location: ../login.php');
} else {
    echo "Terjadi kesalahan saat menyimpan data: " . $stmt->error;
}

$stmt->close();
$koneksi->close();
