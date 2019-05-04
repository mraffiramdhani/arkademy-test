<?php

include 'connection.php';

$conn = Open();

$id = $_GET['id'];

if ($id == 1) {
	mysqli_query($conn,"update candidates set earned_vote = earned_vote + 1 where id = 1");
	header("location:../index.php");
}else if($id == 2){
	mysqli_query($conn,"update candidates set earned_vote = earned_vote + 1 where id = 2");
	header("location:../index.php");
}else if($id == 3){
	mysqli_query($conn,"update candidates set earned_vote = earned_vote + 1 where id = 3");
	header("location:../index.php");
}else{
	echo 'Koneksi Bermasalah';
	return false;
}

Close($conn);

?>