<?php

date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$jam = date('H');
if ($jam >= 5 && $jam < 11) {
    $status = "Pagi";
}
elseif ($jam >= 11 && $jam < 15) {
    $status = "Siang";
}
elseif ($jam >= 15 && $jam < 19) {
    $status = "Sore";
}
else {
    $status = "Malam";
}
$menit = date('i');
echo "Selamat {$status}, {$nama} sekarang pukul {$jam}:{$menit}\n";
?>