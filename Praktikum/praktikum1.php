<?php
function volume_limas_segitiga($luas_alas, $tinggi){
  return 1/3 * $luas_alas * $tinggi;
}

$a=10;
$b=5;
echo "Diketahui luas alas = $a dan tinggi = $b <br>";
echo "Volume Limas Segitiga dengan luas alas = $a dan tinggi = $b adalah ";
echo volume_limas_segitiga($a, $b);

function luas_limas_segitiga($alas, $tinggi){
  return 1/2 * $alas * $tinggi;
}

$a=10;
$b=5;
echo "<br>Diketahui alas = $a dan tinggi = $b <br> ";
echo "luas Limas Segitiga dengan luas alas = $a dan tinggi = $b adalah ";
echo luas_limas_segitiga($a, $b);


?>
