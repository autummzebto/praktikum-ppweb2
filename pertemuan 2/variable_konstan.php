<?php
// mendeskripsikan konstanta
define("PHI", 3.14);
define("DBNAME", 'Inventori');
define("DBSRVER", 'Localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kell = 2 * PHI * $jari;

echo "Luas Lingkaran dengan jari " .$jari. " : " .$luas;
echo "<br/>Kelilingnya : " .$kell;
?>

<hr>
<?php
echo "nama database : " .DBNAME;
echo "<br/>Lokasi database : " .DBSRVER;
?>