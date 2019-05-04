<?php

Class RandString {
	
	function randomize($param) {
		
		$result[] = null;
		
		for($i = 0; $i < $param; $i++){
			$string = rand();
			$res = md5($string);
			$result[$i] = $res;
		}
		
		for($i = 0; $i < count($result); $i++){
			echo $i+1 . ' - ' . $result[$i] . ' ';
			for($j = 0; $j < count($result); $j++){
				if($i != $j && $result[$i] == $result[$j]){
					echo '(Duplicated)';
				}
			}
			echo '<br/>';
		}
		
	}

}

$random = new RandString();
echo 'Hasil : <br/>';
$random->randomize(5);

?>