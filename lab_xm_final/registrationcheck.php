<?php
	
	require_once('functions.php');

	if(isset($_GET['submit'])){

		$name = $_GET['name'];
		$id = $_GET['id'];
		$uname = $_GET['uname'];
		$password = $_GET['password'];
		

		if(empty($name) == true || empty($password) == true || empty($uname) == true || empty(id)== true){
			echo "null submission!";
		}
		
	}

?>