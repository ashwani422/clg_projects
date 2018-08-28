<?php

	
	
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/memberformstyle.css" />
	</head>
	<body>
		<h1>Add a New Returned Book-</h1>
		<hr color="#BD4D3D" height="2px" />
		<div id="mbrform" >
			<form action="home.php?p=book_return.php" method="post" autpfill="off" >
				<label id="name_lbl" >Book No.</label>	<input type="text" name="bn" size="5" required/><br />
				<br />
				<label id="cntct" >Book Title</label>	<input type="text" name="bt" size="100" required/><br />
				<br />
				<label id="id_lbl" >Issue Date</label>	<input type="date" name="i_d" required/><br />
				<br />
				<label id="name_lbl" >Due Days</label>	<input type="text" name="d_d" size="2" required/><br />
				<br />
				<label id="cntct" >Return Date</label>	<input type="date" name="r_d" required/><br />
				<br />
				<label id="id_lbl" >Member</label>	<input type="text" name="mem" size="50" required/><br />
				<br />
				<label id="id_lbl" >Quantity(Book)</label>	<input type="text" name="qntty" size="2" required/><br />
				<br />
				<label id="cntct" >Fine</label>	<input type="text" name="fn" size="5" required/><br />
				<br />
				<label id="id_lbl" >Status</label>	<input type="text" name="stts" size="20" required/><br />
				<br />
				<input type="submit" value="Submit" name="sbmt" id="sbmt" />
			</form>
		</div>

	</body>
</html>