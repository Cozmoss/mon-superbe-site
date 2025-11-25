<?php
function get_connection(){
	$server_name = "localhost";
	$user_name = "ifapme";
	$password = "ifapme";
	$database = "tp_crud_x75";
	$connection = mysqli_connect($server_name, $user_name, $password, $database);
 	if (!$connection) {
        die("connection échouée") . mysqli_connect_error();
    } else {
        return $connection;
    }
}
