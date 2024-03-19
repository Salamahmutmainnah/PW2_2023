<?php 
	require_once 'class_balok.php'
	
	echo "Nilai panjang, lebar, tinggi" . Balok::panjang . "," . Balok::lebar . "," . Balok::tinggi . "<br/>";

	$balok1 = new Balok(29);
	$balok2 = new Balok(16);
	$balok3 = new Balok3(7);

	// Luas, Keliling, Dan Volume Balok 1 //
	echo '<br> Luas Balok 1 = '. $balok1->getLuas() . ' cm^2';
	echo '<br> Keliling Balok 1 = '. $balok1->getKeliling() . ' cm';
	echo '<br> Volume Balok 1 = '. $balok1->getVolume() . ' cm^3';

	//Luas, Keliling, Dan Volume Balok 2
	echo '<br> Luas Balok 2 = '. $balok2->getLuas() . ' cm^2';
	echo '<br> Keliling Balok 2 = '. $balok2->getKeliling() . ' cm';
	echo '<br> Volume Balok 2 = '. $balok2->getVolume() . ' cm^3';

	//Luas, Keliling, Dan Volume Balok 3
	echo '<br> Luas Balok 3 = '. $balok3->getLuas() . ' cm^2';
	echo '<br> Keliling Balok 3 = '. $balok3->getKeliling() . ' cm';
	echo '<br> Volume Balok 3 = '. $balok3->getVolume() . ' cm^3';

?>