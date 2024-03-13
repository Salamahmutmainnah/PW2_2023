<?php


	function kelulusan($hasil){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
		if($hasil > 55){
			$title = "Lulus";
		} else{
			$title = "Tidak lulus";
		}
		return $title;
	}
	
	function grade($jml) {
	  
		if($jml <= 100 && $jml >= 85){
			$grade = "A";
			$predi = "Sangat memuaskan";
		} elseif($jml <= 84 && $jml >= 70){
			$grade = "B";
			$predi = "Memuaskan";
		} elseif($jml <= 69 && $jml>= 56){
			$grade = "C";
			$predi = "Cukup baik";
		} elseif($jml<= 55 && $jml >= 36){
			$grade = "D";
			$predi = "Cukup";
		} elseif($jml <= 35 && $jml >= 0){
			$grade = "E";
			$predi = "Ngulang";
		} else{
			$grade = "I";

		}
		return [$grade, $predi];
	}

	function rerata($nuts, $nuas, $ntugas) {
		$ratara = ($nuts + $nuas + $ntugas) / 3;
		return $ratara;
	}
?>