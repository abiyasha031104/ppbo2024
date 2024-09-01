<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline ('masukkan nama anda:');
$waktu = date ('H:i');
echo "Halo {$nama} sekarang pukul {$waktu}\n";