<?php

	
	
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/memberformstyle.css" />
	</head>
	<body>
		<h1>Add a New member-</h1>
		<hr color="#BD4D3D" height="2px" />
		<div id="mbrform" >
			<form action="home.php?p=members.php" method="post" autpfill="off" >
				<label id="no_lbl" >Membership No.</label>	<input type="text" name="no" size="5" required/><br />
				<br />
				<label id="name_lbl" >Name</label>	<input type="text" name="name" size="100" required/><br />
				<br />
				<label id="cntct" >Contact</label>	<input type="text" name="cntct" size="10" required/><br />
				<br />
				<label id="id_lbl" >Member ID.</label>	<input type="text" name="id" size="20" required/><br />
				<br />
				<input type="submit" value="Submit" name="sbmt" id="sbmt" />
			</form>
		</div>

	</body>
</html>