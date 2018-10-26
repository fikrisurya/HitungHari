<?php

$a=$_POST['bulan'];
$b=$_POST['tahun'];

switch ($a) {
	case 1:
	case 3:
	case 5:
	case 7:
	case 8:
	case 10:
	case 12:
		$hari=31;
		break;
	case 4:
	case 6:
	case 9:
	case 4:
		$hari=30;
		break;

	case 2:
		if(($b%4)==0)
			{$hari=29;}
			else{
				$hari=28;
			}
		break;
}

echo "<h2>jumlah hari pada bulan $a dan tahun $b adalah = $hari";