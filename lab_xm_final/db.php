<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'users');
		return $conn;
	}
?>