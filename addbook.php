<?php

	
	
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/memberformstyle.css" />
	</head>
	<body>
		<h1>Add a New Book-</h1>
		<hr color="#BD4D3D" height="2px" />
		<div id="mbrform">
			<form action="home.php?p=books.php" method="post" autpfill="off" >
				<label id="isbn_no_lbl" >ISBN NO.</label>	<input type="text" name="isbn_no" size="10" required/><br />
				<br />
				<label id="title_lbl" >Book Title</label>	<input type="text" name="title" size="100" required/><br />
				<br />
				<label id="type_lbl" >Book Type</label>	<select name="type" required/>
					<option value="0">.....</option>
					<option value="1">Novel</option>
					<option value="2">Stories</option>
					<option value="3">Science Fiction</option>
					<option value="4">Education</option>
				</select><br />
				<br />
				<label id="a_name_lbl" >Author name</label>	<input type="text" name="name" size="50" required/><br />
				<br />
				<label id="quntity_lbl" >Quantity</label>	<input type="text" name="quantity" size="2" required/><br />
				<br />
				<label id="purch_date_lbl" >Purchase Date</label>	<input type="date" name="date" required/><br />
				<br />
				<label id="edition_lbl" >Edition</label>	<input type="text" name="edition" size="5" required/><br />
				<br />
				<label id="price_lbl" >Price</label>	<input type="text" name="price" size="12" required/><br />
				<br />
				<label id="page_lbl" >Pages</label>	<input type="text" name="pages" size="3" required/><br />
				<br />
				<label id="publisher_lbl" >Publisher</label>	<input type="text" name="publisher" size="100" required/><br />
				<br />
				<input type="submit" value="Submit" name="sbmt" id="sbmt" />
			</form>
		</div>

	</body>
</html>