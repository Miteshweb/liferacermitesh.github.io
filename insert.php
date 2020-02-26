<?php
$conn = mysqli_connect('localhost','root','','test1');
$query="INSERT INTO contactus(`username`,`email`,`Mobile`,`comment`) VALUES ('mitla','mitla@mail.com','986597556','mitla top')";
mysqli_query($conn, $query);
?>
