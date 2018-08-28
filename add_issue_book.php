<?php

	
	
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/memberformstyle.css" />
	</head>
	<body>
		<h1>Add a New Issued Book-</h1>
		<hr color="#BD4D3D" height="2px" />
		<div id="mbrform" >
			<form action="home.php?p=book_issue.php" method="post" autpfill="off" >
				<label id="name_lbl" >Issued To</label>	<input type="text" name="i_t" size="50" required/><br />
				<br />
				<label id="cntct" >Quantity</label>	<input type="text" name="quantity" size="2" required/><br />
				<br />
				<label id="id_lbl" >Book No.</label>	<input type="text" name="bn" size="5" required/><br />
				<br />
				<label id="name_lbl" >Book Title</label>	<input type="text" name="bt" size="100" required/><br />
				<br />
				<label id="cntct" >Issue Date</label>	<input type="date" name="i_d" required/><br />
				<br />
				<label id="id_lbl" >Return Date</label>	<input type="date" name="r_d" required/><br />
				<br />
				<label id="id_lbl" >Status</label>	<input type="text" name="status" size="10" required/><br />
				<br />
				<label id="id_lbl" >Issue_id</label>	<input type="text" name="i_id" size="10" required/><br />
				<br />
				<input type="submit" value="Submit" name="sbmt" id="sbmt" />
			</form>
		</div>

	</body>
</html>