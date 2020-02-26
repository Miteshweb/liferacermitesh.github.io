<?php

$conn = mysqli_connect('localhost','root','','test1');

if($conn){

	echo "connected";
}
else{
	echo "Not connected";
}

?>
