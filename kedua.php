<?php


function kelilingLingkaran($jari) : float {
    return 2 * 3.14 * $jari;
}


function volumeBola($jari) : float {
    return (4/3) * 3.14 * pow($jari, 3);
}


function volumeTabung($jari, $tinggi) : float {
    return 3.14 * pow($jari, 2) * $tinggi;
}


function volumeKerucut($jari, $tinggi) : float {
    return (1/3) * 3.14 * pow($jari, 2) * $tinggi;
}


$jari = 45;
$tinggi = 100;

$keliling = kelilingLingkaran($jari);
$volume_bola = volumeBola($jari);
$volume_tabung = volumeTabung($jari, $tinggi);
$volume_kerucut = volumeKerucut($jari, $tinggi);


echo "Keliling lingkaran dengan jari-jari {$jari} adalah: {$keliling}\n";
echo "Volume bola dengan jari-jari {$jari} adalah: {$volume_bola}\n";
echo "Volume tabung dengan jari-jari {$jari} dan tinggi {$tinggi} adalah: {$volume_tabung}\n";
echo "Volume kerucut dengan jari-jari {$jari} dan tinggi {$tinggi} adalah: {$volume_kerucut}\n";

?>
