<?php

$con = new mysqli('localhost','root','','crud_db');

if ($con) {	
}

else {
	die(mysqli_error($con));
}


?>