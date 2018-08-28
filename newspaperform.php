<?php

	
	
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/memberformstyle.css" />
	</head>
	<body>
		<h1>Add a New Newpaper-</h1>
		<hr color="#BD4D3D" height="2px" />
		<div id="mbrform" >
			<form action="home.php?p=newspapers.php" method="post" autpfill="off" >
				<label id="name_lbl" >Language</label>	<input type="text" name="language" size="30" required/><br />
				<br />
				<label id="cntct" >Newspaper Name</label>	<input type="text" name="paper_name" size="50" required/><br />
				<br />
				<label id="id_lbl" >Date of Reciept</label>	<input type="date" name="dor" required/><br />
				<br />
				<label id="name_lbl" >Date if Published</label>	<input type="date" name="dop" required/><br />
				<br />
				<label id="cntct" >Pages</label>	<input type="text" name="page" size="2" required/><br />
				<br />
				<label id="id_lbl" >Price</label>	<input type="text" name="price" size="12" required/><br />
				<br />
				<label id="id_lbl" >Publisher</label>	<input type="text" name="publisher" size="50" required/><br />
				<br />
				<input type="submit" value="Submit" name="sbmt" id="sbmt" />
			</form>
		</div>

	</body>
</html>