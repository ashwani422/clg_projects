<?php

	require_once('db/DBconnect.php');

	$eValue = $_POST['eValue'];
	$tbl = $_POST['tbl'];

	$sql = "DELETE FROM $tbl where sn='$eValue'";

	if($mysqli->query($sql))
		echo "Done";
	else
		echo $mysqli->error;
?>