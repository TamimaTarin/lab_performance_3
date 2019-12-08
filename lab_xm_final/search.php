<?php
	
	require_once('db.php');

	$term = $_POST['key'];
	$con = getConnection();
	$sql = "select uname from users where uname like '%{$term}'";
	$result = mysqli_query($con, $sql);
	$row = "";
	while($data = mysqli_fetch_assoc($result)){
		$row .= $data['uname']."|";
	}
	echo $row;
?>