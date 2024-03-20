<?php 
	require_once 'class_balok.php';
	
	$balok1 = new Balok(29, 16, 7);
	$balok2 = new Balok(12, 5, 10);
	$balok3 = new Balok(24,  12, 6);
	$balok4 = new Balok(22, 8, 14);

	// Luas, Keliling, Dan Volume Balok 1 //
	$balok1 = new Balok(29, 16, 7);
	echo "Balok 1";
	echo '<br> Luas Balok 1 = '. $balok1->getLuas() . ' cm^2';
	echo '<br> Keliling Balok 1 = '. $balok1->getKeliling() . ' cm';
	echo '<br> Volume Balok 1 = '. $balok1->getVolume() . ' cm^3' . "<br><br>";

	//Luas, Keliling, Dan Volume Balok 2
	$balok2 = new Balok(12, 5, 10);
	echo "Balok 2";
	echo '<br> Luas Balok 2 = '. $balok2->getLuas() . ' cm^2';
	echo '<br> Keliling Balok 2 = '. $balok2->getKeliling() . ' cm';
	echo '<br> Volume Balok 2 = '. $balok2->getVolume() . ' cm^3' . "<br><br>";

	//Luas, Keliling, Dan Volume Balok 3
	$balok3 = new Balok(24,  12, 6);
	echo "Balok 3";
	echo '<br> Luas Balok 3 = '. $balok3->getLuas() . ' cm^2';
	echo '<br> Keliling Balok 3 = '. $balok3->getKeliling() . ' cm';
	echo '<br> Volume Balok 3 = '. $balok3->getVolume() . ' cm^3' . "<br><br>";

	//Luas, Keliling, Dan Volume Balok 3
	$balok4 = new Balok(22, 8, 14);
	echo "Balok 4:";
	echo '<br> Luas Balok 4 = '. $balok4->getLuas() . ' cm^2' . "<br>";
	echo '<br> Keliling Balok 4 = '. $balok4->getKeliling() . ' cm' . "<br>";
	echo '<br> Volume Balok 4 = '. $balok4->getVolume() . ' cm^3' . "<br><br>";


?>