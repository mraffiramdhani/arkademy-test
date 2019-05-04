<?php

Class Gambar {

	function show($param) {
		if($param % 2 == 1){
			for($i = 1; $i <= $param; $i++){
				for($j = 1; $j <= $param; $j++){
					echo ' * ';
				}
				echo '<br/>';
			}
		}else{
			echo 'Parameter Harus Bilangan Ganjil';
		}
	}

}

$gambar = new Gambar();
$gambar->show(5);

?>