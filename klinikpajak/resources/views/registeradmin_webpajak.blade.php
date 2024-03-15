<?php

$password = isset($_POST['pass']) ? $_POST['pass'] : '';

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Memberikan nama yang lebih unik pada fungsi di dalam blade view
function generateUniqueIDForRegistrationBlade()
{
    $characters = '0123456789';
    $uniqueID = '';

    for ($i = 0; $i < 7; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $uniqueID .= $characters[$index];
    }

    return $uniqueID;
}

$uniqueID = generateUniqueIDForRegistrationBlade();

$query = mysqli_query($koneksi, "INSERT INTO tb_users VALUES ('','$uniqueID','$username','$hashedPassword','$nama', '$noHp', 'default.png','Online',current_timestamp())");

if ($query) {
    // Redirect ke halaman konsultasi atau halaman lain yang sesuai
    header('location: ../login.php');
} else {
    echo "Terjadi kesalahan saat menyimpan data.";
}
