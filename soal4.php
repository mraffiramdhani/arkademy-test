<?php

Class Sort {
	
	function array($param) {
		sort($param);
		
		foreach($param as $par){
			sort($par);
			echo '[' . implode(', ', $par) . '] <br/>';
		}
	}

}

$data = [
	['a','c','b','e','d'],
	['g','e','f']
];

$datalain = [
    ['g','h','i','j'],
	['a','c','b','e','d'],
	['g','e','f']
];


$gambar = new Sort();
echo 'data 1 : <br/>' ;
$gambar->array($data);
echo '<br/>' ;
echo 'data 2 : <br/>' ;
$gambar->array($datalain);

?>