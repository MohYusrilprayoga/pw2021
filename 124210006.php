<?php
	function faktorial($data){
		$angka = 1;
		$faktorial = 1;
		while($angka <= $data){
			$faktorial = $faktorial * $angka;
			echo "$angka x ";
			$angka = $angka + 1;
		}
		return $faktorial;
	}
?>