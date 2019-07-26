<?php 

$con = mysqli_connect('localhost', 'root', 'ivtree123', 'login_db');


function escape($string){

	global $con;

	return mysqli_real_escape_string($con, $string);

}


function query($query){

	global $con;

	return mysqli_query($con, $query);

}

function confirm($result){

	global $con;

	if(!$result){
		die("Query failed" . mysqli_error($con));
	}

	return mysqli_query($con, $query);

}



function fetch_array($result){

	global $con;

	return mysqli_fetch_array($result);

}

?>