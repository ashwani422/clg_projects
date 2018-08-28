<?php
	require_once('db/DBconnect.php');

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Library Management</h1>
	    <p>Control Panel</p>
	    <hr color="#BD4D3D"/>

	    <div id="tabs1">
	    	<a href="home.php?p=members.php" class="memb"><?php
						    								$sql = "SELECT COUNT('sn') AS nor FROM members";	//AS is for show the counted value through $show['nor']
						    								$result = $mysqli->query($sql);
						    								while($show = $result->fetch_assoc()){
						    									$hash = "<h1>".$show['nor']."</h1>";
						    									echo $hash."<br/>";
						    								}
						    							?>
						    							<h2>Members</h2>
	    	</a>
	    	<a href="home.php?p=books.php" class="book"><?php
						    								$sql = "SELECT COUNT('sn') AS nor FROM books";	//AS is for show the counted value through $show['nor']
						    								$result = $mysqli->query($sql);
						    								while($show = $result->fetch_assoc()){
						    									$hash = "<h1>".$show['nor']."</h1>";
						    									echo $hash."<br/>";
						    								}
						    							?>
						    							<h2>Books</h2>
	    	</a>
	    	<a href="home.php?p=newspapers.php" class="nwsp"><?php
							    								$sql = "SELECT COUNT('sn') AS nor FROM newspapers";	//AS is for show the counted value through $show['nor']
							    								$result = $mysqli->query($sql);
							    								while($show = $result->fetch_assoc()){
							    									$hash = "<h1>".$show['nor']."</h1>";
							    									echo $hash."<br/>";
							    								}
							    							?>
							    							<h2>Newspapers</h2>
	    	</a>
	    	<a href="home.php?p=magazins.php" class="magz"><?php
							    								$sql = "SELECT COUNT('sn') AS nor FROM magzins";	//AS is for show the counted value through $show['nor']
							    								$result = $mysqli->query($sql);
							    								while($show = $result->fetch_assoc()){
							    									$hash = "<h1>".$show['nor']."</h1>";
							    									echo $hash."<br/>";
							    								}
							    							?>
							    							<h2>Magazins</h2>
	    	</a>
	    </div>

	    <div id="tabs2">
	    	<a href="home.php?p=book_issue.php" class="issued"><?php
		    								$sql = "SELECT COUNT('sn') AS nor FROM book_issue";	//AS is for show the counted value through $show['nor']
		    								$result = $mysqli->query($sql);
		    								while($show = $result->fetch_assoc()){
		    									$hash = "<h1>".$show['nor']."</h1>";
		    									echo $hash."<br/>";
		    								}
		    							?>
		    							<h2>Issued</h2>
	    	</a>
	    	<a href="home.php?p=book_return.php" class="returned"><?php
		    								$sql = "SELECT COUNT('sn') AS nor FROM returned";	//AS is for show the counted value through $show['nor']
		    								$result = $mysqli->query($sql);
		    								while($show = $result->fetch_assoc()){
		    									$hash = "<h1>".$show['nor']."</h1>";
		    									echo $hash."<br/>";
		    								}
		    							?>
		    							<h2>Returned</h2>
	    	</a>
	    	<a href="home.php?p=book_notReturned.php" class="notreturned"><?php
			    								$sql = "SELECT COUNT('sn') AS nor FROM magzins";	//AS is for show the counted value through $show['nor']
			    								$result = $mysqli->query($sql);
			    								while($show = $result->fetch_assoc()){
			    									$hash = "<h1>".$show['nor']."</h1>";
			    									echo $hash."<br/>";
			    								}
			    							?>
	    									<h2>Not Returned</h2>
	    	</a href="">
	    	<section class="time"><?php
	    								$date = "<h1>".date('d-m-Y D')."</h1>";
			    						echo $date."<br />";
			    					?>
		    						<h2>Today</h2>
	    	</a>
	    </div>
	</body>
</html>