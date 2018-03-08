<?php
echo "<h2>PENGHITUNGAN SEBUAH LIMAS SEGIEMPAT</h2><br>";
echo "Diketahui sebuah Limas dengan sisi alas = 10 dan tinggi = 15<br>";
$sisi = 10;
$tinggi = 15;
echo "Carilah Volume dan luas permukaan nya!<br>";

echo "<br>";
$indeks = 1/3;
$Volume = $indeks * $sisi * $sisi * $tinggi;
echo "Volumenya adalah $Volume<br>";

echo "<br>";

$alas = $sisi * $sisi;
$tsamping = sqrt((((1/2*$sisi)*(1/2*$sisi))+($tinggi*$tinggi)));
echo "Tinggi segitiga = $tsamping<br>";
$lp = $alas + (4 * (1/2*$tsamping*$sisi));
echo "Luas permukaannya adalah $lp<br>";
?>