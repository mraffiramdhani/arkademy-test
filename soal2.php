<?php 

class Validator {

	function validate($username, $password) {

		if($username != null && $password != null){
			if(preg_match('/^[a-z]{8,8}+$/', $username)){
				if(preg_match('/^[a-zA-Z0-9\W]{8,}+$/', $password)){
					echo 'Berhasil';
					return true;
				}else{
					echo "Format Password Salah";
					return false;
				}
			}else{
				echo 'Format Username Salah';
				return false;
			}
		}else{
			echo 'Empty';
			return false;
		}

	}

}

$test = new Validator();
$test->validate('asddasdd', 'iuyiuqwye');
?>